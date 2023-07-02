<div class=" pb-4 shadow rounded-md hover:shadow-md overflow-hidden bg-white">
    <a href="{{ $url }}">
        <div class=" h-[32dvh] w-full">
            <img src="{{ $product->images[0]['src'] }}" alt="Sample Image" class=" object-cover w-[100%] h-full">
        </div>
    </a>
    <div class="px-3">
        <h1 class=" text-gray-800 font-bold text-xl my-3 ">{{ $product->name }}</h1>
        <div class="flex flex-row justify-between">
            <p class="text-gray-700">$ {{ $product->price }}</p>
            <div x-data="{ toggle: false } " class="{{ request()->routeIs('products.index') ? '' : 'hidden' }}">
                <button @click="toggle = !toggle" x-bind:class="{ 'bg-blue-500': toggle, 'bg-gray-300': !toggle }" class=" shadow relative inline-flex items-center h-5 rounded-full w-8 transition-colors duration-200 focus:outline-none">
                    <span x-bind:class="{ 'translate-x-4': toggle, 'translate-x-0': !toggle }" class="inline-block w-4 h-4 transform bg-white rounded-full transition-transform duration-200"></span>
                </button>
            </div>

        </div>
    </div>
</div>