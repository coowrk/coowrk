<div>
	<x-typography.title.h1 title="Mein Profil" />

	<div class="mt-6">
		<x-typography.title.h3 title="Allgemein" />
		<x-typography.text text="Allgemein" />
		<x-typography.divider class="mt-4" />

		<x-descriptionlists.base>
			<x-descriptionlists.term text="Name" />
			<x-descriptionlists.detail>
				{{ auth()->user()->first_name }}
				{{ auth()->user()->last_name }}
			</x-descriptionlists.detail>

			<x-descriptionlists.term text="E-Mail Adresse" />
			<x-descriptionlists.detail :text="auth()->user()->email" />

			<x-descriptionlists.term text="Mitglied seit" />
			<x-descriptionlists.detail :text="auth()->user()->created_at" />
		</x-descriptionlists.base>
	</div>
</div>
