<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function submit()
    {
        // Validasi data
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Reset input setelah pengiriman
        $this->reset(['name', 'email', 'message']);

        // Berikan feedback kepada pengguna
        session()->flash('message', 'Your message has been sent!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}