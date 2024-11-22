<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="your-styles.css"> <!-- Add path to your CSS file -->
</head>
<body>
    <div class="container">
        <h1>FashionablyLate</h1>
        <h2>Login</h2>
        
        <!-- Login Form -->
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div>
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" placeholder="例: test@example.com" required>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" placeholder="例: coachtech106" required>
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">ログイン</button>
        </form>
        
        <!-- Register Link -->
        <a href="{{ route('register') }}">register</a>
    </div>
</body>
</html>
