{{-- Controller: App\Livewire\Pages\Guest\Authentication\SignIn --}}
<div>
	<div class="sm:mx-auto sm:w-full sm:max-w-sm">
		<h1 class="text-center text-4xl font-extrabold text-zinc-950 dark:text-white">Coowrk.</h1>
		<x-typography.title.h2
			class="mt-10 text-center tracking-tight"
			title="Melde dich bei deinem Konto an"
		/>
	</div>

	<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
		<form
			class="space-y-6"
			wire:submit="signIn"
		>
			<div>
				<x-formular.label
					for="email"
					title="E-Mail Adresse"
				/>

				<x-formular.input
					for="email"
					id="test"
				/>
			</div>

			<div>
				<div class="flex items-center justify-between">
					<x-formular.label
						for="password"
						title="Passwort"
					/>
					<div class="text-sm">
						<a
							class="font-semibold text-blue-500"
							href="#"
						>Forgot password?</a>
					</div>
				</div>

				<x-formular.input
					autocomplete="current-password"
					for="password"
				/>
			</div>

			<div class="flex items-end justify-end">
				<x-button type="submit">
					Anmelden
				</x-button>
			</div>
		</form>
	</div>
</div>
