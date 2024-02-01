{{-- Layout --}}
@extends('layouts.auth.default')

{{-- Breadcrumb --}}
@section('breadcrumb')
    {{ Breadcrumbs::render('letter-protocol.create') }}
@endsection

{{-- Title --}}
@section('title')
    <h2 class="font-semibold text-white text-base/7">Briefprotokoll erstellen</h2>
@endsection

{{-- Content --}}
@section('content')
    <livewire:pages.auth.letter-protocol.letter-create />
@endsection
