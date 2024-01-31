@extends('root')

@section('layout')
	<div>
		{{-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. --}}
		@include('layouts.auth.default.navigation.mobile')

		{{-- Static sidebar for desktop --}}
		@include('layouts.auth.default.navigation.desktop')

		{{-- Right half --}}
		<div class="lg:pl-72">
			{{-- Static sticky-header --}}
			@include('layouts.auth.default.sticky-header')

			{{-- Content --}}
			<main class="relative h-[theme(full)] px-4 py-10 sm:px-6 lg:px-8">
				@yield('breadcrumb')
				@yield('title')
				@yield('content')
			</main>
		</div>
	</div>
@endsection
