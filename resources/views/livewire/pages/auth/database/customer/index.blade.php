<div>
	<div class="overflow-hidden rounded-lg border border-gray-200 dark:border-zinc-800">
		{{-- Table --}}
		<table class="w-full whitespace-nowrap text-left">
			{{-- Grid --}}
			<colgroup>
				<col class="w-full sm:w-4/12">
				<col class="lg:w-4/12">
				<col class="lg:w-2/12">
				<col class="lg:w-2/12">
			</colgroup>

			{{-- Search Header --}}
			<thead class="text-sm/6">
				<tr class="bg-white dark:bg-zinc-900">
					<td
						class="pl-4 pr-8 lg:pl-8"
						colspan="4"
					>
						<x-forms.input
							id="search"
							placeholder="Suche nach Name oder Betreff..."
							style="px-0 py-4"
							theme="transparent"
							wire:keyup.debounce.250ms="searchCustomers"
							wire:model="search"
						/>
					</td>
				</tr>
			</thead>

			{{-- Table Header --}}
			<thead
				class="border-y border-gray-200 bg-white text-sm/6 text-gray-900 dark:border-zinc-800 dark:bg-zinc-900 dark:text-white"
			>
				<tr>
					<th class="py-4 pl-4 pr-8 lg:pl-8">Name</th>
					<th class="py-4 pr-8">Adresse</th>
					<th class="hidden py-4 pr-8 md:table-cell">Erstellt am</th>
					<th class="py-4 pr-4 text-right lg:pr-8">Erstellt durch</th>
				</tr>
			</thead>

			{{-- Table Data --}}
			<tbody class="divide-y divide-gray-200 text-sm/6 text-gray-500 dark:divide-zinc-800 dark:text-zinc-400">
				@foreach ($customers as $customer)
					<tr
						{{-- x-on:click="Livewire.navigate('{{ route('letter-protocol.show', $letter->slug) }}')" --}}
						class="cursor-pointer bg-white dark:bg-zinc-900"
					>
						<td class="py-4 pl-4 pr-8 lg:pl-8">
							<p>{{ $customer->salutation }}</p>
							<p class="font-medium text-gray-900 dark:text-white">{{ $customer->full_name }}</p>
						</td>
						<td class="py-4 pr-8">
							<p>{{ $customer->street }} {{ $customer->street_number }},</p>
							<p>{{ $customer->postalcode }} {{ $customer->city }},</p>
							<p>{{ $customer->country }}</p>
						</td>
						<td class="hidden py-4 pr-8 md:table-cell">
							<time datetime="{{ $customer->created_at }}">{{ $customer->created_at->diffForHumans() }}</time>
						</td>
						<td class="py-4 pr-4 text-right lg:pr-8">
							{{ $customer->created_by_user->full_name }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	{{ $customers->links('components.paginator') }}
</div>
