<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- 更新用のHTTPメソッドを指定 -->

        <label for="category_id">Category:</label>
        <input type="text" id="category_id" name="category_id" value="{{ old('category_id', $contact->category_id) }}"><br>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $contact->first_name) }}"><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $contact->last_name) }}"><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="gender_male" name="gender" value="1" {{ old('gender', $contact->gender) == 1 ? 'checked' : '' }}> Male
        <input type="radio" id="gender_female" name="gender" value="2" {{ old('gender', $contact->gender) == 2 ? 'checked' : '' }}> Female<br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $contact->email) }}"><br>

        <label for="tel">Telephone:</label>
        <input type="text" id="tel" name="tel" value="{{ old('tel', $contact->tel) }}"><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ old('address', $contact->address) }}"><br>

        <label for="building">Building:</label>
        <input type="text" id="building" name="building" value="{{ old('building', $contact->building) }}"><br>

        <label for="detail">Detail:</label><br>
        <textarea id="detail" name="detail">{{ old('detail', $contact->detail) }}</textarea><br>

        <button type="submit">Update Contact</button>
    </form>

    <a href="{{ route('contacts.index') }}">Back to Contacts List</a>
</body>
</html>
