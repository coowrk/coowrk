<div
	x-data="{ show: @entangle('show') }"
	x-on:keydown.escape="show = false"
	x-trap.inert="show"
	x-trap.noscroll="show"
>
	{{-- base --}}
	<div
		aria-modal="true"
		class="relative z-50"
		role="dialog"
		x-cloak
		x-show="show"
	>

		{{-- background --}}
		<div
			aria-hidden="true"
			class="fixed inset-0 bg-zinc-950 bg-opacity-30 transition-opacity"
			x-cloak
			x-show="show"
			x-transition:enter-end="opacity-100"
			x-transition:enter-start="opacity-0"
			x-transition:enter="ease-out duration-300"
			x-transition:leave-end="opacity-0"
			x-transition:leave-start="opacity-100"
			x-transition:leave="ease-out duration-200"
		></div>

		{{ $slot }}

	</div>
</div>
