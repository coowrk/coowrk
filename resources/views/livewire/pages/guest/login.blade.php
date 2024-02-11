<div class="flex min-h-full">
	<div class="relative hidden w-0 flex-1 lg:block">
		<img
			alt=""
			class="absolute inset-0 h-full w-full object-cover"
			src="https://images.unsplash.com/photo-1496917756835-20cb06e75b4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80"
		>
	</div>

	<div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
		<div class="mx-auto w-full max-w-sm lg:w-96">
			<div>
				<h1 class="text-3xl font-bold text-gray-900 dark:text-white">Coowrk<span class="text-app-yellow">.</span></h1>
				<h2 class="mt-4 text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">Melde dich in deinem Konto
					an</h2>
				<p class="mt-2 text-sm leading-6 text-gray-500 dark:text-zinc-500">
					Kein Mitglied?
					<a
						class="font-semibold text-app-yellow hover:text-app-yellow/90"
						href="#"
					>
						Einwöchige Testphase starten
					</a>
				</p>
			</div>

			<div class="mt-10">
				<div>
					<form
						class="space-y-6"
						wire:submit="submit"
					>
						<div>
							<label
								class="select-none text-base/6 font-medium text-gray-900 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
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
							<label
								class="select-none text-base/6 font-medium text-gray-900 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail"
							>
								Passwort
							</label>

							<div class="mt-3">
								<x-forms.input
									name="password"
									type="password"
									wire:model.blur="password"
								/>
							</div>
						</div>

						<div class="flex items-center justify-between">
							<x-forms.check
								id="remember_me"
								name="remember_me"
								title="Gerät merken"
								type="checkbox"
								value="remember_me"
								wire:model.blur="remember_me"
							/>

							<div class="text-sm leading-6">
								<a
									class="font-semibold text-app-yellow hover:text-app-yellow/90"
									href="#"
								>
									Forgot password?
								</a>
							</div>
						</div>

						<div>
							<x-forms.button>
								Anmelden
							</x-forms.button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
