<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validasi email
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        // Simpan email ke database
        Newsletter::create([
            'email' => $request->email,
        ]);

        // Mengembalikan respon
        return response()->json(['message' => 'Your subscription request has been sent. Thank you!'], 200);
    }
}
