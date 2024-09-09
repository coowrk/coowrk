<h1 @class([
	$attributes->get('class'),
	'text-2xl/8 font-semibold text-zinc-950 dark:text-white sm:text-xl/8',
])>
	{{ $attributes->get('title') ?: $slot }}
</h1>
