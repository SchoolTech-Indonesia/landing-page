<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;
use App\Livewire\ContactForm;
use App\Livewire\NewsletterComponent;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('index');
});

// Rute untuk contact form Livewire
Route::get('/contact', ContactForm::class)->name('contact.form');

// Rute untuk newsletter Livewire
Route::get('/newsletter', NewsletterComponent::class)->name('newsletter.component');

// Rute untuk mengirimkan form newsletter via controller
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

