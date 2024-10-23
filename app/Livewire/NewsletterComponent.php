<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Newsletter;

class NewsletterComponent extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|unique:newsletters,email',
    ];

    public function submitNewsletter()
    {
        // Validate email
        $this->validate();

        // Save to database
        Newsletter::create(['email' => $this->email]);

        // Reset input
        $this->email = '';

        // Set session flash message
        session()->flash('message', 'You have successfully subscribed to the newsletter.');
    }

    public function render()
    {
        return view('livewire.newsletter-component');
    }
}
