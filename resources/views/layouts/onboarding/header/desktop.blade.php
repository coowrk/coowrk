{{-- Pass menu data --}}
@aware(['menu'])

<div class="fixed top-6 w-full px-2 md:px-4 xl:px-0">
	{{-- navbar --}}
	<nav
		aria-label="Global"
		class="mx-auto flex max-w-7xl items-center justify-between rounded border border-border p-3 backdrop-blur-sm transition-colors lg:px-6"
	>
		{{-- left --}}
		<div class="flex lg:flex-1">
			<a
				class="-m-1.5 p-1.5"
				href="#"
			>
				<span class="sr-only">Coowrk</span>
				<h2
					class="text-xl font-extrabold text-secondary-foreground"
					href="{{ route('landingpage') }}"
					wire:navigate
				>
					Cw.
				</h2>
			</a>
		</div>

		{{-- burger (hidden on desktop) --}}
		<div class="flex lg:hidden">
			<button
				class="-m-2.5 inline-flex items-center justify-center rounded p-2.5 text-secondary-foreground"
				type="button"
				x-on:click="showMobileMenu = !showMobileMenu"
			>
				<span class="sr-only">Open main menu</span>
				@svg('heroicons.solid.bars-3', 'size-6')
			</button>
		</div>

		{{-- mid --}}
		<div class="hidden lg:flex lg:gap-x-12">
			@foreach ($menu->mid as $item)
				<a
					class="text-sm/6 font-medium text-secondary-foreground transition-colors hover:text-secondary-foreground/90"
					href="#"
				>
					{{ $item->title }}
				</a>
			@endforeach
		</div>

		{{-- right --}}
		<div class="hidden gap-5 lg:flex lg:flex-1 lg:justify-end">
			@foreach ($menu->right as $item)
				<x-button
					:url="$item->url"
					:variant="$item->variant"
				>
					{{ $item->title }}
				</x-button>
			@endforeach
		</div>
	</nav>
</div>
