<div class="mt-2">
	<textarea
	 @if ($attributes->has('required')) required @endif
	 @if ($errors->has($attributes->get('for') ?? $attributes->get('name'))) data-invalid @endif
	 @if ($attributes->has('autocomplete')) autocomplete="{{ $attributes->get('autocomplete') }}" @endif
	 @if ($attributes->has('for') || $attributes->has('id')) id="{{ $attributes->get('id') ?? $attributes->get('for') }}" @endif
	 @if ($attributes->has('for') || $attributes->has('name')) name="{{ $attributes->get('name') ?? $attributes->get('for') }}" @endif
	 @if ($attributes->has('for') || $attributes->has('title')) title="{{ $attributes->get('title') ?? $attributes->get('for') }}" @endif
	 @if (!$attributes->has('wire:model.live') && ($attributes->has('for') || $attributes->has('wire:model'))) wire:model="{{ $attributes->get('wire:model') ?? $attributes->get('for') }}" @endif
	 @if ($attributes->has('wire:model.live')) wire:model.live="{{ $attributes->get('wire:model.live') ?? $attributes->get('for') }}" @endif
	 class="scrollbar-hide block w-full rounded-lg border-0 bg-white/5 px-3 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:outline-none data-[invalid]:ring-red-500 sm:text-sm/6"
	 rows="4"
	></textarea>

	@error($attributes->get('for') ?? $attributes->get('name'))
		<span
			class="mt-2 block text-sm/6 font-medium text-red-600 disabled:opacity-50 dark:text-red-500 sm:text-xs/6">{{ $message }}</span>
	@enderror
</div>
