<button
	{{ $attributes->filter(fn($value, $key) => !in_array($key, ["style", "theme"])) }}
	@class([
		// Basic layout
		"flex justify-center rounded-lg w-full",
	
		// Prevent mobile browser from modifying
		"appearance-none",
	
		// Font
		"text-base/6 sm:text-sm/6 font-semibold",
	
		// Padding
		"px-3 py-1.5",
	
		// Focus ring
		"focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-app-yellow",
	
		// Disabled-State
		"disabled:opacity-50 disabled:cursor-not-allowed",
	
		// Theme (default)
		"text-gray-900 bg-app-yellow enabled:hover:bg-app-yellow/90" => !$attributes->has(
			"theme"),
	
		// Theme (white)
		"bg-gray-100 enabled:hover:bg-gray-50 text-gray-900" =>
			$attributes->has("theme") && $attributes->get("theme") == "white",
		"dark:bg-gray-50 dark:enabled:hover:bg-white text-white" =>
			$attributes->get("theme") == "white",
	
		// Theme (opacity)
		"bg-black/[7.5%] enabled:hover:bg-black/5 text-gray-900" =>
			$attributes->get("theme") == "opacity",
		"dark:bg-white/[7.5%] dark:enabled:hover:bg-white/5 dark:text-white" =>
			$attributes->get("theme") == "opacity",
	
		// Theme (delete)
		"bg-red-600 text-white enabled:hover:bg-red-500" =>
			$attributes->get("theme") == "delete",
	
		$attributes->get("style"),
	])
	type="{{ $type }}"
>
	{{ $slot }}
</button>
