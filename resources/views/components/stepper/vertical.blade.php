<div class="ms-1 flex gap-x-5">
	<div
		class="relative after:absolute after:bottom-0 after:start-4 after:top-8 after:w-px after:-translate-x-[0.5px] after:bg-zinc-950/10 last:after:hidden dark:after:bg-white/10"
	>
		<div class="size-8 relative z-10 flex items-center justify-center">
			<span
				class="size-8 flex shrink-0 items-center justify-center rounded-full border border-zinc-950/10 text-xs font-semibold uppercase text-blue-500 dark:border-white/10"
			>
				{{ $item }}
			</span>
		</div>
	</div>

	<div class="grow pb-4 pt-0.5">
		<p class="text-base/6 font-medium text-zinc-950 dark:text-white sm:text-sm/6">{{ $title }}</p>
		@if (isset($description))
			<p class="text-base/6 text-zinc-500 dark:text-zinc-400 sm:text-sm/6">
				{{ $description }}
			</p>
		@endif
		<div class="mt-4">
			{{ $slot }}
		</div>
	</div>
</div>
