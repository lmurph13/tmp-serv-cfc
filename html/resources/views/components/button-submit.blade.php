<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-primary rounded-md font-semibold text-sm text-white uppercase tracking-widest active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-primary transition ease-in-out duration-150 hover:text-black hover:bg-primary transition ease-in-out duration-300']) }}>
    {{ $slot }}
</button>
