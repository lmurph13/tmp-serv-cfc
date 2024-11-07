<?php

namespace App\Livewire\Forms;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Livewire\Form;

class ContactForm extends Form
{
    public ?Contact $contactModel;

    public $name = '';
    public $email = '';
    public $phone = '';
    public $message = '';

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'integer|min:10',
            'message' => '',
        ];
    }

    public function setContactModel(Contact $contactModel): void
    {
        $this->contactModel = $contactModel;

        $this->name = $this->contactModel->name;
        $this->email = $this->contactModel->email;
        $this->phone = $this->contactModel->phone;
        $this->message = $this->contactModel->message;
    }

    public function store(): void
    {
        $data = $this->validate();

        $this->contactModel->create($data);

        Mail::to(env('mail_recipient'))->send(new ContactMail($data));

        $this->reset();
    }

    public function update(): void
    {
        $this->contactModel->update($this->validate());

        $this->reset();
    }
}
