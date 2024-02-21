@if ($paginator->hasPages())
	<div class="mt-10 flex items-center justify-between rounded-lg border border-gray-200 p-3 dark:border-zinc-800">
		<div>
			@if (!$paginator->onFirstPage())
				<x-forms.button
					theme="contrast"
					type="button"
					wire:click="previousPage"
				>
					Zurück
				</x-forms.button>
			@else
				<x-forms.button
					disabled
					theme="contrast"
					type="button"
				>
					Zurück
				</x-forms.button>
			@endif
		</div>
		<div>
			@if (!$paginator->onLastPage())
				<x-forms.button
					theme="contrast"
					type="button"
					wire:click="nextPage"
				>
					Nächste
				</x-forms.button>
			@else
				<x-forms.button
					disabled
					theme="contrast"
					type="button"
				>
					Nächste
				</x-forms.button>
			@endif
		</div>
	</div>
@endif
