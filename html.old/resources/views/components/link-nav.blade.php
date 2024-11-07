@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 py-2 border-b-2 border-transparent text-md leading-5 text-primary focus:outline-none transition duration-150 ease-in-out hover:border-primary focus:border-primary'
            : 'inline-flex items-center px-3 py-2 border-b-2 border-transparent text-md leading-5 text-white focus:outline-none transition duration-150 ease-in-out hover:border-primary focus:border-primary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
