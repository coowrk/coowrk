<div>
	<form
		class="grid gap-y-10"
		wire:submit="create"
	>
		<div class="grid grid-cols-1 gap-x-5 gap-y-10 lg:grid-cols-2">
			<div class="col-span-1 grid h-fit gap-y-10">
				<x-forms.container
					description="Vorname, Nachname ggf. Firma"
					disclaimer
					title="Kundendaten"
				>

					<div class="col-span-3">
						<x-forms.label
							for="salutation"
							title="Anrede"
						>
							<x-forms.select
								:options="[
								    'firm' => 'Firma',
								    'madam' => 'Frau',
								    'sir' => 'Herr',
								    'divers' => 'Divers',
								]"
								id="salutation"
								name="salutation"
								wire:model.blur="customer.salutation"
							/>
						</x-forms.label>
					</div>

					<div :class="$wire.customer.salutation == 'firm' ? 'col-span-9' : 'col-span-5'">
						<x-forms.label
							for="first_name"
							title="Name"
						>
							<x-forms.input
								id="first_name"
								name="first_name"
								wire:model.blur="customer.first_name"
							/>
						</x-forms.label>
					</div>

					<div
						class="col-span-4"
						x-show="$wire.customer.salutation != 'firm'"
					>
						<x-forms.label
							for="last_name"
							title="Nachname"
						>
							<x-forms.input
								id="last_name"
								name="last_name"
								wire:model.blur="customer.last_name"
							/>
						</x-forms.label>
					</div>
				</x-forms.container>
			</div>

			<div class="col-span-1 grid h-fit gap-y-10">
				<x-forms.container
					description="Vorname, Nachname ggf. Firma"
					disclaimer
					title="Kundendaten"
				>

					<div class="col-span-9">
						<x-forms.label
							for="street_number"
							title="Straße"
						>
							<x-forms.input
								id="street_number"
								name="street_number"
								wire:model.blur="customer.street_number"
							/>
						</x-forms.label>
					</div>

					<div class="col-span-3">
						<x-forms.label
							for="street_number"
							title="Hausnummer"
						>
							<x-forms.input
								id="street_number"
								name="street_number"
								wire:model.blur="customer.street_number"
							/>
						</x-forms.label>
					</div>

					<div class="col-span-5">
						<x-forms.label
							for="city"
							title="Stadt"
						>
							<x-forms.input
								id="city"
								name="city"
								wire:model.blur="customer.city"
							/>
						</x-forms.label>
					</div>

					<div class="col-span-3">
						<x-forms.label
							for="postalcode"
							title="Postleitzahl"
						>
							<x-forms.input
								id="postalcode"
								name="postalcode"
								wire:model.blur="customer.postalcode"
							/>
						</x-forms.label>
					</div>

					<div class="col-span-4">
						<x-forms.label
							for="country"
							title="Land"
						>
							<x-forms.input
								id="country"
								name="country"
								wire:model.blur="customer.country"
							/>
						</x-forms.label>
					</div>
				</x-forms.container>
			</div>
		</div>

		<x-forms.container_call_to_action>
			<div>
				<x-forms.button
					href="{{ route('database.customer.index') }}"
					theme="contrast"
					type="button"
					wire:navigate
				>Abbrechen</x-forms.button>
			</div>

			<div>
				<x-forms.button>Erstellen</x-forms.button>
			</div>
		</x-forms.container_call_to_action>
	</form>
</div>
