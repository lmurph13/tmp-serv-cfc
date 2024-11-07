<?php

namespace App\Livewire\Contacts;

use App\Livewire\Forms\ContactForm;
use App\Models\Contact;
use Livewire\Component;

class Create extends Component
{
    public ContactForm $form;

    public function mount(Contact $contact)
    {
        $this->form->setContactModel($contact);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('contact', navigate: true);
    }

    public function render()
    {
        return view('livewire.contact.create');
    }
}
