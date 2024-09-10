<div>
	{{-- breadcrumb --}}
	<div>
		<a
			class="inline-flex items-center gap-2 text-base/6 text-zinc-500 dark:text-zinc-400 sm:text-sm/6"
			href="{{ route('service-tool.short-letter.show', $short_letter->id) }}"
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
			{{ $short_letter->first_name }}
			{{ $short_letter->last_name }}
		</a>
	</div>

	{{-- title --}}
	<div class="mt-4 lg:mt-8">
		<x-typography.title.h1 title="Bearbeiten" />
	</div>

	{{-- formular --}}
	<div class="mt-12">
		<form
			class="flex flex-col gap-y-4"
			wire:submit="edit"
		>
			{{-- customer options --}}
			<div class="grid grow grid-cols-1 gap-4 sm:grid-cols-8">
				<div class="col-span-1 sm:col-span-2">
					<x-formular.label
						for="salutation"
						title="Anrede"
					/>
					<x-formular.select
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
					</x-formular.select>
				</div>

				@if ($salutation == 'Firma')
					<div class="col-span-1 sm:col-span-6">
						<x-formular.label
							for="first_name"
							title="Name"
						/>
						<x-formular.input
							for="first_name"
							title="first name"
						/>
					</div>
				@else
					<div class="col-span-1 sm:col-span-3">
						<x-formular.label
							for="first_name"
							title="Vorname"
						/>
						<x-formular.input
							for="first_name"
							title="first name"
						/>
					</div>

					<div class="col-span-1 sm:col-span-3">
						<x-formular.label
							for="last_name"
							title="Nachname"
						/>
						<x-formular.input
							for="last_name"
							title="last name"
						/>
					</div>
				@endif
			</div>

			<div class="grid grow grid-cols-1 gap-4 sm:grid-cols-5">
				<div class="col-span-1 sm:col-span-4">
					<x-formular.label
						for="street"
						title="Straße"
					/>
					<x-formular.input
						for="street"
						title="street"
					/>
				</div>

				<div class="col-span-1">
					<x-formular.label
						for="house_number"
						title="Hausnummer"
					/>
					<x-formular.input
						for="house_number"
						title="Hausnummer"
					/>
				</div>
			</div>

			<div class="grid grow grid-cols-1 gap-4 sm:grid-cols-5">
				<div class="col-span-1">
					<x-formular.label
						for="postcode"
						title="Postleitzahl"
					/>
					<x-formular.input
						for="postcode"
						title="Postleitzahl"
					/>
				</div>

				<div class="col-span-1 sm:col-span-3">
					<x-formular.label
						for="city"
						title="Stadt"
					/>
					<x-formular.input
						for="city"
						title="Stadt"
					/>
				</div>

				<div class="col-span-1">
					<div>
						<x-formular.label
							for="country"
							title="Land"
						/>
						<x-formular.input
							for="country"
							title="Land"
						/>
					</div>
				</div>
			</div>

			{{-- update main customer data option --}}
			@if ($short_letter->belongs_to_customer->created_at->diffInHours(Carbon\Carbon::now(), false) < 1)
				<div class="mt-2">
					<x-formular.checkbox
						description="Durch das Bestätigen dieses Häkchens werden die Hauptdaten des Kunden sowie die Kundendaten des Kurzbriefes automatisch aktualisiert."
						for="update_customer"
						title="Kunde aktualisieren"
						wire:model="update_customer"
					/>
				</div>
			@endif

			<x-divider class="my-4 sm:my-8" />

			{{-- letter options --}}
			<div>
				<x-formular.label
					for="reason"
					title="Betreff"
				/>
				<x-formular.input
					for="reason"
					title="Betreff"
				/>
			</div>

			<div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
				<div class="col-span-1 sm:col-span-2">
					<x-typography.title.h3 title="Wir bitten um" />

					<div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2">
						<x-formular.checkbox
							for="anruf-ruecksprache"
							title="Anruf / Rücksprache"
							wire:model="options"
						/>

						<x-formular.checkbox
							for="rueckgabe"
							title="Rückgabe"
							wire:model="options"
						/>

						<x-formular.checkbox
							for="kenntnisnahme"
							title="Kenntnisnahme"
							wire:model="options"
						/>

						<x-formular.checkbox
							for="bericht"
							title="Bericht"
							wire:model="options"
						/>

						<x-formular.checkbox
							for="erledigung"
							title="Erledigung"
							wire:model="options"
						/>

						<x-formular.checkbox
							for="weitere-veranlassung"
							title="Weitere Veranlassung"
							wire:model="options"
						/>

						<x-formular.checkbox
							for="stellungnahme"
							title="Stellungnahme"
							wire:model="options"
						/>

						<x-formular.checkbox
							for="pruefung"
							title="Prüfung"
							wire:model="options"
						/>
					</div>
				</div>
				<div class="col-span-1">
					<x-typography.title.h3 title="Sie erhalten den Vorgang" />

					<div class="mt-2 flex flex-col gap-4">
						<x-formular.checkbox
							for="zur-unterschrift"
							title="zur Unterschrift"
							wire:model="options"
						/>

						<x-formular.checkbox
							for="zum-verbleib"
							title="zum Verbleib"
							wire:model="options"
						/>

						<x-formular.checkbox
							for="zur-weitergabe"
							title="zur Weitergabe"
							wire:model="options"
						/>

						<x-formular.checkbox
							for="zur-vorlage"
							title="zur Vorlage"
							wire:model="options"
						/>

						<x-formular.checkbox
							for="mit-dank-zurueck"
							title="mit Dank zurück"
							wire:model="options"
						/>

						<x-formular.checkbox
							for="anbei-anlagen"
							title="anbei Anlagen"
							wire:model="options"
						/>
					</div>
				</div>
			</div>

			<div class="mt-4 flex justify-end">
				<x-button>
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
				</x-button>
			</div>
		</form>
	</div>
</div>
