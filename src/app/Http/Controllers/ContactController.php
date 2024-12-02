<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contact_form()
    {
        // 必要に応じてカテゴリデータを取得してビューに渡す
        $categories = [
            1 => '質問',
            2 => 'リクエスト',
            3 => 'その他'
        ];
        return view('contact_form', [
            'heading' => 'FashionablyLate',
            'categories' => $categories
        ]);
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only([
            'category_id', // category_id を追加
            'last_name',
            'first_name',
            'gender',
            'email',
            'phone',
            'address',
            'building',
            'inquiry_type',
            'inquiry_content'
        ]);

        $contact['gender'] = $request->input('gender', '未回答');
        $contact['name'] = $request->input('first_name') . ' ' . $request->input('last_name');

        $request->session()->put('contact', $contact);

        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->session()->get('contact');
        Contact::create($contact);

        return redirect()->route('contact.complete');
    }
}
