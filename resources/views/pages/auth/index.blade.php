{{-- Layout --}}
@extends('layouts.auth.default')

@section('content')
	<div class="grid grid-cols-5 gap-10">
		<div class="col-span-1 rounded-lg border border-zinc-950/10 dark:border-white/10">
			test
		</div>

		<div class="col-span-1 rounded-lg border border-zinc-950/10 dark:border-white/10">
			test
		</div>
		<div class="col-span-1 rounded-lg border border-zinc-950/10 dark:border-white/10">
			test
		</div>

		<div class="col-span-1 rounded-lg border border-zinc-950/10 dark:border-white/10">
			test
		</div>
		<div class="col-span-1 rounded-lg border border-zinc-950/10 dark:border-white/10">
			test
		</div>
	</div>

	<div>
		<div class="prose prose-sm prose-zinc">
			<h1 class="font-medium text-white">Test</h1>
		</div>

		<div class="mt-3 rounded-lg border border-zinc-950/10 dark:border-white/10">
			<table class="w-full whitespace-nowrap text-left">
				<colgroup>
					<col class="w-full sm:w-4/12">
					<col class="lg:w-4/12">
					<col class="lg:w-2/12">
					<col class="lg:w-1/12">
					<col class="lg:w-1/12">
				</colgroup>
				<thead class="border-b border-zinc-950/10 text-sm leading-6 text-white dark:border-white/10">
					<tr>
						<th class="py-4 pl-4 pr-8 font-semibold sm:pl-6 lg:pl-8"
							scope="col">User</th>
						<th class="hidden py-4 pl-0 pr-8 font-semibold sm:table-cell"
							scope="col">Commit</th>
						<th class="py-4 pl-0 pr-4 text-right font-semibold sm:pr-8 sm:text-left lg:pr-20"
							scope="col">Status</th>
						<th class="hidden py-4 pl-0 pr-8 font-semibold md:table-cell lg:pr-20"
							scope="col">Duration</th>
						<th class="hidden py-4 pl-0 pr-4 text-right font-semibold sm:table-cell sm:pr-6 lg:pr-8"
							scope="col">Deployed at</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-white/5">
					<tr>
						<td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
							<div class="flex items-center gap-x-4">
								<img alt=""
									class="h-8 w-8 rounded-full bg-gray-800"
									src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
								<div class="truncate text-sm font-medium leading-6 text-white">Michael Foster</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
							<div class="flex gap-x-3">
								<div class="font-mono text-sm leading-6 text-gray-400">2d89f0c8</div>
								<div class="rounded-md bg-gray-700/40 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-white/10">main</div>
							</div>
						</td>
						<td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
							<div class="flex items-center justify-end gap-x-2 sm:justify-start">
								<time class="text-gray-400 sm:hidden"
									datetime="2023-01-23T11:00">45 minutes ago</time>
								<div class="flex-none rounded-full bg-green-400/10 p-1 text-green-400">
									<div class="h-1.5 w-1.5 rounded-full bg-current"></div>
								</div>
								<div class="hidden text-white sm:block">Completed</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">25s</td>
						<td class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
							<time datetime="2023-01-23T11:00">45 minutes ago</time>
						</td>
					</tr>
					<tr>
						<td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
							<div class="flex items-center gap-x-4">
								<img alt=""
									class="h-8 w-8 rounded-full bg-gray-800"
									src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
								<div class="truncate text-sm font-medium leading-6 text-white">Lindsay Walton</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
							<div class="flex gap-x-3">
								<div class="font-mono text-sm leading-6 text-gray-400">249df660</div>
								<div class="rounded-md bg-gray-700/40 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-white/10">main</div>
							</div>
						</td>
						<td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
							<div class="flex items-center justify-end gap-x-2 sm:justify-start">
								<time class="text-gray-400 sm:hidden"
									datetime="2023-01-23T09:00">3 hours ago</time>
								<div class="flex-none rounded-full bg-green-400/10 p-1 text-green-400">
									<div class="h-1.5 w-1.5 rounded-full bg-current"></div>
								</div>
								<div class="hidden text-white sm:block">Completed</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">1m 32s</td>
						<td class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
							<time datetime="2023-01-23T09:00">3 hours ago</time>
						</td>
					</tr>
					<tr>
						<td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
							<div class="flex items-center gap-x-4">
								<img alt=""
									class="h-8 w-8 rounded-full bg-gray-800"
									src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
								<div class="truncate text-sm font-medium leading-6 text-white">Courtney Henry</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
							<div class="flex gap-x-3">
								<div class="font-mono text-sm leading-6 text-gray-400">11464223</div>
								<div class="rounded-md bg-gray-700/40 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-white/10">main</div>
							</div>
						</td>
						<td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
							<div class="flex items-center justify-end gap-x-2 sm:justify-start">
								<time class="text-gray-400 sm:hidden"
									datetime="2023-01-23T00:00">12 hours ago</time>
								<div class="flex-none rounded-full bg-rose-400/10 p-1 text-rose-400">
									<div class="h-1.5 w-1.5 rounded-full bg-current"></div>
								</div>
								<div class="hidden text-white sm:block">Error</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">1m 4s</td>
						<td class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
							<time datetime="2023-01-23T00:00">12 hours ago</time>
						</td>
					</tr>
					<tr>
						<td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
							<div class="flex items-center gap-x-4">
								<img alt=""
									class="h-8 w-8 rounded-full bg-gray-800"
									src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
								<div class="truncate text-sm font-medium leading-6 text-white">Courtney Henry</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
							<div class="flex gap-x-3">
								<div class="font-mono text-sm leading-6 text-gray-400">dad28e95</div>
								<div class="rounded-md bg-gray-700/40 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-white/10">main</div>
							</div>
						</td>
						<td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
							<div class="flex items-center justify-end gap-x-2 sm:justify-start">
								<time class="text-gray-400 sm:hidden"
									datetime="2023-01-21T13:00">2 days ago</time>
								<div class="flex-none rounded-full bg-green-400/10 p-1 text-green-400">
									<div class="h-1.5 w-1.5 rounded-full bg-current"></div>
								</div>
								<div class="hidden text-white sm:block">Completed</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">2m 15s</td>
						<td class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
							<time datetime="2023-01-21T13:00">2 days ago</time>
						</td>
					</tr>
					<tr>
						<td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
							<div class="flex items-center gap-x-4">
								<img alt=""
									class="h-8 w-8 rounded-full bg-gray-800"
									src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
								<div class="truncate text-sm font-medium leading-6 text-white">Michael Foster</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
							<div class="flex gap-x-3">
								<div class="font-mono text-sm leading-6 text-gray-400">624bc94c</div>
								<div class="rounded-md bg-gray-700/40 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-white/10">main</div>
							</div>
						</td>
						<td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
							<div class="flex items-center justify-end gap-x-2 sm:justify-start">
								<time class="text-gray-400 sm:hidden"
									datetime="2023-01-18T12:34">5 days ago</time>
								<div class="flex-none rounded-full bg-green-400/10 p-1 text-green-400">
									<div class="h-1.5 w-1.5 rounded-full bg-current"></div>
								</div>
								<div class="hidden text-white sm:block">Completed</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">1m 12s</td>
						<td class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
							<time datetime="2023-01-18T12:34">5 days ago</time>
						</td>
					</tr>
					<tr>
						<td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
							<div class="flex items-center gap-x-4">
								<img alt=""
									class="h-8 w-8 rounded-full bg-gray-800"
									src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
								<div class="truncate text-sm font-medium leading-6 text-white">Courtney Henry</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
							<div class="flex gap-x-3">
								<div class="font-mono text-sm leading-6 text-gray-400">e111f80e</div>
								<div class="rounded-md bg-gray-700/40 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-white/10">main</div>
							</div>
						</td>
						<td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
							<div class="flex items-center justify-end gap-x-2 sm:justify-start">
								<time class="text-gray-400 sm:hidden"
									datetime="2023-01-16T15:54">1 week ago</time>
								<div class="flex-none rounded-full bg-green-400/10 p-1 text-green-400">
									<div class="h-1.5 w-1.5 rounded-full bg-current"></div>
								</div>
								<div class="hidden text-white sm:block">Completed</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">1m 56s</td>
						<td class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
							<time datetime="2023-01-16T15:54">1 week ago</time>
						</td>
					</tr>
					<tr>
						<td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
							<div class="flex items-center gap-x-4">
								<img alt=""
									class="h-8 w-8 rounded-full bg-gray-800"
									src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
								<div class="truncate text-sm font-medium leading-6 text-white">Michael Foster</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
							<div class="flex gap-x-3">
								<div class="font-mono text-sm leading-6 text-gray-400">5e136005</div>
								<div class="rounded-md bg-gray-700/40 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-white/10">main</div>
							</div>
						</td>
						<td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
							<div class="flex items-center justify-end gap-x-2 sm:justify-start">
								<time class="text-gray-400 sm:hidden"
									datetime="2023-01-16T11:31">1 week ago</time>
								<div class="flex-none rounded-full bg-green-400/10 p-1 text-green-400">
									<div class="h-1.5 w-1.5 rounded-full bg-current"></div>
								</div>
								<div class="hidden text-white sm:block">Completed</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">3m 45s</td>
						<td class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
							<time datetime="2023-01-16T11:31">1 week ago</time>
						</td>
					</tr>
					<tr>
						<td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
							<div class="flex items-center gap-x-4">
								<img alt=""
									class="h-8 w-8 rounded-full bg-gray-800"
									src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
								<div class="truncate text-sm font-medium leading-6 text-white">Whitney Francis</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
							<div class="flex gap-x-3">
								<div class="font-mono text-sm leading-6 text-gray-400">5c1fd07f</div>
								<div class="rounded-md bg-gray-700/40 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-white/10">main</div>
							</div>
						</td>
						<td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
							<div class="flex items-center justify-end gap-x-2 sm:justify-start">
								<time class="text-gray-400 sm:hidden"
									datetime="2023-01-09T08:45">2 weeks ago</time>
								<div class="flex-none rounded-full bg-green-400/10 p-1 text-green-400">
									<div class="h-1.5 w-1.5 rounded-full bg-current"></div>
								</div>
								<div class="hidden text-white sm:block">Completed</div>
							</div>
						</td>
						<td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">37s</td>
						<td class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
							<time datetime="2023-01-09T08:45">2 weeks ago</time>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<livewire:test />
@endsection
