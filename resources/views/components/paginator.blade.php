@if ($paginator->hasPages())
    <div class="flex items-center justify-between p-3 mt-5 border rounded-lg border-white/5">
        <div>
            @if (!$paginator->onFirstPage())
                <x-forms.button wire:click="previousPage" style="third">
                    Zurück
                </x-forms.button>
            @else
                <x-forms.button disabled style="third">
                    Zurück
                </x-forms.button>
            @endif
        </div>
        <div>
            @if (!$paginator->onLastPage())
                <x-forms.button wire:click="nextPage" style="third">
                    Nächste
                </x-forms.button>
            @else
                <x-forms.button disabled style="third">
                    Nächste
                </x-forms.button>
            @endif
        </div>
    </div>
@endif
