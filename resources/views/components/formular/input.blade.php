<div class="mt-2">
	<input
		@if ($attributes->has('required')) required @endif
		@if ($errors->has($attributes->get('for') ?? $attributes->get('name'))) data-invalid @endif
		@if ($attributes->has('value')) value="{{ $attributes->get('value') }}" @endif
		@if ($attributes->has('wire:change')) wire:change="{{ $attributes->get('wire:change') }}" @endif
		@if ($attributes->has('placeholder')) placeholder="{{ $attributes->get('placeholder') }}" @endif
		@if ($attributes->has('autocomplete')) autocomplete="{{ $attributes->get('autocomplete') }}" @endif
		@if ($attributes->has('for') || $attributes->has('id')) id="{{ $attributes->get('id') ?? $attributes->get('for') }}" @endif
		@if ($attributes->has('for') || $attributes->has('name')) name="{{ $attributes->get('name') ?? $attributes->get('for') }}" @endif
		@if ($attributes->has('for') || $attributes->has('type')) type="{{ $attributes->get('type') ?? $attributes->get('for') }}" @endif
		@if ($attributes->has('for') || $attributes->has('title')) title="{{ $attributes->get('title') ?? $attributes->get('for') }}" @endif
		@if (
			!$attributes->has('wire:model.live') &&
				!$attributes->has('wire:model.blur') &&
				($attributes->has('for') || $attributes->has('wire:model'))) wire:model="{{ $attributes->get('wire:model') ?? $attributes->get('for') }}" @endif
		@if ($attributes->has('wire:keyup.debounce.500ms')) wire:keyup.debounce.500ms="{{ $attributes->get('wire:keyup.debounce.500ms') }}" @endif
		@if ($attributes->has('wire:model.live')) wire:model.live="{{ $attributes->get('wire:model.live') ?? $attributes->get('for') }}" @endif
		@if ($attributes->has('wire:model.blur')) wire:model.blur="{{ $attributes->get('wire:model.blur') ?? $attributes->get('for') }}" @endif
		class="block w-full rounded-lg border border-zinc-950/10 bg-transparent px-[calc(theme(spacing[3.5])-1px)] py-[calc(theme(spacing[2.5])-1px)] text-zinc-950 shadow-sm placeholder:text-zinc-500 hover:border-zinc-950/20 focus:border-zinc-950/20 focus:outline-none data-[invalid]:border-red-500 dark:border-white/10 dark:bg-white/5 dark:text-white dark:placeholder:text-zinc-400 dark:hover:border-white/20 dark:focus:border-white/20 sm:px-[calc(theme(spacing[3])-1px)] sm:py-[calc(theme(spacing[1.5])-1px)] sm:text-sm/6"
	>

	@error($attributes->get('for') ?? $attributes->get('name'))
		<span
			class="mt-2 block text-sm/6 font-medium text-red-600 disabled:opacity-50 dark:text-red-500 sm:text-xs/6">{{ $message }}</span>
	@enderror
</div>
