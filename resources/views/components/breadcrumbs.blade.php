@unless ($breadcrumbs->isEmpty())
    <ol class="flex gap-x-3 text-sm/6">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="text-zinc-400"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                <li class="text-zinc-400">/</li>
            @else
                <li class="font-medium text-white">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ol>
@endunless
