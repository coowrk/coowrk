{{-- Controller: App\Livewire\Pages\Auth\User\MyProfile\Security\ChangePasswordDialog --}}
<x-overlay.dialog>
	<x-typography.title.h2 title="Passwort ändern" />

	<form wire:submit="updateUserPassword">
		<div class="mt-6">
			<x-typography.title.h3 title="Altes Passwort" />

			<x-formular.input
				for="password_old"
				title="password_old"
				type="password"
				wire:model="password_old"
			/>
		</div>

		<div class="mt-4">
			<x-typography.title.h3 title="Neues Passwort" />

			<x-formular.input
				for="password"
				title="password"
				type="password"
				wire:model="password"
			/>
		</div>

		<div class="mt-4">
			<x-typography.title.h3 title="Neues Passwort bestätigen" />

			<x-formular.input
				for="password_confirmation"
				title="password_confirmation"
				type="password"
				wire:model="password_confirmation"
			/>
		</div>

		<div class="mt-6 flex justify-end gap-4">
			<x-button
				theme="blank"
				type="button"
				x-on:click="show = false"
			>
				Abbrechen
			</x-button>

			<x-button type="submit">
				Ändern
			</x-button>
		</div>
	</form>
</x-overlay.dialog>
