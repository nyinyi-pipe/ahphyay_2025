<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AhPhyay') }} @yield('title', '')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
         crossorigin="anonymous"></script>

    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="bg-custom-gray-100 w-[100vw] overflow-hidden">

        <div x-data="{ scrolled: false }" x-init="scrolled = window.scrollY > 0" @scroll.window="scrolled = window.scrollY > 0"
            :class="scrolled ? 'shadow-xl bg-custom-gray-100' : 'bg-custom-gray-100'"
            class="w-full py-4 justify-center sticky top-0 transition-shadow duration-400 z-50 hidden md:flex">
            <div class="alert-text-red-600">
                Ongoing – Development Level
            </div>
        </div>

        <div class="flex flex-col md:flex-row min-h-screen w-full">
            <div class="sticky top-16 h-[80vh] hidden md:block">
                @include('layouts.navigation')
            </div>

            <div class="md:hidden block sticky top-0 shadow z-50 background-white">
                @include('layouts.mobile-nav')

            </div>
            <main class="w-[100vw] overflow-auto">
                @yield('content')
            </main>
        </div>
    </div>
    </div>


    </div>

    @yield('script')

    <!-- Script Tag Here -->
    @livewireScripts


</body>

</html>
