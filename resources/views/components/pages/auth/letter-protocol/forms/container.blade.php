<div x-data="{ show: true }">
    <div class="flex items-center justify-between p-3 border rounded-lg border-zinc-800">
        <div>
            <h3 class="text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6">
                {{ $attributes->get('title') }}
            </h3>
            <p class="text-base/6 text-zinc-500 data-[disabled]:opacity-50 dark:text-zinc-400 sm:text-sm/6">
                {{ $attributes->get('description') }}
            </p>
        </div>

        <div class="flex items-center gap-5">
            @if ($attributes->has('modal-button'))
                <x-forms.button theme="second" type="button" x-on:click="$wire.modal.show = true">
                    Kunde ermitteln
                </x-forms.button>
            @endif

            <div x-on:click="show = !show"
                class="flex items-center justify-center w-[34px] h-[34px] rounded-lg cursor-pointer hover:bg-zinc-700 bg-zinc-800 transition-colors shrink-0">
                <svg width="24px" height="24px" class="stroke-white" stroke-width="1.5" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path x-show="!show" d="M6 9L12 15L18 9" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path x-show="show" x-cloak d="M6 15L12 9L18 15" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </div>
        </div>
    </div>
    <div x-show="show" class="grid grid-cols-4 p-3 rounded-lg gap-x-5 gap-y-3 lg:grid-cols-12">
        {{ $slot }}
        @if ($attributes->has('disclaimer'))
            <div class="col-span-12">
                <p class="text-base/6 text-zinc-500 data-[disabled]:opacity-50 dark:text-zinc-400 sm:text-xs/4">
                    Die eingegebenen Daten werden automatisch gespeichert, um zukünftige Abläufe
                    effizienter zu gestalten.
                </p>
            </div>
        @endif
    </div>
</div>
