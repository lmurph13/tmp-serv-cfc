<x-slot name="header">
  <x-header first="Admin:" second="Edit User" />
</x-slot>

<div>
  <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
      <form method="POST" wire:submit="save" role="form" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf
        @include('livewire.admin.users.form')
      </form>
  </div>
</div>