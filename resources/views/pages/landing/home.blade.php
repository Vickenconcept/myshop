<x-landing-layout>
    <!-- hero section -->
    <div class="flex flex-col-reverse sm:flex-row  px-3 py-20 items-center  bg-slate-100 text-sans">
        <div class="w-[100%] md:w-[50%] h-full sm:text-center md:text-left">
            <h1 class="text-5xl font-normal sm:text-7xl">
                A power that runs you
            </h1>
            <p class="text-gray-500 my-12 leading-8">
                Base wheel zoom adoption open manage future-proof for. Start what’s status cost food caught.
            </p>
            <x-landing.main-button class="text-red-500"> {{ __('SHOP NOW') }}</x-landing.main-button>
        </div>
        <div class="w-[100%] h-full relative">
            <img src="{{ cloudinary_url('mainnn_shoeee', []) }}" alt="Sample Image" class="float-right relative object-contain  w-[80%] z-10">
        </div>
    </div>
    <!-- main -->
    <main class="bg-white">
        <section class="mb-20 px-3">
            <!-- card title  -->
            <div class="text-center pt-28 pb-10 ">
                <h1 class=" text-black font-normal text-5xl mb-8 ">Best selling products</h1>
                <p class="text-gray-500">Base wheel zoom adoption open manage future-proof for cost food caught.</p>
            </div>
            <!-- cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"> <!-- card component -->
                <!-- images will go in  here -->
                @foreach ($products as $product)
                <x-card :product="$product" url="{{ route('products.edit', $product)}}" />
                @endforeach

            </div>
        </section>
        <!-- new collection of shoes -->
        <section class="bg-slate-100 px-3 py-28">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="bg-transparent h-[39em]">
                    <h2 class="text-5xl font-normal mb-16">New collection of running shoes</h2>
                    <img src="{{ cloudinary_url('running_shoe', []) }}" alt="Sample Image" class=" object-cover  w-full">
                </div>
                <div class="bg-transparent  h-[39em]">
                    <img src="{{ cloudinary_url('running_shoe', []) }}" alt="Sample Image" class="  object-cover h-full w-full">
                </div>
                <div class="bg-transparent h-[39em]">
                    <img src="{{ cloudinary_url('running_shoe', []) }}" alt="Sample Image" class=" object-cover  w-full">
                    <p class="my-10 text-gray-500">Base wheel zoom adoption open manage future-proof for cost food caught</p>
                    <x-landing.main-button> {{ __('SHOP NOW') }}</x-landing.main-button>
                </div>
            </div>
        </section>

        <!-- cards for more details -->
        <section class="my-20 mx-3 border-b border-gray-400">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="text-center">
                    <i class='bx bx-cart text-6xl font-normal'></i>
                    <h1 class="text-3xl font-normal">
                        Free Shipping
                    </h1>
                    <p class="text-gray-500 my-10 leading-8">
                        On the other hand, we denounce with righteous indignation and dislike men.
                    </p>
                </div>
                <div class="text-center">
                    <i class='bx bx-gift text-6xl font-normal'></i>
                    <h1 class="text-3xl font-normal">
                        Free Shipping
                    </h1>
                    <p class="text-gray-500 my-10 leading-8">
                        On the other hand, we denounce with righteous indignation and dislike men.
                    </p>
                </div>
                <div class="text-center">
                    <i class='bx bx-award text-6xl font-normal'></i>
                    <h1 class="text-3xl font-normal">
                        Free Shipping
                    </h1>
                    <p class="text-gray-500 my-10 leading-8">
                        On the other hand, we denounce with righteous indignation and dislike men.
                    </p>
                </div>
            </div>
        </section>

        <!-- more card section -->
        <section class="mx-3">
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-1">
                <div class="bg-transparent ">
                    <img src="{{ cloudinary_url('running_shoe', ['width' => 600, 'height' => 450]) }}" alt="Sample Image" class="  object-cover w-full">
                </div>
                <div class=" mx-5 lx:mx-20">
                    <h1 class="text-5xl px-10 font-normal text-center">Best deals on running shoes</h1>
                    <div class="grid  grid-cols-2 gap-5 mt-10">
                        <!-- images will go in  here -->
                        @foreach ($products as $product)
                        <x-card :product="$product" url="{{ route('products.edit', $product)}}" />
                        @endforeach

                    </div>
                    <!-- add more -->
                </div>
            </div>
            </div>
        </section>

        <!-- section for  -->
        <section class="bg-blue-300 mt-10 h-[40em] flex  justify-center items-center bg-[url('https://res.cloudinary.com/dhteikrlx/image/upload/puttingOnShoes1_hn7k9y')] bg-no-repeat bg-cover">
            <!-- <section class="bg-blue-300 mt-10 h-[40em]  bg-[url('https://res.cloudinary.com/dhteikrlx/image/upload/v1685804997/puttingOnShoes1_hn7k9y.jpg')] no-repeat "> -->
            <div class="bg-slate-300/25 py-20 px-20 rounded-tl-full rounded-tr-full rounded-br-full rounded-bl-0  mx-5 ">
                <h1 class="font-normal text-5xl">
                    Ultralight comfort canvas
                    <br />solo
                </h1>
                <p class="text-xl my-5">OFFER PRICE</p>
                <p class="text-white "><span class="line-through">$5999.00</span> <span class="text-red-500 text-2xl"> $3125.00</span></p>
                <x-landing.main-button> {{ __('SHOP NOW') }}</x-landing.main-button>
            </div>
        </section>

        <!-- cards -->
        <section class="mb-20 px-3">
            <!-- card title  -->
            <div class="text-center pt-28 pb-10 ">
                <h1 class=" text-black font-normal text-5xl mb-8 ">Best selling products</h1>
                <p class="text-gray-500">Base wheel zoom adoption open manage future-proof for cost food caught.</p>
            </div>
            <!-- cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"> <!-- card component -->
                <!-- images will go in  here -->
                @foreach ($products as $product)
                <x-card :product="$product" url="{{ route('products.edit', $product)}}" />
                @endforeach

            </div>
        </section>
    </main>


</x-landing-layout>