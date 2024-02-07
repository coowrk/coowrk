<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
    for="{{ $attributes->get('for') }}">
    {{ $attributes->get('title') }}
</label>

@if ($attributes->has('description'))
    <p class="text-base/6 text-zinc-500 data-[disabled]:opacity-50 dark:text-zinc-400 sm:text-sm/6">
        {{ $attributes->get('description') }}
    </p>
@endif

<div class="mt-3">
    {{ $slot }}
</div>
