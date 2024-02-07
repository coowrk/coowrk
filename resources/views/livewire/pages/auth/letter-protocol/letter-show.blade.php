<div class="grid gap-10">
    <div class="grid grid-cols-1 gap-10 xl:grid-cols-2">
        <div class="grid col-span-1 h-fit gap-y-10">
            <x-pages.auth.letter-protocol.forms.container title="Empfänger" description="Test">
                <div class="col-span-12 -my-3">
                    <dl class="divide-y divide-white/5">
                        <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="font-medium text-sm/6 text-zinc-400">Name</dt>
                            <dd class="mt-1 text-white text-sm/6 sm:col-span-2 sm:mt-0">
                                <p class="font-medium text-sm/6 text-zinc-400">{{ $letter->salutation }}</p>
                                <p>{{ $letter->full_name }}</p>
                            </dd>
                        </div>
                        <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="font-medium text-sm/6 text-zinc-400">Straße</dt>
                            <dd class="mt-1 text-white text-sm/6 sm:col-span-2 sm:mt-0">
                                <p>{{ $letter->street }} {{ $letter->street_number }}</p>
                                <p>{{ $letter->postalcode }} {{ $letter->city }}</p>
                                <p>{{ $letter->country }}</p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </x-pages.auth.letter-protocol.forms.container>

            <x-pages.auth.letter-protocol.forms.container title="Brief" description="Test">
                <div class="col-span-12 -my-3">
                    <dl class="divide-y divide-white/5">
                        <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="font-medium text-sm/6 text-zinc-400">Betreff</dt>
                            <dd class="mt-1 text-white text-sm/6 sm:col-span-2 sm:mt-0">
                                <p>{{ $letter->topic }}</p>
                            </dd>
                        </div>
                        <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="font-medium text-sm/6 text-zinc-400">Beschreibung</dt>
                            <dd class="mt-1 text-white text-sm/6 sm:col-span-2 sm:mt-0">
                                <p>{{ $letter->description }}</p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </x-pages.auth.letter-protocol.forms.container>
        </div>
        <div class="col-span-1">
            <x-pages.auth.letter-protocol.forms.container title="Feed" description="Test">
                <div class="col-span-12">
                    <ul role="list" class="space-y-6">
                        {{-- Feeds --}}
                        @foreach ($letter->feed as $feed)
                            {{-- Text feed --}}
                            @if ($feed->keyword != 'comment')
                                <li class="relative flex gap-x-4">
                                    {{-- Create feed icon --}}
                                    @if ($feed->keyword == 'created')
                                        <div class="absolute top-0 left-0 flex justify-center w-6 h-6">
                                            <div class="w-px bg-white/10"></div>
                                        </div>
                                        <div
                                            class="relative flex items-center justify-center flex-none w-6 h-6 rounded-full ring-4 ring-zinc-900 ring-offset-0 bg-zinc-900">
                                            <svg class="w-6 h-6 text-app-yellow" viewBox="0 0 24 24" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        {{-- Other feed icon --}}
                                    @else
                                        <div class="absolute top-0 left-0 flex justify-center w-6 -bottom-6">
                                            <div class="w-px bg-white/10"></div>
                                        </div>
                                        <div
                                            class="relative flex items-center justify-center flex-none w-6 h-6 bg-zinc-900">
                                            <div class="h-1.5 w-1.5 rounded-full bg-zinc-900 ring-1 ring-white">
                                            </div>
                                        </div>
                                    @endif
                                    {{-- Feed created by and comment --}}
                                    <p class="flex-auto py-0.5 text-xs/5 text-zinc-400">
                                        <span class="font-medium text-white">
                                            {{ $feed->user->first_name }}
                                            {{ $feed->user->last_name }}
                                        </span>

                                        @switch($feed->keyword)
                                            @case('created')
                                                Test
                                            @break

                                            @case('updated')
                                                lol
                                            @break

                                            @default
                                                Test11
                                        @endswitch
                                    </p>
                                    <time datetime="{{ $feed->created_at }}"
                                        class="flex-none py-0.5 text-xs/5 text-zinc-400">
                                        {{ $feed->created_at->diffForHumans() }}
                                    </time>
                                </li>
                                {{-- Feed user comment --}}
                            @else
                                <li class="relative flex gap-x-4">
                                    <div class="absolute top-0 left-0 flex justify-center w-6 -bottom-6">
                                        <div class="w-px bg-white/10"></div>
                                    </div>
                                    <img src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt=""
                                        class="relative flex-none w-6 h-6 rounded-full ring-4 ring-zinc-900 ring-offset-0 bg-gray-50">
                                    {{-- Feed created by and comment --}}
                                    <div class="flex-auto p-3 rounded-lg ring-1 ring-inset ring-white/10">
                                        <div class="flex justify-between gap-x-4">
                                            <div class="py-0.5 text-xs/5 text-zinc-400"><span
                                                    class="font-medium text-white">
                                                    {{ $feed->user->first_name }}
                                                    {{ $feed->user->last_name }}
                                                </span> kommentierte
                                            </div>
                                            <time datetime="{{ $feed->created_at }}"
                                                class="flex-none py-0.5 text-xs/5 text-zinc-400">{{ $feed->created_at->diffForHumans() }}</time>
                                        </div>
                                        <p class="text-gray-500 text-sm/6">
                                            {{ $feed->comment }}
                                        </p>
                                    </div>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </div>
            </x-pages.auth.letter-protocol.forms.container>
        </div>
    </div>

    <div class="relative bottom-0 flex items-center justify-between gap-5 p-3 border rounded-lg border-zinc-800">
        <div>
            <x-forms.button type="button" href="{{ route('letter-protocol.index') }}" theme="delete" wire:navigate>
                Löschen
            </x-forms.button>
        </div>

        <div class="flex items-center gap-5">
            <x-forms.button type="button" href="{{ route('letter-protocol.index') }}" theme="third" wire:navigate>
                Zurück
            </x-forms.button>

            <x-forms.button type="button" href="{{ route('letter-protocol.edit', $letter->slug) }}" wire:navigate>
                Bearbeiten
            </x-forms.button>
        </div>
    </div>

</div>
