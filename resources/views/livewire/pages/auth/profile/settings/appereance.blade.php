<div>
	<form
		class="grid w-full grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-3"
		wire:submit="submit"
	>
		<div>
			<h2 class="text-base/7 font-semibold text-gray-900 dark:text-white">Darstellung</h2>
			<p class="mt-1 text-base/6 text-gray-500 dark:text-zinc-500 sm:text-sm/6">
				Use a permanent address where you can receive mail.
			</p>
		</div>

		<div class="md:col-span-2">
			<div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
				<div class="col-span-full">
					<x-forms.label
						for="appereance"
						title="Darstellung"
					>
						<x-forms.dropdown
							:options="[
							    'dark' => 'Dunkel',
							    'light' => 'Hell',
							]"
							id="appereance"
							name="appereance"
							wire:model.blur="appereance"
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
