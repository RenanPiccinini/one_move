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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center px-4 pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/" class="flex items-center gap-2">
                    <span class="font-syne font-black text-2xl tracking-tighter text-gray-900 dark:text-white">ONE<span class="text-[#FF4D00]">MOVE</span></span>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-5 sm:px-6 py-6 bg-white dark:bg-gray-800 shadow-md overflow-hidden rounded-2xl sm:rounded-xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
