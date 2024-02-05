<div>
    <div class="relative flex items-center">
        <select {{ $attributes->filter(fn($value, $key) => $key != 'data') }}
            {{ $errors->has($attributes->get('name')) ? 'data-invalid' : '' }} @class([
                // Basic layout
                'block w-full relative rounded-lg after:pointer-events-none text-left cursor-pointer',
            
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
                'ring-1 ring-inset ring-zinc-950/10 dark:ring-white/10 data-[invalid]:ring-red-500 data-[invalid]:dark:ring-red-500 data-[disabled]:ring-zinc-950/20 data-[disabled]:dark:ring-white/15',
            
                // Focus ring
                'focus:dark:ring-app-yellow focus:ring-app-yellow focus:data-[invalid]:ring-app-yellow focus:dark:data-[invalid]:ring-app-yellow focus:outline-0 focus:ring-2',
            ])>
            <option value="null" disabled>Auswählen...</option>
            @foreach ($attributes->get('data') as $value => $option)
                <option id="listbox-option-0" role="option" value="{{ $value }}" @selected($attributes->has('selected') && $value == $attributes->get('selected'))>
                    {{ $option }}</option>
            @endforeach
        </select>

        <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5"
            class="absolute pointer-events-none right-[calc(theme(spacing[3.5])-1px)] size-4 stroke-zinc-400"
            fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000">
            <path d="M17 8L12 3L7 8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            </path>
            <path d="M17 16L12 21L7 16" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            </path>
        </svg>
    </div>

    @error($attributes->get('name'))
        <span
            class="mt-1 block text-base/6 text-red-600 data-[disabled]:opacity-50 dark:text-red-500 sm:text-sm/6">{{ $message }}</span>
    @enderror
</div>
