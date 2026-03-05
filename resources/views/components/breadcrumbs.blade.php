@unless ($breadcrumbs->isEmpty())
    <nav aria-label="Breadcrumb">
        <ol class="flex flex-wrap items-center gap-1 text-sm text-gray-500">
            @foreach ($breadcrumbs as $breadcrumb)
                <li class="flex items-center">
                    @if (!$loop->last && $breadcrumb->url)
                        <a href="{{ $breadcrumb->url }}" class="hover:text-gray-700 transition-colors breadcrumb-link">
                            {{ $breadcrumb->title }}
                        </a>
                        <svg class="mx-1 h-4 w-4 shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                        </svg>
                    @else
                        <span class="font-medium text-gray-700">{{ $breadcrumb->title }}</span>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
@endunless
