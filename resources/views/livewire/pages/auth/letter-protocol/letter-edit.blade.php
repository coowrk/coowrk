<div x-data="{ show: @entangle('modal.show'), customers: @entangle('modal.customers') }" x-on:keyup.escape="$wire.modal.show = false">
    <div aria-modal="true" class="relative z-10" role="dialog" x-cloak x-show="show">

        <div class="fixed inset-0 transition-opacity bg-zinc-900 bg-opacity-80" x-show="show"
            x-transition:enter-end="opacity-100" x-transition:enter-start="opacity-0"
            x-transition:enter="ease-out duration-300" x-transition:leave-end="opacity-0"
            x-transition:leave-start="opacity-100" x-transition:leave="ease-in duration-200"></div>

        <div class="fixed inset-0 z-10 w-screen p-4 overflow-y-auto sm:p-6 md:p-20">
            <div class="max-w-3xl mx-auto overflow-hidden transition-all transform divide-y rounded-lg divide-white/10 bg-zinc-800 ring-1 ring-inset ring-white/10"
                x-on:click.away="$wire.modal.show = false" x-show="show" x-transition:enter-end="opacity-100 scale-100"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter="ease-out duration-300"
                x-transition:leave-end="opacity-0 scale-95" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave="ease-in duration-200">
                <div class="relative">
                    <svg aria-hidden="true" class="pointer-events-none absolute left-4 top-3.5 h-5 w-5 text-zinc-400"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path clip-rule="evenodd"
                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                            fill-rule="evenodd" />
                    </svg>
                    <input aria-controls="options" aria-expanded="false"
                        class="w-full h-12 pr-4 text-white bg-transparent border-0 pl-11 placeholder:text-zinc-400 focus:outline-none focus:ring-0 sm:text-sm"
                        placeholder="Vorname, Nachname des Kunden..." role="combobox" type="text"
                        wire:keyup.debounce.250ms="modalSearch" wire:model="modal.search">
                </div>

                <div wire:loading.remove class="flex divide-x transform-gpu divide-white/10" x-show="customers.length">
                    <!-- Preview Visible: "sm:h-96" -->
                    <div class="flex-auto min-w-0 px-6 py-4 overflow-y-auto max-h-96 scroll-py-4 sm:h-96">
                        <!-- Default state, show/hide based on command palette state. -->
                        <h2 class="mt-2 mb-4 text-xs font-semibold text-zinc-400">Gefundene Kunden</h2>
                        <ul class="-mx-2 text-sm text-white" id="recent" role="listbox">
                            <template x-for="(customer, key) in customers">
                                <!-- Active: "bg-gray-100 text-gray-900" -->
                                <li class="flex items-center justify-between p-2 rounded-md cursor-pointer select-none hover:bg-white/5"
                                    id="recent-1" role="option" tabindex="-1"
                                    wire:click="loadCustomerData(customer)">
                                    <div>
                                        <span class="text-sm text-zinc-400" x-text="customer.salutation"></span>
                                        <span class="truncate"
                                            x-text="customer.first_name + ' ' + customer.last_name"></span>

                                        <div class="text-xs text-zinc-400">
                                            <span x-text="customer.street"></span>
                                            <span x-text="customer.street_number"></span>,
                                            <span x-text="customer.city"></span>
                                            <span x-text="customer.postalcode"></span>,
                                            <span x-text="customer.country"></span>
                                        </div>
                                    </div>

                                    <svg aria-hidden="true" class="flex-none w-5 h-5 ml-3 text-zinc-400"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path clip-rule="evenodd"
                                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                            fill-rule="evenodd" />
                                    </svg>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>

                <div wire:loading.flex class="flex divide-x transform-gpu divide-white/10">
                    <!-- Preview Visible: "sm:h-96" -->
                    <div class="flex-auto min-w-0 px-6 py-4 overflow-y-auto max-h-96 scroll-py-4 sm:h-96">
                        <!-- Default state, show/hide based on command palette state. -->
                        <h2 class="mt-2 mb-4 text-xs font-semibold text-zinc-400">Gefundene Kunden</h2>
                        <ul class="-mx-2 text-sm text-white" id="recent" role="listbox">
                            <!-- Active: "bg-gray-100 text-gray-900" -->
                            <li class="flex items-center justify-between p-2 rounded-md cursor-pointer select-none hover:bg-white/5"
                                id="recent-1" role="option" tabindex="-1" wire:click="loadCustomerData(customer)">
                                <div class="animate-pulse">
                                    <div class="flex gap-1">
                                        <div class="w-16 h-4 rounded-md bg-black/20"></div>
                                        <div class="w-48 h-4 rounded-md bg-black/20"></div>
                                    </div>

                                    <div class="flex gap-1 mt-1">
                                        <div class="h-4 rounded-md w-96 bg-black/20"></div>
                                    </div>
                                </div>

                                <svg aria-hidden="true" class="flex-none w-5 h-5 ml-3 text-zinc-400" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path clip-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        fill-rule="evenodd" />
                                </svg>
                            </li>

                            <li class="flex items-center justify-between p-2 rounded-md cursor-pointer select-none hover:bg-white/5"
                                id="recent-1" role="option" tabindex="-1" wire:click="loadCustomerData(customer)">
                                <div class="animate-pulse">
                                    <div class="flex gap-1">
                                        <div class="w-16 h-4 rounded-md bg-black/20"></div>
                                        <div class="w-40 h-4 rounded-md bg-black/20"></div>
                                    </div>

                                    <div class="flex gap-1 mt-1">
                                        <div class="h-4 rounded-md w-80 bg-black/20"></div>
                                    </div>
                                </div>

                                <svg aria-hidden="true" class="flex-none w-5 h-5 ml-3 text-zinc-400"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path clip-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        fill-rule="evenodd" />
                                </svg>
                            </li>

                            <li class="flex items-center justify-between p-2 rounded-md cursor-pointer select-none hover:bg-white/5"
                                id="recent-1" role="option" tabindex="-1"
                                wire:click="loadCustomerData(customer)">
                                <div class="animate-pulse">
                                    <div class="flex gap-1">
                                        <div class="w-16 h-4 rounded-md bg-black/20"></div>
                                        <div class="h-4 rounded-md w-52 bg-black/20"></div>
                                    </div>

                                    <div class="flex gap-1 mt-1">
                                        <div class="h-4 rounded-md w-72 bg-black/20"></div>
                                    </div>
                                </div>

                                <svg aria-hidden="true" class="flex-none w-5 h-5 ml-3 text-zinc-400"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path clip-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        fill-rule="evenodd" />
                                </svg>
                            </li>

                            <li class="flex items-center justify-between p-2 rounded-md cursor-pointer select-none hover:bg-white/5"
                                id="recent-1" role="option" tabindex="-1"
                                wire:click="loadCustomerData(customer)">
                                <div class="animate-pulse">
                                    <div class="flex gap-1">
                                        <div class="w-16 h-4 rounded-md bg-black/20"></div>
                                        <div class="w-48 h-4 rounded-md bg-black/20"></div>
                                    </div>

                                    <div class="flex gap-1 mt-1">
                                        <div class="h-4 rounded-md w-96 bg-black/20"></div>
                                    </div>
                                </div>

                                <svg aria-hidden="true" class="flex-none w-5 h-5 ml-3 text-zinc-400"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path clip-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        fill-rule="evenodd" />
                                </svg>
                            </li>

                            <li class="flex items-center justify-between p-2 rounded-md cursor-pointer select-none hover:bg-white/5"
                                id="recent-1" role="option" tabindex="-1"
                                wire:click="loadCustomerData(customer)">
                                <div class="animate-pulse">
                                    <div class="flex gap-1">
                                        <div class="w-16 h-4 rounded-md bg-black/20"></div>
                                        <div class="w-40 h-4 rounded-md bg-black/20"></div>
                                    </div>

                                    <div class="flex gap-1 mt-1">
                                        <div class="h-4 rounded-md w-80 bg-black/20"></div>
                                    </div>
                                </div>

                                <svg aria-hidden="true" class="flex-none w-5 h-5 ml-3 text-zinc-400"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path clip-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        fill-rule="evenodd" />
                                </svg>
                            </li>

                            <li class="flex items-center justify-between p-2 rounded-md cursor-pointer select-none hover:bg-white/5"
                                id="recent-1" role="option" tabindex="-1"
                                wire:click="loadCustomerData(customer)">
                                <div class="animate-pulse">
                                    <div class="flex gap-1">
                                        <div class="w-16 h-4 rounded-md bg-black/20"></div>
                                        <div class="h-4 rounded-md w-52 bg-black/20"></div>
                                    </div>

                                    <div class="flex gap-1 mt-1">
                                        <div class="h-4 rounded-md w-72 bg-black/20"></div>
                                    </div>
                                </div>

                                <svg aria-hidden="true" class="flex-none w-5 h-5 ml-3 text-zinc-400"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path clip-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        fill-rule="evenodd" />
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Empty state, show/hide based on command palette state -->
                <div wire:loading.remove class="px-6 text-sm text-center py-14 sm:px-14" x-show="!customers.length">
                    <svg class="mx-auto size-10 stroke-zinc-400" fill="none" height="40px" stroke-width="1.5"
                        viewBox="0 0 24 24" width="40px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 18V17C7 14.2386 9.23858 12 12 12V12C14.7614 12 17 14.2386 17 17V18"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                        <path d="M1 18V17C1 15.3431 2.34315 14 4 14V14" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"></path>
                        <path d="M23 18V17C23 15.3431 21.6569 14 20 14V14" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1.5"></path>
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

                    <div x-show="!customers.length && $wire.modal.search.length >= 3">
                        <p class="mt-4 font-semibold text-white">Kein Kunde gefunden</p>
                        <p class="mt-2 text-zinc-400">Wir konnten keinen Kunden unter diesen Angaben finden.</p>
                    </div>

                    <div x-show="!customers.length && $wire.modal.search.length <= 2">
                        <p class="mt-4 font-semibold text-white">Kundendaten ermitteln</p>
                        <p class="mt-2 text-zinc-400">
                            Ermittel die Kundendaten eines Kunden, anhand seines Vornamen oder Nachnamen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form class="grid gap-10" wire:submit="create">
        <div class="grid grid-cols-1 gap-10 xl:grid-cols-2">
            <div class="grid col-span-1 h-fit gap-y-10">
                <x-pages.auth.letter-protocol.forms.container title="Kunde" description="Test" disclaimer
                    modal-button>
                    <div class="col-span-3">
                        <label
                            class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
                            for="salutation">
                            Anrede
                        </label>

                        <div class="mt-3">
                            <x-forms.dropdown id="salutation" name="salutation" wire:model.blur="salutation"
                                :data="collect([
                                    'Firma' => 'Firma',
                                    'Herr' => 'Herr',
                                    'Frau' => 'Frau',
                                    'Prof.' => 'Prof.',
                                ])" :selected="$salutation" />
                        </div>
                    </div>

                    <div class="col-span-5">
                        <label
                            class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
                            for="first_name">
                            Vorname
                        </label>

                        <div class="mt-3">
                            <x-forms.input id="first_name" name="first_name" wire:model.blur="first_name" />
                        </div>
                    </div>

                    <div class="col-span-4">
                        <label
                            class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
                            for="last_name">
                            Nachname
                        </label>

                        <div class="mt-3">
                            <x-forms.input id="last_name" name="last_name" wire:model.blur="last_name" />
                        </div>
                    </div>
                </x-pages.auth.letter-protocol.forms.container>

                <x-pages.auth.letter-protocol.forms.container title="Anschrift" description="Test" disclaimer>
                    <div class="col-span-10">
                        <label
                            class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
                            for="street">
                            Straße
                        </label>

                        <div class="mt-3">
                            <x-forms.input id="street" name="street" wire:model.blur="street" />
                        </div>
                    </div>
                    <div class="col-span-2">
                        <label
                            class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
                            for="street_number">
                            Hausnummer
                        </label>

                        <div class="mt-3">
                            <x-forms.input id="street_number" name="street_number" wire:model.blur="street_number" />
                        </div>
                    </div>

                    <div class="col-span-2">
                        <label
                            class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
                            for="postalcode">
                            Postleitzahl
                        </label>

                        <div class="mt-3">
                            <x-forms.input id="postalcode" name="postalcode" wire:model.blur="postalcode" />
                        </div>
                    </div>
                    <div class="col-span-6">
                        <label
                            class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
                            for="city">
                            Stadt
                        </label>

                        <div class="mt-3">
                            <x-forms.input id="city" name="city" wire:model.blur="city" />
                        </div>
                    </div>
                    <div class="col-span-4">
                        <label
                            class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
                            for="country">
                            Land
                        </label>

                        <div class="mt-3">
                            <x-forms.input id="country" name="country" wire:model.blur="country" />
                        </div>
                    </div>
                </x-pages.auth.letter-protocol.forms.container>
            </div>

            <div class="col-span-1 h-fit">
                <x-pages.auth.letter-protocol.forms.container title="Brief" description="Test">
                    <div class="col-span-12">
                        <label
                            class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
                            for="topic">
                            Betreff
                        </label>

                        <div class="mt-3">
                            <x-forms.input id="topic" name="topic" wire:model.blur="topic" />
                        </div>
                    </div>

                    <div class="col-span-12">
                        <label
                            class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
                            for="description">
                            Beschreibung
                        </label>

                        <p
                            class="text-base/6 text-zinc-500 data-[disabled]:opacity-50 dark:text-zinc-400 sm:text-sm/6">
                            Use the name you'd like people to see in their cart.
                        </p>

                        <div class="mt-3">
                            <x-forms.textarea id="description" name="description"
                                wire:model.blur="description"></x-forms.textarea>
                        </div>
                    </div>

                    <div class="lg:col-span-8">
                        <h4
                            class="text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6">
                            Sie erhalten den Vorgang
                        </h4>
                        <div class="grid grid-cols-1 mt-3 lg:grid-cols-2">
                            <div class="col-span-1">
                                <x-forms.check name="checked" type="checkbox" id="wiedervorlage"
                                    value="wiedervorlage" wire:model="checked" title="zur Wiedervorlage" />
                            </div>

                            <div class="col-span-1">
                                <x-forms.check name="checked" type="checkbox" id="prufung" value="prufung"
                                    wire:model="checked" title="zur Prüfung" />
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4">
                        <h4
                            class="text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6">
                            Test
                        </h4>
                        <div class="mt-3">
                            <x-forms.check name="checked" type="checkbox" id="unterschrift" value="unterschrift"
                                wire:model="checked" title="zur Unterschrift" />
                            <x-forms.check name="checked" type="checkbox" id="verbleib" value="verbleib"
                                wire:model="checked" title="zum Verbleib" />
                        </div>
                    </div>
                </x-pages.auth.letter-protocol.forms.container>
            </div>
        </div>

        <div class="relative bottom-0 flex justify-end gap-5 p-3 border rounded-lg border-zinc-800">
            <div>
                <x-forms.button type="button" href="{{ route('letter-protocol.show', $letter->slug) }}"
                    theme="third" wire:navigate>Abbrechen</x-forms.button>
            </div>

            <div>
                <x-forms.button>Speichern</x-forms.button>
            </div>
        </div>
    </form>
</div>
