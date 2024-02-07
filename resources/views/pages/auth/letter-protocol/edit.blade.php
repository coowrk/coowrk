{{-- Layout --}}
@extends('layouts.auth.default')

{{-- Breadcrumb --}}
@section('breadcrumb')
    {{ Breadcrumbs::render('letter-protocol.edit', $letter) }}
@endsection

{{-- Title --}}
@section('title')
    <h2 class="font-semibold text-white text-base/6">"{{ $letter->topic }}" Bearbeiten</h2>
@endsection

@section('content')
    <livewire:pages.auth.letter-protocol.letter-edit :$letter />
@endsection
