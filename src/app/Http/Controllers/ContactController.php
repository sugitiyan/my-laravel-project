<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // お問い合わせフォーム入力ページ
    public function form()
    {
         $heading = 'FashionablyLate';
        return view('form',compact('heading'));
    }
        public function create()
    {
        // 入力フォームを表示
        return view('contact.form');
    }
         public function store(Request $request)
    {
        $contact = $request->only([
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ]);
       \Log::info('Form Data:', $request->all());
       return redirect()->back()->with('message', '送信が成功しました！');
    }
}
