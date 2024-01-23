<!DOCTYPE html>
<html class="h-full"
	lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	{{-- Meta data --}}
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1"
		name="viewport">

	{{-- Title --}}
	<title>{{ config('app.name') }}</title>

	{{-- Tailwind Styles --}}
	@vite('resources/css/app.css')

	{{-- Livewire Styles --}}
	@livewireStyles
</head>

<body class="h-full bg-zinc-900 antialiased">
	<livewire:modal />

	{{-- Content --}}
	@yield('content')

	{{-- Livewire Scripts --}}
	@livewireScripts
</body>

</html>
