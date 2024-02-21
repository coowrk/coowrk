<div>
	<input
		{{ $errors->has($attributes->get('name')) ? 'data-invalid' : '' }}
		{{ $attributes->filter(fn($value, $key) => !in_array($key, ['style', 'theme'])) }}
		@class([
			// Basic layout
			'block w-full relative rounded-lg after:pointer-events-none transition',
		
			// Prevent mobile browser from modifying
			'appearance-none',
		
			// Text-Colors
			'text-gray-900 placeholder:text-zinc-500',
			'dark:text-white',
		
			// Font
			'text-base/6 sm:text-sm/6 font-medium',
		
			// Padding
			'py-1.5 px-3',
		
			// Background-Colors
			'bg-white disabled:bg-gray-50' => !$attributes->has('theme'),
			'dark:bg-white/5 dark:disabled:bg-white/[2.5%]' => !$attributes->has(
				'theme'),
		
			// Ring
			'ring-1 ring-inset' => !$attributes->has('theme'),
			'ring-gray-900/10 data-[invalid]:ring-red-400 disabled:ring-gray-900/15 ' => !$attributes->has(
				'theme'),
			'dark:ring-white/10 dark:disabled:ring-white/15 dark:data-[invalid]:ring-red-500' => !$attributes->has(
				'theme'),
		
			// Focus ring
			'focus:outline-0 focus:ring-2' => !$attributes->has('theme'),
			'focus:ring-app-yellow focus:data-[invalid]:ring-red-400' => !$attributes->has(
				'theme'),
			'dark:focus:ring-app-yellow dark:focus:data-[invalid]:ring-red-500' => !$attributes->has(
				'theme'),
		
			// Theme Transparent
			'bg-transparent dark:bg-transparent focus:outline-0' =>
				$attributes->get('theme') == 'transparent',
		
			// Styles
			$attributes->get('style'),
		])
	>

	@error($attributes->get('name'))
		<span
			class="mt-2 block text-sm/6 font-medium text-red-600 disabled:opacity-50 dark:text-red-500 sm:text-xs/6">{{ $message }}</span>
	@enderror
</div>
