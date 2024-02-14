<div>
	<form
		class="grid w-full grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-3"
		wire:submit="submit"
	>
		<div>
			<h2 class="text-base/7 font-semibold text-gray-900 dark:text-white">Change password</h2>
			<p class="mt-1 text-base/6 text-gray-500 dark:text-zinc-500 sm:text-sm/6">Update your password associated with your
				account.
			</p>
		</div>

		<div class="md:col-span-2">
			<div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
				<div class="col-span-full">
					<x-forms.label
						for="password_old"
						title="Altes Passwort"
					>
						<x-forms.input
							id="password_old"
							name="password_old"
							type="password"
							wire:model.blur="password_old"
						/>
					</x-forms.label>
				</div>

				<div class="sm:col-span-3">
					<x-forms.label
						for="password_new"
						title="Neues Passwort"
					>
						<x-forms.input
							id="password_new"
							name="password_new"
							type="password"
							wire:model.blur="password_new"
						/>
					</x-forms.label>
				</div>

				<div class="sm:col-span-3">
					<x-forms.label
						for="password_new_confirmation"
						title="Neues Passwort bestätigen"
					>
						<x-forms.input
							id="password_new_confirmation"
							name="password_new_confirmation"
							type="password"
							wire:model.blur="password_new_confirmation"
						/>
					</x-forms.label>
				</div>

				<div class="col-span-full flex justify-end">
					<div>
						<x-forms.button
							theme="contrast"
							type="submit"
						>
							Speichern
						</x-forms.button>
					</div>
				</div>
			</div>
		</div>
	</form>

</div>
