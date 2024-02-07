@if ($paginator->hasPages())
    <div class="flex items-center justify-between p-3 mt-10 border rounded-lg border-zinc-800">
        <div>
            @if (!$paginator->onFirstPage())
                <x-forms.button type="button" wire:click="previousPage" theme="third">
                    Zurück
                </x-forms.button>
            @else
                <x-forms.button type="button" disabled theme="third">
                    Zurück
                </x-forms.button>
            @endif
        </div>
        <div>
            @if (!$paginator->onLastPage())
                <x-forms.button type="button" wire:click="nextPage" theme="third">
                    Nächste
                </x-forms.button>
            @else
                <x-forms.button type="button" disabled theme="third">
                    Nächste
                </x-forms.button>
            @endif
        </div>
    </div>
@endif
