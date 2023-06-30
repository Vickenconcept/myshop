<x-app-layout>
    <!-- @section('breadcrumbs')
    <li class="list">
        <a href="{{ route('products.index') }}">Shop</a>
    </li>
    <li class="list active">Create</li>
    @endsection -->

    <x-notification />
    <div class="py-12">
        <div class="mx-auto px-3 md:px-6 lg:px-16">
            <div class="lg:w-[90%] w-full mx-auto mb-3 flex items-center justify-between">
                <h1 class="font-semibold text-2xl">New Product</h1>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border py-6 border-gray-200 h-auto lg:w-[90%] w-full mx-auto">
                <form class="w-full lg:px-8 px-4 py-3 my-form" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-2">
                        <div class="col-span-1 flex flex-col mt-1">
                            <x-input-label for="name" :value="__('Item Name')" />
                            <x-text-input id="name" class="mt-1 w-full bg-[#fff] text-xs" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
                        <div class="col-span-1 flex flex-col mt-1">
                            <x-input-label for="category" :value="__('Item Category')" />
                            <x-my-select-input name="category_id" id="category" class="mt-1 text-xs">
                                <option selected disabled></option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id')==$category->id)>{{ $category->name }}</option>
                                @endforeach
                            </x-my-select-input>
                        </div>

                        <div class="md:col-span-2 col-span-1 grid md:grid-cols-3 grid-cols-1 gap-x-6 gap-y-2">
                            <div class="col-span-1 flex flex-col mt-1">
                                <x-input-label for="price" :value="__('Item Price')" />
                                <x-text-input type="text" id="price" class="mt-1 w-full bg-[#fff] text-xs" name="price" :value="old('price')" required />
                                <x-input-error :messages="$errors->get('price')" class="mt-2" />
                            </div>

                            <div class="col-span-1 flex flex-col mt-1">
                                <x-input-label for="discount" :value="__('Discount')" />
                                <x-text-input type="text" id="discount" class="mt-1 w-full bg-[#fff] text-xs" name="discount" :value="old('discount')" />
                                <x-input-error :messages="$errors->get('discount')" class="mt-2" />
                            </div>

                            <div class="col-span-1 flex flex-col mt-1">
                                <x-input-label for="quantity" :value="__('Quantity')" />
                                <x-text-input type="text" id="quantity" class="mt-1 w-full bg-[#fff] text-xs" name="quantity" :value="old('quantity')" />
                                <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                            </div>
                        </div>

                        <div class="md:col-span-2 col-span-1 grid md:grid-cols-3 grid-cols-1 gap-x-6 gap-y-2">
                            <div class="flex flex-col mt-1">
                                <x-input-label for="weight" :value="__('Item Weight')" />
                                <x-text-input type="text" id="weight" class="mt-1 w-full bg-[#fff] text-xs" name="meta[weight]" :value="old('meta[weight]')" />
                            </div>

                            <div class="flex flex-col mt-1">
                                <x-input-label for="size">
                                    Item Size(s) <span class="italic">- separate multiple with comma ","</span>
                                </x-input-label>
                                <x-text-input type="text" id="size" class="mt-1 w-full bg-[#fff] text-xs" name="meta[size]" :value="old('meta[size]')" />
                            </div>

                            <div class="flex flex-col mt-1">
                                <x-input-label for="color">
                                    Item Color(s) <span class="italic">- separate multiple with comma ","</span>
                                </x-input-label>
                                <x-text-input type="text" id="color" class="mt-1 w-full bg-[#fff] text-xs" name="meta[color]" :value="old('meta[color]')" />
                            </div>
                        </div>

                        <div class="flex flex-col md:col-span-2 mt-1">
                            <x-input-label for="markdown-editor" :value="__('Item Description')" />
                            <x-my-textarea name="description" id="markdown-editor" rows="6" class="mt-1 w-full bg-[#fff] text-xs" placeholder="Enter a description for this product to give more details about it.">
                                {!! old('description') !!}</x-my-textarea>
                        </div>

                        <div class="md:col-span-2 mt-1">
                            <x-input-label for="markdown-editor" :value="__('Product Image')" class="mb-2" />
                            <x-dropzone name="images[][src]" data-max-file-size="10M" multiple />
                            <x-input-error :messages="$errors->get('images')" class="mt-2" />
                        </div>

                        <div class="md:col-span-2 col-span-1">
                            <div class="float-right">
                                <x-submit-button>Create</x-submit-button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
