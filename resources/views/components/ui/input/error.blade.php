@aware(['name'])

@if ($name)
	@error($name)
		<p class="text-sm text-destructive">
			{{ $message }}
		</p>
	@enderror
@endif
