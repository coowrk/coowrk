<div>
	{{-- head --}}
	<div class="flex w-full flex-wrap items-end justify-between gap-4">
		<x-typography.title.h1 title="Maklervollmacht" />
		<div>
			<x-button
				href="{{ route('service-tool.broker-authority.create') }}"
				type="button"
				wire:navigate
			>
				<svg
					class="size-5 sm:size-4 text-zinc-400"
					fill="currentColor"
					viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z"
					/>
				</svg>

				Erstellen
			</x-button>
		</div>
	</div>

</div>
