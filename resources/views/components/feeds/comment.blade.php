{{-- feed comment --}}
<x-feeds.item.base :date="$data->created_at->diffForHumans()">
	<x-feeds.item.text>
		{{ $data->created_by->first_name }}
		{{ $data->created_by->last_name }}
	</x-feeds.item.text>

	<div class="dark:border-white/15 mt-1 flex items-start gap-3 rounded-lg border p-3">
		<svg
			class="size-5 sm:size-4 mt-1 shrink-0 text-zinc-500"
			fill="currentColor"
			viewBox="0 0 20 20"
			xmlns="http://www.w3.org/2000/svg"
		>
			<path
				clip-rule="evenodd"
				d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902 1.168.188 2.352.327 3.55.414.28.02.521.18.642.413l1.713 3.293a.75.75 0 0 0 1.33 0l1.713-3.293a.783.783 0 0 1 .642-.413 41.102 41.102 0 0 0 3.55-.414c1.437-.231 2.43-1.49 2.43-2.902V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0 0 10 2ZM6.75 6a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 2.5a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
				fill-rule="evenodd"
			/>
		</svg>

		<x-feeds.item.title>
			{{ $data->comment }}
		</x-feeds.item.title>
	</div>
</x-feeds.item.base>
