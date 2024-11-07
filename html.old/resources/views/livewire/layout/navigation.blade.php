<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="border-b border-primary">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between py-4 h-16">
            <div class="flex">
                <x-site-name class="self-center"/>
                <x-link-nav class="hidden sm:flex" :active="request()->routeIs('home')" :href="route('home')">Home</x-link-nav>
                <x-link-nav class="hidden sm:flex" :active="request()->routeIs('about')" :href="route('about')">About</x-link-nav>
                <x-link-nav class="hidden sm:flex" :active="request()->routeIs('data')" :href="route('data')">Data</x-link-nav>
                <x-link-nav class="hidden sm:flex" :active="request()->routeIs('contact')" :href="route('contact')">Contact</x-link-nav>
            </div>

            <!-- User Dropdown -->
            @auth
            <div class="flex justify-end">
                @if (auth()->user()->is_admin)
                    <x-button-link class="hidden sm:flex mr-4" :href="route('admin')">Hidden Thing</x-button-link>
                @endif
                <x-button-link class="hidden sm:flex" wire:click="logout">Logout</x-button-link>
            </div>
            @else
                <x-button-link class="hidden sm:flex" :href="route('login')">Log In</x-button-link>
            @endauth
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                {{ __('About') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('data')" :active="request()->routeIs('data')" wire:navigate>
                {{ __('Data') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate>
                {{ __('Contact') }}
            </x-responsive-nav-link>
            @auth
                @if (auth()->user()->is_admin)
                    <x-responsive-nav-link :href="route('admin')" :active="request()->routeIs('admin')" wire:navigate>
                        {{ __('Admin') }}
                    </x-responsive-nav-link>
                @endif
            @endauth
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-2 pb-1 border-t border-gray-200 dark:border-gray-600">
            @auth
                <div class="mt-3 space-y-1">
                    <button wire:click="logout" class="w-full text-start">
                        <x-responsive-nav-link>
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </button>
                </div>
            @else
                <div class="-mt-2 space-y-1">
                    <!-- Authentication -->
                    <button wire:click="login" class="cursor-pointer w-full text-start">
                        <x-responsive-nav-link>
                            {{ __('Log In') }}
                        </x-responsive-nav-link>
                    </button>
                </div>
            @endauth
        </div>
    </div>
</nav>
