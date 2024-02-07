<div>
    <div class="border rounded-lg border-zinc-800">
        {{-- Table --}}
        <table class="w-full text-left whitespace-nowrap">
            {{-- Grid --}}
            <colgroup>
                <col class="w-full sm:w-4/12">
                <col class="lg:w-4/12">
                <col class="lg:w-2/12">
                <col class="lg:w-2/12">
            </colgroup>

            {{-- Search Header --}}
            <thead class="text-sm/6 ">
                <tr>
                    <td colspan="3" class="relative pl-4 pr-8 lg:pl-12">
                        <div class="absolute flex items-center justify-center h-full left-8">
                            <svg aria-hidden="true"
                                class="absolute inset-y-0 left-0 w-5 h-full pointer-events-none dark:text-zinc-400"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path clip-rule="evenodd"
                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <x-forms.input theme="transparent" style="sm:py-4 sm:px-4 dark:placeholder:text-zinc-400"
                            id="search" placeholder="Suche nach Name oder Betreff..." wire:model="search"
                            wire:keyup.debounce.250ms="searchLetters" />
                    </td>
                </tr>
            </thead>

            @if (!$letters->isEmpty())
                {{-- Table Header --}}
                <thead class="text-white border-y text-sm/6 border-zinc-800">
                    <tr>
                        <th class="py-4 pl-4 pr-8 lg:pl-8">Name</th>
                        <th class="py-4 pr-8">Betreff</th>
                        <th class="hidden py-4 pr-8 md:table-cell">Status</th>
                        <th class="py-4 pr-4 text-right lg:pr-8">Erstellt</th>
                    </tr>
                </thead>

                {{-- Table Data --}}
                <tbody class="divide-y text-sm/6 divide-zinc-800 text-zinc-400">
                    @foreach ($letters as $letter)
                        <tr class="cursor-pointer"
                            x-on:click="Livewire.navigate('{{ route('letter-protocol.show', $letter->slug) }}')">
                            <td class="py-4 pl-4 pr-8 lg:pl-8">
                                <p class="text-sm/6">{{ $letter->salutation }}</p>
                                <p class="font-medium text-white">{{ $letter->full_name }}</p>
                            </td>
                            <td class="py-4 pr-8">
                                <p>{{ $letter->topic }}</p>
                            </td>
                            <td class="hidden py-4 pr-8 md:table-cell">
                                @switch($letter->status)
                                    @case(0)
                                        <x-badge>Ausstehend</x-badge>
                                    @break

                                    @case(1)
                                        <x-badge theme="yellow">Versendet</x-badge>
                                    @break

                                    @case(2)
                                        <x-badge theme="lime">Angekommen</x-badge>
                                    @break

                                    @default
                                        <x-badge>Ausstehend</x-badge>
                                @endswitch
                            </td>
                            <td class="py-4 pr-4 text-right lg:pr-8">
                                <time
                                    datetime="{{ $letter->created_at }}">{{ $letter->created_at->diffForHumans() }}</time>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endif
        </table>
    </div>

    @if ($letters->isEmpty())
        <div class="max-w-lg mx-auto mt-10">
            <div class="text-center">
                <svg class="mx-auto size-10 stroke-zinc-400" fill="none" height="40px" stroke-width="1.5"
                    viewBox="0 0 24 24" width="40px" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 18V17C7 14.2386 9.23858 12 12 12V12C14.7614 12 17 14.2386 17 17V18"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                    <path d="M1 18V17C1 15.3431 2.34315 14 4 14V14" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"></path>
                    <path d="M23 18V17C23 15.3431 21.6569 14 20 14V14" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"></path>
                    <path
                        d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                    <path
                        d="M4 14C5.10457 14 6 13.1046 6 12C6 10.8954 5.10457 10 4 10C2.89543 10 2 10.8954 2 12C2 13.1046 2.89543 14 4 14Z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                    <path
                        d="M20 14C21.1046 14 22 13.1046 22 12C22 10.8954 21.1046 10 20 10C18.8954 10 18 10.8954 18 12C18 13.1046 18.8954 14 20 14Z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                </svg>
                <h2 class="mt-2 font-semibold text-white text-base/6">Ganz schön leer hier...</h2>
                <p class="mt-1 text-sm/5 text-zinc-400">You haven’t added any team members to your project yet. As the
                    owner of this project, you can manage team member permissions.</p>
                <div class="flex items-center justify-center mt-5">
                    <x-forms.button type="button" href="{{ route('letter-protocol.create') }}" wire:navigate>
                        Briefprotokoll erstellen
                    </x-forms.button>
                </div>
            </div>
        </div>
    @endif

    {{ $letters->links('components.paginator') }}
</div>
