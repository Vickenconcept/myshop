<div x-data="{toggle: false}" class="bg-blue-700 px-5 pt-20 fixed h-[100vh] transition-x duration-700 font-sans shadow-md z-50" x-bind:class="toggle ? 'w-1/4' : 'w-0'" @click.away="toggle = false">
    <button class="bg-white shadow rounded-xl px-3 py-2 transition-x duration-700 float-right top-10 absolute -right-5 cursor-pointer " @click="toggle = !toggle" >
    <i class="bx text-md" x-bind:class="toggle ? 'bx-left-arrow-alt': 'bx-right-arrow-alt'"></i>
    </button>
    <div class="overflow-hidden ">
        <ul>
            <li>
                <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer rounded hover:text-white  p-2 w-full {{ request()->routeIs('dashboard') ? 'active  bg-red-500' : '' }}" >
                    Dashboard
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer rounded hover:text-white  p-2 w-full {{ request()->routeIs('events') ? 'active  bg-red-500' : '' }}" >
                    Events
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer rounded hover:text-white  p-2 w-full {{ request()->routeIs('photo-gallery') ? 'active  bg-red-500' : '' }}" >
                    Photo Gallery
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('products.index')" class="text-white cursor-pointer rounded hover:text-white  p-2 w-full {{ request()->routeIs('products.index') ? 'active  bg-red-500' : '' }}" >
                    Shop
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer rounded hover:text-white  p-2 w-full {{ request()->routeIs('blog-post') ? 'active  bg-red-500' : '' }}" >
                    Blog POst
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer rounded hover:text-white  p-2 w-full {{ request()->routeIs('team') ? 'active  bg-red-500' : '' }}" >
                    Team
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer rounded hover:text-white  p-2 w-full {{ request()->routeIs('learning') ? 'active  bg-red-500' : '' }}" >
                    Learning
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('dashboard')" class="text-white cursor-pointer rounded hover:text-white  p-2 w-full {{ request()->routeIs('products') ? 'active  bg-red-500' : '' }}" >
                    Products
                </x-nav-link>
            </li>
        </ul>
    </div>
</div>
