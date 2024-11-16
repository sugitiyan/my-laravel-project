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

// CRUD用のルート
Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.index');
Route::get('/admin/contacts/create', [ContactController::class, 'create'])->name('admin.create');
Route::post('/admin/contacts', [ContactController::class, 'store'])->name('admin.store');
Route::get('/admin/contacts/{id}', [ContactController::class, 'show'])->name('admin.show');
Route::get('/admin/contacts/{id}/edit', [ContactController::class, 'edit'])->name('admin.edit');
Route::put('/admin/contacts/{id}', [ContactController::class, 'update'])->name('admin.update');
Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.destroy');

// ユーザ登録ページ（Fortify）
Fortify::registerView(function () {
    return view('auth.register');
});

// ログインページ
Route::view('/login', 'auth.login')->name('login');
