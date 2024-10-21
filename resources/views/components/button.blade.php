{{-- TODO: ADD VARIANTS WITH SHADCN/UI COLORS --}}

@props(['variant' => 'primary'])

<button @class([
	'focus-visible:ring-ring [&_svg]:size-4 inline-flex h-8 items-center justify-center gap-2 whitespace-nowrap rounded-lg px-4 py-2 text-sm font-medium shadow transition-colors focus-visible:outline-none focus-visible:ring-1 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:shrink-0',

	'bg-button-primary hover:bg-button-primary/90 text-primary-foreground' =>
		$variant == 'primary',

	'bg-button-secondary hover:bg-button-secondary/90 text-primary-foreground' =>
		$variant == 'secondary',
])>
	{{ $slot }}
</button>
