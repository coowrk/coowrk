<li
	class="relative pl-6 before:absolute before:left-0 before:top-2 before:z-10 before:h-2 before:w-2 before:-translate-x-1/2 before:rounded-full before:bg-zinc-500 before:ring-2 before:ring-white/10 dark:before:bg-zinc-400 dark:before:ring-zinc-900 lg:flex lg:gap-12 lg:pl-0 lg:before:left-[8.5rem]"
	role="article"
>
	<h4 class="hidden text-sm/6 text-zinc-500 dark:text-zinc-400 lg:block lg:w-28 lg:text-right">
		{{ $attributes->get('date') }}
	</h4>

	<div class="flex flex-1 flex-col">
		{{ $slot }}
	</div>
</li>
