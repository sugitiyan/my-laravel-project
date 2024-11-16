<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
        return $request;
        
        // // バリデーション
        // $validated = $request->validate([
        //     'last_name' => 'required|string|max:255',
        //     'first_name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'message' => 'required|string|max:2000',
        // ]);

        // // セッションにデータを保存
        // $request->session()->put('contact', $validated);

        // return view('contact_confirm', ['data' => $validated]); // 確認ページのビュー
    }

    // サンクスページの表示
    public function showThanks()
    {
        return view('thanks'); // サンクスページのビュー
    } 

    // お問い合わせの保存（CRUD: Create）
    public function store(Request $request)
    {
        // セッションからデータを取得
        $contactData = $request->session()->get('contact');

        // データベースに保存
        Contact::create($contactData);

        // セッションのデータを削除
        $request->session()->forget('contact');

        return redirect()->route('contact.thanks'); // サンクスページへリダイレクト
    }

    // 一覧表示（CRUD: Read）
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts')); // 一覧ページのビュー
    }

    // お問い合わせの削除（CRUD: Delete）
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'Contact deleted successfully!');
    }
}
