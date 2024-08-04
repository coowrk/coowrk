@if ($attributes->has('href') && !$attributes->has('wire:navigate'))
	<a
		{{ $attributes->filter(fn($value, $key) => !in_array($key, ['class'])) }}
		class="{{ $attributes->get('class') }} flex cursor-default items-center justify-center gap-x-2 rounded-lg px-3 py-1.5 text-base/6 font-semibold shadow-sm focus:outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 sm:text-sm/6"
	>
		{{ $slot }}
	</a>
@else
	<button
		{{ $attributes->filter(fn($value, $key) => !in_array($key, ['class'])) }}
		class="{{ $attributes->get('class') }} flex cursor-default items-center justify-center gap-x-2 rounded-lg px-3 py-1.5 text-base/6 font-semibold shadow-sm focus:outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 sm:text-sm/6"
	>
		{{ $slot }}
	</button>
@endif
