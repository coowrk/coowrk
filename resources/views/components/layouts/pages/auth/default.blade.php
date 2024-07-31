<x-root>
	<div
		class="min-h-svh relative isolate flex w-full bg-white dark:bg-zinc-900 max-lg:flex-col lg:bg-zinc-100 dark:lg:bg-zinc-950"
	>
		{{-- sidebar --}}
		<x-layouts.pages.auth.default.navigation />

		{{-- main --}}
		<main class="flex flex-1 flex-col pb-2 lg:min-w-0 lg:pl-64 lg:pr-2 lg:pt-2">
			<div
				class="grow p-6 lg:rounded-lg lg:bg-white lg:p-10 lg:shadow-sm lg:ring-1 lg:ring-zinc-950/5 dark:lg:bg-zinc-900 dark:lg:ring-white/10"
			>
				<div class="mx-auto max-w-6xl">
					{{-- content --}}
					{{ $slot }}
				</div>
			</div>
		</main>
	</div>
</x-root>
