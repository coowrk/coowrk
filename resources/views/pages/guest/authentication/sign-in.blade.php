<div>
	<div class="sm:mx-auto sm:w-full sm:max-w-sm">
		<h1 class="text-center text-4xl font-extrabold text-white">Coowrk.</h1>
		<h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">
			Melde dich bei deinem Konto an
		</h2>
	</div>

	<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
		<form
			class="space-y-6"
			wire:submit="signIn"
		>
			<div>
				<x-forms.label
					for="email"
					title="E-Mail Adresse"
				/>

				<x-forms.input
					for="email"
					id="test"
				/>
			</div>

			<div>
				<div class="flex items-center justify-between">
					<x-forms.label
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

				<x-forms.input
					autocomplete="current-password"
					for="password"
				/>
			</div>

			<div>
				<x-forms.button />
			</div>
		</form>
	</div>
</div>
