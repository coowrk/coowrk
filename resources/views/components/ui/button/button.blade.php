{{-- App\View\Components\Button --}}

<button
	@class([
		'[&_svg]:size-4 inline-flex h-8 items-center justify-center gap-2 whitespace-nowrap rounded px-4 py-2 text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:shrink-0',
	
		'bg-primary hover:bg-primary/90 text-primary-foreground' =>
			$variant == 'primary',
	
		'bg-secondary hover:bg-secondary/80 text-secondary-foreground' =>
			$variant == 'secondary',
	
		'bg-destructive hover:bg-destructive/80 text-destructive-foreground' =>
			$variant == 'destructive',
	
		'bg-accent-yellow hover:bg-accent-yellow/90 text-accent-yellow-foreground' =>
			$variant == 'accent-yellow',
	
		'border border-input bg-background hover:bg-accent text-secondary-foreground hover:text-accent-foreground' =>
			$variant == 'outline',
	])
	{!! $getAllAvailableTags !!}
>
	<span wire:loading.remove>{{ $label ?? $slot }}</span>
	<span wire:loading.delay><x-ui.button.spinner /></span>
</button>
