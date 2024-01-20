<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Meta data --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Title --}}
    <title>{{ App::config('app.name') }}</title>

    {{-- Tailwind Styles --}}
    @vite('resources/css/app.css')

    {{-- Livewire Styles --}}
    @livewireStyles
</head>

<body class="antialiased">

    {{-- Livewire Scripts --}}
    @livewireScripts
</body>

</html>
