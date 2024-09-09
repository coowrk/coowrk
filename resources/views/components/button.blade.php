@if ($attributes->has('href') && !$attributes->has('wire:navigate'))
	<a
		{{ $attributes->filter(fn($value, $key) => !in_array($key, ['class', 'theme'])) }}
		@class([
			// additional attributes
			$attributes->get('class'),
		
			// base
			'flex cursor-default items-center justify-center gap-x-2 rounded-lg px-[calc(theme(spacing[3.5])-1px)] py-[calc(theme(spacing[2.5])-1px)] sm:px-[calc(theme(spacing.3)-1px)] sm:py-[calc(theme(spacing[1.5])-1px)] text-base/6 font-semibold focus:outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 sm:text-sm/6',
		
			// themes
			// default
			'bg-zinc-900 dark:bg-zinc-600 *:fill-zinc-400 shadow-[inset_0_1px_theme(colors.white/15%)] text-white border border-transparent' => !$attributes->get(
				'theme'),
		
			// blank
			'bg-transparent *:fill-zinc-500 dark:*:fill-zinc-400 hover:bg-zinc-950/5 dark:hover:bg-white/5 text-zinc-950 dark:text-white border border-transparent' =>
				$attributes->get('theme') == 'blank',
		
			// blue
			'bg-blue-500 shadow-[inset_0_1px_theme(colors.white/15%)] *:fill-white text-white border border-transparent' =>
				$attributes->get('theme') == 'blue',
		])
	>
		{{ $slot }}
	</a>
@else
	<button
		{{ $attributes->filter(fn($value, $key) => !in_array($key, ['class', 'theme'])) }}
		@class([
			// additional attributes
			$attributes->get('class'),
		
			// base
			'flex cursor-default items-center justify-center gap-x-2 rounded-lg px-[calc(theme(spacing[3.5])-1px)] py-[calc(theme(spacing[2.5])-1px)] sm:px-[calc(theme(spacing.3)-1px)] sm:py-[calc(theme(spacing[1.5])-1px)] text-base/6 font-semibold focus:outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 sm:text-sm/6',
		
			// themes
			// default
			'bg-zinc-900 dark:bg-zinc-600 *:fill-zinc-400 shadow-[inset_0_1px_theme(colors.white/15%)] text-white border border-transparent' => !$attributes->get(
				'theme'),
		
			// blank
			'bg-transparent *:fill-zinc-500 dark:*:fill-zinc-400 hover:bg-zinc-950/5 dark:hover:bg-white/5 text-zinc-950 dark:text-white border border-transparent' =>
				$attributes->get('theme') == 'blank',
		
			// blue
			'bg-blue-500 shadow-[inset_0_1px_theme(colors.white/15%)] *:fill-white text-white border border-transparent' =>
				$attributes->get('theme') == 'blue',
		])
	>
		{{ $slot }}
	</button>
@endif
