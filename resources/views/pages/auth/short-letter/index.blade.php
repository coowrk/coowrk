<div>
	<div class="flex w-full flex-wrap items-end justify-between gap-4">
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


	<div class="mt-12">
		<x-tables.base>
			<x-tables.head>
				<x-tables.head.row>
					<x-tables.head.cell title="Empfänger" />
					<x-tables.head.cell title="Betreff" />
					<x-tables.head.cell title="Status" />
					<x-tables.head.cell
						text-right
						title="Erstellt"
					/>
				</x-tables.head.row>
			</x-tables.head>
			<x-tables.body>
				@foreach ($short_letters as $short_letter)
					<x-tables.body.row>
						<x-tables.body.cell href="{{ route('shortletter.show', $short_letter->id) }}">
							<div class="flex">
								<div class="w-14 text-zinc-500">{{ $short_letter->salutation }}</div>
								{{ $short_letter->first_name }}
								{{ $short_letter->last_name }}
							</div>
						</x-tables.body.cell>
						<x-tables.body.cell
							class="text-zinc-500"
							href="{{ route('shortletter.show', $short_letter->id) }}"
						>
							{{ $short_letter->reason }}
						</x-tables.body.cell>
						<x-tables.body.cell
							class="text-zinc-500"
							href="{{ route('shortletter.show', $short_letter->id) }}"
						>
							<x-badges.red text="Versand steht aus" />
						</x-tables.body.cell>
						<x-tables.body.cell
							class="text-right text-zinc-500"
							href="{{ route('shortletter.show', $short_letter->id) }}"
						>
							{{ $short_letter->created_at->diffForHumans() }}
						</x-tables.body.cell>
					</x-tables.body.row>
				@endforeach
			</x-tables.body>
		</x-tables.base>
	</div>

	<div class="mt-12">
		{{ $short_letters->links('components.pagination.default') }}
	</div>
</div>
