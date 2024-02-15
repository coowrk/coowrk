<div
	class="group relative"
	x-data="{ show: false, bind: @entangle($attributes->get('name')), options: {{ json_encode($attributes->get('options')) }}, selected: '{{ $selected ?? '' }}' }"
>
	<div class="relative overflow-hidden">
		{{-- Hidden input --}}
		<input
			{{ $attributes->filter(fn($value, $key) => $key != 'options') }}
			class="hidden"
			type="hidden"
		>

		{{-- Open select menu --}}
		<div
			class="absolute z-10 h-full w-full cursor-pointer"
			x-on:click="show = !show"
		></div>

		{{-- Input field --}}
		<div
			:class="show ? 'ring-2 ring-app-yellow dark:ring-app-yellow' :
			    'disabled:ring-gray-900/15 ring-1 dark:disabled:ring-white/15 dark:ring-white/10 ring-gray-900/10'"
			class="relative block w-full rounded-lg bg-white px-3 py-1.5 text-base/6 font-medium text-gray-900 ring-inset transition placeholder:text-zinc-500 after:pointer-events-none disabled:bg-gray-50 dark:bg-white/5 dark:text-white dark:disabled:bg-white/[2.5%] sm:text-sm/6"
		>
			<template x-if="options[bind]"><span x-text="options[bind]"></span></template>
			<template x-if="!options[bind] && !selected">
				<span class="text-gray-500 dark:text-zinc-500">Bitte auswählen</span>
			</template>
		</div>

		{{-- Dropdown icon --}}
		<span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
			<svg
				aria-hidden="true"
				class="h-5 w-5 text-gray-500 dark:text-zinc-500"
				fill="currentColor"
				viewBox="0 0 20 20"
			>
				<path
					clip-rule="evenodd"
					d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
					fill-rule="evenodd"
				/>
			</svg>
		</span>
	</div>

	{{-- Select menu --}}
	<ul
		aria-activedescendant="listbox-option-3"
		aria-labelledby="listbox-label"
		class="absolute -bottom-1 z-10 max-h-60 w-full translate-y-full overflow-auto rounded-lg bg-white p-2 text-base ring-1 ring-inset ring-gray-200 focus:outline-none dark:bg-zinc-900 dark:ring-zinc-800 sm:text-sm"
		role="listbox"
		tabindex="-1"
		x-cloak
		x-on:click.away="show = false"
		x-show="show"
		x-transition:leave-end="opacity-0"
		x-transition:leave-start="opacity-100"
		x-transition:leave="transition ease-in duration-100"
	>
		{{-- Items --}}
		<template x-for="(option, value) in options">
			<li
				class="relative cursor-pointer select-none rounded-lg p-2 transition hover:bg-black/[3%] dark:text-zinc-500 dark:hover:bg-white/[3%] dark:hover:text-white"
				id="listbox-option-0"
				role="option"
				x-on:click="bind = selected = value; show = false"
			>
				<span
					:class="bind == value || selected == value ? 'font-medium dark:text-white text-gray-900' :
					    'font-normal dark:text-zinc-500 text-gray-500'"
					class="block truncate"
					x-text="option"
				></span>
			</li>
		</template>
	</ul>
</div>
