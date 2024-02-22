<div class="-mx-4 -mt-10 mb-10 h-14 sm:-mx-6 lg:-mx-8">
	<nav
		aria-label="Breadcrumb"
		class="flex h-full border-b border-gray-200 bg-white dark:border-zinc-800 dark:bg-zinc-900"
	>
		@unless ($breadcrumbs->isEmpty())
			<ol
				class="mx-auto flex w-full space-x-4 px-4 sm:px-6 lg:px-8"
				role="list"
			>
				@foreach ($breadcrumbs as $breadcrumb)
					@if ($breadcrumb->title == 'Home')
						<li class="flex">
							<div class="flex items-center">
								<a
									class="text-gray-500 hover:text-gray-900 dark:text-zinc-400 dark:hover:text-white"
									href="{{ $breadcrumb->url }}"
									wire:navigate
								>
									<svg
										aria-hidden="true"
										class="h-5 w-5 flex-shrink-0"
										fill="currentColor"
										viewBox="0 0 20 20"
									>
										<path
											clip-rule="evenodd"
											d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
											fill-rule="evenodd"
										/>
									</svg>
									<span class="sr-only">Home</span>
								</a>
							</div>
						</li>
					@elseif(!is_null($breadcrumb->url) && !$loop->last)
						<li class="flex">
							<div class="flex items-center">
								<svg
									aria-hidden="true"
									class="h-full w-6 flex-shrink-0 text-gray-200 dark:text-zinc-800"
									fill="currentColor"
									preserveAspectRatio="none"
									viewBox="0 0 24 44"
								>
									<path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
								</svg>
								<a
									class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-zinc-400 dark:hover:text-white"
									href="{{ $breadcrumb->url }}"
									wire:navigate
								>{{ $breadcrumb->title }}</a>
							</div>
						</li>
					@else
						<li class="flex">
							<div class="flex items-center">
								<svg
									aria-hidden="true"
									class="h-full w-6 flex-shrink-0 text-gray-200 dark:text-zinc-800"
									fill="currentColor"
									preserveAspectRatio="none"
									viewBox="0 0 24 44"
								>
									<path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
								</svg>
								<a
									aria-current="page"
									class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-zinc-400 dark:hover:text-white"
									href="{{ $breadcrumb->url }}"
									wire:navigate
								>{{ $breadcrumb->title }}</a>
							</div>
						</li>
					@endif
				@endforeach
			</ol>
		@endunless
	</nav>
</div>
