<x-overlay.dialog>
	<x-typography.title.h2 title="Änderung eintragen" />
	<div class="mt-2">
		<x-typography.text>
			Aktualisiere den Status des Kurzbriefs oder füge einen Kommentar hinzu, wenn sich der Kunde gemeldet hat oder sich
			die Umstände geändert haben.
		</x-typography.text>
	</div>

	<form wire:submit="addDiaryEntry">
		<div class="mt-6">
			<x-typography.title.h3 title="Status" />

			<div class="mt-4 flex flex-wrap gap-4">
				@foreach ($status_options as $option)
					<x-button
						theme="{{ $option['id'] == $this->new_status ? 'blue' : 'blank' }}"
						type="button"
						wire:click="setStatus('{{ $option['id'] }}')"
					>
						<svg
							class="size-5 sm:size-4"
							fill="currentColor"
							viewBox="0 0 20 20"
							xmlns="http://www.w3.org/2000/svg"
						>
							{!! $option['icon'] !!}
						</svg>

						{{ $option['title'] }}
					</x-button>
				@endforeach
			</div>
		</div>

		<div class="mt-6">
			<x-typography.title.h3 title="Kommentar" />

			<x-formular.textarea
				for="comment"
				title="comment"
			/>
		</div>

		<div class="mt-6 flex justify-end gap-4">
			<x-button
				theme="blank"
				type="button"
				x-on:click="show = false"
			>
				Abbrechen
			</x-button>

			<x-button>
				Eintragen
			</x-button>
		</div>
	</form>
</x-overlay.dialog>
