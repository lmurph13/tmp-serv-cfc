<?php

namespace App\Livewire\Admin\Users;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public UserForm $form;

    public function mount(User $user)
    {
        $this->form->setUserModel($user);
    }

    public function render()
    {
        return view('livewire.admin.users.show', ['user' => $this->form->userModel]);
    }
}
