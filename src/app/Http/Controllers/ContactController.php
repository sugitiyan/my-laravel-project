<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // 入力ページの表示
    public function showForm()
    {
        return view('contact_form'); // お問い合わせフォームのビュー
    }

    // 確認ページの表示
    public function confirm(Request $request)
    {
        // バリデーション
        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        return view('contact_confirm', ['data' => $validated]); // 確認ページのビュー
    }

    // サンクスページの表示
    public function showThanks()
    {
        return view('thanks'); // サンクスページのビュー
    }
}
