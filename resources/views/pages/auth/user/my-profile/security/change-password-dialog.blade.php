{{-- Controller: App\Livewire\Pages\Auth\User\MyProfile\Security\ChangePasswordDialog --}}
<x-overlays.dialog>
	<x-typography.title.h2 title="Passwort ändern" />

	<form wire:submit="updateUserPassword">
		<div class="mt-6">
			<x-typography.title.h3 title="Altes Passwort" />

			<x-forms.input
				for="password_old"
				title="password_old"
				type="password"
			/>
		</div>

		<div class="mt-2">
			<x-typography.title.h3 title="Neues Passwort" />

			<x-forms.input
				for="password"
				title="password"
				type="password"
			/>
		</div>

		<div class="mt-2">
			<x-typography.title.h3 title="Neues Passwort bestätigen" />

			<x-forms.input
				for="password_confirmation"
				title="password_new_confirmation"
				type="password"
			/>
		</div>

		<div class="mt-6 flex justify-end gap-4">
			<x-forms.buttons.blank
				type="button"
				x-on:click="show = false"
			>
				Abbrechen
			</x-forms.buttons.blank>

			<x-forms.buttons.white>
				Ändern
			</x-forms.buttons.white>
		</div>
	</form>
</x-overlays.dialog>
