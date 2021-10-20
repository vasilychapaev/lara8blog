<?php

namespace App\Http\Livewire\Blog;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $email;
    public $comment;

    protected $rules = [
        'email' => 'required|email',
        'comment' => 'required',
    ];

    public function render()
    {
        return view('livewire.blog.contact-form')
            ->layout('livewire.blog.layout');
    }

    public function submit()
    {
        $data = $this->validate();
        Contact::create($data);

        return redirect()->route('lw.blog.contact-form');
    }
}
