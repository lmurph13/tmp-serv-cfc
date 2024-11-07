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
      <input wire:model="form.phone" type="tel" id="phone" class="border-1 peer block w-full appearance-none rounded-lg border-gray-600 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-white focus:border-primary focus:outline-none focus:ring-0" placeholder=" " />
      <label for="phone" class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-90 transform bg-black px-2 text-sm text-gray-100 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-90 peer-focus:px-2 peer-focus:text-primary rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4">Phone</label>
    </div>
    @error('form.phone')
      <x-input-error class="mt-2" :messages="$message" />
    @enderror
  </div>
  <div>
    <div class="relative py-4">
      <textarea wire:model="form.message" rows="4" id="message" class="border-1 peer block w-full appearance-none rounded-lg border-gray-600 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-white focus:border-primary focus:outline-none focus:ring-0" placeholder=" "></textarea>
      <label for="message" class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-90 transform bg-black px-2 text-sm text-gray-100 duration-300 peer-placeholder-shown:top-1/4 peer-placeholder-shown:-translate-y-1/4 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-90 peer-focus:px-2 peer-focus:text-primary rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4">Message</label>
    </div>
    @error('form.message')
      <x-input-error class="mt-2" :messages="$message" />
    @enderror
  </div>
  <div>
    <div class="relative py-4">
      <input wire:model="form.attachments" type="file" id="attachments" multiple class="border-1 peer block w-full appearance-none rounded-lg border-gray-600 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-white focus:border-primary focus:outline-none focus:ring-0"> 
      <label for="attachments" class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-90 transform bg-black px-2 text-sm text-gray-100 duration-300 peer-placeholder-shown:top-1/4 peer-placeholder-shown:-translate-y-1/4 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-90 peer-focus:px-2 peer-focus:text-primary rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4">Attachments</label>
    </div>
  </div>

  <div class="flex justify-end">
    <x-button-submit>Submit</x-button-submit>
  </div>
</div>
