<dd
	class="pb-3 pt-1 font-medium text-zinc-950 dark:text-white sm:border-t sm:border-zinc-950/10 sm:py-3 dark:sm:border-white/10 sm:[&:nth-child(2)]:border-none"
>
	{{ $attributes->get('text') ?: $slot }}
</dd>
