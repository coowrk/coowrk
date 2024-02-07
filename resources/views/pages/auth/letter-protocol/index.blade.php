{{-- Layout --}}
@extends('layouts.auth.default')

{{-- Breadcrumb --}}
@section('breadcrumb')
    {{ Breadcrumbs::render('letter-protocol') }}
@endsection

{{-- Title --}}
@section('title')
    <h2 class="font-semibold text-white text-base/6">Briefprotokoll</h2>
@endsection

{{-- Button --}}
@section('button')
    <x-forms.button href="{{ route('letter-protocol.create') }}" wire:navigate>
        Briefprotokoll erstellen
    </x-forms.button>
@endsection

{{-- Content --}}
@section('content')
    <livewire:pages.auth.letter-protocol.letter-list />
@endsection
