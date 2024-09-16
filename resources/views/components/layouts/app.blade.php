<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	{{-- meta --}}
	<meta charset="utf-8">

	<meta
		content="{{ config('app.name') }}"
		name="application-name"
	>
	<meta
		content="{{ csrf_token() }}"
		name="csrf-token"
	>
	<meta
		content="width=device-width, initial-scale=1"
		name="viewport"
	>

	{{-- title --}}
	<title>{{ config('app.name') }}</title>

	{{-- alpine cloak --}}
	<style>
		[x-cloak] {
			display: none !important;
		}
	</style>

	{{-- styles --}}
	@filamentStyles
	@vite('resources/css/app.css')
</head>

<body class="antialiased">
	{{-- content --}}
	{{ $slot }}

	{{-- notifications --}}
	@livewire('notifications')

	{{-- scripts --}}
	@filamentScripts
	@vite('resources/js/app.js')
</body>

</html>
