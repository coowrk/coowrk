<form method="POST"
	wire:submit="submit">
	@csrf

	<div class="space-y-6">
		<div>
			<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
				for="mail">
				E-Mail Adresse
			</label>

			<div class="mt-3">
				<x-forms.input name="mail"
					type="mail"
					wire:model="mail" />
			</div>
		</div>

		<div>
			<div class="flex items-center justify-between">
				<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
					for="password">Passwort</label>
				<div class="text-sm">
					<a class="font-semibold text-app-yellow hover:text-app-yellow/90"
						href="#">
						Passwort vergessen?
					</a>
				</div>
			</div>

			<div class="mt-3">
				<x-forms.input name="password"
					type="password"
					wire:model="password" />
			</div>
		</div>

		<div>
			<x-forms.button type="submit">
				Anmelden
			</x-forms.button>
		</div>
	</div>
</form>
