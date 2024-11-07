<x-slot name="header">
  <x-header first="Contact" second="Us" />
</x-slot>

<div>
  <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
      <form method="POST" wire:submit="save" role="form" enctype="multipart/form-data">
        @csrf
        @include('livewire.contact.form')
      </form>

      <div class="py-4 text-sm text-gray-200">
        By submitting this form, you agree to let us harness the wind of
        your curiosity. Rest assured, your information is safe with us -
        we promise not to use it to generate any unnecessary gusts of
        emails. If you receive an unexpected breeze of humor, consider it
        a bonus!
      </div>

      <hr class="h-0.5 border-t-0 bg-primary" />

      <div class="py-4 text-gray-200">
        <p>Address: 1405 N. 5th Ave, St. Charles, IL 60174</p>
        <p>Phone: <a class="text-primary" href="tel:6308675309">(630) 867 - 5309</a></p>
        <p>Email: <a class="text-primary" href="mailto:info@ventosa.energia">info@ventosa.energia</a></p>
        <p>Website: <a class="text-primary" href="{{ config('app.url') }}">{{ config('app.url') }}</a></p>
      </div>
  </div>
