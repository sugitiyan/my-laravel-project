<?php
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

// Fortifyの登録ページ
Fortify::registerView(function () {
    return view('auth.register');
});

// ホームページ
Route::get('/', function () {
    return view('welcome');
});

// お問い合わせフォーム入力ページ
Route::get('/contact', function () {
    return view('contact_form');
});

// お問い合わせフォーム確認ページ
Route::post('/confirm', function () {
    return view('contact_confirm');
});

// サンクスページ
Route::get('/thanks', function () {
    return view('thanks');
});

// 管理画面
Route::get('/admin', function () {
    return view('admin');
});

// ログインページ
Route::get('/login', function () {
    return view('auth.login');
});
