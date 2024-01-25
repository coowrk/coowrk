{{-- Layout --}}
@extends('layouts.auth.default')

@section('content')
	<div class="px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-5 gap-10">
			<div class="col-span-1 rounded-lg border border-zinc-950/10 dark:border-white/10">
				test
			</div>

			<div class="col-span-1 rounded-lg border border-zinc-950/10 dark:border-white/10">
				test
			</div>
			<div class="col-span-1 rounded-lg border border-zinc-950/10 dark:border-white/10">
				test
			</div>

			<div class="col-span-1 rounded-lg border border-zinc-950/10 dark:border-white/10">
				test
			</div>
			<div class="col-span-1 rounded-lg border border-zinc-950/10 dark:border-white/10">
				test
			</div>
		</div>

		<div>
			<div class="prose prose-sm prose-zinc">
				<h1 class="font-medium text-white">Test</h1>
			</div>

		</div>

		<livewire:test />
	</div>
@endsection
