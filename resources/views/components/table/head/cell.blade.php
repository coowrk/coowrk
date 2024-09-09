<th @class([
	'border-b border-b-zinc-950/10 px-4 py-2 font-medium first:pl-[var(--gutter,theme(spacing.2))] last:pr-[var(--gutter,theme(spacing.2))] dark:border-b-white/10 sm:first:pl-1 sm:last:pr-1',
	'text-right' => $attributes->has('text-right'),
])>
	{{ $attributes->get('title') }}
</th>
