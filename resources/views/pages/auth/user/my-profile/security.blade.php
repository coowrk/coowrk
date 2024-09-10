{{-- Controller: App\Livewire\Pages\Auth\User\MyProfile\Security --}}
<div>
	{{-- change password dialog --}}
	<livewire:pages.auth.user.my-profile.security.change-password-dialog />

	{{-- title --}}
	<x-typography.title.h1 title="Sicherheit" />

	{{-- formular --}}
	<section class="mt-6">
		<div class="flex items-end justify-between">
			<x-typography.title.h3 title="Passwort" />

			<x-button wire:click="$dispatch('change.change-password-dialog.visibility.state')">
				Passwort ändern
			</x-button>
		</div>
		<x-divider class="my-4" />

		<x-typography.text text="Stärke dein Konto, indem Du sicherstellst, dass dein Passwort sicher ist." />
	</section>
</div>
