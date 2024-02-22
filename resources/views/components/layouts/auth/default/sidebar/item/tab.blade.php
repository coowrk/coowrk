@if (Route::has($route))
	<li>
		<a
			@class([
				'group flex gap-x-3 rounded-lg p-2 text-sm/6 font-semibold',
				'text-gray-500 hover:text-gray-900 dark:text-zinc-500 dark:hover:text-white' => !Route::is(
					$routeIs . '.*'),
				'bg-black/[3%] dark:bg-white/[3%] text-gray-900 dark:text-white' => Route::is(
					$routeIs . '.*'),
			])
			href="{{ route($route) }}"
			wire:navigate
		>
			{{ $slot }}
		</a>
	</li>
@endif
