<div>
	<x-typography.title.h1 title="Sicherheit" />

	<div class="mt-6">
		<div class="flex items-end justify-between">
			<x-typography.title.h3 title="Passwort" />

			<x-forms.buttons theme="white">
				Passwort ändern
			</x-forms.buttons>
		</div>
		<x-typography.divider class="my-4" />

		<x-typography.text text="Stärke dein Konto, indem Du sicherstellst, dass dein Passwort sicher ist." />
	</div>

	<div class="mt-6">
		<x-typography.title.h3 title="Verbindungen" />
		<x-typography.text text="Alle Sessions vom User" />
		<x-typography.divider class="my-4" />

		@foreach ($sessions as $session)
			{{ $session->user_agent }}
			{{ $session->ip_address }}
			<x-typography.divider class="my-4" />
		@endforeach
	</div>
</div>
