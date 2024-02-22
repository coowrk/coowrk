{{-- Title --}}
@section('title', 'Einstellungen - Darstellung')

{{-- Secondary navigation --}}
@section('secondary_navigation')
	@include('pages.auth.profile.settings')
@endsection

<x-layouts.auth.default>
	<livewire:pages.auth.profile.settings.appereance />
</x-layouts.auth.default>
