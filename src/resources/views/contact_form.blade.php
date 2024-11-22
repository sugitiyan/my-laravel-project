<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    @yield('css')
</head>
<body>
    <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">{{ $heading }}</div>
       <h2>Contact</h2>
    </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form-group">
            <label for="last_name">お名前 <span style="color: red;">*</span></label>
            <input type="text" id="last_name" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}">
            @error('last_name')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="first_name">お名前 <span style="color: red;">*</span></label>
            <input type="text" id="first_name" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}">
            @error('first_name')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        < class="form-group">
            <label>性別 <span style="color: red;">*</span></label>
            <div class="radio-group">
                
            </div>
            @error('gender')
                <span class="error-message">{{ $message }}</span>
            @enderror
        <div>
             <input type="radio" name="gender" value="男性" {{ old('gender') == '男性' ? 'checked' : '' }}> 男性
             <input type="radio" name="gender" value="女性" {{ old('gender') == '女性' ? 'checked' : '' }}> 女性
             <input type="radio" name="gender" value="その他" {{ old('gender') == 'その他' ? 'checked' : '' }}> その他
        </div>

        <div class="form-group">
            <label for="email">メールアドレス <span style="color: red;">*</span></label>
            <input type="email" name="email" id="email" placeholder="例: test@example.com" value="{{ old('email') }}">
            @error('email')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">電話番号 <span style="color: red;">*</span></label>
            <input type="text" name="phone" id="phone" placeholder="080-1234-5678" value="{{ old('phone') }}">
            @error('phone')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">住所 <span style="color: red;">*</span></label>
            <input type="text" name="address" id="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
            @error('address')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="building">建物名</label>
            <input type="text" name="building" id="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
            @error('building')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="inquiry_type">お問い合わせの種類 <span style="color: red;">*</span></label>
            <select name="inquiry_type" id="inquiry_type">
                <option value="">選択してください</option>
                <option value="質問" {{ old('inquiry_type') == '質問' ? 'selected' : '' }}>質問</option>
                <option value="リクエスト" {{ old('inquiry_type') == 'リクエスト' ? 'selected' : '' }}>リクエスト</option>
                <option value="その他" {{ old('inquiry_type') == 'その他' ? 'selected' : '' }}>その他</option>
            </select>
            @error('inquiry_type')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="inquiry_content">お問い合わせ内容 <span style="color: red;">*</span></label>
            <textarea name="inquiry_content" id="inquiry_content" rows="4" placeholder="内容を入力してください">{{ old('inquiry_content') }}</textarea>
            @error('inquiry_content')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">確認画面</button>
    </form>
</div>

</body>
</html>
