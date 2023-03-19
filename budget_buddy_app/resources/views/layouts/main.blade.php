<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Budget Buddy</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
<body class="bg-slate-800 box-border m-0 p-0 grid grid-rows-1">
    <main class="w-full bg-slate-500 p-0 mx-0">
    <x-nav/>
    @yield('content')

    <main/>
    @vite(['resources/js/app.js'])
</body>
</html>
