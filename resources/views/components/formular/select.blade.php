<div class="mt-2">
	<div class="relative">
		<select
			@if ($attributes->has('required')) required @endif
			@if ($errors->has($attributes->get('for') ?? $attributes->get('name'))) data-invalid @endif
			@if ($attributes->has('value')) value="{{ $attributes->get('value') }}" @endif
			@if ($attributes->has('wire:change')) wire:change="{{ $attributes->get('wire:change') }}" @endif
			@if ($attributes->has('autocomplete')) autocomplete="{{ $attributes->get('autocomplete') }}" @endif
			@if ($attributes->has('for') || $attributes->has('id')) id="{{ $attributes->get('id') ?? $attributes->get('for') }}" @endif
			@if ($attributes->has('for') || $attributes->has('title')) title="{{ $attributes->get('title') ?? $attributes->get('for') }}" @endif
			@if (!$attributes->has('wire:model.live') && ($attributes->has('for') || $attributes->has('wire:model'))) wire:model="{{ $attributes->get('wire:model') ?? $attributes->get('for') }}" @endif
			@if ($attributes->has('wire:model.live')) wire:model.live="{{ $attributes->get('wire:model.live') ?? $attributes->get('for') }}" @endif
			class="block w-full appearance-none rounded-lg border border-zinc-950/10 bg-transparent py-[calc(theme(spacing[2.5])-1px)] pl-[calc(theme(spacing[3.5])-1px)] pr-[calc(theme(spacing.10)-1px)] text-zinc-950 shadow-sm placeholder:text-zinc-500 hover:border-zinc-950/20 focus:border-zinc-950/20 focus:outline-none data-[invalid]:border-red-500 dark:border-white/10 dark:bg-white/5 dark:text-white dark:placeholder:text-zinc-400 dark:hover:border-white/20 dark:focus:border-white/20 sm:py-[calc(theme(spacing[1.5])-1px)] sm:pl-[calc(theme(spacing.3)-1px)] sm:pr-[calc(theme(spacing.9)-1px)] sm:text-sm/6"
		>
			<option class="py-3 dark:bg-zinc-800">
				Bitte Auswählen
			</option>

			@foreach ($options as $option => $key)
				<option
					class="py-3 dark:bg-zinc-800"
					value="{{ $option }}"
				>
					{{ $key }}
				</option>
			@endforeach
		</select>

		<div class="pointer-events-none absolute right-0 top-0 flex items-center justify-center px-3 py-2.5">
			<svg
				class="size-4 fill-zinc-500 dark:fill-zinc-400"
				fill="currentColor"
				viewBox="0 0 16 16"
				xmlns="http://www.w3.org/2000/svg"
			>
				<path
					clip-rule="evenodd"
					d="M5.22 10.22a.75.75 0 0 1 1.06 0L8 11.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 0 1 0-1.06ZM10.78 5.78a.75.75 0 0 1-1.06 0L8 4.06 6.28 5.78a.75.75 0 0 1-1.06-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06Z"
					fill-rule="evenodd"
				/>
			</svg>
		</div>
	</div>

	@error($attributes->get('for') ?? $attributes->get('name'))
		<span
			class="mt-2 block text-sm/6 font-medium text-red-600 disabled:opacity-50 dark:text-red-500 sm:text-xs/6">{{ $message }}</span>
	@enderror
</div>
