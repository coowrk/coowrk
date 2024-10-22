<button
	@if ($url) wire:navigate @endif
	@if ($url) href="{{ $url }}" @endif
	@class([
		'[&_svg]:size-4 inline-flex h-8 items-center justify-center gap-2 whitespace-nowrap rounded px-4 py-2 text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:shrink-0',
	
		'bg-primary hover:bg-primary/90 text-primary-foreground' =>
			$variant == 'primary',
	
		'bg-secondary hover:bg-secondary/80 text-secondary-foreground' =>
			$variant == 'secondary',
	
		'bg-destructive hover:bg-destructive/80 text-destructive-foreground' =>
			$variant == 'destructive',
	
		'border border-input bg-background hover:bg-accent text-secondary-foreground hover:text-accent-foreground' =>
			$variant == 'outline',
	])
>
	{{ $slot }}
</button>
