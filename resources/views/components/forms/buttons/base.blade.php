<button
	class="{{ $attributes->get('class') }} flex w-full items-center justify-center gap-x-2 rounded-lg px-3 py-1.5 text-sm/6 font-semibold shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
	type="{{ $attributes->get('type') ?? 'button' }}"
>
	{{ $slot }}
</button>
