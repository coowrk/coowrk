<h3 @class([
	$attributes->get('class'),
	'text-base font-semibold text-zinc-950 dark:text-white sm:text-sm/6',
])>
	{{ $attributes->get('title') ?: $slot }}
</h3>
