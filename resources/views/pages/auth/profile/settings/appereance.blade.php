{{-- Title --}}
@section('title', 'Einstellungen - Darstellung')

@section('secondary_navigation')
	@include('pages.auth.profile.settings')
@endsection

<x-layouts.auth.default>
	<livewire:pages.auth.profile.settings.appereance />
</x-layouts.auth.default>
