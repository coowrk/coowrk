<div class="hidden lg:fixed lg:inset-y-0 lg:z-10 lg:flex lg:w-72 lg:flex-col">
	<!-- Sidebar component, swap this element with another sidebar if you like -->
	<div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-zinc-950 bg-transparent px-6 pb-4 dark:border-zinc-800 dark:bg-zinc-950">
		<div class="flex h-16 shrink-0 items-center">
			<a class="text-xl font-bold text-white"
				href="{{ route('home') }}"
				wire:navigate>
				Coowrk<span class="text-app-yellow">.</span>
			</a>
		</div>
		<nav class="flex flex-1 flex-col">
			<ul class="flex flex-1 flex-col gap-y-7"
				role="list">
				<li>
					<ul class="-mx-2 space-y-1"
						role="list">
						<li>
							<!-- Current: "bg-gray-50 text-indigo-600", Default: "dark:text-zinc-600 hover:text-indigo-600 hover:bg-gray-50" -->
							<a @class([
								'group flex gap-x-3 rounded-lg p-2 text-sm font-semibold leading-6',
								'dark:text-zinc-400 dark:hover:text-white' => !Route::is('home'),
								'bg-white/5 text-white' => Route::is('home'),
							])
								href="{{ route('home') }}"
								wire:navigate>
								<svg color="currentColor"
									fill="none"
									height="24px"
									stroke-width="1.5"
									stroke="currentColor"
									viewBox="0 0 24 24"
									width="24px"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M17 21H7C4.79086 21 3 19.2091 3 17V10.7076C3 9.30887 3.73061 8.01175 4.92679 7.28679L9.92679 4.25649C11.2011 3.48421 12.7989 3.48421 14.0732 4.25649L19.0732 7.28679C20.2694 8.01175 21 9.30887 21 10.7076V17C21 19.2091 19.2091 21 17 21Z"
										stroke-linecap="round"
										stroke-linejoin="round"
										stroke-width="1.5"></path>
									<path d="M9 17H15"
										stroke-linecap="round"
										stroke-linejoin="round"
										stroke-width="1.5"></path>
								</svg>
								Dashboard
							</a>
						</li>

						<li>
							<!-- Current: "bg-gray-50 text-indigo-600", Default: "dark:text-zinc-600 hover:text-indigo-600 hover:bg-gray-50" -->
							<a @class([
								'group flex gap-x-3 rounded-lg p-2 text-sm font-semibold leading-6',
								'dark:text-zinc-400 dark:hover:text-white' => !Route::is(
									'letter-protocol.*'),
								'bg-white/5 text-white' => Route::is('letter-protocol.*'),
							])
								href="{{ route('letter-protocol.index') }}"
								wire:navigate>
								<svg color="currentColor"
									fill="none"
									height="24px"
									stroke-width="1.5"
									stroke="currentColor"
									viewBox="0 0 24 24"
									width="24px"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M5 9L9.5 12L14 9"
										stroke-linecap="round"
										stroke-linejoin="round"
										stroke-width="1.5"></path>
									<path d="M17 19H3C1.89543 19 1 18.1046 1 17V7C1 5.89543 1.89543 5 3 5H16C17.1046 5 18 5.89543 18 7V9"
										stroke-linecap="round"
										stroke-width="1.5"></path>
									<path d="M17 14H23M23 14L20 11M23 14L20 17"
										stroke-linecap="round"
										stroke-linejoin="round"
										stroke-width="1.5"></path>
								</svg>
								Briefprotokoll
							</a>
						</li>
					</ul>
				</li>
				<li>
					<div class="text-xs font-semibold leading-6 dark:text-zinc-400">Your teams</div>
					<ul class="-mx-2 mt-2 space-y-1"
						role="list">
						<li>
							<!-- Current: "bg-gray-50 text-indigo-600", Default: "dark:text-zinc-600 hover:text-indigo-600 hover:bg-gray-50" -->
							<a class="group flex gap-x-3 rounded-lg p-2 text-sm font-semibold leading-6 hover:bg-white/5 hover:text-white dark:text-zinc-400"
								href="#">
								<span
									class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-zinc-950/10 text-[0.625rem] font-medium group-hover:text-white dark:border-white/10 dark:bg-zinc-800/5 dark:text-zinc-400">H</span>
								<span class="truncate">Heroicons</span>
							</a>
						</li>
						<li>
							<a class="group flex gap-x-3 rounded-lg p-2 text-sm font-semibold leading-6 hover:bg-white/5 hover:text-white dark:text-zinc-400"
								href="#">
								<span
									class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-zinc-950/10 text-[0.625rem] font-medium group-hover:text-white dark:border-white/10 dark:bg-zinc-800/5 dark:text-zinc-400">T</span>
								<span class="truncate">Tailwind Labs</span>
							</a>
						</li>
						<li>
							<a class="group flex gap-x-3 rounded-lg p-2 text-sm font-semibold leading-6 hover:bg-white/5 hover:text-white dark:text-zinc-400"
								href="#">
								<span
									class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-zinc-950/10 text-[0.625rem] font-medium group-hover:text-white dark:border-white/10 dark:bg-zinc-800/5 dark:text-zinc-400">W</span>
								<span class="truncate">Workcation</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="mt-auto">
					<a class="group -mx-2 flex gap-x-3 rounded-lg p-2 text-sm font-semibold leading-6 hover:bg-white/5 hover:text-white dark:text-zinc-400"
						href="#">
						<svg aria-hidden="true"
							class="h-6 w-6 shrink-0 group-hover:text-white dark:text-zinc-400"
							fill="none"
							stroke-width="1.5"
							stroke="currentColor"
							viewBox="0 0 24 24">
							<path
								d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"
								stroke-linecap="round"
								stroke-linejoin="round" />
							<path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
								stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
						Settings
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
