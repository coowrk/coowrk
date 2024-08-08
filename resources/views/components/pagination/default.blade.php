<div class="w-full">
	@if ($paginator->hasPages())
		<nav class="flex gap-x-2">
			{{-- previous --}}
			<span class="grow basis-0">
				@if (!$paginator->onFirstPage())
					<a
						class="inline-flex cursor-pointer items-center justify-center gap-x-2 rounded-lg px-3 py-1.5 font-semibold text-zinc-100 hover:bg-white/10 sm:text-sm/6"
						rel="prev"
						wire:click="previousPage()"
					>
						<svg
							aria-hidden="true"
							class="size-4 fill-zinc-400 stroke-zinc-400"
							fill="currentColor"
							viewBox="0 0 16 16"
						>
							<path
								d="M2.75 8H13.25M2.75 8L5.25 5.5M2.75 8L5.25 10.5"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="1.5"
							></path>
						</svg>

						Previous
					</a>
				@else
					<span
						class="inline-flex cursor-not-allowed items-center justify-center gap-x-2 rounded-lg px-3 py-1.5 font-semibold text-zinc-100 opacity-50 hover:bg-white/10 sm:text-sm/6"
						rel="prev"
					>
						<svg
							aria-hidden="true"
							class="size-4 fill-zinc-400 stroke-zinc-400"
							fill="currentColor"
							viewBox="0 0 16 16"
						>
							<path
								d="M2.75 8H13.25M2.75 8L5.25 5.5M2.75 8L5.25 10.5"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="1.5"
							></path>
						</svg>

						Previous
					</span>
				@endif
			</span>

			{{-- pages --}}
			<span class="hidden items-baseline gap-x-2 sm:flex">
				@if ($paginator->currentPage() >= 5)
					<span class="cursor-default rounded-lg px-3.5 py-1.5 font-semibold text-zinc-100 sm:text-sm/6">
						...
					</span>
				@endif

				@for ($i = $paginator->currentPage() - 3; $i < $paginator->currentPage() + 4; $i++)
					@if ($i >= 1 && $i <= $paginator->lastPage())
						<span
							@class([
								'cursor-pointer rounded-lg px-3.5 py-1.5 font-semibold text-zinc-100 hover:bg-white/10 sm:text-sm/6',
								'bg-white/10 hover:bg-white/15' => $paginator->currentPage() == $i,
							])
							wire:click="setPage({{ $i }})"
						>
							{{ $i }}
						</span>
					@endif
				@endfor

				@if ($paginator->lastPage() - $paginator->currentPage() >= 4)
					<span class="cursor-default rounded-lg px-3.5 py-1.5 font-semibold text-zinc-100 sm:text-sm/6">
						...
					</span>
				@endif
			</span>

			{{-- next --}}
			<span class="flex grow basis-0 justify-end">
				@if (!$paginator->onLastPage())
					<a
						class="inline-flex cursor-pointer items-center justify-center gap-x-2 rounded-lg px-3 py-1.5 font-semibold text-zinc-100 hover:bg-white/10 sm:text-sm/6"
						rel="next"
						wire:click="nextPage()"
					>
						Next
						<svg
							aria-hidden="true"
							class="size-4 stroke-zinc-400"
							fill="none"
							viewBox="0 0 16 16"
						>
							<path
								d="M13.25 8L2.75 8M13.25 8L10.75 10.5M13.25 8L10.75 5.5"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="1.5"
							></path>
						</svg>
					</a>
				@else
					<span
						class="inline-flex cursor-not-allowed items-center justify-center gap-x-2 rounded-lg px-3 py-1.5 font-semibold text-zinc-100 opacity-50 hover:bg-white/10 sm:text-sm/6"
						rel="next"
					>
						Next
						<svg
							aria-hidden="true"
							class="size-4 stroke-zinc-400"
							fill="none"
							viewBox="0 0 16 16"
						>
							<path
								d="M13.25 8L2.75 8M13.25 8L10.75 10.5M13.25 8L10.75 5.5"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="1.5"
							></path>
						</svg>
					</span>
				@endif
			</span>
		</nav>
	@endif
</div>
