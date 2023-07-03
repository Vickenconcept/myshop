<!-- navbar -->
<nav class="flex flex-col md:flex-row  md:justify-between  bg-white  px-1 fixed top-0 w-full z-20 shadow">
    <div class=" font-semibold text-xl py-[0.8rem] box transition-x duration-300">
        <a href=""><span class="logo-default test-retina-three " id="box"><img alt="logo" src="https://emart.wpthemedemos.com/shoes/wp-content/uploads/sites/18/2023/01/emart-011.webp" srcset="https://emart.wpthemedemos.com/shoes/wp-content/uploads/sites/18/2023/01/emart-011.webp 1x, https://emart.wpthemedemos.com/shoes/wp-content/uploads/sites/18/2023/01/emart-011.webp 2x" width="147" height="31"></span></a>
    </div>

    <div class=" ">
        <ul class="flex flex-col  md:flex-row justify-between">
            <div>
                <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-black font-medium bg-blue-300  p-5  text-center inline-flex items-center" type="button">
                    Demo <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownHover" class="z-20 hidden divide-y divide-gray-100 shadow dark:bg-gray-700 bg-white w-full transition-y ease-out duration-300">
                    <ul class=" text-sm text-gray-700 dark:text-gray-200 grid grid-cols-1 sm:grid-cols-5   border border-y" aria-labelledby="dropdownHoverButton">
                        <li class="py-10 sm:col-span-2 px-3">
                            <img src="{{ cloudinary_url('shoe-section-six-img-01_o6vr4i', []) }}" alt="Sample Image" class=" object-contain  w-full mb-5 ">
                            <div>
                                <h1 class=" text-black font-normal text-xl mb-3 ">New product on market </h1>
                                <p class="text-gray-500">Shop now</p>
                            </div>
                        </li>
                        <li class="py-10  ">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li class="py-10   border border-x">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li class="py-10   ">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                    </ul>
                    <div class="text-end py-4">
                        <span class="text-red-500">Summar Sells 65% off</span> <span>Shop now</span>
                    </div>
                </div>
            </div>
            <!-- second drop down button -->
            <div>
                <button id="dropdownHoverButton2" data-dropdown-toggle="dropdownHover2" data-dropdown-trigger="hover" class="text-black font-medium  p-5  text-center inline-flex items-center" type="button">
                    Demo <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownHover2" class="z-20 hidden divide-y divide-gray-100 shadow dark:bg-gray-700 bg-white w-full transition-y ease-out duration-300">
                    <ul class=" text-sm text-gray-700 dark:text-gray-200 grid grid-cols-1 sm:grid-cols-5   border border-y" aria-labelledby="dropdownHoverButton2">
                        <li class="py-10 sm:col-span-2 px-3">
                            <img src="{{ cloudinary_url('shoe-section-six-img-01_o6vr4', []) }}" alt="Sample Image" class=" object-contain  w-full mb-5 ">
                            <div>
                                <h1 class=" text-black font-normal text-xl mb-3 ">New product on market </h1>
                                <p class="text-gray-500">Shop now</p>
                            </div>
                        </li>
                        <li class="py-10  ">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li class="py-10   border border-x">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li class="py-10   ">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                    </ul>
                    <div class="text-end py-4">
                        <span class="text-red-500">Summar Sells 65% off</span> <span>Shop now</span>
                    </div>
                </div>
            </div>
        </ul>
    </div>

    <div class=" ">
        <div class="hidden sm:flex">
            <x-dropdown>
                <x-slot name="trigger">
                    <i class='bx bx-user px-3 py-3 text-xl cursor-pointer'></i>
                </x-slot>

                <x-slot name="content">
                    <div class="p-3 text-blue-700"></div>
                    @if (Auth::user())
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                    @else
                    <x-dropdown-link :href="route('register')">
                        {{ __('Register') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('login')">
                        {{ __('Login') }}
                    </x-dropdown-link>
                    @endif


                </x-slot>
            </x-dropdown>
        </div>

        <!-- <a href="#">
            <i class='bx bx-search-alt-2 px-3 py-3 text-xl'></i>
        </a>
        <a href="#">
            <i class='bx bx-user px-3 py-3 text-xl'></i>
        </a>
        <a href="#">
            <i class='bx bx-heart px-3 py-3 text-xl'></i>
        </a>
        <a href="#">
            <i class='bx bx-shopping-bag px-3 py-3 text-xl'></i>
        </a> -->
    </div>
</nav>
