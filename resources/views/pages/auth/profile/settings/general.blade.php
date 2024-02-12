{{-- Title --}}
@section("title", "Einstellungen - Allgemein")

@section("secondary_navigation")
	@include("components.layouts.auth.default.secondary-navigation", [
		"tabs" => [
			["title" => "Allgemein", "route" => "profile.settings.general"],
			["title" => "Sicherheit", "route" => "profile.settings.security"],
		],
	])
@endsection

<x-layouts.auth.default>
	<livewire:pages.auth.profile.settings.general />
</x-layouts.auth.default>
