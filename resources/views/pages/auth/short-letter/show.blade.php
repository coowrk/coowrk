<div wire:poll.5s>
	{{-- add diary entry dialog --}}
	<livewire:pages.auth.short-letter.show.add-diary-entry-dialog short_letter="{{ $short_letter->id }}" />

	{{-- breadcrumb --}}
	<div>
		<a
			class="inline-flex items-center gap-2 text-base/6 text-zinc-500 dark:text-zinc-400 sm:text-sm/6"
			href="{{ route('short-letter.index', ['page' => auth()->user()->settings->misc['short_letter']['pagination']['last_visited_page'] ?? 1]) }}"
			wire:navigate
		>
			<svg
				aria-hidden="true"
				class="size-5 sm:size-4 fill-zinc-400 dark:fill-zinc-500"
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
			<x-badges
				text="{{ $short_letter->status_badge()['title'] }}"
				theme="{{ $short_letter->status_badge()['theme'] }}"
			/>
		</div>
	</div>

	{{-- useful data? --}}
	<div class="mt-2.5 flex flex-wrap items-end justify-between gap-x-6 gap-y-4">
		<div class="flex flex-wrap gap-x-10 gap-y-4 py-1.5">
			<div class="text-base-/6 flex items-end gap-3 text-zinc-950 dark:text-zinc-100 sm:text-sm/6">
				<svg
					class="size-5 sm:size-4 shrink-0 fill-zinc-500"
					fill="currentColor"
					viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						clip-rule="evenodd"
						d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z"
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
					class="size-5 sm:size-4 shrink-0 fill-zinc-500"
					fill="currentColor"
					viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						clip-rule="evenodd"
						d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
						fill-rule="evenodd"
					/>
				</svg>


				<div class="flex flex-col">
					<span class="text-sm/8 text-zinc-400">Erstellt von</span>
					<span class="text-sm/4">{{ $user->name }}</span>
				</div>
			</div>

			<div class="text-base-/6 flex items-end gap-3 text-zinc-950 dark:text-zinc-100 sm:text-sm/6">
				<svg
					class="size-5 sm:size-4 shrink-0 fill-zinc-500"
					fill="currentColor"
					viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM6 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM1.49 15.326a.78.78 0 0 1-.358-.442 3 3 0 0 1 4.308-3.516 6.484 6.484 0 0 0-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 0 1-2.07-.655ZM16.44 15.98a4.97 4.97 0 0 0 2.07-.654.78.78 0 0 0 .357-.442 3 3 0 0 0-4.308-3.517 6.484 6.484 0 0 1 1.907 3.96 2.32 2.32 0 0 1-.026.654ZM18 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM5.304 16.19a.844.844 0 0 1-.277-.71 5 5 0 0 1 9.947 0 .843.843 0 0 1-.277.71A6.975 6.975 0 0 1 10 18a6.974 6.974 0 0 1-4.696-1.81Z"
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
				href="{{ route('short-letter.pdf', $short_letter->id) }}"
				target="_blank"
				type="button"
			>
				<svg
					class="size-5 sm:size-4 text-zinc-500"
					fill="currentColor"
					viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M10.75 2.75a.75.75 0 0 0-1.5 0v8.614L6.295 8.235a.75.75 0 1 0-1.09 1.03l4.25 4.5a.75.75 0 0 0 1.09 0l4.25-4.5a.75.75 0 0 0-1.09-1.03l-2.955 3.129V2.75Z"
					/>
					<path
						d="M3.5 12.75a.75.75 0 0 0-1.5 0v2.5A2.75 2.75 0 0 0 4.75 18h10.5A2.75 2.75 0 0 0 18 15.25v-2.5a.75.75 0 0 0-1.5 0v2.5c0 .69-.56 1.25-1.25 1.25H4.75c-.69 0-1.25-.56-1.25-1.25v-2.5Z"
					/>
				</svg>

				Herunterladen
			</x-forms.buttons.zinc>

			<x-forms.buttons.white
				href="{{ route('short-letter.edit', $short_letter->id) }}"
				type="button"
				wire:navigate
			>
				<svg
					class="size-5 sm:size-4 text-zinc-500"
					fill="currentColor"
					viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="m2.695 14.762-1.262 3.155a.5.5 0 0 0 .65.65l3.155-1.262a4 4 0 0 0 1.343-.886L17.5 5.501a2.121 2.121 0 0 0-3-3L3.58 13.419a4 4 0 0 0-.885 1.343Z"
					/>
				</svg>

				Bearbeiten
			</x-forms.buttons.white>
		</div>
	</div>

	{{-- description list --}}
	<div class="mt-12">
		<div class="grid grid-cols-1 gap-4 sm:gap-10 md:grid-cols-12">
			<div class="col-span-1 flex flex-col gap-y-12 md:col-span-7">
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
						<x-descriptionlists.detail text="{{ $short_letter->reason }}" />
						<x-descriptionlists.term text="Optionen" />
						<x-descriptionlists.detail>
							<div class="flex flex-wrap gap-1">
								@foreach ($short_letter->options as $option)
									<x-badges
										text="{{ $short_letter->option_to_value($option) }}"
										theme="zinc"
									/>
								@endforeach
							</div>
						</x-descriptionlists.detail>
					</x-descriptionlists.base>
				</div>
			</div>

			<div class="col-span-1 flex flex-col gap-y-12 md:col-span-5">
				<div>
					<div class="flex items-end justify-between">
						<x-typography.title.h3 title="Tagebuch" />

						<x-forms.buttons.zinc
							type="button"
							wire:click="$dispatch('change.short-letter.show.add-diary-entry-dialog.visibility.state')"
						>
							<svg
								class="size-5 sm:size-4 text-zinc-500"
								fill="currentColor"
								viewBox="0 0 20 20"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									clip-rule="evenodd"
									d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902 1.168.188 2.352.327 3.55.414.28.02.521.18.642.413l1.713 3.293a.75.75 0 0 0 1.33 0l1.713-3.293a.783.783 0 0 1 .642-.413 41.102 41.102 0 0 0 3.55-.414c1.437-.231 2.43-1.49 2.43-2.902V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0 0 10 2ZM6.75 6a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 2.5a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
									fill-rule="evenodd"
								/>
							</svg>

							Änderung eintragen
						</x-forms.buttons.zinc>
					</div>

					<x-typography.divider class="mt-4" />

					<div class="scrollbar-hide max-h-96 overflow-y-scroll">
						<x-feeds.base>
							@foreach ($short_letter->feed as $feed)
								@if ($feed->comment)
									<x-feeds.comment
										:badge="$short_letter->status_badge($feed->new_status)"
										:data="$feed"
									/>
								@else
									<x-feeds.status
										:badge="$short_letter->status_badge($feed->new_status)"
										:data="$feed"
									/>
								@endif
							@endforeach
						</x-feeds.base>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
