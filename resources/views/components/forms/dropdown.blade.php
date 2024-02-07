<div class="relative flex items-center" x-data="{ show: false }">
    {{-- Open select menu --}}
    <div x-on:click="show = !show" class="absolute z-10 w-full h-full cursor-pointer"></div>

    {{-- Input field --}}
    <x-forms.input {{ $attributes->filter(fn($value, $key) => $key != 'data') }} />

    {{-- Dropdown icon --}}
    <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5"
        class="absolute pointer-events-none right-[calc(theme(spacing[1.5])-1px)] size-4 stroke-zinc-400" fill="none"
        xmlns="http://www.w3.org/2000/svg" color="#000000">
        <path d="M17 8L12 3L7 8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        </path>
        <path d="M17 16L12 21L7 16" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        </path>
    </svg>

    {{-- Select menu --}}
    <ul x-show="show" x-on:click.away="show = false"
        class="absolute z-10 w-full py-1 overflow-auto text-base translate-y-full rounded-md shadow-lg -bottom-1 bg-zinc-800 max-h-60 ring-1 ring-white/10 ring-inset ring-opacity-5 focus:outline-none sm:text-sm"
        tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">

        {{-- Items --}}
        @foreach ($attributes->get('data') as $value => $option)
            <li x-on:click="$wire.{{ $attributes->get('name') }} = '{{ $value }}'; show = false"
                class="relative py-2 pl-8 pr-4 cursor-pointer select-none hover:bg-white/5" id="listbox-option-0"
                role="option">
                <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                <span
                    :class="($wire.{{ $attributes->get('name') }} == '{{ $value }}') ? 'font-medium text-white' :
                    'font-normal text-zinc-400'"
                    class="block truncate">{{ $option }}</span>

                <span x-show="$wire.{{ $attributes->get('name') }} == '{{ $value }}'"
                    class="text-app-yellow absolute inset-y-0 left-0 flex items-center pl-1.5">
                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </li>
        @endforeach
    </ul>
</div>
