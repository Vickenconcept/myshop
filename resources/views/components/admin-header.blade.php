<header class="w-full flex flex-row justify-between px-20 bg-gray-200 font-sans py-2">
    <div class="py-3">
        <a href="{{ route('dashboard') }}" class="text-left py-2 font-semibold text-gray-700">Admin Dashboard</a>
        <a href="{{ route('products.index') }}" class="text-red-400 {{ request()->routeIs('products.index') ? '' : 'hidden' }}"><span class="text-md font-thin text-gray-500"> / </span>shop</a>
        <a href="{{ route('products.create') }}" class="text-red-400 {{ request()->routeIs('products.create') ? '' : 'hidden' }}"><span class="text-md font-thin text-gray-500"> / </span>Create</a>
        
    </div>
    <div class="">
        <div class="flex flex-row">

            <div>
                <div id="dropdownHoverDiv" data-dropdown-toggle="adminSupport" data-dropdown-trigger="hover" class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-1 text-center inline-flex items-center cursor-pointer">
                    <div class="w-10 h-10 bg-blue-900 rounded-full  border  border-gray-300  overflow-hidden mx-3">
                        <img src="{{ cloudinary_url('running_shoe') }}" alt="avatar" class="w-full object-cover">
                    </div>
                    <h1 class="text-gray-700 font-semibold ">Admin Support</h1>
                </div>
                <!-- Dropdown menu -->
                <div id="adminSupport" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverDiv">
                        <li>
                            <x-dropdown-link href="{{ route('profile.edit') }}">
                                <div class="flex items-center gap-2">
                                    <i class='bx bx-user text-secondary-900'></i>
                                    Profile
                                </div>
                            </x-dropdown-link>
                        </li>
                        <li>
                            <div class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <i class='bx bx-log-out text-error'></i>
                                    <button type="submit">Logout</button>
                                </form>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>