@if ($paginator->hasPages())
    <nav>
        <div class="join grid grid-cols-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-outline" disabled aria-disabled="true">@lang('Previous page')</button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="join-item btn btn-outline">@lang('Previous page')</a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="join-item btn btn-outline">@lang('Next')</a>
            @else
                <button class="join-item btn btn-outline" disabled aria-disabled="true">@lang('Next')</button>
            @endif
        </div>
    </nav>
@endif