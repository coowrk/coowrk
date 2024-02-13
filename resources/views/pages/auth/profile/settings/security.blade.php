{{-- Title --}}
@section('title', 'Einstellungen - Sicherheit')

@section('secondary_navigation')
	@include('components.layouts.auth.default.secondary-navigation', [
		'tabs' => [
			['title' => 'Allgemein', 'route' => 'profile.settings.general'],
			['title' => 'Sicherheit', 'route' => 'profile.settings.security'],
		],
	])
@endsection

<x-layouts.auth.default>
	<livewire:pages.auth.profile.settings.security />
</x-layouts.auth.default>
