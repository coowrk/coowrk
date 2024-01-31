{{-- Layout --}}
@extends('layouts.auth.default')

{{-- Breadcrumb --}}
@section('breadcrumb')
	{{ Breadcrumbs::render('letter-protocol.create') }}
@endsection

{{-- Title --}}
@section('title')
	<h2 class="text-base/7 font-semibold text-white">Briefprotokoll erstellen</h2>
@endsection

{{-- Content --}}
@section('content')
	<div class="mt-5">
		<livewire:pages.auth.letter-protocol.letter-create />
	</div>
@endsection
