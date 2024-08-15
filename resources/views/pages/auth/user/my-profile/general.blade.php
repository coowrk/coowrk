<div x-data="{ showInputName: @entangle('showInputName'), showInputEmail: @entangle('showInputEmail') }">
	<x-typography.title.h1 title="Mein Profil" />

	<div class="mt-6">
		<x-typography.title.h3 title="Allgemein" />
		<x-typography.text text="Allgemein" />
		<x-typography.divider class="mt-4" />

		<x-descriptionlists.base>
			<x-descriptionlists.term text="Name" />
			<x-descriptionlists.detail>
				<div
					class="flex items-start justify-between"
					x-show="!showInputName"
				>
					<div>
						{{ auth()->user()->first_name }}
						{{ auth()->user()->last_name }}
					</div>

					<button
						class="font-medium text-blue-500"
						x-on:click="showInputName = true"
					>
						Bearbeiten
					</button>
				</div>

				<form
					wire:submit="updateUserName"
					x-show="showInputName"
				>
					<div class="flex items-start justify-between gap-4">
						<div class="w-full">
							<x-forms.input
								for="first_name"
								title="first_name"
							/>
						</div>

						<div class="w-full">
							<x-forms.input
								for="last_name"
								title="last_name"
							/>
						</div>
					</div>

					<div class="mt-4 flex justify-end">
						<x-forms.buttons theme="white">
							Bearbeiten
						</x-forms.buttons>
					</div>
				</form>
			</x-descriptionlists.detail>

			<x-descriptionlists.term text="E-Mail Adresse" />
			<x-descriptionlists.detail>
				{{-- <div class="flex justify-between">
					<div>
						{{ auth()->user()->email }}
					</div>

					<button class="font-medium text-blue-500">
						Bearbeiten
					</button>
				</div> --}}

				{{ auth()->user()->email }}
			</x-descriptionlists.detail>

			<x-descriptionlists.term text="Mitglied seit" />
			<x-descriptionlists.detail :text="auth()->user()->created_at" />
		</x-descriptionlists.base>
	</div>
</div>
