{{-- Title --}}
@section('title', 'Kunden - Datenbank')

{{-- Button --}}
@section('button')
	<x-forms.button
		href="{{ route('database.customer.create') }}"
		wire:navigate
	>
		Kunden anlegen
	</x-forms.button>
@endsection

<x-layouts.auth.default>
	<livewire:pages.auth.database.customer.index />
</x-layouts.auth.default>
