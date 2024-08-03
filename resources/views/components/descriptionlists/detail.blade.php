<dd
	class="pb-3 pt-1 text-zinc-950 dark:text-white sm:border-t sm:border-zinc-950/5 sm:py-3 dark:sm:border-white/5 sm:[&:nth-child(2)]:border-none"
>
	{{ $attributes->get('text') ?: $slot }}
</dd>
