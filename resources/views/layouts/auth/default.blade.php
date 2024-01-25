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
			<main class="py-10">
				@yield('content')
			</main>
		</div>
	</div>
@endsection
