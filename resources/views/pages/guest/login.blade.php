{{-- Layout --}}
@extends('layouts.guest.default')

{{-- Content --}}
@section('content')
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h1 class="text-3xl font-bold text-center text-zinc-950 dark:text-app-yellow">Coowrk.</h1>
        <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-center text-zinc-400 dark:text-white">
            Melde dich in deinem Konto an
        </h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <livewire:pages.guest.login />

        <p class="mt-10 text-sm text-center text-zinc-400">
            Kein Mitglied?
            <a class="font-semibold leading-6 text-app-yellow hover:text-app-yellow/90" href="#">
                Einwöchige Testphase starten
            </a>
        </p>
    </div>
@endsection
