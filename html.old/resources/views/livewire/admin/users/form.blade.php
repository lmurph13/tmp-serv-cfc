<div>
  <div>
    <div class="relative py-4">
      <input wire:model="form.name" type="text" id="name" class="border-1 peer block w-full appearance-none rounded-lg border-gray-600 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-white focus:border-primary focus:outline-none focus:ring-0" placeholder=" " />
      <label for="name" class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-90 transform bg-black px-2 text-sm text-gray-100 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-90 peer-focus:px-2 peer-focus:text-primary rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4">Name</label>
    </div>
    @error('form.name')
      <x-input-error class="mt-2" :messages="$message" />
    @enderror
  </div>
  <div>
    <div class="relative py-4">
      <input wire:model="form.email" type="email" id="email" class="border-1 peer block w-full appearance-none rounded-lg border-gray-600 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-white focus:border-primary focus:outline-none focus:ring-0" placeholder=" " />
      <label for="email" class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-90 transform bg-black px-2 text-sm text-gray-100 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-90 peer-focus:px-2 peer-focus:text-primary rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4">Email</label>
    </div>
    @error('form.email')
      <x-input-error class="mt-2" :messages="$message" />
    @enderror
  </div>
  <div>
    <div class="relative py-4">
      <input wire:model="form.password" type="password" id="password" class="border-1 peer block w-full appearance-none rounded-lg border-gray-600 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-white focus:border-primary focus:outline-none focus:ring-0" placeholder=" " />
      <label for="password" class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-90 transform bg-black px-2 text-sm text-gray-100 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-90 peer-focus:px-2 peer-focus:text-primary rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4">Password</label>
    </div>
    @error('form.password')
      <x-input-error class="mt-2" :messages="$message" />
    @enderror
  </div>
  <div>
    <div class="relative py-4">
      <label for="is_admin" class="bg-black px-2 text-sm text-gray-100">Is Admin</label>
      @if ($disabled)
        <input wire:model="form.is_admin" disabled type="checkbox" id="is_admin" class="disabled cursor-not-allowed appearance-none rounded-lg border-gray-600 bg-transparent p-2.5 text-gray-800 focus:border-primary focus:outline-none focus:ring-0" placeholder=" " />
      @else
        <input wire:model="form.is_admin" type="checkbox" id="is_admin" class="appearance-none rounded-lg border-gray-600 bg-transparent p-2.5 text-primary focus:border-primary focus:outline-none focus:ring-0" placeholder=" " />
      @endif
    </div>
    @error('form.is_admin')
      <x-input-error class="mt-2" :messages="$message" />
    @enderror
  </div>

  <div class="flex justify-between">
    <x-button-link :href="route('admin.users.index')">Back</x-button-link>
    <x-button-submit>Submit</x-button-submit>
  </div>
</div>
