<button
	{{ $attributes->filter(fn($value, $key) => !in_array($key, ['class'])) }}
	class="{{ $attributes->get('class') }} flex cursor-default items-center justify-center gap-x-2 rounded-lg px-3 py-1.5 text-sm/6 font-semibold shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
>
	{{ $slot }}
</button>
