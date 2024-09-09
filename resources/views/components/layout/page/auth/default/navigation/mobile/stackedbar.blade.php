<header class="flex items-center px-4 lg:hidden">
	{{-- sidebar button --}}
	<div class="py-2.5">
		<span class="relative">
			<button
				class="size-10 flex cursor-default items-center justify-center gap-3 rounded-lg hover:bg-zinc-950/5 dark:hover:bg-white/5"
				x-on:click="showMobileSidebar = !showMobileSidebar"
			>
				<span
					aria-hidden="true"
					class="size-[max(100%,2.75rem)] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 [@media(pointer:fine)]:hidden"
				></span>
				<svg
					class="size-6 fill-zinc-500 dark:fill-zinc-400"
					fill="currentColor"
					viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						clip-rule="evenodd"
						d="M2 6.75A.75.75 0 0 1 2.75 6h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 6.75Zm0 6.5a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z"
						fill-rule="evenodd"
					/>
				</svg>

			</button>
		</span>
	</div>

	{{-- messages & user --}}
	<div class="min-w-0 flex-1">
		<nav class="flex flex-1 items-center gap-4 py-2.5">
			<div
				aria-hidden="true"
				class="-ml-4 flex-1"
			></div>
			<div class="flex items-center gap-3">
				{{-- messages --}}
				<button
					class="size-10 group relative flex cursor-default items-center justify-center gap-3 rounded-lg hover:bg-zinc-950/5 dark:hover:bg-white/5"
				>
					<svg
						class="size-6 fill-zinc-500 group-hover:fill-zinc-950 dark:fill-zinc-400 dark:group-hover:fill-white"
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

					{{-- <span
						class="absolute inset-x-2 -bottom-2.5 h-0.5 rounded-full bg-zinc-950 dark:bg-white"
						style="opacity: 1;"
					></span> --}}
				</button>

				{{-- user --}}
				<div
					class="relative"
					x-data="{ show: false }"
				>
					<div
						class="min-w-64 absolute right-0 top-16 z-10 origin-top rounded-xl p-1 ring-1 ring-zinc-950/10 backdrop-blur-xl backdrop-brightness-150 dark:bg-zinc-800/75 dark:ring-inset dark:ring-white/10"
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
							class="group flex cursor-default items-center gap-2 rounded-lg px-3.5 py-2.5 text-base/6 hover:bg-zinc-100 focus:outline-none dark:text-white dark:hover:text-zinc-950 sm:px-3 sm:py-1.5"
							href="{{ route('user.my-profile.general') }}"
							wire:navigate
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
							class="mx-3.5 my-1 h-px border-0 bg-zinc-950/5 dark:bg-white/5 sm:mx-3"
							role="separator"
						></div>
						{{-- logout --}}
						<livewire:components.layout.page.auth.default.navigation.mobile.logout />
					</div>

					<button
						class="size-10 group relative flex cursor-default items-center justify-center gap-3 rounded-lg hover:bg-zinc-950/5 dark:hover:bg-white/5"
						x-on:click="show = !show"
					>
						<span class="size-8 inline-flex shrink-0 items-center justify-center">
							<span class="text-sm font-semibold leading-none text-zinc-950 dark:text-white">NU</span>
						</span>
					</button>
				</div>
			</div>
		</nav>
	</div>
</header>
