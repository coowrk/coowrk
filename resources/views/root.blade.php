<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Meta data --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Title --}}
    <title>{{ config('app.name') }}</title>

    {{-- Tailwind Styles --}}
    @vite('resources/css/app.css')

    {{-- Livewire Styles --}}
    @livewireStyles
</head>

<body class="h-full antialiased bg-zinc-900">
    {{-- Content --}}
    @yield('content')

    {{-- Livewire Scripts --}}
    @livewireScripts
</body>

</html>
