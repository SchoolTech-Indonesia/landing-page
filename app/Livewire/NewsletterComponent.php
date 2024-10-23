<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Newsletter;

class NewsletterComponent extends Component
{
    public $email;
    public $successMessage = '';  // Tambahkan properti untuk pesan sukses

    public function submitNewsletter()
    {
        // Validasi email
        $this->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        // Simpan email ke database
        Newsletter::create(['email' => $this->email]);

        // Reset form dan tampilkan pesan sukses
        $this->reset('email');
        $this->successMessage = 'Your subscription request has been sent. Thank you!';  // Set pesan sukses
    }

    public function render()
    {
        return view('livewire.newsletter-component');
    }
}
