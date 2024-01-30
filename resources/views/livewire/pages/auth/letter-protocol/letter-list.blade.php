<div>
	@foreach ($letters as $letter)
		<tr wire:key="letter-{{ $letter->id }}">
			<td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
				<div class="truncate text-sm font-medium leading-6 text-white">{{ $letter->customer->first_name }} {{ $letter->customer->last_name }}</div>
			</td>
			<td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
				<div class="text-sm leading-6 text-zinc-400">{{ $letter->topic }}</div>
			</td>
			<td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-zinc-400 md:table-cell lg:pr-20">
				<time datetime="2023-01-23T11:00">{{ $letter->created_at->diffForHumans() }}</time>
			</td>
			<td class="flex justify-end py-4 pl-0 pr-4 text-sm leading-6 text-zinc-400 sm:pr-6 lg:pr-8">
				<svg class="size-6 cursor-pointer stroke-zinc-400 hover:stroke-white"
					fill="none"
					height="24px"
					stroke-width="1.5"
					viewBox="0 0 24 24"
					width="24px"
					wire:click="edit('{{ $letter->id }}')"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M14.3632 5.65156L15.8431 4.17157C16.6242 3.39052 17.8905 3.39052 18.6716 4.17157L20.0858 5.58579C20.8668 6.36683 20.8668 7.63316 20.0858 8.41421L18.6058 9.8942M14.3632 5.65156L4.74749 15.2672C4.41542 15.5993 4.21079 16.0376 4.16947 16.5054L3.92738 19.2459C3.87261 19.8659 4.39148 20.3848 5.0115 20.33L7.75191 20.0879C8.21972 20.0466 8.65806 19.8419 8.99013 19.5099L18.6058 9.8942M14.3632 5.65156L18.6058 9.8942"
						stroke-linecap="round"
						stroke-linejoin="round"
						stroke-width="1.5"></path>
				</svg>
			</td>
		</tr>
	@endforeach
</div>