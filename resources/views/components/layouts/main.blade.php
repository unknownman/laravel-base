<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css', 'resource/js/app.js')

    @livewireStyles

</head>

<body class="font-body">
    <x-layouts.main.sidebar />
    <x-layouts.main.header />
    <div class="container mx-auto font-body">
        <div class="min-h-[70vh]">
            {{ $slot }}
        </div>
    </div>
    <x-layouts.main.footer />
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/vue@v0.3.x/dist/livewire-vue.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>

</body>

</html>
