<x-slot name="header">
  <x-header first="Admin:" second="Users" />
</x-slot>

<div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
  <div class="w-full">
    <div class="flex justify-between">
      <x-button-link :href="route('admin')">Back</x-button-link>
      <x-button-link :href="route('admin.users.create')">Create User</x-button-link>
    </div>
    <div class="mt-4 inline-block min-w-full py-2 align-middle">
      <table class="w-full divide-y divide-gray-300 border-2 border-primary">
        <thead>
          <tr class="border-b-2 border-primary">
            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-bold uppercase tracking-wide text-primary">ID</th>
                <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-bold uppercase tracking-wide text-primary">Name</th>
                <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-bold uppercase tracking-wide text-primary">Email</th>
                <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-bold uppercase tracking-wide text-primary">Admin</th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-bold uppercase tracking-wide text-primary"></th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-zinc-900">
          @foreach ($users as $user)
            @if ($user->id != 2)
            <tr class="even:bg-zinc-800" wire:key="{{ $user->id }}">
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-200">{{ $user->id }}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-200">{{ $user->name }}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-200">{{ $user->email }}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-200">{{ $user->is_admin ? 'Yes' : 'No' }}</td>

                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                    <a wire:navigate href="{{ route('admin.users.show', $user->id) }}" class="mr-2 font-bold text-gray-200 hover:text-gray-400">{{ __('Show') }}</a>
                    <a wire:navigate href="{{ route('admin.users.edit', $user->id) }}" class="mr-2 font-bold text-gray-200 hover:text-gray-400">{{ __('Edit') }}</a>
                    {{-- Don't allow deletion of your account --}}
                    @if (auth()->user()->id != $user->id)
                      <button class="font-bold text-red-600 hover:text-red-900" type="button" wire:click="delete({{ $user->id }})" wire:confirm="Are you sure you want to delete?">
                        {{ __('Delete') }}
                      </button>
                    @endif
                  </td>
                @endif
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="mt-4 px-4">
        {!! $users->withQueryString()->links() !!}
      </div>
    </div>
  </div>
</div>
