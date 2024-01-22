{{-- Layout --}}
@extends('root')

{{-- Content --}}
@section('content')
    <div class="flex flex-col justify-center min-h-full px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h1 class="text-3xl font-bold text-center dark:text-app-yellow text-zinc-950">Coowrk.</h1>
            <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-center text-zinc-500 dark:text-white">
                Melde dich in deinem Konto an
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="#" method="POST">
                @csrf

                <div class="space-y-6">
                    <x-forms.input name="mail" labelName="E-Mail Adresse" />

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password"
                                class="select-none text-base/6 text-zinc-950 data-[disabled]:opacity-50 sm:text-sm/6 dark:text-white">Passwort</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-app-yellow hover:text-app-yellow/90">
                                    Passwort vergessen?
                                </a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <x-forms.headless-input name="password" type="password" />
                        </div>
                    </div>

                    <div>
                        <x-forms.button type="submit">
                            Anmelden
                        </x-forms.button>
                    </div>
                </div>
            </form>

            <p class="mt-10 text-sm text-center text-gray-500">
                Kein Mitglied?
                <a href="#" class="font-semibold leading-6 text-app-yellow hover:text-app-yellow/90">
                    Einwöchige Testphase starten
                </a>
            </p>
        </div>
    </div>
@endsection
