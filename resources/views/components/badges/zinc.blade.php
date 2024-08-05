<x-badges.base
	class="hover:bg-zinc/20 bg-zinc-600/10 text-zinc-700 dark:bg-white/5 dark:text-zinc-400 dark:hover:bg-white/10"
>
	{{ $attributes->get('text') ?: $slot }}
</x-badges.base>
