{{-- App\View\Components\Input --}}

<div class="space-y-2">
	<x-ui.input.heading />

	<input
		@class([
			'flex h-10 w-full rounded border border-input bg-background px-3 py-2 text-sm text-foreground ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 read-only:cursor-not-allowed read-only:opacity-50 disabled:cursor-not-allowed disabled:opacity-50',
			'border-destructive' => $errors->has($name),
		])
		{!! $getAllAvailableTags !!}
	>

	<x-ui.input.error />
	<x-ui.input.description />
</div>
