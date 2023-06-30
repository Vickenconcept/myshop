<div class="bg-white pb-5 shadow rounded-md hover:shadow-md overflow-hidden">
    <div class="bg-gray-100 py-10 h-[300px]">

        <img src="{{ $product->images[0]['src'] }}" alt="Sample Image" class=" object-cover w-[100%] h-full">
    </div>
    <div class="p-3">
        <h1 class=" text-black font-normal text-xl mb-3 ">{{ $product->name }}</h1>
        <p class="text-gray-500">{{ $product->price }}</p>
    </div>
</div>
