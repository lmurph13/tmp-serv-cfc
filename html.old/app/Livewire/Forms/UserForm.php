<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $userModel;

    public $name = '';
    public $email = '';
    public $password = '';
    public $is_admin = '';

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique('users')->ignore($this->userModel->id)],
            'password' => ['required', 'string', Rules\Password::defaults()],
            'is_admin' => ['boolean'],
        ];
    }

    public function setUserModel(User $userModel): void
    {
        $this->userModel = $userModel;

        $this->name = $this->userModel->name;
        $this->email = $this->userModel->email;
        $this->password = $this->userModel->password;
        $this->is_admin = $this->userModel->is_admin;
    }

    public function store(): void
    {
        $this->userModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->userModel->update($this->validate());

        $this->reset();
    }
}
