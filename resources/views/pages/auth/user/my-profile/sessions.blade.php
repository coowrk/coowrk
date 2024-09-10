{{-- Controller: App\Livewire\Pages\Auth\User\MyProfile\Sessions --}}
<div>
	{{-- title --}}
	<x-typography.title.h1 title="Verbindungen" />

	{{-- sessions --}}
	<section class="mt-6">
		<x-typography.title.h3 title="Verbindungen" />
		<x-typography.text text="Alle Sessions vom User" />
		<x-divider class="my-4" />

		<div class="flex flex-col gap-4">
			@foreach ($sessions as $session)
				<div class="flex items-center gap-4 rounded-lg border border-zinc-950/10 p-4 dark:border-white/10">
					<div class="size-12 flex shrink-0 items-center justify-center rounded-lg bg-white/5">
						@if (Browser::isDesktop($session->user_agent))
							<svg
								class="size-8 text-zinc-500 dark:text-zinc-400 group-hover:dark:text-zinc-950"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									clip-rule="evenodd"
									d="M2.25 5.25a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3V15a3 3 0 0 1-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 0 1-.53 1.28h-9a.75.75 0 0 1-.53-1.28l.621-.622a2.25 2.25 0 0 0 .659-1.59V18h-3a3 3 0 0 1-3-3V5.25Zm1.5 0v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5Z"
									fill-rule="evenodd"
								/>
							</svg>
						@else
							<svg
								class="size-8 text-zinc-500 dark:text-zinc-400 group-hover:dark:text-zinc-950"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path d="M10.5 18.75a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" />
								<path
									clip-rule="evenodd"
									d="M8.625.75A3.375 3.375 0 0 0 5.25 4.125v15.75a3.375 3.375 0 0 0 3.375 3.375h6.75a3.375 3.375 0 0 0 3.375-3.375V4.125A3.375 3.375 0 0 0 15.375.75h-6.75ZM7.5 4.125C7.5 3.504 8.004 3 8.625 3H9.75v.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V3h1.125c.621 0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125h-6.75A1.125 1.125 0 0 1 7.5 19.875V4.125Z"
									fill-rule="evenodd"
								/>
							</svg>
						@endif
					</div>

					<div class="flex w-full flex-wrap justify-between sm:flex-nowrap">
						<div>
							<p class="font-medium text-zinc-950 dark:text-white sm:text-sm/6">
								{{ Browser::parse($session->user_agent)->browserFamily() }} auf
								{{ Browser::parse($session->user_agent)->platformName() }}
							</p>
							<p class="text-zinc-500 dark:text-zinc-400 sm:text-sm/6">
								{{ $session->ip_address }}
							</p>
						</div>

						<div class="">
							<p class="text-right text-zinc-500 dark:text-zinc-400 sm:text-sm/6">
								{{ $session->last_activity->diffForHumans() }}
							</p>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</section>
</div>
