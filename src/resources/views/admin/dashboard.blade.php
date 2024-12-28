<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <header>
        <h1>FashionablyLate</h1>
        <h2>Admin</h2>
    </header>
    <form method="GET" action="{{ route('search') }}">
        <div>
            <label for="name">名前:</label>
            <input type="text" name="name" id="name" value="{{ request('name') }}">
        </div>
        <div>
            <label for="email">メールアドレス:</label>
            <input type="text" name="email" id="email" value="{{ request('email') }}">
        </div>
        <div>
            <label for="gender">性別:</label>
            <select name="gender" id="gender">
                <option value="">性別</option>
                <option value="male" {{ request('gender') == 'male' ? 'selected' : '' }}>男性</option>
                <option value="female" {{ request('gender') == 'female' ? 'selected' : '' }}>女性</option>
                <option value="other" {{ request('gender') == 'other' ? 'selected' : '' }}>その他</option>
            </select>
        </div>
        <div>
            <label for="inquiry_type">お問い合わせ種類:</label>
            <input type="text" name="inquiry_type" id="inquiry_type" value="{{ request('inquiry_type') }}">
        </div>
        <div>
            <label for="date">日付:</label>
            <input type="date" name="date" id="date" value="{{ request('date') }}">
        </div>
        <button type="submit">検索</button>
        <button type="reset" onclick="this.form.reset();">リセット</button>
    </form>

    <!-- 検索結果の表示（ページネーションと詳細ボタン） -->
    <div>
        <h3>検索結果</h3>
        <table>
            <thead>
                <tr>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th>性別</th>
                    <th>お問い合わせ種類</th>
                    <th>日付</th>
                    <th>詳細</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->gender }}</td>
                    <td>{{ $contact->inquiry_type }}</td>
                    <td>{{ $contact->date }}</td>
                    <td>
                        <button class="view-details" data-id="{{ $contact->id }}">詳細</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- ページネーション -->
        <div>
            {{ $contacts->links() }}
        </div>

        <!-- エクスポートボタン -->
        <form method="POST" action="{{ route('export') }}">
            @csrf
            <button type="submit">CSVエクスポート</button>
        </form>
    </div>

    <!-- モーダルウィンドウ（詳細表示用） -->
    <div id="detailModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>詳細情報</h3>
            <div id="modalContent"></div>
            <button id="deleteButton" onclick="deleteContact()">削除</button>
        </div>
    </div>

    <script>
        // モーダルウィンドウを表示
        const modal = document.getElementById("detailModal");
        const closeModal = document.getElementsByClassName("close")[0];
        const deleteButton = document.getElementById("deleteButton");

        document.querySelectorAll('.view-details').forEach(button => {
            button.addEventListener('click', function () {
                const contactId = this.getAttribute('data-id');
                // 詳細情報を取得し、モーダルに表示
                fetch(`/contact/${contactId}/details`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById("modalContent").innerHTML = `
                            <p>名前: ${data.name}</p>
                            <p>メールアドレス: ${data.email}</p>
                            <p>性別: ${data.gender}</p>
                            <p>お問い合わせ種類: ${data.inquiry_type}</p>
                            <p>日付: ${data.date}</p>
                        `;
                        deleteButton.setAttribute('data-id', contactId); // 削除ボタンにIDをセット
                    });
                modal.style.display = "block";
            });
        });

        closeModal.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // 削除処理
        function deleteContact() {
            const contactId = deleteButton.getAttribute('data-id');
            if (confirm("本当に削除しますか？")) {
                fetch(`/contact/${contactId}/delete`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                }).then(response => {
                    if (response.ok) {
                        alert("データが削除されました");
                        modal.style.display = "none";
                        location.reload(); // ページをリロードして削除を反映
                    }
                });
            }
        }
    </script>
</body>

</html>