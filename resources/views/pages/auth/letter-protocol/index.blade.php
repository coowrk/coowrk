{{-- Layout --}}
@extends('layouts.auth.default')

{{-- Breadcrumb --}}
@section('breadcrumb')
	{{ Breadcrumbs::render('letter-protocol') }}
@endsection

{{-- Title --}}
@section('title')
	<h2 class="text-base/7 font-semibold text-white">Briefprotokoll</h2>
@endsection

{{-- Content --}}
@section('content')
	<div class="mt-5 flex justify-between">
		<div>

		</div>

		<div>
			<x-forms.buttonAsLink href="{{ route('letter-protocol.create') }}"
				wire:navigate>Brief erstellen</x-forms.buttonAsLink>
		</div>
	</div>

	<div class="mt-5 rounded-lg border border-zinc-800">
		<table class="w-full whitespace-nowrap text-left">
			<colgroup>
				<col class="w-full sm:w-4/12">
				<col class="lg:w-4/12">
				<col class="lg:w-2/12">
				<col class="lg:w-1/12">
			</colgroup>
			<thead class="border-b border-zinc-950/10 text-sm leading-6 text-white dark:border-zinc-800">
				<tr>
					<th class="py-4 pl-4 pr-8 font-semibold sm:pl-6 lg:pl-8"
						scope="col">Name</th>
					<th class="hidden py-4 pl-0 pr-8 font-semibold sm:table-cell"
						scope="col">Thematik</th>
					<th class="hidden py-4 pl-0 pr-8 font-semibold md:table-cell lg:pr-20"
						scope="col">Erstellt</th>
					<th class="hidden py-4 pl-0 pr-4 text-right font-semibold sm:table-cell sm:pr-6 lg:pr-8"
						scope="col">Aktionen</th>
				</tr>
			</thead>
			<tbody class="divide-y divide-white/5">
				<livewire:pages.auth.letter-protocol.letter-list />
			</tbody>
		</table>
	</div>
@endsection
