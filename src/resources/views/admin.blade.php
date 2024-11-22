<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>FashionablyLate</h1>
        <button class="logout-button">logout</button>
    </header>
    
    <main>
        <h2>Admin</h2>
        <div class="search-bar">
            <input type="text" placeholder="名前やメールアドレスを入力してください">
            <select>
                <option>性別</option>
                <option>全て</option>
                <option>男性</option>
                <option>女性</option>
                <option>その他</option>
            </select>
            <select>
                <option>お問い合わせの種類</option>
                <option>商品について</option>
                <option>返品について</option>
                <!-- 他のオプションを追加 -->
            </select>
            <input type="date">
            <button class="search-button">検索</button>
            <button class="reset-button">リセット</button>
        </div>
        
        <button class="export-button">エクスポート</button>
        
        <table>
            <thead>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th>詳細</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>山田 太郎</td>
                    <td>男性</td>
                    <td>test@example.com</td>
                    <td>商品の交換について</td>
                    <td><button class="detail-button">詳細</button></td>
                </tr>
                <!-- 他の行を追加 -->
            </tbody>
        </table>
        
        <div class="pagination">
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>5</button>
        </div>
    </main>
</body>
</html>
