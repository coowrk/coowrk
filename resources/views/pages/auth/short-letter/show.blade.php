<div>
	{{-- breadcrumb --}}
	<div class="max-lg:hidden">
		<a
			class="inline-flex items-center gap-2 text-sm/6 text-zinc-500 dark:text-zinc-400"
			href="{{ route('shortletter.index') }}"
			wire:navigate
		>
			<svg
				aria-hidden="true"
				class="size-4 fill-zinc-400 dark:fill-zinc-500"
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
			Kurzbriefe
		</a>
	</div>

	{{-- title --}}
	<div class="mt-4 lg:mt-8">
		<div class="flex items-center gap-4">
			<x-typography.title.h1 title="{{ $short_letter->first_name }} {{ $short_letter->last_name }}" />
			<x-badges.red text="Versand steht aus" />
		</div>
	</div>

	{{-- useful data? --}}
	<div class="mt-2.5 flex flex-wrap items-end justify-between gap-x-6 gap-y-4">
		<div class="flex flex-wrap gap-x-10 gap-y-4 py-1.5">
			<div class="text-base-/6 flex items-end gap-3 text-zinc-950 dark:text-zinc-100 sm:text-sm/6">
				<svg
					class="size-4 shrink-0 fill-zinc-500"
					fill="currentColor"
					viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						clip-rule="evenodd"
						d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z"
						fill-rule="evenodd"
					/>
				</svg>

				<div class="flex flex-col">
					<span class="text-sm/8 text-zinc-400">Erstellt</span>
					<span class="text-sm/4">{{ $short_letter->created_at->diffForHumans() }}</span>
				</div>
			</div>

			<div class="text-base-/6 flex items-end gap-3 text-zinc-950 dark:text-zinc-100 sm:text-sm/6">
				<svg
					class="size-4 fill-zinc-500"
					fill="currentColor"
					viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z"
					/>
				</svg>

				<div class="flex flex-col">
					<span class="text-sm/8 text-zinc-400">Erstellt von</span>
					<span class="text-sm/4">{{ $user->name }}</span>
				</div>
			</div>

			<div class="text-base-/6 flex items-end gap-3 text-zinc-950 dark:text-zinc-100 sm:text-sm/6">
				<svg
					class="size-4 fill-zinc-500"
					fill="currentColor"
					viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z"
					/>
				</svg>

				<div class="flex flex-col">
					<span class="text-sm/8 text-zinc-400">Zugehöriger Kunde</span>
					<span class="text-sm/4">
						{{ $customer->first_name }} {{ $customer->last_name }}
					</span>
				</div>
			</div>
		</div>

		<div class="flex h-fit gap-4">
			<x-forms.buttons.zinc
				type="button"
				wire:click="download"
			>
				<svg
					class="size-4 text-zinc-500"
					fill="currentColor"
					viewBox="0 0 16 16"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M8.75 2.75a.75.75 0 0 0-1.5 0v5.69L5.03 6.22a.75.75 0 0 0-1.06 1.06l3.5 3.5a.75.75 0 0 0 1.06 0l3.5-3.5a.75.75 0 0 0-1.06-1.06L8.75 8.44V2.75Z"
					/>
					<path
						d="M3.5 9.75a.75.75 0 0 0-1.5 0v1.5A2.75 2.75 0 0 0 4.75 14h6.5A2.75 2.75 0 0 0 14 11.25v-1.5a.75.75 0 0 0-1.5 0v1.5c0 .69-.56 1.25-1.25 1.25h-6.5c-.69 0-1.25-.56-1.25-1.25v-1.5Z"
					/>
				</svg>

				Herunterladen
			</x-forms.buttons.zinc>

			<x-forms.buttons.white
				href="{{ route('shortletter.edit', $short_letter->id) }}"
				type="button"
				wire:navigate
			>
				<svg
					class="size-4 text-zinc-500"
					fill="currentColor"
					viewBox="0 0 16 16"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						clip-rule="evenodd"
						d="M11.013 2.513a1.75 1.75 0 0 1 2.475 2.474L6.226 12.25a2.751 2.751 0 0 1-.892.596l-2.047.848a.75.75 0 0 1-.98-.98l.848-2.047a2.75 2.75 0 0 1 .596-.892l7.262-7.261Z"
						fill-rule="evenodd"
					/>
				</svg>

				Bearbeiten
			</x-forms.buttons.white>
		</div>
	</div>

	{{-- description list --}}
	<div class="mt-12">
		<div class="grid grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-10">
			<div class="col-span-2 grid gap-y-12">
				<div>
					<x-typography.title.h3 title="Empfänger" />
					<x-typography.divider class="mt-4" />

					<x-descriptionlists.base>
						<x-descriptionlists.term text="Name" />
						<x-descriptionlists.detail>
							<div class="flex">
								<span class="block w-14 text-zinc-400">{{ $short_letter->salutation }}</span>
								{{ $short_letter->first_name }}
								{{ $short_letter->last_name }}
							</div>
						</x-descriptionlists.detail>
						<x-descriptionlists.term text="Straße" />
						<x-descriptionlists.detail text="{{ $short_letter->street }} {{ $short_letter->house_number }}" />
						<x-descriptionlists.term text="Stadt" />
						<x-descriptionlists.detail text="{{ $short_letter->postcode }} {{ $short_letter->city }}" />
						<x-descriptionlists.term text="Land" />
						<x-descriptionlists.detail text="{{ $short_letter->country }}" />
					</x-descriptionlists.base>
				</div>

				<div>
					<x-typography.title.h3 title="Brief" />
					<x-typography.divider class="mt-4" />

					<x-descriptionlists.base>
						<x-descriptionlists.term text="Betreff" />
						<x-descriptionlists.detail text="Test" />
						<x-descriptionlists.term text="Weshalb" />
						<x-descriptionlists.detail text="Test" />
						<x-descriptionlists.term text="Aktion" />
						<x-descriptionlists.detail text="Test" />
					</x-descriptionlists.base>
				</div>
			</div>

			<div class="col-span-1">
				<x-typography.title.h3 title="Tagebuch" />
				<x-typography.divider class="mt-4" />
			</div>
		</div>
	</div>
</div>
