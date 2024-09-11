<div>
	{{-- breadcrumb --}}
	<div>
		<a
			class="inline-flex items-center gap-2 text-base/6 text-zinc-500 dark:text-zinc-400 sm:text-sm/6"
			href="{{ route('service-tool.broker-authority.index') }}"
			wire:navigate
		>
			<svg
				aria-hidden="true"
				class="size-4 fill-zinc-500 dark:fill-zinc-400"
				data-slot="icon"
				fill="currentColor"
				viewBox="0 0 16 16"
				xmlns="http://www.w3.org/2000/svg"
			>
				<path
					clip-rule="evenodd"
					d="M9.78 4.22a.75.75 0 0 1 0 1.06L7.06 8l2.72 2.72a.75.75 0 1 1-1.06 1.06L5.47 8.53a.75.75 0 0 1 0-1.06l3.25-3.25a.75.75 0 0 1 1.06 0Z"
					fill-rule="evenodd"
				></path>
			</svg>
			Maklervollmacht
		</a>
	</div>

	{{-- title --}}
	<div class="mt-4 lg:mt-8">
		<x-typography.title.h1 title="Erstellen" />
	</div>

	{{-- formular --}}
	<div class="mt-12">
		<div class="grid gap-10 sm:grid-cols-12">
			{{-- left --}}
			<div class="col-span-4">
				<x-stepper.vertical
					item="1"
					title="test"
				/>
				<x-stepper.vertical
					item="2"
					title="test"
				/>
			</div>

			{{-- right --}}
			<div class="col-span-8"></div>
		</div>
	</div>

</div>
