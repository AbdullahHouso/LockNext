<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1200, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


    <title>LockNext Admin Panel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-row font-sans antialiased h-screen w-[1200px] md:w-full mx-auto overscroll-none overflow-hidden">
<x-sidebar/>
<div class="w-full bg-neutral-100 flex flex-col h-full">
    <x-header/>
    <div class="p-5 flex-1 overflow-y-auto">
        {{ $slot }}
    </div>
</div>
</body>
</html>
