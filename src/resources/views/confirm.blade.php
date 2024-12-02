<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
</head>

<body>
    <main>
    <div class="confirm__content">
    <div class="confirm__heading">
    <h2>Contact</h2>
</div>
     <form class="form" action="{{ route('contact.store') }}" method="post">
   @csrf
    <div class="confirm-table">
      <table class="confirm-table__inner">
       <tr class="confirm-table__row">
       <label for="last_name"> お名前</th>
        <td class="confirm-table__text">
      <input type="text" name="last_name" id="last_name" required>
</td>
</tr>
    <tr class="confirm-table__row">
      <th class="confirm-table__header">性別</th>
        <td class="contact_confirm-table__text">
       <input type="text" name="gender" value="{{ $contact['gender'] }}"readonly/>
</td>
</tr>
    <tr class="confirm-table__row">
     <th class="confirm-table__header">メールアドレス</th>
      <td class="contact_confirm-table__text">
      <input type="email" name="email" value="{{ $contact['email'] }}"readonly/>
</td>
</tr>
    <tr class="confirm-table__row">
     <th class="confirm-table__header">電話番号</th>
      <td class="contact_confirm-table__text">
      <input type="phone" name="phone" value="{{ $contact['phone'] }}"readonly/> 
</td>
</tr>
    <tr class="confirm-table__row">
     <th class="confirm-table__header">住所</th>
        <td class="contact_confirm-table__text">
      <input type="text" name="address" value="{{ $contact['address'] }}"readonly/> 
</td>
</tr>
    <tr class="confirm-table__row">
     <th class="confirm-table__header">建物名</th>
      <td class="contact_confirm-table__text">
      <input type="text" name="building" value="{{ $contact['building'] }}"readonly/>  
</td>
</tr>
    <tr class="confirm-table__row">
  <th class="confirm-table__header">お問い合わせの種類</th>
    <td class="contact_confirm-table__text">
     <input type="text" name="inquiry_type" value= "{{ $contact['inquiry_type'] }}"readonly/>
</td>
</tr>
    <tr class="confirm-table__row">
    <th class="confirm-table__header">お問い合わせ内容</th>
     <td class="contact_confirm-table__text">
    <input type="text" name="inquiry_content" value="{{ $contact['inquiry_content'] }}"readonly/>
</td>
</tr>
</table>
    <div class="buttons">
    <a href="{{ route('contact.form') }}" class="button edit-btn">修正</a>
    <button type="submit">送信</button>
</div>
</div>
</form>
</div>
</main>
</body>

</html>
