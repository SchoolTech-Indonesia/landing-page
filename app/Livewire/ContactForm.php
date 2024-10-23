<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;


class ContactForm extends Component
{
    public $name, $email, $subject, $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        // Validasi form
        $this->validate();

        // Simpan data ke database
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        // Reset form setelah data tersimpan
        $this->resetForm();

        // Kirim notifikasi sukses
        session()->flash('message', 'Your message has been sent successfully!');
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
