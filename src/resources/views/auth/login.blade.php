<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <div>
            <a href="{{ route('register') }}" class="btn btn-primary">登録</a>
        </div>
    </header>

    <div class="container">
        <h2>ログイン</h2>

        <!-- ログインフォーム -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

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

            <!-- ログイン状態を保持する -->
            <div class="form-group form-check">
                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label">ログイン状態を保持する</label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">ログイン</button>
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
        <p>アカウントをお持ちでないですか？ <a href="{{ route('register') }}">登録</a></p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
