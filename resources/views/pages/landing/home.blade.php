<x-landing-layout>
    <div>
        <div class="flex flex-col-reverse sm:flex-row py-20 px-32 items-center  bg-slate-100 text-sans">
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

        <main class="bg-white">
            <section class="mb-20 px-32">
                <div class="text-center pt-28 pb-10 ">
                    <h1 class=" text-black font-normal text-5xl mb-8 ">Best selling products</h1>
                    <p class="text-gray-500">Base wheel zoom adoption open manage future-proof for cost food caught.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach ($products as $product)
                    <x-card :product="$product" url="{{ route('shop.product', $product)}}" />
                    @endforeach
                </div>
            </section>

            <section>
                <div class="flex px-32 space-x-4 bg-slate-100 py-24">
                    <div class="flex-1">
                        <div class="h-full flex flex-col justify-between">
                            <h2 class="text-4xl md:text-5xl font-normal pb-16">New collection of running shoes</h2>
                            <img src="https://res.cloudinary.com/digmtdarl/image/upload/v1689971331/mystore/products/shoes/ryan-plomp_iqasuv.jpg" alt="Sample Image1" class="h-[320px] w-full object-cover">
                        </div>
                    </div>
                    <div class="flex-1">
                        <img src="https://res.cloudinary.com/digmtdarl/image/upload/v1689971330/mystore/products/shoes/joseph-barrientos_kupm6z.jpg" alt="Sample Image2" class="h-full w-full object-cover">
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-col">
                            <div>
                                <img src="https://res.cloudinary.com/digmtdarl/image/upload/v1689971620/mystore/products/shoes/bruno-nascimento_zsj8sy.jpg" alt="Sample Image3" class="h-[320px] w-full object-cover">
                            </div>
                            <div class="py-8 leading-loose">
                                <p class="text-gray-500">Base wheel zoom adoption open manage future-proof for cost food caught</p>
                            </div>
                            <div class="">
                                <x-landing.main-button>{{ __('SHOP NOW') }}</x-landing.main-button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="my-20 px-32 border-b border-gray-400">
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

            <section class="px-32">
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-1">
                    <div class="bg-transparent ">
                        <img src="https://res.cloudinary.com/digmtdarl/image/upload/v1685311764/samples/bike.jpg" alt="Sample Image" class="object-cover w-full">
                    </div>
                    <div class=" mx-5 lx:mx-20">
                        <h1 class="text-5xl px-10 font-normal text-center">Best deals on running shoes</h1>
                        <div class="grid  grid-cols-2 gap-5 mt-10">
                            @foreach ($products as $product)
                            <x-card :product="$product" url="{{ route('shop.product', $product)}}" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-blue-300 mt-10 h-[40em] flex  justify-center items-center bg-[url('https://res.cloudinary.com/dhteikrlx/image/upload/puttingOnShoes1_hn7k9y')] bg-no-repeat bg-cover">
                <div class="bg-slate-300/25 py-20 px-20 rounded-tl-full rounded-tr-full rounded-br-full rounded-bl-0  mx-5 ">
                    <h1 class="font-normal text-5xl">
                        Ultralight comfort canvas
                        <br />solo
                    </h1>
                    <p class="text-xl my-5">OFFER PRICE</p>
                    <p class="text-white "><span class="line-through">$5999.00</span> <span class="text-red-500 text-2xl"> $3125.00</span></p>
                    <x-landing.main-button class="mt-4"> {{ __('SHOP NOW') }}</x-landing.main-button>
                </div>
            </section>

            <section class="py-24 px-32">
                <div class="text-center pb-10 ">
                    <h1 class=" text-black font-normal text-5xl mb-8 ">Best selling products</h1>
                    <p class="text-gray-500">Base wheel zoom adoption open manage future-proof for cost food caught.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach ($products as $product)
                    <x-card :product="$product" url="{{ route('shop.product', $product)}}" />
                    @endforeach
                </div>
            </section>
        </main>
    </div>

</x-landing-layout>
