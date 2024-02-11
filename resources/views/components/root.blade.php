<!DOCTYPE html>
<html
	class="h-full antialiased"
	data-mode="dark"
	lang="{{ str_replace("_", "-", app()->getLocale()) }}"
>

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
		<title>@yield("title", config("app.name"))</title>

		{{-- Tailwind Styles --}}
		@vite("resources/css/app.css")

		{{-- Livewire Styles --}}
		@livewireStyles
	</head>

	<body
		{{ $attributes }}
		class="h-full bg-gray-50 dark:bg-zinc-950/95"
	>
		{{-- Layout --}}
		{{ $slot }}

		{{-- Livewire Scripts --}}
		@livewireScripts
	</body>

</html>
