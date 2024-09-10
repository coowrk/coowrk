<div class="col-span-1 sm:col-span-8">
	{{-- dialogs --}}
	@section('dialogs')
		{{-- search user palett --}}
		<livewire:components.overlay.dialog.search-customer-dialog />
	@endsection

	{{-- customer data --}}
	<section class="flex flex-col gap-y-4">
		{{-- title --}}
		<x-typography.title.h2 title="Empfänger" />

		{{-- name --}}
		<div class="grid grow grid-cols-1 gap-4 sm:grid-cols-8">
			<div class="col-span-1 sm:col-span-2">
				<x-formular.label
					for="customer.salutation"
					title="Anrede"
				/>
				<x-formular.select
					:options="$customer->available_salutations"
					for="customer.salutation"
					title="salutation"
					wire:model.live="customer.salutation"
				>
				</x-formular.select>
			</div>

			@if ($customer->salutation == 'Firma')
				<div class="col-span-1 sm:col-span-6">
					<x-formular.label
						for="customer.first_name"
						title="Name"
					/>
					<x-formular.input
						for="customer.first_name"
						title="first name"
					/>
				</div>
			@else
				<div class="col-span-1 sm:col-span-3">
					<x-formular.label
						for="customer.first_name"
						title="Vorname"
					/>
					<x-formular.input
						for="customer.first_name"
						title="first name"
					/>
				</div>

				<div class="col-span-1 sm:col-span-3">
					<x-formular.label
						for="customer.last_name"
						title="Nachname"
					/>
					<x-formular.input
						for="customer.last_name"
						title="last name"
					/>
				</div>
			@endif
		</div>

		{{-- address --}}
		<div class="grid grow grid-cols-1 gap-4 sm:grid-cols-5">
			<div class="col-span-1 sm:col-span-4">
				<x-formular.label
					for="customer.street"
					title="Straße"
				/>
				<x-formular.input
					for="customer.street"
					title="street"
				/>
			</div>

			<div class="col-span-1">
				<x-formular.label
					for="customer.house_number"
					title="Hausnummer"
				/>
				<x-formular.input
					for="customer.house_number"
					title="Hausnummer"
				/>
			</div>
		</div>

		{{-- postalcode, city & country --}}
		<div class="grid grow grid-cols-1 gap-4 sm:grid-cols-5">
			<div class="col-span-1">
				<x-formular.label
					for="customer.postcode"
					title="Postleitzahl"
				/>
				<x-formular.input
					for="customer.postcode"
					title="Postleitzahl"
				/>
			</div>

			<div class="col-span-1 sm:col-span-2">
				<x-formular.label
					for="customer.city"
					title="Stadt"
				/>
				<x-formular.input
					for="customer.city"
					title="Stadt"
				/>
			</div>

			<div class="col-span-2">
				<div>
					<x-formular.label
						for="customer.country"
						title="Land"
					/>
					<x-formular.input
						for="customer.country"
						title="Land"
					/>
				</div>
			</div>
		</div>
	</section>

	<div class="mt-4 flex justify-end">
		<x-button>
			<svg
				class="size-5 sm:size-4 text-zinc-500"
				fill="currentColor"
				viewBox="0 0 20 20"
				xmlns="http://www.w3.org/2000/svg"
			>
				<path
					d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z"
				/>
			</svg>

			Erstellen
		</x-button>
	</div>

</div>
