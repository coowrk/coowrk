<!DOCTYPE html>
<html class="h-full" data-mode="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Meta data --}}
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    {{-- Title --}}
    <title>{{ config('app.name') }}</title>

    {{-- Tailwind Styles --}}
    @vite('resources/css/app.css')

    {{-- Livewire Styles --}}
    @livewireStyles
</head>

<body class="h-full antialiased bg-white dark:bg-zinc-900">
    {{-- Layout --}}
    @yield('layout')

    {{-- Livewire Scripts --}}
    @livewireScripts
</body>

</html>
