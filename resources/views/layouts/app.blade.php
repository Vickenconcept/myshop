<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-oswald antialiased">
    <div class="flex flex-row">
        <div class="min-h-screen bg-gray-100 w-full  ml-0 sm:ml-auto">
            <div class="flex flex-row">
                <x-admin-side-bar />
                <main class=" w-full">
                    <header class="w-full flex flex-row justify-between px-20 bg-gray-200 font-sans py-2">
                        <a href="{{ route('dashboard') }}">
                            <h1 class="text-left my-auto font-semibold text-gray-700">Admin Dashboard</h1>
                        </a>
                        <div class="">
                            <div class="flex flex-row">

                                <div>
                                    <div id="dropdownHoverDiv" data-dropdown-toggle="adminSupport" data-dropdown-trigger="hover" class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center cursor-pointer">
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
                                                <x-dropdown-link href="{{ route('logout') }}">
                                                    <div class="flex items-center gap-2">
                                                        <i class='bx bx-log-out text-error'></i>
                                                        Logout
                                                    </div>
                                                </x-dropdown-link>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
</body>

</html>
