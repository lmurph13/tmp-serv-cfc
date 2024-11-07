@php
  $classes = 'font-bold py-2 border-b-2 border-transparent mr-8'
@endphp

<span {{ $attributes->merge(['class' => $classes ]) }}>
  <span class="text-white">DER</span>
  <span class="text-primary">8.9</span>
  {{-- <span class="text-white">Energia</span> --}}
  {{-- <span class="text-primary">Ventosa</span> --}}
</span>
