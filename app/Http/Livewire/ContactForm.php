<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    protected $rules = [
        'name'      => 'required',
        'email'     => 'required|email',
        'phone'     => 'required',
        'message'   => 'required'
    ];

    public function saveContact()
    {
        $this->validate();

        Contact::create([
            'name'    => $this->name,
            'email'   => $this->email,
            'phone'   => $this->phone,
            'message' => $this->message,
        ]);

        session()->flash('message', 'Contact saved successfully.');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
