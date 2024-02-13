<div>
	<form
		class="grid w-full grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-3"
		wire:submit="submit"
	>
		<div>
			<h2 class="text-base/7 font-semibold text-gray-900 dark:text-white">Personal Information</h2>
			<p class="mt-1 text-base/6 text-gray-500 dark:text-zinc-500 sm:text-sm/6">Use a permanent address where you can
				receive mail.
			</p>
		</div>

		<div class="md:col-span-2">
			<div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
				<div class="col-span-full flex items-center gap-x-8">
					<img
						alt="{{ $user->full_name }}"
						class="h-24 w-24 flex-none rounded-lg bg-gray-800 object-cover"
						src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
					>
					<div>
						<button
							class="rounded-lg bg-black/[7.5%] px-3 py-2 text-sm font-semibold text-gray-900 enabled:hover:bg-black/5 dark:bg-white/[7.5%] dark:text-white dark:enabled:hover:bg-white/5"
							type="button"
						>
							Change avatar
						</button>
						<p class="mt-2 text-xs leading-5 text-gray-400">JPG, GIF or PNG. 1MB max.</p>
					</div>
				</div>

				<div class="sm:col-span-3">
					<x-forms.label
						for="first_name"
						title="Vorname"
					>
						<x-forms.input
							id="first_name"
							name="first_name"
							wire:model.blur="first_name"
						/>
					</x-forms.label>
				</div>

				<div class="sm:col-span-3">
					<x-forms.label
						for="last_name"
						title="Nachname"
					>
						<x-forms.input
							id="last_name"
							name="last_name"
							wire:model.blur="last_name"
						/>
					</x-forms.label>
				</div>

				<div class="col-span-full">
					<x-forms.label
						description="Nach dem Ändern der E-Mail Adresse muss die neue erneut verifiziert werden."
						for="mail"
						title="E-Mail Adresse"
					>
						<x-forms.input
							id="mail"
							name="mail"
							wire:model.blur="mail"
						/>
					</x-forms.label>
				</div>
			</div>
		</div>

		<div class="div col-span-full flex justify-between rounded-lg border p-3 dark:border-zinc-800">
			<div>
				<x-forms.button
					href="{{ route('home') }}"
					theme="opacity"
					type="button"
					wire:navigate
				>
					Abbrechen
				</x-forms.button>
			</div>

			<div>
				<x-forms.button>
					Speichern
				</x-forms.button>
			</div>
		</div>

	</form>

</div>
