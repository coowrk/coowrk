<button {{ $attributes->filter(fn($value, $key) => $key != 'style') }} @class([
    // Basic layout
    'flex justify-center rounded-lg shadow-sm',

    // Text
    'text-sm/6 font-semibold',

    // Text-Color (default)
    'text-zinc-950' =>
        !$attributes->has('style') ||
        ($attributes->has('style') && $attributes->get('style') == 'second'),

    // Text-Color (third)
    'text-white' =>
        $attributes->has('style') && $attributes->get('style') == 'third',

    // Background-Colors (default)
    'bg-app-yellow' => !$attributes->has('style'),

    // Background-Colors (second)
    'bg-white' =>
        $attributes->has('style') && $attributes->get('style') == 'second',

    // Background-Colors (third)
    'bg-white/5' =>
        $attributes->has('style') && $attributes->get('style') == 'third',

    // Hover (default)
    'enabled:hover:bg-app-yellow/90' => !$attributes->has('style'),

    // Hover (second)
    'enabled:hover:bg-gray-50' =>
        $attributes->has('style') && $attributes->get('style') == 'second',

    // Hover (third)
    'enabled:hover:bg-white/10' =>
        $attributes->has('style') && $attributes->get('style') == 'third',

    // Padding
    'px-3 py-1.5',

    // Focus ring
    'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-app-yellow',

    // Disabled-State
    'disabled:opacity-50 disabled:cursor-not-allowed',
])
    type="{{ $type }}">
    {{ $slot }}
</button>
