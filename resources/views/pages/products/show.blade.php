<x-landing-layout>

    <div class="flex  px-5 pt-28 items-center  bg-slate-100 w-full">
        <section class="bg-white  grid grid-cols-1 sm:grid-cols-2 w-full rounded-lg">
            <div class="flex md:flex-row flex-col-reverse w-full">
                <div class=" w-full md:w-1/5 p-3">
                    <div class="flex flex-row md:flex-col justify-between w-full h-full gap-3">
                        <div class="bg-blue-500 w-1/3 md:w-full md:h-1/3 rounded-lg overflow-hidden shadow"><img src="{{ $product->images[0]['src']  }}" alt="" class=" object-cover w-[100%] h-full"></div>
                        <div class="bg-blue-500 w-1/3 md:w-full md:h-1/3 rounded-lg overflow-hidden shadow"><img src="{{ $product->images[0]['src']  }}" alt="" class=" object-cover w-[100%] h-full"></div>
                        <div class="bg-blue-500 w-1/3 md:w-full md:h-1/3 rounded-lg overflow-hidden shadow"><img src="{{ $product->images[0]['src']  }}" alt="" class=" object-cover w-[100%] h-full"></div>
                    </div>
                </div>
                <div class="w-full md:w-4/5 p-3">
                    <div class=" w-full  h-[45dvh] overflow-hidden rounded-lg">
                        <img src="{{ $product->images[0]['src']  }}" alt="" class=" object-cover w-[100%] h-full">
                    </div>
                </div>
            </div>
            <div class="p-3">
                <div>
                <h1 class="font-bold text-2xl text-gray-700">{{ $product->name }}</h1>
                </div>

            </div>

        </section>

    </div>

</x-landing-layout>