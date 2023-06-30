<!-- @props(['url', 'productName', 'price']) -->



<div class="bg-white pb-5 shadow rounded-md hover:shadow-md overflow-hidden">
    <div class="bg-gray-100 py-10 h-[300px]">
        <img x-bind:src="imageSrc" alt="Sample Image" class=" object-cover w-[100%] h-full">
    </div>
    <div class="p-3">
        <h1 class=" text-black font-normal text-xl mb-3 " x-text="productName">Walking-tennis shoes</h1>
        <p class="text-gray-500" x-text="price">$330.00 - $510.00</p>
    </div>
</div>

