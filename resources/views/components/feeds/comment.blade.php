{{-- feed comment --}}
<x-feeds.item.base :date="$data->created_at->diffForHumans()">
	<div class="dark:border-white/15 rounded-lg border p-3">
		<x-feeds.item.title>
			{{ $data->comment }}
		</x-feeds.item.title>
	</div>
	<x-feeds.item.text>
		{{ $data->user->name }}
	</x-feeds.item.text>
</x-feeds.item.base>
