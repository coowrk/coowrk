<div x-data="{ show: true }">
	<div
		class="flex items-center justify-between rounded-lg border border-gray-200 bg-white p-3 dark:border-zinc-800 dark:bg-zinc-900"
	>
		<div>
			<h3 class="text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6">
				{{ $attributes->get('title') }}
			</h3>
			<p class="text-base/6 text-gray-500 data-[disabled]:opacity-50 dark:text-zinc-500 sm:text-sm/6">
				{{ $attributes->get('description') }}
			</p>
		</div>

		<div class="flex items-center gap-5">
			@if ($attributes->has('modal-button'))
				<x-forms.button
					theme="second"
					type="button"
					x-on:click="$wire.modal.show = true"
				>
					{{ $attributes->get('modal-button') }}
				</x-forms.button>
			@endif

			<div
				class="flex h-[34px] w-[34px] shrink-0 cursor-pointer items-center justify-center rounded-lg bg-gray-100 transition-colors hover:bg-gray-200 dark:bg-zinc-800 dark:hover:bg-zinc-700"
				x-on:click="show = !show"
			>
				<svg
					class="stroke-gray-900 dark:stroke-white"
					fill="none"
					height="24px"
					stroke-width="1.5"
					viewBox="0 0 24 24"
					width="24px"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M6 9L12 15L18 9"
						stroke-linecap="round"
						stroke-linejoin="round"
						stroke-width="1.5"
						x-show="!show"
					></path>
					<path
						d="M6 15L12 9L18 15"
						stroke-linecap="round"
						stroke-linejoin="round"
						stroke-width="1.5"
						x-cloak
						x-show="show"
					></path>
				</svg>
			</div>
		</div>
	</div>
	<div
		class="grid grid-cols-4 gap-x-5 gap-y-3 p-3 lg:grid-cols-12"
		x-show="show"
	>
		{{ $slot }}

		@if ($attributes->has('disclaimer'))
			<div class="col-span-12">
				<p class="text-base/6 text-gray-500 data-[disabled]:opacity-50 dark:text-zinc-500 sm:text-xs/4">
					Die eingegebenen Daten werden automatisch gespeichert, um zukünftige Abläufe
					effizienter zu gestalten.
				</p>
			</div>
		@endif
	</div>
</div>
