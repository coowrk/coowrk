<div>
    <input {{ $attributes }} {{ $errors->has($attributes->get('name')) ? 'data-invalid' : '' }}
        @class([
            // Basic layout
            'block w-full relative rounded-lg after:pointer-events-none',
        
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
            'border border-zinc-950/10 dark:border-white/10 data-[invalid]:border-red-500 data-[invalid]:dark:border-red-500 data-[disabled]:border-zinc-950/20 data-[disabled]:dark:border-white/15',
        
            // Focus ring
            'focus:dark:border-app-yellow focus:border-app-yellow focus:data-[invalid]:border-app-yellow focus:dark:data-[invalid]:border-app-yellow focus:outline-0 focus:ring-0',
        ])>

    @error($attributes->get('name'))
        <span
            class="mt-1 block text-base/6 text-red-600 data-[disabled]:opacity-50 dark:text-red-500 sm:text-sm/6">{{ $message }}</span>
    @enderror
</div>
