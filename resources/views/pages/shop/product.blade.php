<x-landing-layout>
    <div class="p-32">
        <div class="flex">
            <div class="flex-initial w-2/5">
                <p class=""><a href="/">Home</a> / {{ $product->category->name }} / {{ $product->name }}</p>

                <h1 class="py-6 text-xl font-medium">{{ $product->name }}</h1>

                <p><i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    (1 review)
                </p>

                <div x-data="notification" class="pt-6">
                    <div x-data="countdownData" x-init="startCountdown()">
                        <div x-show="remainingTime > 0" class="pb-2 text-2xl text-red-700">
                            <i class='bx bxs-hot'></i> Hot Deal Ends In
                        </div>
                        <div>
                            <span x-text="formatTime(remainingTime)" style="word-spacing: 60px;" class="bg-red-100 text-lg text-red-700 py-2 px-2 inline-block"></span>
                        </div>
                        <div x-show="remainingTime <= 0">
                            Hot Deal Expired
                        </div>
                    </div>
                </div>

                <p class="pt-2 text-lg">$330.00 - $510.00</p>
                <div x-data="{ size: null }" class="pt-6">
                    <p class="font-medium text-lg">Shoe size: <span x-text="size"></span></p>
                    <div class="relative pt-4">
                        <div class="flex">
                            <button @click="size = 7" :class="{ 'bg-gray-200': size === 7 }" class="w-[50px] bg-white text-center border py-2 hover:border hover:border-black focus:border-black">7</button>
                            <button @click="size = 8" :class="{ 'bg-gray-200': size === 8 }" class="w-[50px] bg-white text-center border py-2 mx-2 hover:border hover:border-black focus:border-black">8</button>
                            <button @click="size = 9" :class="{ 'bg-gray-200': size === 9 }" class="w-[50px] bg-white text-center border py-2 hover:border hover:border-black focus:border-black">9</button>
                            <button @click="size = 10" :class="{ 'bg-gray-200': size === 10 }" class="w-[50px] bg-white text-center border py-2 mx-2 hover:border hover:border-black focus:border-black">10</button>
                            <button @click="size = 11" :class="{ 'bg-gray-200': size === 11 }" class="w-[50px] bg-white text-center border py-2 hover:border hover:border-black focus:border-black">11</button>
                        </div>
                    </div>
                    <button @click="size = null" x-show="size" class="pt-2">Clear</button>
                </div>

                <p class="pt-8"><span class="line-through">${{ $product->price }}</span> <span class="font-semibold px-2 text-lg tracking-widest">${{ $product->discount }}</span></p>
                <p class="py-4">Hurry up!! only four items left</p>
                <p class="font-semibold text-base">Quantity</p>
                <div class="w-5/6">
                    <div class="flex justify-between py-4 ">
                        <div class="h-[50px] w-[80px] border relative border-black">
                            <div x-data="{ count: 0 }" class="flex items-center justify-between h-full px-2">
                                <button>
                                    <i @click="count = count > 0 ? count - 1 : count " class='bx bx-minus'></i>
                                </button>
                                <span x-text="count" class="px-2"></span>
                                <button>
                                    <i @click="count = count + 1" class='bx bx-plus cursor-pointer'></i>
                                </button>
                            </div>
                        </div>
                        <p class="px-32 py-3 border border-black">Add to Cart</p>
                    </div>
                    <button class="bg-black text-white py-4 w-full">Buy Now</button>
                </div>
                <p class="pt-6"><span class="font-medium">Estimated Delievery: </span>Within 5 to 7 days</p>
                <p class="pt-2 pb-6 border-b border-b-gray-300"><span class="font-medium">Free shipping: </span>On orders over $1499 and above</p>

                <div class="grid grid-cols-2 pt-6">
                    <div class="col-span-1">
                        <p><span class="font-medium">SKU: </span>WTS20015</p>
                    </div>
                    <div class="col-span-1 sm:pb-6">
                        <p><span class="font-medium">Categories: </span>Best selling products, New Products, Running Shoes</p>
                    </div>
                    <div class="col-span-2 bg-gray-300/50">
                        <div class="mx-auto w-2/3 text-center pb-6">
                            <p class="pt-6">Online payment option</p>
                            <i class='bx bxl-visa text-6xl font-normal mr-2'></i>
                            <i class="inline-block text-start">American Express</i>
                            <i class='bx bxl-mastercard text-6xl font-normal '></i>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{ displayedImage: '{{ $product->images[0]['src'] }}', images: [@foreach ($product->images as $image) `{{ $image['src'] }}`, @endforeach],
                        activeIndex: 0}" class="flex-initial w-3/5 flex justify-center items-start">
                <div class="flex-1">
                    <img :src="displayedImage" alt="Sample Image" class="object-cover transition-opacity duration-500">
                </div>
                <div class="mt-64 px-20">
                    <template x-for="(image, index) in images" :key="index">
                        <div @click="displayedImage = image; activeIndex = index" :class="{'bg-black': activeIndex === index}" class="p-1 rounded-lg border border-black m-2 cursor-pointer"></div>
                    </template>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-white p-32">
        <div class="flex text-xl border-b border-b-gray-300">
            <a href="#">
                <p class="bg-black text-white px-4 py-2">Description</p>
            </a>
            <a href="#">
                <p class="px-6 py-2 hover:mx-2 hover:bg-black hover:text-white">Additional information</p>
            </a>
            <a href="#">
                <p class="px-4 py-2 hover:bg-black hover:text-white">Reviews (1)</p>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-5 gap-8 py-8">
            @foreach ($product->images as $image)
            <div class="col-span-1 bg-gray-100 py-16 px-10">
                <img src="{{ $image['src'] }}" alt="Sample Image" class="object-cover h-[200px]">
            </div>
            @endforeach
            <div class="col-span-3">
                <h1 class="font-medium text-xl">Product details</h1>
                <P class="leading-loose">{{ $product->description }}</P>
            </div>
        </div>

        <div>
            <h1 class="font-medium text-xl">Related Products</h1>
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 pt-4">
                <x-card :product="$product" url="{{ route('shop.product', $product)}}" />
                <x-card :product="$product" url="{{ route('shop.product', $product)}}" />
                <x-card :product="$product" url="{{ route('shop.product', $product)}}" />
                <x-card :product="$product" url="{{ route('shop.product', $product)}}" />
            </div>
        </div>
    </div>
</x-landing-layout>
