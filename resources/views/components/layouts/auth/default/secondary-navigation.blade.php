<header class="-mx-4 -mt-10 mb-10 h-14 sm:-mx-6 lg:-mx-8">
	<div class="border-b border-gray-200 bg-white py-4 dark:border-zinc-800 dark:bg-zinc-900">
		{{-- Secondary navigation --}}
		<nav class="flex overflow-x-auto">
			<ul
				class="flex min-w-full flex-none gap-x-6 px-4 text-sm font-semibold leading-6 text-gray-400 sm:px-6 sm:px-6 lg:px-8"
				role="list"
			>
				@foreach ($tabs as $tab)
					<li>
						<a
							@class([
								'text-gray-500 dark:text-zinc-500' => !Route::is($tab['route']),
								'text-gray-900 dark:text-white' => Route::is($tab['route']),
							])
							href="{{ route($tab['route']) }}"
							wire:navigate
						>
							{{ $tab['title'] }}
						</a>
					</li>
				@endforeach
			</ul>
		</nav>
	</div>
</header>
