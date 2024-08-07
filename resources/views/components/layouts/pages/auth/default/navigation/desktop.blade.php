{{-- desktop sidebar --}}
<div class="fixed inset-y-0 left-0 w-64 pr-px max-lg:hidden">
	<nav class="flex h-full min-h-0 flex-col">

		{{-- top section --}}
		<div class="flex flex-col border-b border-zinc-950/5 p-4 dark:border-white/5">
			<div class="flex flex-col gap-0.5">

				{{-- team button --}}
				<button class="flex cursor-default items-center gap-3 rounded-lg px-2 py-2.5 hover:bg-white/5 sm:py-2">
					<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-white/10">
						<span class="text-xs font-medium leading-none text-white">CC</span>
					</span>

					<p class="truncate text-sm/5 font-medium text-white">Bd. Caykara</p>

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

			<div class="mt-2.5 flex flex-col gap-0.5">

				{{-- home button --}}
				<button
					class="group relative flex cursor-not-allowed items-center gap-3 rounded-lg px-2 py-2.5 opacity-50 hover:bg-white/5 sm:py-2"
					wire:navigate="{{ route('home') }}"
				>
					{{-- <span
						class="absolute inset-y-2 -left-4 w-0.5 rounded-full bg-zinc-950 dark:bg-white"
						style="transform: none; transform-origin: 50% 50% 0px;"
					></span> --}}

					<div class="size-6 flex items-center justify-center">
						<svg
							class="size-5 fill-zinc-500 group-hover:fill-white"
							fill="currentColor"
							viewBox="0 0 20 20"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								clip-rule="evenodd"
								d="M1 11.27c0-.246.033-.492.099-.73l1.523-5.521A2.75 2.75 0 0 1 5.273 3h9.454a2.75 2.75 0 0 1 2.651 2.019l1.523 5.52c.066.239.099.485.099.732V15a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3.73Zm3.068-5.852A1.25 1.25 0 0 1 5.273 4.5h9.454a1.25 1.25 0 0 1 1.205.918l1.523 5.52c.006.02.01.041.015.062H14a1 1 0 0 0-.86.49l-.606 1.02a1 1 0 0 1-.86.49H8.236a1 1 0 0 1-.894-.553l-.448-.894A1 1 0 0 0 6 11H2.53l.015-.062 1.523-5.52Z"
								fill-rule="evenodd"
							/>
						</svg>
					</div>

					<p class="truncate text-sm/5 font-medium text-white">Nachrichten</p>
				</button>
			</div>
		</div>

		<div class="flex flex-col p-4">
			<div class="flex flex-col gap-0.5">
				{{-- home button --}}
				<button
					class="group relative flex items-center gap-3 rounded-lg px-2 py-2.5 hover:bg-white/5 sm:py-2"
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
								'size-5 group-hover:fill-white',
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

					<p class="truncate text-sm/5 font-medium text-white">Startseite</p>
				</button>

				{{-- shortletters --}}
				<button
					class="group relative flex w-full items-center gap-3 rounded-lg px-2 py-2.5 hover:bg-white/5 sm:py-2"
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
								'size-5 group-hover:fill-white',
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

					<p class="truncate text-sm/5 font-medium text-white">Kurzbrief</p>
				</button>
			</div>
		</div>

		<div class="mt-auto flex flex-col border-t border-zinc-950/5 p-4 dark:border-white/5">
			<div class="flex flex-col gap-0.5">

				{{-- user button --}}
				<div
					class="relative"
					x-data="{ show: false }"
				>
					<div
						class="absolute bottom-16 w-full origin-top rounded-xl p-1 ring-1 backdrop-blur-xl backdrop-brightness-150 dark:bg-zinc-800/75 dark:ring-inset dark:ring-white/10"
						x-cloak
						x-on:click.away="show = false"
						x-show="show"
						x-transition:enter-end="transform opacity-100 scale-100"
						x-transition:enter-start="transform opacity-0 scale-95"
						x-transition:enter="transition ease-out duration-100"
						x-transition:leave-end="transform opacity-0 scale-95"
						x-transition:leave-start="transform opacity-100 scale-100"
						x-transition:leave="transition ease-out duration-75"
						x-trap.inert="show"
					>
						<a
							class="group flex cursor-default items-center gap-2 rounded-lg px-3.5 py-2.5 text-sm/6 hover:bg-zinc-100 focus:outline-none dark:text-white dark:hover:text-zinc-950 sm:px-3 sm:py-1.5"
						>
							<svg
								class="size-5 sm:size-4 text-zinc-500 dark:text-zinc-400 group-hover:dark:text-zinc-950"
								fill="currentColor"
								viewBox="0 0 16 16"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									clip-rule="evenodd"
									d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0Zm-5-2a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM8 9c-1.825 0-3.422.977-4.295 2.437A5.49 5.49 0 0 0 8 13.5a5.49 5.49 0 0 0 4.294-2.063A4.997 4.997 0 0 0 8 9Z"
									fill-rule="evenodd"
								/>

							</svg>

							Mein Profil
						</a>
						<div
							class="mx-3.5 my-1 h-px border-0 bg-zinc-950/5 dark:bg-white/10 sm:mx-3"
							role="separator"
						></div>
						<a
							class="group flex cursor-default items-center gap-2 rounded-lg px-3.5 py-2.5 text-sm/6 hover:bg-zinc-100 focus:outline-none dark:text-white dark:hover:text-zinc-950 sm:px-3 sm:py-1.5"
						>
							<svg
								class="size-5 sm:size-4 text-zinc-500 dark:text-zinc-400 group-hover:dark:text-zinc-950"
								fill="currentColor"
								viewBox="0 0 16 16"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									clip-rule="evenodd"
									d="M2 4.75A2.75 2.75 0 0 1 4.75 2h3a2.75 2.75 0 0 1 2.75 2.75v.5a.75.75 0 0 1-1.5 0v-.5c0-.69-.56-1.25-1.25-1.25h-3c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h3c.69 0 1.25-.56 1.25-1.25v-.5a.75.75 0 0 1 1.5 0v.5A2.75 2.75 0 0 1 7.75 14h-3A2.75 2.75 0 0 1 2 11.25v-6.5Zm9.47.47a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 1 1-1.06-1.06l.97-.97H5.25a.75.75 0 0 1 0-1.5h7.19l-.97-.97a.75.75 0 0 1 0-1.06Z"
									fill-rule="evenodd"
								/>
							</svg>

							Abmelden
						</a>
					</div>

					<button
						class="flex w-full cursor-default items-center gap-3 rounded-lg p-2 hover:bg-white/5"
						x-on:click="show = !show"
					>
						<span class="size-10 inline-flex shrink-0 items-center justify-center rounded-lg bg-white/10">
							<span class="text-xs font-medium leading-none text-white">NU</span>
						</span>

						<div class="truncate text-left">
							<p class="truncate text-sm/5 font-medium text-white">
								{{ auth()->user()->first_name }}
								{{ auth()->user()->last_name }}
							</p>
							<p class="truncate text-xs/5 text-zinc-400">{{ auth()->user()->email }}</p>
						</div>

						<div>
							<svg
								class="size-4 shrink-0 fill-zinc-500"
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
						</div>
					</button>
				</div>
				{{-- <button class="flex cursor-default items-center gap-3 rounded-lg px-2 py-2.5 hover:bg-white/5 sm:py-2">
					<span class="size-10 inline-flex shrink-0 items-center justify-center rounded-lg bg-white/10">
						<span class="text-xs font-medium leading-none text-white">NU</span>
					</span>

					<div class="truncate text-left">
						<p class="truncate text-sm/5 font-medium text-white">
							{{ auth()->user()->first_name }}
							{{ auth()->user()->last_name }}
						</p>
						<p class="truncate text-xs/5 text-zinc-400">{{ auth()->user()->email }}</p>
					</div>

					<svg
						class="size-4 shrink-0 fill-zinc-500"
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
				</button> --}}
			</div>
		</div>
	</nav>
</div>
