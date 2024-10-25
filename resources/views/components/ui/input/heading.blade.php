@aware(['label', 'labelHint', 'getNameRaw'])

@if ($label || $labelHint)
	<div class="grid grid-cols-2 justify-items-stretch">
		@if ($label)
			<label
				class="order-1 text-sm/none font-medium text-foreground peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
				for="{{ $getNameRaw }}"
			>
				{{ $label }}
			</label>
		@endif

		{{-- TODO: Hint must stay at right even when label not exists. --}}
		{{-- @if ($labelHint)
			<p
				class="order-2 col-span-2 text-sm/none text-muted-foreground peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
			>
				{{ $labelHint }}
			</p>
		@endif --}}
	</div>
@endif
