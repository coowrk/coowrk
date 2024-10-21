{{-- Pass menu data --}}
@aware(['menu'])

<div
	aria-modal="true"
	class="lg:hidden"
	role="dialog"
	x-show="showMobileMenu"
>
	{{-- background --}}
	<div class="fixed inset-0 z-10 bg-black/80"></div>

	{{-- navbar --}}
	<div
		class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto border-border bg-background p-6 shadow-lg sm:max-w-sm sm:border-l"
		x-on:click.away="showMobileMenu = false"
	>
		{{-- heading --}}
		<div class="-mx-4 flex items-center justify-between rounded border border-border p-3 sm:border sm:px-3">
			<a
				class="-m-1.5 p-1.5"
				href="#"
			>
				<span class="sr-only">Your Company</span>
				<h2 class="text-xl font-bold text-secondary-foreground">
					Cw.
				</h2>
			</a>
			<button
				class="-m-2.5 rounded p-2.5 text-secondary-foreground"
				type="button"
				x-on:click="showMobileMenu = false"
			>
				<span class="sr-only">Close menu</span>
				@svg('heroicons.solid.x-mark', 'size-6')
			</button>
		</div>

		{{-- content --}}
		<div class="mt-6 flow-root">
			<div class="-mx-6 -my-6 divide-y divide-border">
				<div class="space-y-2 p-6">
					@foreach ($menu->mid as $item)
						<a
							class="-mx-3 block rounded px-3 py-2 text-base/7 font-semibold text-secondary-foreground transition-colors hover:text-secondary-foreground/90"
							href="#"
						>
							{{ $item->title }}
						</a>
					@endforeach
				</div>

				<div class="p-6">
					@foreach ($menu->right as $item)
						<a
							class="-mx-3 block rounded px-3 py-2 text-base/7 font-semibold text-secondary-foreground transition-colors hover:text-secondary-foreground/90"
							href="#"
						>
							{{ $item->title }}
						</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
