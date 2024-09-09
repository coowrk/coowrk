<p @class([
	$attributes->get('class'),

	// dark / light theme
	'text-zinc-950 dark:text-white' => $attributes->has('theme'),
])>
	{{ $attributes->get('text') ?: $slot }}
</p>
