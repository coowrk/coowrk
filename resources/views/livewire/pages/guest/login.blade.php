<div>
	<div class="sm:mx-auto sm:w-full sm:max-w-sm">
		<h1 class="text-center text-3xl font-bold text-zinc-950 dark:text-app-yellow">Coowrk.</h1>
		<h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-zinc-400 dark:text-white">
			Melde dich in deinem Konto an
		</h2>
	</div>

	<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
		<form
			method="POST"
			wire:submit="submit"
		>
			@csrf

			<div class="space-y-6">
				<div>
					<label
						class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
						for="mail"
					>
						E-Mail Adresse
					</label>

					<div class="mt-3">
						<x-forms.input
							name="mail"
							type="mail"
							wire:model.blur="mail"
						/>
					</div>
				</div>

				<div>
					<div class="flex items-center justify-between">
						<label
							class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
							for="password"
						>
							Passwort
						</label>
						<div class="text-sm">
							<a
								class="font-semibold text-app-yellow hover:text-app-yellow/90"
								href="#"
							>
								Passwort vergessen?
							</a>
						</div>
					</div>

					<div class="mt-3">
						<x-forms.input
							name="password"
							type="password"
							wire:model.blur="password"
						/>
					</div>
				</div>

				<div class="flex justify-end">
					<x-forms.button type="submit">
						Anmelden
					</x-forms.button>
				</div>
			</div>
		</form>

		<p class="mt-10 text-center text-sm text-zinc-400">
			Kein Mitglied?
			<a
				class="font-semibold leading-6 text-app-yellow hover:text-app-yellow/90"
				href="#"
			>
				Einwöchige Testphase starten
			</a>
		</p>
	</div>
</div>
