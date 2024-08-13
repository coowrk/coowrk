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
						{{ Browser::browserFamily($session->user_agent) }} auf
						{{ Browser::platformName($session->user_agent) }}
					</p>
				</div>
				<div class="ml-auto">
					<p class="text-zinc-500 dark:text-zinc-400 sm:text-sm/6">Letzte Aktivität:
						{{ $session->last_activity->diffForHumans() }}</p>
				</div>
				<div class="size-7 ml-auto flex items-center justify-center rounded-lg bg-white/5">
					<svg
						class="size-5 sm:size-4 text-white"
						fill="currentColor"
						viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg"
					>
						<path
							clip-rule="evenodd"
							d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
							fill-rule="evenodd"
						/>
					</svg>
				</div>
			</div>
			<x-typography.divider class="my-4" />
		@endforeach
	</div>
</div>
