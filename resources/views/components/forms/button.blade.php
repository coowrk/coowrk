<button {{ $attributes }} @class([
    // Basic layout
    'flex w-full justify-center rounded-lg shadow-sm',

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
    'px-[calc(theme(spacing[3.5])-1px)] py-[calc(theme(spacing[2.5])-1px)] sm:px-[calc(theme(spacing[3])-1px)] sm:py-[calc(theme(spacing[1.5])-1px)]',

    // Focus ring
    'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-app-yellow',
]) type="{{ $type }}">
    {{ $slot }}
</button>
