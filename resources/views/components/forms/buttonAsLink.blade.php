<a {{ $attributes }} @class([
    // Basic layout
    'flex justify-center rounded-lg shadow-sm',

    // Text
    'text-sm/6 font-semibold text-zinc-950',

    // Background-Colors (default)
    'bg-app-yellow',

    // Background-Colors (second)
    'bg-white' => $attributes->has('second'),

    // Hover (default)
    'hover:bg-app-yellow/90',

    // Hover (second)
    'hover:bg-gray-50' => $attributes->has('second'),

    // Padding
    'px-3 py-1.5',

    // Focus ring
    'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-app-yellow',
])>
    {{ $slot }}
</a>
