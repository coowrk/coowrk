<td
	class="{{ $attributes->get('class') }} relative border-b border-zinc-950/5 px-4 py-4 first:pl-[var(--gutter,theme(spacing.2))] last:pr-[var(--gutter,theme(spacing.2))] dark:border-white/5 sm:first:pl-1 sm:last:pr-1"
>
	<a
		@if ($attributes->has('href')) href="{{ $attributes->get('href') }}" @endif
		class="absolute inset-0 focus:outline-none"
	>
	</a>
	{{ $slot }}
</td>
