<x-app class="bg-background">
	{{-- header --}}
	<x-layout::onboarding.header :menu="(object) [
	    'mid' => [
	        (object) ['title' => 'Funktionen', 'url' => '#'],
	        (object) ['title' => 'Preisgestaltung', 'url' => '#'],
	        (object) ['title' => 'Unternehmen', 'url' => '#'],
	    ],
	    'right' => (object) [
	        (object) ['title' => 'Log in', 'url' => route('login'), 'variant' => 'primary'],
	        (object) ['title' => 'Sign up', 'url' => '#', 'variant' => 'secondary'],
	    ],
	]" />

	{{-- content --}}
	{{ $slot }}
</x-app>
