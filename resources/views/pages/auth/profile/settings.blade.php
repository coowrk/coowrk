{{-- pages.auth.profile.settings --}}
{{-- Datei enthält nur die secondary_navigation. --}}
{{-- Die subdateien haben bereits ein Layout. --}}
@include('components.layouts.auth.default.secondary_navigation', [
	'tabs' => [
		['title' => 'Allgemein', 'route' => 'profile.settings.general'],
		['title' => 'Sicherheit', 'route' => 'profile.settings.security'],
		['title' => 'Darstellung', 'route' => 'profile.settings.appereance'],
	],
])
