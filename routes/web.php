<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');

    Route::post('/subscribe', 'NewsletterController@subscribe')->name('newsletter.subscribe');

});
