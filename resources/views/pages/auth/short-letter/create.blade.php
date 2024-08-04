<div>
	{{-- breadcrumb --}}
	<div class="max-lg:hidden">
		<a
			class="inline-flex items-center gap-2 text-sm/6 text-zinc-500 dark:text-zinc-400"
			href="{{ route('shortletter.index', ['page' => auth()->user()->settings->misc['short_letter']['pagination']['last_visited_page'] ?? 1]) }}"
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
		<x-typography.title.h1 title="Erstellen" />
	</div>

	<div class="mt-12">
		<form
			class="flex flex-col gap-y-4"
			wire:submit="create"
		>
			<div class="grid grow grid-cols-1 gap-x-4 sm:grid-cols-8">
				<div class="col-span-2">
					<x-forms.label
						for="salutation"
						title="Anrede"
					/>
					<x-forms.select
						:options="[
						    'Herr' => 'Herr',
						    'Frau' => 'Frau',
						    'Divers' => 'Divers',
						    'Firma' => 'Firma',
						]"
						for="salutation"
						title="first name"
						wire:model.live="salutation"
					>
					</x-forms.select>
				</div>

				@if ($salutation == 'Firma')
					<div class="col-span-6">
						<x-forms.label
							for="first_name"
							title="Name"
						/>
						<x-forms.input
							for="first_name"
							title="first name"
						/>
					</div>
				@else
					<div class="col-span-3">
						<x-forms.label
							for="first_name"
							title="Vorname"
						/>
						<x-forms.input
							for="first_name"
							title="first name"
						/>
					</div>

					<div class="col-span-3">
						<x-forms.label
							for="last_name"
							title="Nachname"
						/>
						<x-forms.input
							for="last_name"
							title="last name"
						/>
					</div>
				@endif
			</div>

			<div class="grid grow grid-cols-1 gap-x-4 sm:grid-cols-5">
				<div class="col-span-4">
					<x-forms.label
						for="street"
						title="Straße"
					/>
					<x-forms.input
						for="street"
						title="street"
					/>
				</div>

				<div class="col-span-1">
					<x-forms.label
						for="house_number"
						title="Hausnummer"
					/>
					<x-forms.input
						for="house_number"
						title="Hausnummer"
					/>
				</div>
			</div>

			<div class="grid grow grid-cols-1 gap-x-4 sm:grid-cols-5">
				<div class="col-span-1">
					<x-forms.label
						for="postcode"
						title="Postleitzahl"
					/>
					<x-forms.input
						for="postcode"
						title="Postleitzahl"
					/>
				</div>

				<div class="col-span-3">
					<x-forms.label
						for="city"
						title="Stadt"
					/>
					<x-forms.input
						for="city"
						title="Stadt"
					/>
				</div>

				<div class="col-span-1">
					<div>
						<x-forms.label
							for="country"
							title="Land"
						/>
						<x-forms.input
							for="country"
							title="Land"
						/>
					</div>
				</div>
			</div>

			<x-typography.divider class="my-8" />

			<div>
				<x-forms.label
					for="reason"
					title="Betreff"
				/>
				<x-forms.input
					for="reason"
					title="Betreff"
				/>
			</div>

			<div class="grid grid-cols-1 sm:grid-cols-3">
				<div class="col-span-2">
					<x-typography.title.h3 title="Wir bitten um" />

					<div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2">
						<x-forms.checkbox
							for="rueckruf"
							title="Rückruf"
							wire:model="options"
						/>

						<x-forms.checkbox
							for="stellungnahme"
							title="Stellungnahme"
							wire:model="options"
						/>

						<x-forms.checkbox
							for="erledigung"
							title="Erledigung"
							wire:model="options"
						/>

						<x-forms.checkbox
							for="rueckgabe"
							title="Rückgabe"
							wire:model="options"
						/>

						<x-forms.checkbox
							for="pruefung"
							title="Prüfung"
							wire:model="options"
						/>

						<x-forms.checkbox
							for="kenntnisnahme"
							title="Kenntnisnahme"
							wire:model="options"
						/>
					</div>
				</div>
				<div class="col-span-1">
					<x-typography.title.h3 title="Sie erhalten den Vorgang" />

					<div class="mt-2 flex flex-col gap-4">
						<x-forms.checkbox
							for="zum-verbleib"
							title="zum Verbleib"
							wire:model="options"
						/>

						<x-forms.checkbox
							for="zur-weitergabe"
							title="zur Weitergabe"
							wire:model="options"
						/>

						<x-forms.checkbox
							for="zur-unterschrift"
							title="zur Unterschrift"
							wire:model="options"
						/>

						<x-forms.checkbox
							for="anbei-anlagen"
							title="Anbei Anlagen"
							wire:model="options"
						/>
					</div>
				</div>
			</div>

			<div class="mt-4 flex justify-end">
				<x-forms.buttons.white>
					Erstellen
				</x-forms.buttons.white>
			</div>
		</form>
	</div>
</div>
