<form wire:submit="submit" method="POST">
    @csrf

    <div class="space-y-6">
        <div>
            <label for="mail"
                class="select-none font-medium text-base/6 text-zinc-950 data-[disabled]:opacity-50 sm:text-sm/6 dark:text-white">
                E-Mail Adresse
            </label>

            <div class="mt-3">
                <x-forms.input name="mail" type="mail" wire:model="mail" />
            </div>
        </div>


        <div>
            <div class="flex items-center justify-between">
                <label for="password"
                    class="select-none text-base/6 text-zinc-950 data-[disabled]:opacity-50 sm:text-sm/6 dark:text-white font-medium">Passwort</label>
                <div class="text-sm">
                    <a href="#" class="font-semibold text-app-yellow hover:text-app-yellow/90">
                        Passwort vergessen?
                    </a>
                </div>
            </div>

            <div class="mt-3">
                <x-forms.input name="password" type="password" wire:model="password" />
            </div>
        </div>

        <div>
            <x-forms.button type="submit">
                Anmelden
            </x-forms.button>
        </div>
    </div>
</form>
