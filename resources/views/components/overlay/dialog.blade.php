<x-overlay.base>
	<div class="fixed inset-0 w-screen overflow-y-auto pt-6 sm:pt-0">
		<div class="grid min-h-full grid-rows-[1fr_auto] justify-items-center sm:grid-rows-[1fr_auto_3fr] sm:p-4">
			<div
				class="forced-colors:outline row-start-2 w-full min-w-0 rounded-t-3xl bg-white p-8 shadow-lg ring-1 ring-zinc-950/10 transition duration-100 dark:bg-zinc-900 dark:ring-white/10 sm:mb-auto sm:max-w-lg sm:rounded-2xl"
				x-cloak
				x-on:click.away="show = false"
				x-show="show"
				x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
				x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
				x-transition:enter="ease-out duration-300"
				x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
				x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
				x-transition:leave="ease-out duration-200"
			>
				{{ $slot }}
			</div>
		</div>
	</div>
</x-overlay.base>
