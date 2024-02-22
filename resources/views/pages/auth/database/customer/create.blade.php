{{-- Title --}}
@section('title', 'Anlegen')

{{-- Breadcrumb --}}
@section('breadcrumb')
	{{ Breadcrumbs::render('database.customer.create') }}
@endsection

<x-layouts.auth.default>
	<livewire:pages.auth.database.customer.create />
</x-layouts.auth.default>
