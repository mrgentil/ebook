@if ($paginator->hasPages())
    <nav class="woocommerce-pagination">
        <ul class="page-numbers nav-links" style="display: flex;">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="prev page-numbers" aria-hidden="true" href="#">←</a>
                </li>
            @else
                <li rel="prev" aria-label="@lang('pagination.previous')"><a class="prev page-numbers"
                       href="{{ $paginator->previousPageUrl() }}">←</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    {{--<li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>--}}
                    <li><a class="page-numbers" href="#">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><span class="page-numbers current">{{ $page }}</span></li>
                        @else
                            <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">→</a></li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a aria-hidden="true" class="next page-numbers" href="#">→</a>
                </li>
            @endif
        </ul>
    </nav>
@endif
