{{-- feed status --}}
<x-feeds.item.base :date="$data->created_at->diffForHumans()">
	{{-- text --}}
	<x-feeds.item.text>
		{{ $data->created_by->name }}
	</x-feeds.item.text>

	<div class="flex flex-wrap gap-x-2 gap-y-1">
		{{-- title --}}
		<x-feeds.item.title>{{ __($data->title) }}</x-feeds.item.title>

		{{-- badge --}}
		@if ($data->new_status)
			<x-badges
				text="{{ __($badge['title']) }}"
				theme="{{ $badge['theme'] }}"
			/>
		@endif
	</div>
</x-feeds.item.base>
