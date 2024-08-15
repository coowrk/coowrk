{{-- TODO: Sidebar von Catalyst UI übernehmen --}}

<div class="lg:hidden">
	<div
		class="fixed inset-0 z-50 bg-black/30 transition"
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
							class="group relative flex items-center gap-3 rounded-lg px-2 py-2.5 opacity-50 hover:bg-white/5"
							x-on:click="showMobileSidebar = false"
						>
							<svg
								class="size-5 fill-zinc-500 group-hover:fill-white dark:fill-zinc-400"
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

				{{-- navigation --}}
				<nav class="flex h-full min-h-0 flex-col">
					<div class="flex flex-col border-b border-zinc-950/5 p-4 dark:border-white/5">
						<div class="relative">
							{{-- team button --}}
							<button class="flex w-full cursor-default items-center gap-3 rounded-lg px-2 py-2.5 hover:bg-white/5">
								<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-white/10">
									<span class="text-xs font-medium leading-none text-white">CC</span>
								</span>

								<p class="truncate font-medium text-white">Bd. Caykara</p>

								<svg
									class="size-4 ml-auto shrink-0 fill-zinc-500"
									fill="currentColor"
									viewBox="0 0 16 16"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										clip-rule="evenodd"
										d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
										fill-rule="evenodd"
									/>
								</svg>
							</button>
						</div>
					</div>

					<div class="flex flex-1 flex-col gap-8 overflow-y-auto p-4">
						<div class="flex flex-col gap-0.5">
							{{-- home button --}}
							<button
								class="group relative flex items-center gap-3 rounded-lg px-2 py-2.5 hover:bg-white/5"
								href="{{ route('home') }}"
								wire:navigate
							>
								@if (Route::is('home'))
									<span
										class="absolute inset-y-2 -left-4 w-0.5 rounded-full bg-zinc-950 dark:bg-white"
										style="transform: none; transform-origin: 50% 50% 0px;"
									></span>
								@endif

								<div class="size-6 flex items-center justify-center">
									<svg
										@class([
											'size-6 group-hover:fill-white',
											'fill-zinc-500' => !Route::is('home'),
											'fill-white' => Route::is('home'),
										])
										fill="currentColor"
										viewBox="0 0 20 20"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											clip-rule="evenodd"
											d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z"
											fill-rule="evenodd"
										/>
									</svg>
								</div>

								<p class="truncate font-medium text-white">Startseite</p>
							</button>
						</div>

						<div class="flex flex-col gap-0.5">
							<h3 class="mb-1 px-2 text-sm/6 font-medium text-zinc-500 dark:text-zinc-400">Service-Tools</h3>

							{{-- shortletters --}}
							<button
								class="group relative flex w-full items-center gap-3 rounded-lg px-2 py-2.5 hover:bg-white/5"
								href="{{ route('short-letter.index') }}"
								wire:navigate
							>
								@if (Route::is('short-letter.*'))
									<span
										class="absolute inset-y-2 -left-4 w-0.5 rounded-full bg-zinc-950 dark:bg-white"
										style="transform: none; transform-origin: 50% 50% 0px;"
									></span>
								@endif

								<div class="size-6 flex items-center justify-center">
									<svg
										@class([
											'size-6 group-hover:fill-white',
											'fill-zinc-500' => !Route::is('short-letter.*'),
											'fill-white' => Route::is('short-letter.*'),
										])
										fill="currentColor"
										viewBox="0 0 20 20"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z" />
										<path d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
									</svg>

								</div>

								<p class="truncate font-medium text-white">Kurzbrief</p>
							</button>

							{{-- cancellation --}}
							<button
								class="group relative flex w-full items-center gap-3 rounded-lg px-2 py-2.5 hover:bg-white/5"
								href="{{ route('short-letter.index') }}"
								wire:navigate
							>
								@if (Route::is('short-letter.*'))
									<span
										class="absolute inset-y-2 -left-4 w-0.5 rounded-full bg-zinc-950 dark:bg-white"
										style="transform: none; transform-origin: 50% 50% 0px;"
									></span>
								@endif

								<div class="size-6 flex items-center justify-center">
									<svg
										@class([
											'size-6 group-hover:fill-white',
											'fill-zinc-500' => !Route::is('short-letter.*'),
											'fill-white' => Route::is('short-letter.*'),
										])
										fill="currentColor"
										viewBox="0 0 20 20"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											d="M3 3.5A1.5 1.5 0 0 1 4.5 2h6.879a1.5 1.5 0 0 1 1.06.44l4.122 4.12A1.5 1.5 0 0 1 17 7.622V16.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 3 16.5v-13Z"
										/>
									</svg>

								</div>

								<p class="truncate font-medium text-white">Kündigung</p>
							</button>
						</div>
					</div>
				</nav>
			</div>

		</div>

	</div>
</div>
