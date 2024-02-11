<div
	class="sticky top-0 z-10 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 dark:border-zinc-800 dark:bg-zinc-900 sm:gap-x-6 sm:px-6 lg:px-8"
>
	{{-- Mobile Menu Button --}}
	<button
		class="-m-2.5 p-2.5 text-gray-900 dark:text-white lg:hidden"
		type="button"
		x-on:click="showMobileMenu = true"
	>
		<span class="sr-only">Open sidebar</span>
		<svg
			aria-hidden="true"
			class="h-6 w-6"
			fill="none"
			stroke-width="1.5"
			stroke="currentColor"
			viewBox="0 0 24 24"
		>
			<path
				d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
				stroke-linecap="round"
				stroke-linejoin="round"
			/>
		</svg>
	</button>

	{{-- Seperator --}}
	<div
		aria-hidden="true"
		class="h-full w-px bg-gray-200 dark:bg-zinc-800 lg:hidden"
	></div>

	<div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
		<form
			action="#"
			class="relative flex flex-1"
			method="GET"
		>
			<label
				class="sr-only"
				for="search-field"
			>Search</label>
			<svg
				aria-hidden="true"
				class="pointer-events-none absolute inset-y-0 left-0 h-full w-5 text-gray-500 dark:text-zinc-500"
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
				class="block h-full w-full border-0 bg-transparent py-0 pl-8 pr-0 text-gray-900 placeholder:text-gray-500 focus:outline-none focus:ring-0 dark:text-white dark:placeholder:text-zinc-500 sm:text-sm"
				id="search-field"
				name="search"
				placeholder="Suche..."
				type="search"
			>
		</form>
		<div class="flex items-center gap-x-4 lg:gap-x-6">
			<!-- Separator -->
			<div
				aria-hidden="true"
				class="hidden lg:block lg:h-full lg:w-px lg:bg-gray-200 dark:lg:bg-zinc-800"
			></div>

			<button
				class="-m-2.5 p-2.5 text-gray-500 dark:text-zinc-500 dark:hover:text-white"
				type="button"
			>
				<span class="sr-only">View notifications</span>
				<svg
					aria-hidden="true"
					class="h-6 w-6"
					fill="none"
					stroke-width="1.5"
					stroke="currentColor"
					viewBox="0 0 24 24"
				>
					<path
						d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"
						stroke-linecap="round"
						stroke-linejoin="round"
					/>
				</svg>
			</button>

			<!-- Separator -->
			<div
				aria-hidden="true"
				class="hidden lg:block lg:h-full lg:w-px lg:bg-gray-200 dark:lg:bg-zinc-800"
			></div>

			<!-- Profile dropdown -->
			<div
				class="relative"
				x-data="{ show: false }"
			>
				<button
					aria-expanded="false"
					aria-haspopup="true"
					class="-m-1.5 flex items-center p-1.5"
					id="user-menu-button"
					type="button"
					x-on:click="show = !show"
				>
					<span class="sr-only">Open user menu</span>
					<img
						alt="{{ Auth::user()->name }}"
						class="size-8 rounded-lg"
						src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
					>
					<span class="hidden lg:flex lg:items-center">
						<span class="flex flex-col text-left">
							<span
								aria-hidden="true"
								class="ml-4 text-sm/5 font-medium text-gray-900 dark:text-white"
							>{{ Auth::user()->fullName }}</span>
							<span
								aria-hidden="true"
								class="ml-4 text-xs/5 text-gray-500 dark:text-zinc-500"
							>Administrator</span>
						</span>
						<svg
							aria-hidden="true"
							class="size-4 ml-3 mr-1 shrink-0 stroke-gray-500 dark:stroke-zinc-500"
							fill="none"
							viewBox="0 0 16 16"
						>
							<path
								d="M5.75 10.75L8 13L10.25 10.75"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="1.5"
							></path>
							<path
								d="M10.25 5.25L8 3L5.75 5.25"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="1.5"
							></path>
						</svg>
					</span>
				</button>

				<div
					aria-labelledby="user-menu-button"
					aria-orientation="vertical"
					class="min-w-32 absolute right-0 isolate z-10 mt-2.5 grid w-max origin-top-right grid-cols-1 overflow-y-auto rounded-lg bg-white p-2 text-right ring-1 ring-inset ring-gray-200 dark:bg-zinc-900 dark:ring-zinc-800 sm:mt-1 sm:w-full"
					role="menu"
					tabindex="-1"
					x-cloak
					x-on:click.away="show = false"
					x-show="show"
					x-transition:enter-end="transform opacity-100 scale-100"
					x-transition:enter-start="transform opacity-0 scale-95"
					x-transition:enter="transition ease-out duration-100"
					x-transition:leave-end="transform opacity-0 scale-95"
					x-transition:leave-start="transform opacity-100 scale-100"
					x-transition:leave="transition ease-in duration-75"
				>
					<!-- Active: "bg-gray-50", Not Active: "" -->
					<a
						class="col-span-full block rounded-lg px-3 py-1 text-sm/6 text-gray-500 hover:bg-black/5 hover:text-gray-900 dark:text-zinc-400 dark:hover:bg-white/5 dark:hover:text-white"
						href="#"
						id="user-menu-item-0"
						role="menuitem"
						tabindex="-1"
					>
						Einstellungen
					</a>
					<a
						class="col-span-full rounded-lg px-3 py-1 text-sm/6 text-gray-500 hover:bg-black/5 hover:text-gray-900 dark:text-zinc-400 dark:hover:bg-white/5 dark:hover:text-white"
						href="#"
						id="user-menu-item-1"
						role="menuitem"
						tabindex="-1"
					>Abmelden</a>
				</div>
			</div>
		</div>
	</div>
</div>
