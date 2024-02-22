{{-- Title --}}
@section('title', 'Einstellungen - Allgemein')

{{-- Secondary navigation --}}
@section('secondary_navigation')
	@include('pages.auth.profile.settings')
@endsection

<x-layouts.auth.default>
	<livewire:pages.auth.profile.settings.general />
</x-layouts.auth.default>
