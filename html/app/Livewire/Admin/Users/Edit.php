<?php

namespace App\Livewire\Admin\Users;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Edit extends Component
{
    public UserForm $form;
    public $disabled = false;

    public function mount(User $user)
    {
        // Don't allow self to modify own is_admin setting
        if (Auth::id() == $user->id) {
            $this->disabled = true;
        }

        $this->form->setUserModel($user);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('admin.users.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.users.edit');
    }
}
