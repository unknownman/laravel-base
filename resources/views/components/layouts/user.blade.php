<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="font-sans antialiased " x-data="{
    header: true,
    mini: true,
    side: false,
    message: 'salam'
}">
    <!-- Page Content -->
    <article class="min-h-screen bg-[rgb(248,250,251)] flex flex-row  black">
        <x-layouts.user.mini />
        <x-layouts.user.header />

        <div class="grow flex flex-row bg-slate-100">
            <x-layouts.user.side />
            <main class="grow " :class="[mini && 'ml-16 md:ml-0', header && 'mt-16']">
                {{ $slot }}</main>

        </div>
    </article>
    </div>

    @livewireScripts
</body>

</html>
