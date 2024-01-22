<div>
    {{-- Input Title --}}
    <label for="{{ $name }}"
        class="select-none text-base/6 text-zinc-950 data-[disabled]:opacity-50 sm:text-sm/6 dark:text-white">
        {{ $labelName }}
    </label>

    {{-- Input Description --}}
    @if ($description)
        <p data-slot="description"
            class="text-base/6 text-zinc-500 data-[disabled]:opacity-50 sm:text-sm/6 dark:text-zinc-400">
            {{ $description }}
        </p>
    @endif

    {{-- Input Box --}}
    <div class="mt-3">
        <x-forms.headless-input :$type :$name />
    </div>
</div>
