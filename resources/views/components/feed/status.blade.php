{{-- feed status --}}
<x-feed.item.base :date="$data->created_at->diffForHumans()">
	{{-- text --}}
	<x-feed.item.text>
		{{ $data->created_by->first_name }}
		{{ $data->created_by->last_name }}
	</x-feed.item.text>

	<div class="flex flex-wrap gap-x-2 gap-y-1">
		{{-- title --}}
		<x-feed.item.title>{{ __($data->title) }}</x-feed.item.title>

		{{-- badge --}}
		@if ($data->new_status)
			<x-badge
				text="{{ __($badge['title']) }}"
				theme="{{ $badge['theme'] }}"
			/>
		@endif
	</div>
</x-feed.item.base>
