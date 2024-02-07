<div class="flex items-start">
    <input {{ $attributes }} @class([
        // Basic layout
        'relative rounded shrink-0 w-4 h-4 mt-1.5 peer cursor-pointer',
    
        // Prevent mobile browser from modifying
        'appearance-none',
    
        // Background-Colors
        'bg-transparent checked:bg-app-yellow checked:hover:bg-app-yellow hover:bg-white/5',
    
        // Border
        'border border-zinc-950/10 dark:border-zinc-800 data-[invalid]:border-red-500 data-[invalid]:dark:border-red-500 data-[disabled]:border-zinc-950/20 data-[disabled]:dark:border-white/15',
    
        // Focus ring
        'focus:dark:border-app-yellow focus:border-app-yellow focus:data-[invalid]:border-app-yellow focus:dark:data-[invalid]:border-app-yellow focus:outline-0 focus:ring-0',
    ])>
    <svg width="24px" height="24px" stroke-width="2.5" viewBox="0 0 24 24" fill="none"
        xmlns="http://www.w3.org/2000/svg"
        class="absolute hidden mt-1.5 pointer-events-none size-4 stroke-zinc-950 peer-checked:block">
        <path d="M5 13L9 17L19 7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>

    <div class="shrink-0 ms-3">
        @if ($attributes->has('title'))
            <label for="{{ $attributes->get('id') }}" @class([
                'text-sm/6 font-medium cursor-pointer text-zinc-950 dark:text-white',
                'dark:text-zinc-400 font-normal' => !$attributes->has('description'),
            ])>
                {{ $attributes->get('title') }}
            </label>
        @endif

        @if ($attributes->has('description'))
            <p class="text-sm text-zinc-400">{{ $attributes->get('description') }}</p>
        @endif

        @error($attributes->get('name'))
            <p class="shrink-0 text-sm/6 text-red-600 data-[disabled]:opacity-50 dark:text-red-500 sm:text-xs/6">
                {{ $message }}</p>
        @enderror
    </div>
</div>
