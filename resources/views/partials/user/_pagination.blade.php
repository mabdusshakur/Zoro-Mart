@if ($paginator->hasPages())

    @if ($paginator->onFirstPage())
        <li>
            <i class="fal fa-chevron-double-left disable"></i>
        </li>
    @else
        <li>
            <a href="javascript:;" wire:click="previousPage">
                <i class="fal fa-chevron-double-left"></i>
            </a>
        </li>
    @endif


    @foreach ($elements as $element)
        @if (is_string($element))
            <li>
                <a href="javascript:;">{{ $element }}</a>
            </li>
        @endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li>
                        <a href="javascript:;" wire:click="gotoPage({{ $page }})"
                            class="active">{{ $page }}</a>
                    </li>
                @else
                    <li>
                        <a href="javascript:;" wire:click="gotoPage({{ $page }})">{{ $page }}</a>
                    </li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <li>
            <a href="javascript:;" wire:click="nextPage">
                <i class="fal fa-chevron-double-right"></i>
            </a>
        </li>
    @else
        <li>        
            <i class="fal fa-chevron-double-right"></i>        
        </li>
    @endif

@endif
