<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest; 

class ContactController extends Controller
{
    public function form()
    {
      return view('form'); 
    }


    public function confirm(ContactRequest $request)
    {
       $contact = $request->only('category_id', 'first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail'); // カンマが余分
       return view('confirm', compact('contact')); 
    }


    public function store(ContactRequest $request) 
    {
         $contact = $request->only('category_id', 'first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail');
         Contact::create($contact);
        return view('thanks');
    }

    public function index()
    {
        $contacts = Contact::all(); 
        return view('contacts.index', compact('contacts'));
    }

    public function feedbackForm()
    {
        return view('form'); // 新しいビューを指定
    }

    public function create()
    {
        return view('contacts.create'); // 新しい問い合わせフォームビュー
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(ContactRequest $request, $id)
    {
        $validatedData = $request->validated();
        $contact = Contact::findOrFail($id);
        $contact->update($validatedData);
        return redirect()->route('contacts.index');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index');
    }

    public function adminDashboard()
    {
        return view('admin.dashboard'); // 管理画面用のビュー
    }

    public function registerForm()
    {
        return view('auth.register'); // ユーザ登録用のビュー
    }

    public function loginForm()
    {
        return view('auth.login'); // ログイン用のビュー
    }
}
