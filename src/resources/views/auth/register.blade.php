<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <div>
            <a href="{{ route('login') }}" class="btn btn-primary">ログイン</a>
        </div>
    </header>

    <div class="container">
        <h2>新規ユーザー登録</h2>

        <!-- 登録フォーム -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- お名前 -->
            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>お名前を入力してください</strong>
                </span>
                @enderror
            </div>

            <!-- メールアドレス -->
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>メールアドレスは「ユーザー名@ドメイン」形式で入力してください</strong>
                </span>
                @enderror
            </div>

            <!-- パスワード -->
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" name="password" id="password"
                    class="form-control @error('password') is-invalid @enderror" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>パスワードを入力してください</strong>
                </span>
                @enderror
            </div>

            <!-- パスワード確認 -->
            <div class="form-group">
                <label for="password_confirmation">パスワード確認</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                    required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">登録</button>
            </div>
        </form>
    </div>

    <!-- フォームのバリデーションエラーを表示 -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <footer>
        <p>既にアカウントをお持ちですか？ <a href="{{ route('login') }}">ログイン</a></p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
