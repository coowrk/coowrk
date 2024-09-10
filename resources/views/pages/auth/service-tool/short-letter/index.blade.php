<div>
	{{-- head --}}
	<div class="flex w-full flex-wrap items-end justify-between gap-4">
		<x-typography.title.h1 title="Kurzbriefe" />

		<div>
			<x-button
				href="{{ route('service-tool.short-letter.create') }}"
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

	<div class="mt-12">
		<div class="grid gap-4 sm:grid-cols-6">
			<div class="col-span-1">
				<x-formular.select
					:options="[
					    'first_name' => 'Vorname',
					    'last_name' => 'Nachname',
					    'reason' => 'Betreff',
					]"
					for="search_option"
					wire:change="updateSearchQuery"
				>
				</x-formular.select>
			</div>

			<div class="col-span-1 sm:col-span-5">
				<x-formular.input
					for="search"
					placeholder="Suche Kurzbriefe..."
					wire:keyup.debounce.500ms="updateSearchQuery"
				/>
			</div>
		</div>
	</div>

	{{-- table --}}
	<div class="mt-6">
		<x-table.base>
			<x-table.head>
				<x-table.head.row>
					<x-table.head.cell title="Empfänger" />
					<x-table.head.cell title="Betreff" />
					<x-table.head.cell title="Status" />
					<x-table.head.cell
						text-right
						title="Erstellt"
					/>
				</x-table.head.row>
			</x-table.head>
			<x-table.body>
				@foreach ($short_letters as $short_letter)
					<x-table.body.row>
						<x-table.body.cell href="{{ route('service-tool.short-letter.show', $short_letter->id) }}">
							<div class="flex">
								<div class="w-14 text-zinc-500 dark:text-zinc-400">{{ $short_letter->salutation }}</div>
								{{ $short_letter->first_name }}
								{{ $short_letter->last_name }}
							</div>
						</x-table.body.cell>
						<x-table.body.cell
							class="text-zinc-500 dark:text-zinc-400"
							href="{{ route('service-tool.short-letter.show', $short_letter->id) }}"
						>
							{{ $short_letter->reason }}
						</x-table.body.cell>
						<x-table.body.cell
							class="text-zinc-500 dark:text-zinc-400"
							href="{{ route('service-tool.short-letter.show', $short_letter->id) }}"
						>
							<x-badge
								text="{{ $short_letter->status_badge()['title'] }}"
								theme="{{ $short_letter->status_badge()['theme'] }}"
							/>
						</x-table.body.cell>
						<x-table.body.cell
							class="text-right text-zinc-500 dark:text-zinc-400"
							href="{{ route('service-tool.short-letter.show', $short_letter->id) }}"
						>
							{{ $short_letter->created_at->diffForHumans() }}
						</x-table.body.cell>
					</x-table.body.row>
				@endforeach
			</x-table.body>
		</x-table.base>
	</div>

	{{-- pagination --}}
	<div class="mt-12">
		{{ $short_letters->links('components.pagination.default') }}
	</div>
</div>
