{{-- Controller: App\Livewire\Pages\Auth\User\MyProfile\General --}}
<div>
	<x-typography.title.h1 title="Mein Profil" />

	<div class="mt-6">
		<x-typography.title.h3 title="Allgemein" />
		<x-typography.text text="Allgemein" />
		<x-divider class="mt-4" />

		<x-descriptionlist.base>
			<x-descriptionlist.term text="Name" />
			<x-descriptionlist.detail>
				{{ auth()->user()->first_name }}
				{{ auth()->user()->last_name }}
			</x-descriptionlist.detail>

			<x-descriptionlist.term text="E-Mail Adresse" />
			<x-descriptionlist.detail text="{{ auth()->user()->email }}" />

			<x-descriptionlist.term text="Mitglied seit" />
			<x-descriptionlist.detail :text="auth()->user()->created_at" />
		</x-descriptionlist.base>
	</div>
</div>
