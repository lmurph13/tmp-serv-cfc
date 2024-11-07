<x-slot name="header">
  <x-header first="Admin:" second="Contact Submission" />
</x-slot>

<div>
  <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
    <x-button-link :href="route('admin.contact.index')">Back</x-button-link>
    <div class="overflow-hidden text-gray-100 shadow-sm sm:rounded-lg">
      <dl class="divide-y divide-gray-100/50">
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-bold leading-6 text-gray-200">Name</dt>
          <dd class="mt-1 text-sm leading-6 text-gray-200 sm:col-span-2 sm:mt-0">{{ $contact->name }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-bold leading-6 text-gray-200">Email</dt>
          <dd class="mt-1 text-sm leading-6 text-gray-200 sm:col-span-2 sm:mt-0">{{ $contact->email }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-bold leading-6 text-gray-200">Phone</dt>
          <dd class="mt-1 text-sm leading-6 text-gray-200 sm:col-span-2 sm:mt-0">{{ $contact->phone }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-bold leading-6 text-gray-200">Message</dt>
          <dd class="mt-1 text-sm leading-6 text-gray-200 sm:col-span-2 sm:mt-0">{{ $contact->message }}</dd>
        </div>
      </dl>
    </div>
  </div>
</div>
