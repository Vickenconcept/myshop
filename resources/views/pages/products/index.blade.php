<x-app-layout>
    <div class="px-20 py-10 font-sans">
        <div class="flex flex-row justify-between pt-5 pb-3">
            <div class="text-gray-700 text-2xl font-semibold ">Shop</div>
            <div class="">
                <a class="bg-blue-700 px-4 py-2 ml-1 rounded-md text-white">Categories</a>
                <a href="{{ route('products.create') }}" class="bg-blue-700 px-4 py-2 ml-1 rounded-md text-white">Add New Product</a>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 bg-white rounded-md py-20 px-10">
            <div>
                <!-- <x-card :url="`{{ cloudinary_url('running_shoe') }}`" :productName="'Walking-tennis shoes'" :price="'$330.00 - $510.00'" /> -->

            </div>

            <div x-data="{imageSrc: '{{ cloudinary_url('running_shoe') }}', productName: 'Walking-tennis shoes' , price:'$330.00 - $510.00'}">
                <div>
                    <x-card x-data="{imageSrc, productName, price}" x-data="{productName: productName, price: price}"></x-card>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>