<x-landing-layout>
    <div class="bg-white">
        <div class="px-20 flex items-center border-b border-b-black">
            <div class="flex-1">
                <h1 class="text-5xl">Reach out to us</h1>

                <div>
                    <h1 class="text-2xl pt-8 pb-4">By Address</h1>
                    <p class="text-gray-500">Please reach us: 121 King St, Melbourne VIC 3000, Australia</p>
                </div>
                <div>
                    <h1 class="text-2xl pt-8 pb-4">By Email</h1>
                    <p class="text-gray-500">Please email us and we’ll get back to you within 24 hours: info@example.com</p>
                </div>
                <div>
                    <h1 class="text-2xl pt-8 pb-4">By Phone</h1>
                    <p class="text-gray-500">Call our store: 888 123 4567</p>
                </div>
            </div>
            <div class="flex-1 border-l border-l-black py-20">
                <div class="max-w-md mx-auto">
                    <h1 class="py-8 text-5xl">Send Your Request</h1>

                    <form action="" method="post" class="w-full">
                        <div>
                            <x-text-input placeholder="Name" class="w-full p-2 border border-gray-400 rounded-none focus:outline-none focus:border focus:border-gray-400" />
                        </div>
                        <div class="py-4">
                            <x-text-input type="email" placeholder="Email" class="w-full p-2 border border-gray-400 rounded-none focus:outline-none focus:border focus:border-gray-400" />
                        </div>
                        <div>
                            <x-text-input placeholder="Phone" class="w-full p-2 border border-gray-400 rounded-none focus:outline-none focus:border focus:border-gray-400" />
                        </div>
                        <div class="py-4">
                            <x-my-textarea placeholder="Message" class="w-full p-2 border border-gray-400 rounded-none focus:ring-0 focus:outline-none focus:border focus:border-gray-400" />
                        </div>
                        <div>
                            <button class="text-center text-white bg-black py-2 w-full">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="p-20">
            <div class="py-10">
                <h1 class="text-center text-5xl">Our Stores</h1>
            </div>

            <div class="flex space-x-6">
                <div class="flex-1">
                    <div>
                        <img src="https://res.cloudinary.com/digmtdarl/image/upload/v1689971331/mystore/products/shoes/ryan-plomp_iqasuv.jpg" alt="Sample Image1" class="h-[320px] w-full object-cover">
                    </div>
                    <p class="py-4 text-amber-600">New York</p>
                    <p class="text-2xl">Thrift</p>
                    <p class="py-4">There are many variations of passages of Lorem available denounce </p>
                </div>
                <div class="flex-1">
                    <div>
                        <img src="https://res.cloudinary.com/digmtdarl/image/upload/v1689971331/mystore/products/shoes/ryan-plomp_iqasuv.jpg" alt="Sample Image1" class="h-[320px] w-full object-cover">
                    </div>
                    <p class="py-4 text-amber-600">Washighton</p>
                    <p class="text-2xl">Shophouse</p>
                    <p class="py-4">On the other hand, we denounce with righteous indignation </p>
                </div>
                <div class="flex-1">
                    <div>
                        <img src="https://res.cloudinary.com/digmtdarl/image/upload/v1689971331/mystore/products/shoes/ryan-plomp_iqasuv.jpg" alt="Sample Image1" class="h-[320px] w-full object-cover">
                    </div>
                    <p class="py-4 text-amber-600">Las Vegas</p>
                    <p class="text-2xl">Leisurewear</p>
                    <p class="py-4">Righteous indignation and dislike we denounce with righteous</p>
                </div>
            </div>
        </div>
    </div>
</x-landing-layout>
