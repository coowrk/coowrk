<input @class([
    // Basic layout
    'block w-full relative rounded-lg',

    // Prevent mobile browser from modifying
    'appearance-none',

    // Background-Colors
    'bg-transparent dark:bg-white/5 data-[disabled]:dark:bg-white/[2.5%]',

    // Text-Colors
    'dark:text-white text-zinc-950 placeholder:text-zinc-500',

    // Font-Size
    'text-base/6 sm:text-sm/6',

    // Padding
    'px-[calc(theme(spacing[3.5])-1px)] py-[calc(theme(spacing[2.5])-1px)] sm:px-[calc(theme(spacing[3])-1px)] sm:py-[calc(theme(spacing[1.5])-1px)]',

    // Border
    'border border-zinc-950/10 data-[hover]:border-zinc-950/20 dark:border-white/10 dark:data-[hover]:border-white/20 data-[invalid]:border-red-500 data-[invalid]:data-[hover]:border-red-500 data-[invalid]:dark:border-red-500 data-[invalid]:data-[hover]:dark:border-red-500 data-[disabled]:border-zinc-950/20 dark:data-[hover]:data-[disabled]:border-white/15 data-[disabled]:dark:border-white/15 ',

    // Focus ring
    'after:pointer-events-none focus:outline-none after:absolute after:inset-0 after:rounded-lg after:ring-inset after:ring-transparent sm:after:focus-within:ring-2 sm:after:focus-within:ring-blue-500',
]) type="{{ $type }}" name="{{ $name }}">