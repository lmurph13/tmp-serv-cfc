<?php

namespace App\Livewire\Forms;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Livewire\Form;
use Livewire\WithFileUploads;

class ContactForm extends Form
{
    public ?Contact $contactModel;
    use WithFileUploads;
    public $name = '';
    public $email = '';
    public $phone = '';
    public $message = '';
    public $attachments = [];

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'integer|min:10',
            'message' => '',
            'attachments.*' => 'file',
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

        foreach ($this->attachments as $attachment) {
            $attachment->storeAs('uploads', $attachment->getClientOriginalName());
        }

        Mail::to(env('mail_recipient'))->send(new ContactMail($data));

        $this->reset();
    }

    public function update(): void
    {
        $this->contactModel->update($this->validate());

        $this->reset();
    }
}
