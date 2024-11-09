<!DOCTYPE html>
< lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

<div class="container">
        <h1>FashionablyLate</h1>
        <h2>Contact</h2>
        <form>
            <div class="form-group">
                <label for="name">お名前 <span style="color: red;">*</span></label>
                <input type="text" id="name" placeholder="例: 山田 太郎">
            </div>
            <div class="form-group">
                <label>性別 <span style="color: red;">*</span></label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="男性"> 男性</label>
                    <label><input type="radio" name="gender" value="女性"> 女性</label>
                    <label><input type="radio" name="gender" value="その他"> その他</label>
                </div>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス <span style="color: red;">*</span></label>
                <input type="email" id="email" placeholder="例: test@example.com">
            </div>
            <div class="form-group">
                <label for="phone">電話番号 <span style="color: red;">*</span></label>
                <input type="text" id="phone" placeholder="080-1234-5678">
            </div>
            <div class="form-group">
                <label for="address">住所 <span style="color: red;">*</span></label>
                <input type="text" id="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
            </div>
            <div class="form-group">
                <label for="building">建物名</label>
                <input type="text" id="building" placeholder="例: 千駄ヶ谷マンション101">
            </div>
            <div class="form-group">
                <label for="inquiry-type">お問い合わせの種類 <span style="color: red;">*</span></label>
                <select id="inquiry-type">
                    <option value="">選択してください</option>
                    <option value="質問">質問</option>
                    <option value="リクエスト">リクエスト</option>
                    <option value="その他">その他</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inquiry-content">お問い合わせ内容 <span style="color: red;">*</span></label>
                <textarea id="inquiry-content" rows="4" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
            <button type="submit">確認画面</button>
        </form>
    </div>
</body>
</html>