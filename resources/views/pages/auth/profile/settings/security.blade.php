{{-- Title --}}
@section('title', 'Einstellungen - Sicherheit')

{{-- Secondary navigation --}}
@section('secondary_navigation')
	@include('pages.auth.profile.settings')
@endsection

<x-layouts.auth.default>
	<livewire:pages.auth.profile.settings.security />
</x-layouts.auth.default>
