{{-- Pass menu data --}}
@props(['menu'])

<header
	class="relative isolate z-10"
	x-data="{ showMobileMenu: false }"
>
	{{-- desktop navbar --}}
	<x-layout::onboarding.header.desktop />

	{{-- mobile navbar --}}
	<x-layout::onboarding.header.mobile />
</header>
