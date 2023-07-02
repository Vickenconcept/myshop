<div x-data="{toggle: false}" class="fixed  top-0 left-0 w-10 h-[100vh]  bg-gray-100/50" x-bind:class="toggle ? ' w-full sm:w-10 ' : 'w-10'">
    <div class="bg-blue-700 px-5 pt-20 fixed h-full  transition-x duration-700 font-sans shadow-md z-50" x-bind:class="toggle ? 'w-1/2 sm:w-1/4 ' : 'w-0'" @click.away="toggle = false">
        <button class="bg-white shadow rounded-xl px-3 py-2 transition-x duration-700 float-right top-10 absolute -right-5 cursor-pointer " @click="toggle = !toggle">
            <i class="bx text-md" x-bind:class="toggle ? 'bx-left-arrow-alt': 'bx-right-arrow-alt'"></i>
        </button>
        <div class="overflow-hidden ">
            <ul>
                <li class="my-4">
                    <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer text-xl p-3 hover:bg-gray-700/25 transition duration-300 rounded hover:text-white hover:border-none border-none w-full {{ request()->routeIs('dashboard') ? 'active  bg-gray-700/25' : '' }}">
                        Dashboard
                    </x-nav-link>
                </li>
                <li class="my-4">
                    <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer text-xl p-3 hover:bg-gray-700/25 transition duration-300 rounded hover:text-white hover:border-none border-none w-full {{ request()->routeIs('events') ? 'active  bg-gray-700/25' : '' }}">
                        Events
                    </x-nav-link>
                </li>
                <li class="my-4">
                    <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer text-xl p-3 hover:bg-gray-700/25 transition duration-300 rounded hover:text-white hover:border-none border-none w-full {{ request()->routeIs('photo-gallery') ? 'active  bg-gray-700/25' : '' }}">
                        Photo Gallery
                    </x-nav-link>
                </li>
                <li class="my-4">
                    <x-nav-link :href="route('products.index')" class="text-white cursor-pointer text-xl p-3 hover:bg-gray-700/25 transition duration-300 rounded hover:text-white hover:border-none border-none w-full {{ request()->routeIs('products.index') ? 'active  bg-gray-700/25' : '' }}">
                        Shop
                    </x-nav-link>
                </li>
                <li class="my-4">
                    <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer text-xl p-3 hover:bg-gray-700/25 transition duration-300 rounded hover:text-white hover:border-none border-none w-full {{ request()->routeIs('blog-post') ? 'active  bg-gray-700/25' : '' }}">
                        Blog POst
                    </x-nav-link>
                </li>
                <li class="my-4">
                    <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer text-xl p-3 hover:bg-gray-700/25 transition duration-300 rounded hover:text-white hover:border-none border-none w-full {{ request()->routeIs('team') ? 'active  bg-gray-700/25' : '' }}">
                        Team
                    </x-nav-link>
                </li>
                <li class="my-4">
                    <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer text-xl p-3 hover:bg-gray-700/25 transition duration-300 rounded hover:text-white hover:border-none border-none w-full {{ request()->routeIs('learning') ? 'active  bg-gray-700/25' : '' }}">
                        Learning
                    </x-nav-link>
                </li>
                <li class="my-4">
                    <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer text-xl p-3 hover:bg-gray-700/25 transition duration-300 rounded hover:text-white hover:border-none border-none w-full {{ request()->routeIs('products') ? 'active  bg-gray-700/25' : '' }}">
                        Products
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </div>

</div>