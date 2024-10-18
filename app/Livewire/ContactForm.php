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

        // Logika untuk menyimpan data atau mengirim email
        // Misalnya, Anda bisa menggunakan model untuk menyimpan data ke database

        // Reset input setelah pengiriman
        $this->reset(['name', 'email', 'message']);

        // Berikan feedback kepada pengguna
        session()->flash('message', 'Pesan Anda telah dikirim!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}