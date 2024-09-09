<h2 @class([
	$attributes->get('class'),
	'text-lg/8 font-semibold text-zinc-950 dark:text-white sm:text-base/8',
])>
	{{ $attributes->get('title') ?: $slot }}
</h2>
