<button {{ $attributes->filter(fn($value, $key) => !in_array($key, ['style', 'theme'])) }} @class([
    // Basic layout
    'flex justify-center rounded-lg shadow-sm',

    // Text
    'text-sm/6 font-semibold',

    // Text-Color (default)
    'text-zinc-950' => !$attributes->has('theme'),

    // Background-Colors (default)
    'bg-app-yellow' => !$attributes->has('theme'),

    // Hover (default)
    'enabled:hover:bg-app-yellow/90' => !$attributes->has('theme'),

    // Hover (second)
    'enabled:hover:bg-gray-50' =>
        $attributes->has('theme') && $attributes->get('theme') == 'second',

    // Padding
    'px-3 py-1.5',

    // Focus ring
    'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-app-yellow',

    // Disabled-State
    'disabled:opacity-50 disabled:cursor-not-allowed',

    // Theme (second)
    'bg-white enabled:hover:bg-gray-50 text-zinc-950' =>
        $attributes->get('theme') == 'second',

    // Theme (third)
    'bg-white/5 enabled:hover:bg-white/10 text-white' =>
        $attributes->get('theme') == 'third',

    // Theme (delete)
    'bg-red-600 enabled:hover:bg-red-500 text-white' =>
        $attributes->get('theme') == 'delete',

    $attributes->get('style'),
])
    type="{{ $type }}">
    {{ $slot }}
</button>
