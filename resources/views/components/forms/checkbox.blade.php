<div class="flex items-start gap-x-3">
	{{-- checkbox --}}
	<div class="relative shrink-0">
		<input
			@if ($attributes->has('wire:model')) wire:model="{{ $attributes->get('wire:model') }}" @endif
			@if ($attributes->has('wire:model.live')) wire:model="{{ $attributes->get('wire:model.live') }}" @endif
			@if ($attributes->has('for') || $attributes->has('id')) id="{{ $attributes->get('id') ?? $attributes->get('for') }}" @endif
			@if ($attributes->has('for') || $attributes->has('value')) value="{{ $attributes->get('value') ?? $attributes->get('for') }}" @endif
			class="size-3.5 ring-white/15 peer appearance-none rounded bg-white/5 ring-1"
			type="checkbox"
		>

		<div
			class="size-3.5 pointer-events-none absolute left-0 top-1 hidden items-center justify-center rounded bg-white peer-checked:flex"
		>
			<svg
				class="size-4"
				fill="currentColor"
				viewBox="0 0 16 16"
				xmlns="http://www.w3.org/2000/svg"
			>
				<path
					clip-rule="evenodd"
					d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
					fill-rule="evenodd"
				/>
			</svg>
		</div>
	</div>

	{{-- text --}}
	<div>
		{{-- label --}}
		<x-forms.label
			:for="$attributes->get('for')"
			:title="$attributes->get('title')"
		/>

		{{-- description --}}
		@if ($attributes->has('description'))
			<x-typography.text :text="$attributes->get('description')" />
		@endif

		{{-- error --}}
		@error($attributes->get('wire:model') ?? $attributes->get('wire:model.live'))
			<span
				class="block text-sm/6 font-medium text-red-600 disabled:opacity-50 dark:text-red-500 sm:text-xs/6">{{ $message }}</span>
		@enderror
	</div>
</div>
