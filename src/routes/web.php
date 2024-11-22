<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'contact_form']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
