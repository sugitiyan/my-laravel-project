@extends('layouts.app')

@section('content')
    <h1>お問い合わせ検索結果</h1>

    <!-- 検索フォーム -->
    <form method="GET" action="{{ route('search') }}">
        <input type="text" name="name" placeholder="名前">
        <input type="email" name="email" placeholder="メール">
        <select name="gender">
            <option value="">性別</option>
            <option value="男性">男性</option>
            <option value="女性">女性</option>
            <option value="その他">その他</option>
        </select>
        <input type="text" name="inquiry_type" placeholder="問い合わせタイプ">
        <input type="date" name="date">
        <input type="text" name="phone" placeholder="電話番号"> <!-- 電話番号の入力フィールドを追加 -->
        <button type="submit">検索</button>
    </form>

    <!-- 検索結果のテーブル -->
    <table>
        <thead>
            <tr>
                <th>名前</th>
                <th>メール</th>
                <th>性別</th>
                <th>問い合わせタイプ</th>
                <th>日付</th>
                <th>電話番号</th> <!-- 電話番号の列を追加 -->
            </tr>
        </thead>
        <tbody>
            @foreach($inquiries as $inquiry)
                <tr>
                    <td>{{ $inquiry->name }}</td>
                    <td>{{ $inquiry->email }}</td>
                    <td>{{ $inquiry->gender }}</td>
                    <td>{{ $inquiry->inquiry_type }}</td>
                    <td>{{ $inquiry->created_at }}</td>
                    <td>{{ $inquiry->phone }}</td> <!-- 電話番号のデータを追加 -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- ページネーションリンク -->
    {{ $inquiries->links() }}
@endsection
