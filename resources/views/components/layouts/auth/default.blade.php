<x-root x-data="{ showMobileMenu: false }">
	{{-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. --}}
	<x-layouts.auth.default.sidebar.mobile />

	{{-- Static sidebar for desktop --}}
	<x-layouts.auth.default.sidebar.desktop />

	{{-- Right half --}}
	<div class="min-h-screen lg:pl-72">
		{{-- Static sticky-header --}}
		<x-layouts.auth.default.sticky_header />

		{{-- Content --}}
		<main class="relative px-4 py-10 sm:px-6 lg:px-8">
			{{-- Breadcrumb --}}
			@hasSection('breadcrumb')
				@yield('breadcrumb')
			@endif

			{{-- Secondary navigation --}}
			@hasSection('secondary_navigation')
				@yield('secondary_navigation')
			@endif

			{{-- Page title & button --}}
			@hasSection('title')
				<div class="flex items-center justify-between pb-10">
					<h2 class="text-lg/6 font-semibold text-gray-900 dark:text-white sm:text-base/6">@yield('title')</h2>

					@hasSection('button')
						<div>
							@yield('button')
						</div>
					@endif
				</div>
			@endif

			{{-- Content --}}
			{{ $slot }}
		</main>
	</div>
</x-root>
