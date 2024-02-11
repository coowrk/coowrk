<li>
	<a
		class="group flex gap-x-3 rounded-lg p-2 text-sm/6 font-semibold text-gray-500 hover:bg-black/[3%] hover:text-gray-900 dark:text-zinc-500 dark:hover:bg-white/[3%] dark:hover:text-white"
		href="#"
	>
		<span
			class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 text-[0.625rem] font-medium text-gray-500 group-hover:text-gray-900 dark:border-zinc-800 dark:bg-zinc-800/5 dark:text-zinc-500 dark:group-hover:text-white"
		>
			{{ Str::substr($team, 0, 1) }}
		</span>
		<span class="truncate">{{ $team }}</span>
	</a>
</li>
