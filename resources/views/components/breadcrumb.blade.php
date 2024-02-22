@unless ($breadcrumbs->isEmpty())
	<ol class="flex gap-x-3 text-sm/6">
		@foreach ($breadcrumbs as $breadcrumb)
			@if (!is_null($breadcrumb->url) && !$loop->last)
				<li class="text-gray-500 dark:text-zinc-400"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
				<li class="text-gray-500 dark:text-zinc-400">/</li>
			@else
				<li class="font-medium text-gray-900 dark:text-white">{{ $breadcrumb->title }}</li>
			@endif
		@endforeach
	</ol>
@endunless
