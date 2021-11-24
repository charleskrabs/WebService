@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="#" wire:click="setPage('{{ $paginator->previousPageUrl() }}')" rel="prev" aria-label="@lang('pagination.previous')" style="color : #1ABC9C;">&lsaquo;</a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link" style="background-color: #1ABC9C; border: solid #1ABC9C 1px;">{{ $page }} </span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="#" wire:click="setPage('{{ $url }}')" style="color : #1ABC9C;">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="#" wire:click="setPage('{{ $paginator->nextPageUrl() }}')" rel="next" aria-label="@lang('pagination.next')" style="color : #1ABC9C;">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif

