<?php

namespace App\Livewire\Admin\Users;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public UserForm $form;
    public $disabled = false;

    public function mount(User $user)
    {
        $this->form->setUserModel($user);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('admin.users.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.users.create');
    }
}
