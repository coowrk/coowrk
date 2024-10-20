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
	<title>Document</title>

	{{-- styles --}}
	@vite(['resources/styles/app.css', 'resources/scripts/app.js'])
	@livewireStyles
</head>

<body class="h-full antialiased dark:bg-zinc-900 lg:bg-zinc-100 dark:lg:bg-zinc-950">
	{{-- content --}}
	{{ $slot }}

	{{-- scripts --}}
	@livewireScripts
</body>

</html>
