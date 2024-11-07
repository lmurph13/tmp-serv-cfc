<x-app-layout>
    <x-slot name="header">
        <x-header first="Admin" second="Dashboard" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-200 ">
                    <x-button-link :href="route('admin.contact.index')">Contact Submissions</x-button-link>
                    <div class="py-2"></div>
                    <x-button-link :href="route('admin.users.index')">User Accounts</x-button-link>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
