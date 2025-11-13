<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use SplSubject;

class ShowContactPage extends Component
{

   
    
    public $name = '';
    public $email = '';
    public $message ='';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submitForm()
    {
        $this->validate();
        $mailData = [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'subject' => 'Contact Form Submission',
            
        ];

        Mail::to('user@example.com')->send(new \App\Mail\ContactFormMail($this->name, $this->email, $this->message));

        // TODO : Save to DB or send email
        // e.g. Contact::create([...]) or Mail::to(...)->send(...);

        // Reset fields
        $this->reset(['name', 'email', 'message']);

        // Flash success message
        session()->flash('success', 'Your message has been sent successfully!');
    }




    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
