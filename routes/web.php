<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('index');
    
});

// Rute untuk mengirimkan form newsletter
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
