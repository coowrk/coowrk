<div>
    <div class="flex justify-between mt-5">
        <div>
            <x-forms.input wire:model="search" wire:keyup.debounce.250ms="searchLetters" />
        </div>

        <div>
            <x-forms.buttonAsLink href="{{ route('letter-protocol.create') }}" wire:navigate>
                Brief erstellen
            </x-forms.buttonAsLink>
        </div>
    </div>
    @if (!$letters->isEmpty())
        <div class="mt-5 border rounded-lg border-zinc-800">
            <table class="w-full text-left whitespace-nowrap">
                <colgroup>
                    <col class="w-full sm:w-4/12">
                    <col class="lg:w-4/12">
                    <col class="lg:w-2/12">
                    <col class="lg:w-1/12">
                </colgroup>
                <thead class="text-sm leading-6 text-white border-b border-zinc-950/10 dark:border-zinc-800">
                    <tr>
                        <th class="py-4 pl-4 pr-8 font-semibold sm:pl-6 lg:pl-8" scope="col">Name</th>
                        <th class="hidden py-4 pl-0 pr-8 font-semibold sm:table-cell" scope="col">Thematik</th>
                        <th class="hidden py-4 pl-0 pr-8 font-semibold md:table-cell lg:pr-20" scope="col">Erstellt
                        </th>
                        <th class="hidden py-4 pl-0 pr-4 font-semibold text-right sm:table-cell sm:pr-6 lg:pr-8"
                            scope="col">Aktionen</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @foreach ($letters as $letter)
                        <tr wire:key="letter-{{ $letter->id }}">
                            <td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
                                <div class="text-sm font-medium leading-6 text-white truncate">
                                    {{ $letter->customer->first_name }} {{ $letter->customer->last_name }}</div>
                            </td>
                            <td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
                                <div class="text-sm leading-6 text-zinc-400">{{ $letter->topic }}</div>
                            </td>
                            <td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-zinc-400 md:table-cell lg:pr-20">
                                <time datetime="2023-01-23T11:00">{{ $letter->created_at->diffForHumans() }}</time>
                            </td>
                            <td class="flex justify-end py-4 pl-0 pr-4 text-sm leading-6 text-zinc-400 sm:pr-6 lg:pr-8">
                                <svg class="cursor-pointer size-6 stroke-zinc-400 hover:stroke-white" fill="none"
                                    height="24px" stroke-width="1.5" viewBox="0 0 24 24" width="24px"
                                    wire:click="edit('{{ $letter->id }}')" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.3632 5.65156L15.8431 4.17157C16.6242 3.39052 17.8905 3.39052 18.6716 4.17157L20.0858 5.58579C20.8668 6.36683 20.8668 7.63316 20.0858 8.41421L18.6058 9.8942M14.3632 5.65156L4.74749 15.2672C4.41542 15.5993 4.21079 16.0376 4.16947 16.5054L3.92738 19.2459C3.87261 19.8659 4.39148 20.3848 5.0115 20.33L7.75191 20.0879C8.21972 20.0466 8.65806 19.8419 8.99013 19.5099L18.6058 9.8942M14.3632 5.65156L18.6058 9.8942"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                </svg>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
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
                <h2 class="mt-2 font-semibold text-white text-base/6">Add team members</h2>
                <p class="mt-1 text-sm text-zinc-400">You haven’t added any team members to your project yet. As the
                    owner of this project, you can manage team member permissions.</p>
                <div class="flex items-center justify-center mt-5">
                    <x-forms.buttonAsLink href="{{ route('letter-protocol.create') }}" wire:navigate>Briefprotokoll
                        erstellen
                    </x-forms.buttonAsLink>
                </div>
            </div>
        </div>
    @endif
</div>
