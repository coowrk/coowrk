<!DOCTYPE html>
{{-- html --}}
<html>

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
		<style>
			body {
				font-family: 'Inter';
				font-weight: 400;
				padding: 96px;
			}

			@font-face {
				font-family: "Inter";
				src: url('{{ resource_path('fonts/Inter/Inter-Thin.ttf') }}') format("truetype");
				font-weight: 100;
				font-style: normal;
			}

			@font-face {
				font-family: "Inter";
				src: url('{{ resource_path('fonts/Inter/Inter-ExtraLight.ttf') }}') format("truetype");
				font-weight: 200;
				font-style: normal;
			}

			@font-face {
				font-family: "Inter";
				src: url('{{ resource_path('fonts/Inter/Inter-Light.ttf') }}') format("truetype");
				font-weight: 300;
				font-style: normal;
			}

			@font-face {
				font-family: "Inter";
				src: url('{{ resource_path('fonts/Inter/Inter-Regular.ttf') }}') format("truetype");
				font-weight: 400;
				font-style: normal;
			}

			@font-face {
				font-family: "Inter";
				src: url('{{ resource_path('fonts/Inter/Inter-Medium.ttf') }}') format("truetype");
				font-weight: 500;
				font-style: normal;
			}

			@font-face {
				font-family: "Inter";
				src: url('{{ resource_path('fonts/Inter/Inter-SemiBold.ttf') }}') format("truetype");
				font-weight: 600;
				font-style: normal;
			}

			@font-face {
				font-family: "Inter";
				src: url('{{ resource_path('fonts/Inter/Inter-Bold.ttf') }}') format("truetype");
				font-weight: 700;
				font-style: normal;
			}

			@font-face {
				font-family: "Inter";
				src: url('{{ resource_path('fonts/Inter/Inter-ExtraBold.ttf') }}') format("truetype");
				font-weight: 800;
				font-style: normal;
			}

			@font-face {
				font-family: "Inter";
				src: url('{{ resource_path('fonts/Inter/Inter-Black.ttf') }}') format("truetype");
				font-weight: 900;
				font-style: normal;
			}

			.font-thin {
				font-weight: 100
			}

			.font-extralight {
				font-weight: 200
			}

			.font-light {
				font-weight: 300
			}

			.font-normal {
				font-weight: 400
			}

			.font-medium {
				font-weight: 500
			}

			.font-semibold {
				font-weight: 600
			}

			.font-bold {
				font-weight: 700
			}

			.font-extrabold {
				font-weight: 800
			}

			.font-black {
				font-weight: 900
			}
		</style>
	</head>

	{{-- body --}}

	<body class="text-sm/4">
		{{-- content --}}
		{{ $slot }}
	</body>

</html>
