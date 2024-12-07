<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'form']);
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
