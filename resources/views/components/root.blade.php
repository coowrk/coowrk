<!DOCTYPE html>
{{-- html --}}
<html
	class="h-full"
	lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>

	{{-- head --}}

	<head>
		{{-- meta tags --}}
		<meta charset="utf-8">
		<meta
			content="width=device-width, initial-scale=1"
			name="viewport"
		>
		<meta
			content="ie=edge"
			http-equiv="X-UA-Compatible"
		>

		{{-- title --}}
		<title>{{ config('app.name') }}</title>

		{{-- styles --}}
		@livewireStyles
		@vite('resources/styles/app.css')
	</head>

	{{-- body --}}

	<body class="h-full">
		{{-- content --}}
		{{ $slot }}

		{{-- scripts --}}
		@livewireScripts
	</body>

</html>
