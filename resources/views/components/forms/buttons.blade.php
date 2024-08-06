@if ($attributes->has('href') && !$attributes->has('wire:navigate'))
	<a
		{{ $attributes->filter(fn($value, $key) => !in_array($key, ['class', 'theme'])) }}
		@class([
			// addition attributes
			$attributes->get('class'),
		
			// base
			'flex cursor-default items-center justify-center gap-x-2 rounded-lg px-3 py-1.5 text-base/6 font-semibold shadow-sm focus:outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 sm:text-sm/6',
		
			// themes
			// blank
			'bg-transparent text-zinc-950 ring-1 ring-inset ring-transparent hover:bg-zinc-950/5 dark:text-zinc-100 dark:hover:bg-white/10' =>
				$attributes->get('theme') == 'blank',
		
			// white
			'bg-white text-zinc-900 hover:bg-gray-200' =>
				$attributes->get('theme') == 'white',
		
			// zinc
			'ring-white/15 bg-zinc-900 text-zinc-100 ring-1 ring-inset hover:bg-zinc-800' =>
				$attributes->get('theme') == 'zinc',
		])
	>
		{{ $slot }}
	</a>
@else
	<button
		{{ $attributes->filter(fn($value, $key) => !in_array($key, ['class', 'theme'])) }}
		@class([
			// addition attributes
			$attributes->get('class'),
		
			// base
			'flex cursor-default items-center justify-center gap-x-2 rounded-lg px-3 py-1.5 text-base/6 font-semibold shadow-sm focus:outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 sm:text-sm/6',
		
			// themes
			// blank
			'bg-transparent text-zinc-950 ring-1 ring-inset ring-transparent hover:bg-zinc-950/5 dark:text-zinc-100 dark:hover:bg-white/10' =>
				$attributes->get('theme') == 'blank',
		
			// white
			'bg-white text-zinc-900 hover:bg-gray-200' =>
				$attributes->get('theme') == 'white',
		
			// zinc
			'ring-white/15 bg-zinc-900 text-zinc-100 ring-1 ring-inset hover:bg-zinc-800' =>
				$attributes->get('theme') == 'zinc',
		])
	>
		{{ $slot }}
	</button>
@endif
