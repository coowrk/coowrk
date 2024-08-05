<span @class([
	$attributes->get('class'),
	'forced-colors:outline inline-flex cursor-pointer items-center gap-x-1.5 rounded-md px-1.5 py-0.5 text-sm/5 font-medium sm:text-xs/5',

	'bg-red-500/15 text-red-700 hover:bg-red-500/25 dark:bg-red-500/10 dark:text-red-400 dark:hover:bg-red-500/20' =>
		$attributes->get('theme') == 'red',

	'hover:bg-zinc-600/20 bg-zinc-600/10 text-zinc-700 dark:bg-white/5 dark:text-zinc-400 dark:hover:bg-white/10' =>
		$attributes->get('theme') == 'zinc',

	'hover:bg-lime-400/30 bg-lime-400/20 text-lime-700 dark:bg-lime-400/10 dark:text-lime-300 dark:hover:bg-lime-400/15' =>
		$attributes->get('theme') == 'lime',

	'bg-yellow-400/20 text-yellow-700 hover:bg-yellow-400/30 dark:bg-yellow-400/10 dark:text-yellow-300 dark:hover:bg-yellow-400/15' =>
		$attributes->get('theme') == 'yellow',

	'bg-blue-500/15 text-blue-700 hover:bg-blue-500/25 dark:text-blue-400 dark:hover:bg-blue-500/25' =>
		$attributes->get('theme') == 'blue',

	'bg-indigo-500/15 text-indigo-700 hover:bg-indigo-500/25 dark:text-indigo-400 dark:hover:bg-indigo-500/20' =>
		$attributes->get('theme') == 'indigo',
])>
	{{ $attributes->get('text') ?: $slot }}
</span>
