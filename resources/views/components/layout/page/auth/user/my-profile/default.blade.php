<x-layout.page.auth.default>
	<div class="grid grid-cols-1 gap-10 sm:grid-cols-4">
		<div class="col-span-1 flex flex-col gap-0.5">
			<button
				@class([
					'group relative flex w-full items-center gap-3 rounded-lg px-2 py-2.5 sm:py-2',
					'hover:bg-zinc-950/5 dark:hover:bg-white/5' => !Route::is(
						'user.my-profile.general'),
					'bg-zinc-950/5 dark:bg-white/5' => Route::is('user.my-profile.general'),
				])
				href="{{ route('user.my-profile.general') }}"
				wire:navigate
			>
				<div class="size-6 flex items-center justify-center">
					<svg
						@class([
							'size-5 group-hover:fill-zinc-950 dark:group-hover:fill-white',
							'fill-zinc-500 dark:fill-zinc-400' => !Route::is('user.my-profile.general'),
							'fill-zinc-950 dark:fill-white' => Route::is('user.my-profile.general'),
						])
						fill="currentColor"
						viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg"
					>
						<path
							clip-rule="evenodd"
							d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-5.5-2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM10 12a5.99 5.99 0 0 0-4.793 2.39A6.483 6.483 0 0 0 10 16.5a6.483 6.483 0 0 0 4.793-2.11A5.99 5.99 0 0 0 10 12Z"
							fill-rule="evenodd"
						/>

					</svg>
				</div>

				<p class="truncate text-base/5 font-medium text-zinc-950 dark:text-white sm:text-sm/5">Mein Profil</p>
			</button>

			<button
				@class([
					'group relative flex w-full items-center gap-3 rounded-lg px-2 py-2.5 sm:py-2',
					'hover:bg-zinc-950/5 dark:hover:bg-white/5' => !Route::is(
						'user.my-profile.security'),
					'bg-zinc-950/5 dark:bg-white/5' => Route::is('user.my-profile.security'),
				])
				href="{{ route('user.my-profile.security') }}"
				wire:navigate
			>
				<div class="size-6 flex items-center justify-center">
					<svg
						@class([
							'size-5 group-hover:fill-zinc-950 dark:group-hover:fill-white',
							'fill-zinc-500 dark:fill-zinc-400' => !Route::is(
								'user.my-profile.security'),
							'fill-zinc-950 dark:fill-white' => Route::is('user.my-profile.security'),
						])
						fill="currentColor"
						viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg"
					>
						<path
							clip-rule="evenodd"
							d="M10 2.5c-1.31 0-2.526.386-3.546 1.051a.75.75 0 0 1-.82-1.256A8 8 0 0 1 18 9a22.47 22.47 0 0 1-1.228 7.351.75.75 0 1 1-1.417-.49A20.97 20.97 0 0 0 16.5 9 6.5 6.5 0 0 0 10 2.5ZM4.333 4.416a.75.75 0 0 1 .218 1.038A6.466 6.466 0 0 0 3.5 9a7.966 7.966 0 0 1-1.293 4.362.75.75 0 0 1-1.257-.819A6.466 6.466 0 0 0 2 9c0-1.61.476-3.11 1.295-4.365a.75.75 0 0 1 1.038-.219ZM10 6.12a3 3 0 0 0-3.001 3.041 11.455 11.455 0 0 1-2.697 7.24.75.75 0 0 1-1.148-.965A9.957 9.957 0 0 0 5.5 9c0-.028.002-.055.004-.082a4.5 4.5 0 0 1 8.996.084V9.15l-.005.297a.75.75 0 1 1-1.5-.034c.003-.11.004-.219.005-.328a3 3 0 0 0-3-2.965Zm0 2.13a.75.75 0 0 1 .75.75c0 3.51-1.187 6.745-3.181 9.323a.75.75 0 1 1-1.186-.918A13.687 13.687 0 0 0 9.25 9a.75.75 0 0 1 .75-.75Zm3.529 3.698a.75.75 0 0 1 .584.885 18.883 18.883 0 0 1-2.257 5.84.75.75 0 1 1-1.29-.764 17.386 17.386 0 0 0 2.078-5.377.75.75 0 0 1 .885-.584Z"
							fill-rule="evenodd"
						/>
					</svg>
				</div>

				<p class="truncate text-base/5 font-medium text-zinc-950 dark:text-white sm:text-sm/5">Sicherheit</p>
			</button>

			<button
				@class([
					'group relative flex w-full items-center gap-3 rounded-lg px-2 py-2.5 sm:py-2',
					'hover:bg-zinc-950/5 dark:hover:bg-white/5' => !Route::is(
						'user.my-profile.sessions'),
					'bg-zinc-950/5 dark:bg-white/5' => Route::is('user.my-profile.sessions'),
				])
				href="{{ route('user.my-profile.sessions') }}"
				wire:navigate
			>
				<div class="size-6 flex items-center justify-center">
					<svg
						@class([
							'size-5 group-hover:fill-zinc-950 dark:group-hover:fill-white',
							'fill-zinc-500 dark:fill-zinc-400' => !Route::is(
								'user.my-profile.sessions'),
							'fill-zinc-950 dark:fill-white' => Route::is('user.my-profile.sessions'),
						])
						fill="currentColor"
						viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg"
					>
						<path
							d="M16.364 3.636a.75.75 0 0 0-1.06 1.06 7.5 7.5 0 0 1 0 10.607.75.75 0 0 0 1.06 1.061 9 9 0 0 0 0-12.728ZM4.697 4.697a.75.75 0 0 0-1.061-1.061 9 9 0 0 0 0 12.728.75.75 0 1 0 1.06-1.06 7.5 7.5 0 0 1 0-10.607Z"
						/>
						<path
							d="M12.475 6.464a.75.75 0 0 1 1.06 0 5 5 0 0 1 0 7.072.75.75 0 0 1-1.06-1.061 3.5 3.5 0 0 0 0-4.95.75.75 0 0 1 0-1.06ZM7.525 6.464a.75.75 0 0 1 0 1.061 3.5 3.5 0 0 0 0 4.95.75.75 0 0 1-1.06 1.06 5 5 0 0 1 0-7.07.75.75 0 0 1 1.06 0ZM11 10a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"
						/>
					</svg>
				</div>

				<p class="truncate text-base/5 font-medium text-zinc-950 dark:text-white sm:text-sm/5">Verbindungen</p>
			</button>
		</div>

		<div class="col-span-1 sm:col-span-3">
			{{ $slot }}
		</div>
	</div>
</x-layout.page.auth.default>
