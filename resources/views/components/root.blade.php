<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">

	<head>
		{{-- Meta data --}}
		<meta charset="UTF-8">
		<meta
			content="width=device-width, initial-scale=1.0"
			name="viewport"
		>
		<meta
			content="ie=edge"
			http-equiv="X-UA-Compatible"
		>

		{{-- Title --}}
		<title>{{ config("app.name") }}</title>

		{{-- Tailwind Styles --}}
		@vite("resources/css/app.css")

		{{-- Livewire Styles --}}
		@livewireStyles
	</head>

	<body>
		{{-- Layout --}}
		{{ $slot }}

		{{-- Livewire Scripts --}}
		@livewireScripts
	</body>

</html>
