<div>
	<form>
		<div class="grid grid-cols-1 gap-10 xl:grid-cols-5">
			<div class="col-span-3 grid h-fit gap-y-5">
				<div>
					<h3 class="text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6">Kunde</h3>
					<p class="text-base/6 text-zinc-500 data-[disabled]:opacity-50 dark:text-zinc-400 sm:text-sm/6">
						Use the name you'd like people to see in their cart.
					</p>
					<div class="mt-3 grid grid-cols-4 gap-x-10 gap-y-5 rounded-lg border border-white/5 p-3 lg:grid-cols-12">
						<div class="col-span-2">
							<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail">
								Anrede
							</label>

							<div class="mt-3">
								<x-forms.input />
							</div>
						</div>

						<div class="col-span-5">
							<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail">
								Vorname
							</label>

							<div class="mt-3">
								<x-forms.input />
							</div>
						</div>

						<div class="col-span-5">
							<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail">
								Nachname
							</label>

							<div class="mt-3">
								<x-forms.input />
							</div>
						</div>
					</div>
				</div>

				<div>
					<h3 class="text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6">Adresse</h3>
					<p class="text-base/6 text-zinc-500 data-[disabled]:opacity-50 dark:text-zinc-400 sm:text-sm/6">
						Use the name you'd like people to see in their cart.
					</p>
					<div class="mt-3 grid grid-cols-4 gap-x-10 gap-y-5 rounded-lg border border-white/5 p-3 lg:grid-cols-12">
						<div class="col-span-9">
							<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail">
								Straße
							</label>

							<div class="mt-3">
								<x-forms.input />
							</div>
						</div>
						<div class="col-span-3">
							<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail">
								Hausnummer
							</label>

							<div class="mt-3">
								<x-forms.input />
							</div>
						</div>

						<div class="col-span-3">
							<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail">
								Postleitzahl
							</label>

							<div class="mt-3">
								<x-forms.input />
							</div>
						</div>
						<div class="col-span-6">
							<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail">
								Stadt
							</label>

							<div class="mt-3">
								<x-forms.input />
							</div>
						</div>
						<div class="col-span-3">
							<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail">
								Land
							</label>

							<div class="mt-3">
								<x-forms.input value="Deutschland" />
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-span-2 h-fit">
				<div>
					<h3 class="text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6">Brief</h3>
					<p class="text-base/6 text-zinc-500 data-[disabled]:opacity-50 dark:text-zinc-400 sm:text-sm/6">
						Use the name you'd like people to see in their cart.
					</p>

					<div class="mt-3 grid grid-cols-4 gap-x-10 gap-y-5 rounded-lg border border-white/5 p-3 lg:grid-cols-12">
						<div class="col-span-12">
							<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail">
								Betreff
							</label>

							<div class="mt-3">
								<x-forms.input />
							</div>
						</div>

						<div class="col-span-12">
							<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail">
								Beschreibung
							</label>

							<p class="text-base/6 text-zinc-500 data-[disabled]:opacity-50 dark:text-zinc-400 sm:text-sm/6">
								Use the name you'd like people to see in their cart.
							</p>

							<div class="mt-3">
								<x-forms.textarea></x-forms.textarea>
							</div>
						</div>
					</div>

					<div class="mt-3 grid grid-cols-4 gap-x-10 gap-y-5 rounded-lg border border-white/5 p-3 lg:grid-cols-12">
						<div class="col-span-12">
							<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail">
								Betreff
							</label>

							<div class="mt-3">
								<x-forms.input />
							</div>
						</div>

						<div class="col-span-12">
							<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
								for="mail">
								Beschreibung
							</label>

							<p class="text-base/6 text-zinc-500 data-[disabled]:opacity-50 dark:text-zinc-400 sm:text-sm/6">
								Use the name you'd like people to see in their cart.
							</p>

							<div class="mt-3">
								<x-forms.textarea></x-forms.textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="relative bottom-0 mt-5 flex justify-end gap-5 rounded-lg border border-white/5 p-3">
			<div>
				<x-forms.buttonAsLink href="{{ route('letter-protocol.index') }}"
					second
					wire:navigate>Abbrechen</x-forms.buttonAsLink>
			</div>

			<div>
				<x-forms.button>Erstellen</x-forms.button>
			</div>
		</div>
	</form>
</div>
