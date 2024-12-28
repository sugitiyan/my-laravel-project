<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InquiryController;

Route::get('/', [ContactController::class, 'form']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// 問い合わせ新規作成フォーム
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

// 問い合わせ編集フォーム
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

// 問い合わせ更新処理
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');

// 問い合わせ削除処理
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

// 管理画面
Route::get('/admin', [ContactController::class, 'adminDashboard'])->name('admin.dashboard');

// ユーザー登録ページ
Route::get('/register', [ContactController::class, 'registerForm'])->name('auth.register');

// ログインページ
Route::get('/login', [ContactController::class, 'loginForm'])->name('auth.login');
