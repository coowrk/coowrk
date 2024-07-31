{{-- TODO: Sidebar von Catalyst UI übernehmen --}}

<div class="lg:hidden">
	<div
		class="fixed inset-0 bg-black/30 transition"
		x-cloak
		x-show="showMobileSidebar"
		x-transition:enter-end="opacity-100"
		x-transition:enter-start="opacity-0"
		x-transition:enter="transition-opacity ease-linear duration-300"
		x-transition:leave-end="opacity-0"
		x-transition:leave-start="opacity-100"
		x-transition:leave="transition-opacity ease-linear duration-300"
	>

		<div
			class="max-w-80 fixed inset-y-0 w-full p-2 transition duration-300 ease-in-out"
			x-cloak
			x-show="showMobileSidebar"
			x-transition:enter-end="translate-x-0"
			x-transition:enter-start="-translate-x-full"
			x-transition:enter="transition ease-in-out duration-300 transform"
			x-transition:leave-end="-translate-x-full"
			x-transition:leave-start="translate-x-0"
			x-transition:leave="transition ease-in-out duration-300 transform"
		>

			{{-- dialog --}}
			<div
				class="flex h-full flex-col rounded-lg bg-white shadow-sm ring-1 ring-zinc-950/5 dark:bg-zinc-900 dark:ring-white/10"
				x-on:click.away="showMobileSidebar = false"
			>
				{{-- close --}}
				<div class="-mb-3 px-4 pt-3">
					<span class="relative">
						<button
							class="group relative flex items-center gap-3 rounded-lg px-2 py-2.5 opacity-50 hover:bg-white/5 sm:py-2"
							x-on:click="showMobileSidebar = false"
						>
							<svg
								class="size-5 fill-zinc-400 group-hover:fill-white"
								fill="currentColor"
								viewBox="0 0 20 20"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z"
								/>
							</svg>

						</button>
					</span>
				</div>
			</div>

		</div>

	</div>
</div>
