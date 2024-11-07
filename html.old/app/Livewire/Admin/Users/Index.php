<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        // Get list of all users
        $users = User::paginate();

        // Display users without @red.team in the email
        $users = User::where('email', 'not like', '%@red.team')->paginate();

        return view('livewire.admin.users.index', compact('users'))
            ->with('i', $this->getPage() * $users->perPage());
    }

    public function delete(User $user)
    {
        $user->delete();

        return $this->redirectRoute('admin.users.index', navigate: true);
    }
}
