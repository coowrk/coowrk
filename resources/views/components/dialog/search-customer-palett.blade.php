<x-overlays.base>
	<div class="fixed inset-0 z-10 w-screen overflow-y-auto p-4 sm:p-6 md:p-20">
		{{-- container --}}
		<div
			class="mx-auto max-w-xl transform divide-y divide-white/10 overflow-hidden rounded-xl bg-zinc-900 ring-1 ring-white/10 transition-all"
			x-cloak
			x-on:click.away="show = false"
			x-show="show"
			x-transition:enter-end="opacity-100 scale-100"
			x-transition:enter-start="opacity-0 scale-95"
			x-transition:enter="ease-out duration-300"
			x-transition:leave-end="opacity-0 scale-95"
			x-transition:leave-start="opacity-100 scale-100"
			x-transition:leave="ease-out duration-200"
		>
			{{-- form --}}
			<form class="relative">
				<svg
					aria-hidden="true"
					class="pointer-events-none absolute left-4 top-3.5 h-5 w-5 text-zinc-500 dark:text-zinc-400"
					fill="currentColor"
					viewBox="0 0 20 20"
				>
					<path
						clip-rule="evenodd"
						d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
						fill-rule="evenodd"
					/>
				</svg>

				<input
					autofocus
					class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-zinc-100 placeholder:text-gray-400 focus:outline-none focus:ring-0 sm:text-sm"
					placeholder="Search..."
					type="text"
					wire:keyup.debounce.250ms="searchCustomer"
					wire:model.live="search"
				>
			</form>

			{{-- customers --}}
			@if (strlen($search) >= 1)
				@if (isset($customers))
					@if ($customers->count())
						<ul
							class="max-h-72 scroll-py-2 overflow-y-auto py-2 text-sm text-gray-800"
							id="options"
							role="listbox"
						>
							@foreach ($customers as $customer)
								<li
									class="flex cursor-default select-none px-4 py-2 text-zinc-100 hover:bg-white/5"
									role="customer"
									tabindex="-1"
									wire:click="sendCustomerDataToResource('{{ $customer->id }}')"
								>
									<div class="w-14 text-zinc-500">
										{{ $customer->salutation }}
									</div>

									<div class="mr-3">
										{{ $customer->first_name }}
										{{ $customer->last_name }}
									</div>

									<div class="truncate text-zinc-500">
										{{ $customer->street }}
										{{ $customer->house_number }},
										{{ $customer->postcode }}
										{{ $customer->city }}
									</div>
								</li>
							@endforeach

						</ul>
						{{-- error --}}
					@else
						<p class="p-4 text-sm text-gray-500">No people found.</p>
					@endif
				@endif
			@endif
		</div>
	</div>
</x-overlays.base>
