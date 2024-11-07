<x-slot name="header">
  <x-header first="Admin:" second="Contact Submissions" />
</x-slot>

<div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
  <div class="w-full">
    <div class="flex justify-start">
      <x-button-link :href="route('admin')">Back</x-button-link>
    </div>
    <div class="mt-4 inline-block min-w-full py-2 align-middle">
      <table class="w-full divide-y divide-gray-300 border-2 border-primary">
        <thead>
          <tr class="border-b-2 border-primary">
            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-bold uppercase tracking-wide text-primary">Name</th>
            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-bold uppercase tracking-wide text-primary">Email</th>
            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-bold uppercase tracking-wide text-primary">Phone</th>
            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-bold uppercase tracking-wide text-primary">Message</th>
            <th scope="col" class="px-3 py-3 text-left text-xs font-bold uppercase tracking-wide text-primary"></th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-zinc-900">
          @foreach ($contacts as $contact)
            <tr class="even:bg-zinc-800" wire:key="{{ $contact->id }}">
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-200">{{ $contact->name }}</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-200">{{ $contact->email }}</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-200">{{ $contact->phone }}</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-200">{{ Str::limit($contact->message, 50) }}</td>

              <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                <a wire:navigate href="{{ route('admin.contact.show', $contact->id) }}" class="mr-2 font-bold text-gray-200 hover:text-gray-400">{{ __('Show') }}</a>
                <button class="font-bold text-red-600 hover:text-red-900" type="button" wire:click="delete({{ $contact->id }})" wire:confirm="Are you sure you want to delete?">
                  {{ __('Delete') }}
                </button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="mt-4 px-4">
        {!! $contacts->withQueryString()->links() !!}
      </div>
    </div>
  </div>
</div>
