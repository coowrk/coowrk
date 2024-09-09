{{-- Controller: App\Livewire\Pages\Auth\User\MyProfile\Security --}}
<div>

	{{-- change password dialog --}}
	<livewire:pages.auth.user.my-profile.security.change-password-dialog />

	<x-typography.title.h1 title="Sicherheit" />

	<div class="mt-6">
		<div class="flex items-end justify-between">
			<x-typography.title.h3 title="Passwort" />

			<x-button wire:click="$dispatch('change.change-password-dialog.visibility.state')">
				Passwort ändern
			</x-button>
		</div>
		<x-divider class="my-4" />

		<x-typography.text text="Stärke dein Konto, indem Du sicherstellst, dass dein Passwort sicher ist." />
	</div>

	<div class="mt-6">
		<x-typography.title.h3 title="Verbindungen" />
		<x-typography.text text="Alle Sessions vom User" />
		<x-divider class="my-4" />

		@foreach ($sessions as $session)
			<div class="flex items-center gap-4">
				<div class="size-12 flex shrink-0 items-center justify-center rounded-lg bg-white/5">
					@if (Browser::isDesktop($session->user_agent))
						<svg
							class="size-5 sm:size-8 text-zinc-500 dark:text-zinc-400 group-hover:dark:text-zinc-950"
							fill="none"
							stroke="currentColor"
							viewBox="0 0 24 24"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								d="M2 21L17 21"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="1.5"
							></path>
							<path
								d="M21 21L22 21"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="1.5"
							></path>
							<path
								d="M2 16.4V3.6C2 3.26863 2.26863 3 2.6 3H21.4C21.7314 3 22 3.26863 22 3.6V16.4C22 16.7314 21.7314 17 21.4 17H2.6C2.26863 17 2 16.7314 2 16.4Z"
								stroke-width="1.5"
							></path>
						</svg>
					@endif
				</div>
				<div>
					<p class="font-medium text-white sm:text-sm/6">{{ $session->ip_address }}</p>
					<p class="text-zinc-500 dark:text-zinc-400 sm:text-sm/6">
						{{ Browser::parse($session->user_agent)->browserFamily() }} auf
						{{ Browser::parse($session->user_agent)->platformName() }}
					</p>
				</div>
				<div class="ml-auto">
					<p class="text-zinc-500 dark:text-zinc-400 sm:text-sm/6">Letzte Aktivität:
						{{ $session->last_activity->diffForHumans() }}</p>
				</div>
			</div>
			<x-divider class="my-4" />
		@endforeach
	</div>
</div>
