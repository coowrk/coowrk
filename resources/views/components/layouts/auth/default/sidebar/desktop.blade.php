<div class="hidden lg:fixed lg:inset-y-0 lg:z-10 lg:flex lg:w-72 lg:flex-col">
	<div
		class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 pb-4 dark:border-zinc-800 dark:bg-zinc-900"
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
				{{-- Navigation --}}
				<li>
					<ul
						class="-mx-2 space-y-1"
						role="list"
					>
						<x-layouts.auth.default.sidebar.item.tab route="home">
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

						<x-layouts.auth.default.sidebar.item.tab route="letter-protocol">
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

				{{-- Team --}}
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
