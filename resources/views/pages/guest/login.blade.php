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
            <livewire:pages.guest.login />

            <p class="mt-10 text-sm text-center text-gray-500">
                Kein Mitglied?
                <a href="#" class="font-semibold leading-6 text-app-yellow hover:text-app-yellow/90">
                    Einwöchige Testphase starten
                </a>
            </p>
        </div>
    </div>
@endsection
