<x-root x-data="{ showMobileMenu: false }">
	{{-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. --}}
	<x-layouts.auth.default.navigation.mobile />

	{{-- Static sidebar for desktop --}}
	<x-layouts.auth.default.navigation.desktop />

	{{-- Right half --}}
	<div class="min-h-screen lg:pl-72">
		{{-- Static sticky-header --}}
		<x-layouts.auth.default.sticky-header />

		{{-- Content --}}
		<main class="relative px-4 py-10 sm:px-6 lg:px-8">
			<header class="-mx-8 -mt-10 mb-10 border-b border-white/5 py-1">
				<!-- Secondary navigation -->
				<nav class="flex overflow-x-auto p-4 sm:px-0">
					<ul
						class="flex min-w-full flex-none gap-x-6 px-4 text-sm font-semibold leading-6 text-gray-400 sm:px-6 lg:px-8"
						role="list"
					>
						<li>
							<a
								class="text-indigo-400"
								href="#"
							>Account</a>
						</li>
						<li>
							<a
								class=""
								href="#"
							>Notifications</a>
						</li>
						<li>
							<a
								class=""
								href="#"
							>Billing</a>
						</li>
						<li>
							<a
								class=""
								href="#"
							>Teams</a>
						</li>
						<li>
							<a
								class=""
								href="#"
							>Integrations</a>
						</li>
					</ul>
				</nav>
			</header>

			@hasSection("title")
				<div class="flex items-center justify-between pb-10">
					<div>
						@yield("breadcrumb")
						<h2 class="text-base/6 font-semibold text-gray-900 dark:text-white">@yield("title")</h2>
					</div>

					@hasSection("button")
						<div>
							@yield("button")
						</div>
					@endif
				</div>
			@endif

			{{ $slot }}
		</main>
	</div>
</x-root>
