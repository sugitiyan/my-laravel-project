<?php print_r($contact) ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
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
         @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

   
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Contact</h2>
      </div>

        <form action="{{ route('contacts.store') }}" method="post">
            @csrf
        <table>
            <tr>
                <td class="label">お名前</td>
                <td class="contact_confirm-table__text">
                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly>
                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly>
              </td>
            </tr>
            <tr>
                <td class="label">性別</td>
                <td class="contact_confirm-table__text">
                <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
              </td> 
            </tr>
            <tr>
                <td class="label">メールアドレス</td>
                <td class="contact_confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}"readonly/>
              </td>
            </tr>
            <tr>
                <td class="label">電話番号</td>
                <td class="contact_confirm-table__text">
                <input type="text" name="phone" value="{{ $contact['phone'] }}"readonly/>
              </td>
            </tr>
            <tr>
                <td class="label">住所</td>
                <td class="contact_confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}"readonly/>
              </td>
            </tr>
            <tr>
                <td class="label">建物名</td>
                <td class="contact_confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building'] }}"readonly/>
              </td>
            </tr>
            <tr>
                <td class="label">お問い合わせの種類</td>
                <td class="contact_confirm-table__text">
                <input type="text" name="inquiry_type" value="{{ $contact['inquiry_type'] }}"readonly/>
              </td>
            </tr>
            <tr>
                <td class="label">お問い合わせ内容</td>
                 <td class="contact_confirm-table__text">
                <textarea readonly>{{ $contact['inquiry_content'] }}</textarea>
              </td>
            </tr>
        </table>

        <div class="buttons">
           <a href="{{ route('contact.form') }}" class="button">修正</a>

        <form action="{{ route('contacts.store') }}" method="POST">
           @csrf
           <button type="submit">送信</button> 
        </div>
    </div>
</body>
</html>
