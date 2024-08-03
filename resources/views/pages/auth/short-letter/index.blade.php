<div>
	<div class="flex w-full flex-wrap items-end justify-between gap-4 pb-6">
		<x-typography.title.h1 title="Kurzbriefe" />

		<div>
			<x-forms.buttons.white
				href="{{ route('shortletter.create') }}"
				type="button"
				wire:navigate
			>
				<svg
					aria-hidden="true"
					class="size-4 text-zinc-500"
					fill="currentColor"
					viewBox="0 0 16 16"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"
					></path>
				</svg>

				Erstellen
			</x-forms.buttons.white>
		</div>
	</div>


	<x-tables.base>
		<x-tables.head>
			<x-tables.head.row>
				<x-tables.head.cell title="Empfänger" />
				<x-tables.head.cell title="Betreff" />
				<x-tables.head.cell title="Status" />
				<x-tables.head.cell
					text-right
					title="Aktion"
				/>
			</x-tables.head.row>
		</x-tables.head>
		<x-tables.body>
			@foreach ($short_letters as $short_letter)
				<x-tables.body.row>
					<x-tables.body.cell>
						<span class="text-zinc-400">{{ $short_letter->salutation }}</span>
						{{ $short_letter->first_name }}
						{{ $short_letter->last_name }}
					</x-tables.body.cell>
					<x-tables.body.cell class="text-zinc-500">
						{{ $short_letter->reason }}
					</x-tables.body.cell>
					<x-tables.body.cell class="text-zinc-500">
						Nail Ucdu
					</x-tables.body.cell>
					<x-tables.body.cell class="text-right text-zinc-500">
						<div class="flex justify-end">
							<svg
								class="size-4"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z"
								/>
								<path
									d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z"
								/>
							</svg>
						</div>
					</x-tables.body.cell>
				</x-tables.body.row>
			@endforeach
		</x-tables.body>
	</x-tables.base>
</div>
