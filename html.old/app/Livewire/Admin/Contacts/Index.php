<?php

namespace App\Livewire\Admin\Contacts;

use App\Models\Contact;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
  use WithPagination;

  public function render(): View
  {
    $contacts = Contact::paginate();

    return view('livewire.admin.contact.index', compact('contacts'))
      ->with('i', $this->getPage() * $contacts->perPage());
  }

  public function delete(Contact $contact)
  {
    $contact->delete();

    return $this->redirectRoute('admin.contact.index', navigate: true);
  }
}
