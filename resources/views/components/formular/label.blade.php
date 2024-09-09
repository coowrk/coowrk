{{-- label --}}
<label
	@if ($attributes->has('for')) for="{{ $attributes->get('for') }}" @endif
	class="{{ $attributes->get('class') }} block text-base font-medium text-zinc-950 dark:text-white sm:text-sm/6"
>
	{{ $attributes->get('title') }}
</label>

{{-- description --}}
@if ($attributes->has('description'))
	<p class="text-base/6 text-zinc-500 dark:text-zinc-400 sm:text-sm/6">
		{{ $attributes->get('description') }}
	</p>
@endif
