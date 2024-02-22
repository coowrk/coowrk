<div
	aria-modal="true"
	class="relative z-50 lg:hidden"
	role="dialog"
	x-cloak
	x-show="showMobileMenu"
>
	<div
		class="fixed inset-0 bg-gray-900/80 dark:bg-zinc-900/80"
		x-show="showMobileMenu"
		x-transition:enter-end="opacity-100"
		x-transition:enter-start="opacity-0"
		x-transition:enter="transition-opacity ease-linear duration-300"
		x-transition:leave-end="opacity-0"
		x-transition:leave-start="opacity-100"
		x-transition:leave="transition-opacity ease-linear duration-300"
	></div>

	<div class="fixed inset-0 flex">
		<div
			class="relative mr-16 flex w-full max-w-xs flex-1"
			x-show="showMobileMenu"
			x-transition:enter-end="translate-x-0"
			x-transition:enter-start="-translate-x-full"
			x-transition:enter="transition ease-in-out duration-300 transform"
			x-transition:leave-end="-translate-x-full"
			x-transition:leave-start="translate-x-0"
			x-transition:leave="transition ease-in-out duration-300 transform"
		>
			<div
				class="absolute left-full top-0 flex w-16 justify-center pt-5"
				x-show="showMobileMenu"
				x-transition:enter-end="opacity-100"
				x-transition:enter-start="opacity-0"
				x-transition:enter="ease-in-out duration-300"
				x-transition:leave-end="opacity-0"
				x-transition:leave-start="opacity-100"
				x-transition:leave="ease-in-out duration-300"
			>
				<button
					class="-m-2.5 p-2.5"
					type="button"
					x-on:click="showMobileMenu = false"
				>
					<span class="sr-only">Close sidebar</span>
					<svg
						aria-hidden="true"
						class="h-6 w-6 text-white"
						fill="none"
						stroke-width="1.5"
						stroke="currentColor"
						viewBox="0 0 24 24"
					>
						<path
							d="M6 18L18 6M6 6l12 12"
							stroke-linecap="round"
							stroke-linejoin="round"
						/>
					</svg>
				</button>
			</div>

			<div
				class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 pb-4 dark:border-zinc-800 dark:bg-zinc-950"
				x-on:click.away="showMobileMenu = false"
			>
				<div class="flex h-16 shrink-0 items-center">
					<a
						class="text-xl font-bold text-gray-900 dark:text-white"
						href="{{ route('home') }}"
						wire:navigate
					>
						Coowrk<span class="text-app-yellow">.</span>
					</a>
				</div>
				<nav class="flex flex-1 flex-col">
					<ul
						class="flex flex-1 flex-col gap-y-7"
						role="list"
					>
						<li>
							<ul
								class="-mx-2 space-y-1"
								role="list"
							>
								<x-layouts.auth.default.sidebar.item.tab
									routeIs="home"
									route="home"
								>
									<svg
										color="currentColor"
										fill="none"
										height="24px"
										stroke-width="1.5"
										stroke="currentColor"
										viewBox="0 0 24 24"
										width="24px"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											d="M17 21H7C4.79086 21 3 19.2091 3 17V10.7076C3 9.30887 3.73061 8.01175 4.92679 7.28679L9.92679 4.25649C11.2011 3.48421 12.7989 3.48421 14.0732 4.25649L19.0732 7.28679C20.2694 8.01175 21 9.30887 21 10.7076V17C21 19.2091 19.2091 21 17 21Z"
											stroke-linecap="round"
											stroke-linejoin="round"
											stroke-width="1.5"
										></path>
										<path
											d="M9 17H15"
											stroke-linecap="round"
											stroke-linejoin="round"
											stroke-width="1.5"
										></path>
									</svg>
									Dashboard
								</x-layouts.auth.default.sidebar.item.tab>

								<x-layouts.auth.default.sidebar.item.tab
									routeIs="letter-protocol"
									route="letter-protocol"
								>
									<svg
										color="currentColor"
										fill="none"
										height="24px"
										stroke-width="1.5"
										stroke="currentColor"
										viewBox="0 0 24 24"
										width="24px"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											d="M7 9L12 12.5L17 9"
											stroke-linecap="round"
											stroke-linejoin="round"
											stroke-width="1.5"
										></path>
										<path
											d="M2 17V7C2 5.89543 2.89543 5 4 5H20C21.1046 5 22 5.89543 22 7V17C22 18.1046 21.1046 19 20 19H4C2.89543 19 2 18.1046 2 17Z"
											stroke-width="1.5"
										></path>
									</svg>
									Briefprotokoll
								</x-layouts.auth.default.sidebar.item.tab>
							</ul>
						</li>
						<li>
							<div class="text-xs/6 font-semibold text-gray-500 dark:text-zinc-500">Deine Teams</div>
							<ul
								class="-mx-2 mt-2 space-y-1"
								role="list"
							>
								<x-layouts.auth.default.sidebar.item.team team="Heroicons" />
								<x-layouts.auth.default.sidebar.item.team team="Tailwind Labs" />
								<x-layouts.auth.default.sidebar.item.team team="Workcation" />
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
