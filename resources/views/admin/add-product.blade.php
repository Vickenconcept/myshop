<x-admin-layout>
  <div class="bg-white">
    <h1 class="text-xl text-gray-700 bg-blue-200 py-2 px-10">Create a new product</h1>
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto">
      @csrf
      <div class="mb-4" x-data="{ isFocused: false }">
        <label for="name" class="block mb-2 font-normal text-gray-700 text-base transition-y duration-200 " x-bind:class="{ 'text-[12px]': isFocused || $refs.name.value }">Product Name</label>
        <input type="text" id="name" name="name" class="w-full px-4 py-2  rounded-md focus:outline-none placeholder-sm" autocomplete="off" placeholder="Product Name" required x-on:focus="isFocused = true" x-on:blur="isFocused = false" x-ref="name">
      </div>
      <x-input-error :messages="$errors->get('name')" class="mt-2" />

      <div x-data="{ isFocused: false }" class="mb-4">
        <label for="image" class="block mb-2 font-normal text-gray-700 text-base transition-y duration-200" x-bind:class="{ 'text-[12px]': isFocused || $refs.image.value }">Image address</label>
        <input type="text" id="image" name="image" class="w-full px-4 py-2 rounded-md focus:outline-none placeholder-sm" autocomplete="off" placeholder="Image Url" required x-on:focus="isFocused = true" x-on:blur="isFocused = false" x-ref="image">
      </div>
      <x-input-error :messages="$errors->get('image')" class="mt-2" />

      <div class="mb-4" x-data="{ isFocused: false }">
        <label for="description" class="block mb-2 font-normal text-gray-700 text-base transition-y duration-200" x-bind:class="{ 'text-[12px]': isFocused || $refs.description.value }">Description</label>
        <textarea id="description" name="description" class="w-full h-12 px-4 py-2  rounded-md focus:outline-none placeholder-sm" autocomplete="off" placeholder="Product Description " required x-on:focus="isFocused = true" x-on:blur="isFocused = false" x-ref="description"></textarea>
      </div>
      <x-input-error :messages="$errors->get('description')" class="mt-2" />

      <div class="mb-4" x-data="{ isFocused: false }">
        <label for="price" class="block mb-2 font-normal text-gray-700 text-base transition-y duration-200" x-bind:class="{ 'text-[12px]': isFocused || $refs.number.value }">Price</label>
        <input type="text" id="price" name="price" class="w-full px-4 py-2  rounded-md focus:outline-none placeholder-sm" autocomplete="off" placeholder="Amount" required x-on:focus="isFocused = true" x-on:blur="isFocused = false" x-ref="number">
      </div>
      <x-input-error :messages="$errors->get('price')" class="mt-2" />

      <button type="submit" class="w-full px-4 py-2 text-white bg-blue-700 rounded-md hover:underline focus:outline-none focus:bg-blue-600">Create</button>
      <!-- <button class="w-full px-4 py-2 text-gray-700  rounded-md hover:border-b  hover:border-x mb-2 focus:outline-none"><a href="{{ route('admin.index') }}">Back</a></button> -->
    </form>
  </div>
</x-admin-layout>