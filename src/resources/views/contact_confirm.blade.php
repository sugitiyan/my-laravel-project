<!-- File: /home/mky369/coachtech/laravel/my-laravel-project/src/resources/views/confirm.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm - FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">FashionablyLate</div>
        <div class="subheader">Confirm</div>

        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
        <table>
            <tr>
                <td class="label">お名前</td>
                <td class="content">{{ $contact->last_name }}　{{ $contact->first_name }}</td>
            </tr>
            <tr>
                <td class="label">性別</td>
                <td class="content">{{ $contact->gender }}</td>
            </tr>
            <tr>
                <td class="label">メールアドレス</td>
                <td class="content">{{ $contact->email }}</td>
            </tr>
            <tr>
                <td class="label">電話番号</td>
                <td class="content">{{ $contact->phone }}</td>
            </tr>
            <tr>
                <td class="label">住所</td>
                <td class="content">{{ $contact->address }}</td>
            </tr>
            <tr>
                <td class="label">建物名</td>
                <td class="content">{{ $contact->building }}</td>
            </tr>
            <tr>
                <td class="label">お問い合わせの種類</td>
                <td class="content">{{ $contact->inquiry_type }}</td>
            </tr>
            <tr>
                <td class="label">お問い合わせ内容</td>
                <td class="content">{{ $contact->inquiry_content }}</td>
            </tr>
        </table>

        <div class="buttons">
           <a href="{{ route('contact.form') }}" class="button edit-btn">修正</a>

                <!-- 送信ボタン -->
           <button type="submit" class="button submit-btn">送信</button> 
        </div>
    </div>
</body>
</html>
