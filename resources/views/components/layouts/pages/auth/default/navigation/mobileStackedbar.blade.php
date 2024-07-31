<header class="flex items-center px-4 lg:hidden">
	<div class="py-2.5">
		<span class="relative">
			<button
				class="flex cursor-default items-center gap-3 rounded-lg px-2 py-2.5 hover:bg-white/5 sm:py-2"
				x-on:click="showMobileSidebar = !showMobileSidebar"
			>
				<span
					aria-hidden="true"
					class="size-[max(100%,2.75rem)] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 [@media(pointer:fine)]:hidden"
				></span>
				<svg
					class="size-6 fill-zinc-400"
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
	<div class="min-w-0 flex-1">
		<nav class="flex flex-1 items-center gap-4 py-2.5">
			<div
				aria-hidden="true"
				class="-ml-4 flex-1"
			></div>
			<div class="flex items-center gap-3">
				<button
					class="group relative flex cursor-default items-center gap-3 rounded-lg px-2 py-2.5 hover:bg-white/5 sm:py-2"
				>
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

					{{-- <span
						class="absolute inset-x-2 -bottom-2.5 h-0.5 rounded-full bg-zinc-950 dark:bg-white"
						style="opacity: 1;"
					></span> --}}
				</button>

				<button
					class="group relative flex cursor-default items-center gap-3 rounded-lg px-2 py-2.5 hover:bg-white/5 sm:py-2"
				>
					<span class="size-6 inline-flex shrink-0 items-center justify-center rounded-lg bg-white/10">
						<span class="text-xs font-medium leading-none text-white">NU</span>
					</span>
				</button>
			</div>
		</nav>
	</div>
</header>
