<?php
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use App\Http\Controllers\ContactController;

// ホームページ（お問い合わせフォーム入力ページ）
Route::get('/', [ContactController::class, 'showForm'])->name('contact.form');

// お問い合わせフォーム確認ページ
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');

// サンクスページ
Route::get('/thanks', [ContactController::class, 'showThanks'])->name('contact.thanks');

// 管理画面
Route::get('/admin', function () {
    return view('admin');
});

// ユーザ登録ページ（Fortify）
Fortify::registerView(function () {
    return view('auth.register');
});

// ログインページ
Route::view('/login', 'auth.login')->name('login');
