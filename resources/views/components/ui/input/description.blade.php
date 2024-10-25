@aware(['description'])

@if ($description)
	<p class="text-sm text-muted-foreground">
		{{ $description }}
	</p>
@endif
