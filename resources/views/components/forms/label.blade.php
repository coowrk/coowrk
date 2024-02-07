<label class="select-none text-base/6 font-medium text-zinc-950 data-[disabled]:opacity-50 dark:text-white sm:text-sm/6"
    for="{{ $attributes->get('for') }}">
    {{ $attributes->get('title') }}
</label>

<div class="mt-3">
    {{ $slot }}
</div>
