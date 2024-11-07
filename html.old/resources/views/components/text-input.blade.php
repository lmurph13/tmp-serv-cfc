@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-700 bg-black text-gray-200 focus:border-primary focus:ring-primary rounded-md shadow-sm']) !!}>
