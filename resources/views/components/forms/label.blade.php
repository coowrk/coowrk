{{-- label --}}
<label
	@if ($attributes->has('for')) for="{{ $attributes->get('for') }}" @endif
	class="block text-base font-medium text-gray-100 sm:text-sm/6"
>
	{{ $attributes->get('title') }}
</label>

{{-- description --}}
@if ($attributes->has('description'))
	<p class="text-base/6 text-zinc-500 sm:text-sm/6">
		{{ $attributes->get('description') }}
	</p>
@endif
