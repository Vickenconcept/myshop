<x-app-layout>
    <x-notification />
    <div class="pl-10 md:px-20 py-10 font-sans">
        <div class="flex flex-col sm:flex-row  justify-between  pt-5 pb-3">
            <div class="text-gray-700 text-2xl font-semibold pb-3 ">Shop</div>
            <div class="" x-data="{ isOpen: false}">
                <a type="button" class="bg-blue-700 px-4 py-2 ml-1 rounded-md cursor-pointer text-white my-1 " x-on:click="isOpen = true">Categories</a>
                <a type="button" href="{{ route('products.create') }}" class="bg-blue-700 px-4 py-2 ml-1 my-1 rounded-md text-white">Add New Product</a>
                <!-- modal -->
                <x-landing.my-modal>
                    <x-slot name="title">
                        Categories
                    </x-slot>
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 py-5">
                            @foreach ($categories as $category)
                            <h2 class="text-gray-700 first-letter:uppercase font-semibold text-xs">{{ $category->name }}</h2>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <h2 class="text-gray-700 first-letter:uppercase font-semibold text-md border-t py-3">Add New Category</h2>
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            <div class="col-span-1 flex flex-col my-1">
                                <x-input-label for="category" :value="__('name')" />
                                <x-text-input id="category" class="mt-1 w-full bg-[#fff] text-xs" type="text" name="name" :value="old('name')" required autofocus />
                            </div>
                            <div class="md:col-span-2 col-span-1 pt-5 border-t">
                                <div class="float-left">
                                    <x-submit-button>Submit</x-submit-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </x-landing.my-modal>
                <!-- modal ends here -->
            </div>
        </div>



        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 bg-white rounded-md py-20 px-10">
            @foreach ($products as $product)
            <x-card :product="$product" url="{{ route('products.edit', $product)}}" />
            @endforeach
        </div>
    </div>

</x-app-layout>