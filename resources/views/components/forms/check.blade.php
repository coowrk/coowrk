<div class="flex items-start">
	<input
		{{ $attributes }}
		@class([
			// Basic layout
			"relative rounded shrink-0 w-4 h-4 mt-1.5 peer cursor-pointer",
		
			// Prevent mobile browser from modifying
			"appearance-none",
		
			// Background-Colors
			"bg-transparent checked:bg-app-yellow checked:hover:bg-app-yellow hover:bg-white/5",
		
			// Border
			"border border-zinc-950/10 checked:border-app-yellow data-[invalid]:border-red-500 data-[disabled]:border-zinc-950/20 ",
			"dark:border-zinc-800 dark:data-[invalid]:border-red-500 dark:data-[disabled]:border-white/15",
		
			// Focus ring
			"focus:border-app-yellow focus:data-[invalid]:border-app-yellow focus:outline-0 focus:ring-0",
			"dark:focus:border-app-yellow dark:focus:data-[invalid]:border-app-yellow",
		])
	>
	<svg
		class="size-4 pointer-events-none absolute mt-1.5 hidden stroke-zinc-950 peer-checked:block"
		fill="none"
		height="24px"
		stroke-width="2.5"
		viewBox="0 0 24 24"
		width="24px"
		xmlns="http://www.w3.org/2000/svg"
	>
		<path
			d="M5 13L9 17L19 7"
			stroke-linecap="round"
			stroke-linejoin="round"
			stroke-width="2.5"
		></path>
	</svg>

	<div class="ms-3 shrink-0">
		@if ($attributes->has("title"))
			<label
				@class([
					"text-sm/6 cursor-pointer text-gray-500",
					"text-gray-900 dark:text-white font-medium" => $attributes->has(
						"description"),
					"dark:text-zinc-400 text-gray-500 font-normal" => !$attributes->has(
						"description"),
				])
				for="{{ $attributes->get("id") }}"
			>
				{{ $attributes->get("title") }}
			</label>
		@endif

		@if ($attributes->has("description"))
			<p class="text-sm text-zinc-400">{{ $attributes->get("description") }}</p>
		@endif

		@error($attributes->get("name"))
			<p class="shrink-0 text-sm/6 text-red-600 data-[disabled]:opacity-50 dark:text-red-500 sm:text-xs/6">
				{{ $message }}</p>
		@enderror
	</div>
</div>
