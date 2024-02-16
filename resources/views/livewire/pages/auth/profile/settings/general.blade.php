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
					<div class="hidden">
						<x-forms.input
							id="avatar"
							name="avatar"
							type="file"
							wire:model="avatar"
							x-ref="avatar"
						/>
					</div>

					@if ($avatar)
						<img
							alt="{{ $user->full_name }}"
							class="h-24 w-24 flex-none rounded-lg bg-gray-800 object-cover"
							src="{{ $avatar->temporaryUrl() }}"
						>
					@else
						<img
							alt="{{ $user->full_name }}"
							class="h-24 w-24 flex-none rounded-lg bg-gray-800 object-cover"
							src="{{ Storage::get('uploads/', 'Ce0tf3IzdFRXuetuPGGyEJmMNwjCXfkrcC9rhJkz.jpg') }}"
						>
					@endif

					<div>
						<x-forms.button
							theme="border"
							type="button"
							x-on:click="$refs.avatar.click()"
						>
							Change avatar
						</x-forms.button>

						<p class="mt-2 text-xs/5 text-gray-500 dark:text-zinc-500">JPG, GIF or PNG. 1MB max.</p>

						@error('avatar')
							<span class="error">{{ $message }}</span>
						@enderror
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
