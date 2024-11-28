<!DOCTYPE html>
<html
	class="h-full"
	lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>

<head>
	{{-- meta tags --}}
	<meta charset="UTF-8">
	<meta
		content="width=device-width, initial-scale=1.0"
		name="viewport"
	>
	<meta
		content="ie=edge"
		http-equiv="X-UA-Compatible"
	>

	{{-- title --}}
	<title>{{ config('app.name') }}</title>

	{{-- styles --}}
	@vite('resources/scripts/app.js')
	@livewireStyles
	@fluxStyles
</head>

<body {{ $attributes->merge(['class' => 'h-full antialiased']) }}>
	{{-- content --}}
	{{ $slot }}

	{{-- scripts --}}
	@fluxScripts
	@livewireScripts
</body>

</html>
