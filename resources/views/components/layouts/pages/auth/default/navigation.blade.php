<div x-data="{ showMobileSidebar: false }">
	{{-- desktop sidebar --}}
	<x-layouts.pages.auth.default.navigation.desktop />

	{{-- mobile stackedbar --}}
	<x-layouts.pages.auth.default.navigation.mobileStackedbar />

	{{-- mobile sidebar --}}
	<x-layouts.pages.auth.default.navigation.mobileSidebar />
</div>
