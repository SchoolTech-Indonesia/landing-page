<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Newsletter;

class NewsletterComponent extends Component
{
    public $email;

    public function submitNewsletter()
    {
        // Validasi email
        $this->validate([
            'email' => 'required|email',
        ]);

        // Simpan email ke database
        Newsletter::create(['email' => $this->email]);

        // Reset input email setelah berhasil
        $this->reset('email');

        // Flash message sukses
        session()->flash('message', 'Your subscription request has been sent. Thank you!');
    }

    public function render()
    {
        return view('livewire.newsletter-component');
    }
}
