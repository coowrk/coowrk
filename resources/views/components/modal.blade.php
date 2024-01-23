<div x-cloak>
	<!-- Global notification live region, render this permanently at the end of the document -->
	<div aria-live="assertive"
		class="pointer-events-none fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6"
		x-data="{ show: @entangle('show') }">
		<div class="flex w-full flex-col items-center space-y-4 sm:items-end"
			x-show="$wire.show">

			<div class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5"
				x-show="$wire.show"
				x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
				x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
				x-transition:enter="transform ease-out duration-300 transition"
				x-transition:leave-end="opacity-0"
				x-transition:leave-start="opacity-100"
				x-transition:leave="transition ease-in duration-100">
				<div class="p-4">
					<div class="flex items-start">
						<div class="flex-shrink-0">
							<svg aria-hidden="true"
								class="h-6 w-6 text-green-400"
								fill="none"
								stroke-width="1.5"
								stroke="currentColor"
								viewBox="0 0 24 24">
								<path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
									stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
						</div>
						<div class="ml-3 w-0 flex-1 pt-0.5">
							<p class="text-sm font-medium text-gray-900">Successfully saved!</p>
							<p class="mt-1 text-sm text-gray-500">{{ $message }}</p>
						</div>
						<div class="ml-4 flex flex-shrink-0">
							<button
								class="inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
								type="button"
								wire:click="$set('show', false)">
								<span class="sr-only">Close</span>
								<svg aria-hidden="true"
									class="h-5 w-5"
									fill="currentColor"
									viewBox="0 0 20 20">
									<path
										d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
