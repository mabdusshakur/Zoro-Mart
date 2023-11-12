@if ($paginator->hasPages())
    <div class="basic-pagination pt-30 pb-30">
        <nav>
            <ul>
                @if ($paginator->onFirstPage())
                    <li>
                        <i class="fal fa-chevron-double-left"></i>
                    </li>
                @else
                    <li>
                        <a wire:click="previousPage">
                            <i class="fal fa-chevron-double-left"></i>
                        </a>
                    </li>
                @endif


                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li>
                            <a>{{ $element }}</a>
                        </li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->onFirstPage())
                                <li>
                                    <a wire:click="gotoPage({{ $page }})" class="active">{{ $page }}</a>
                                </li>
                            @else
                                <li>
                                    <a wire:click="gotoPage({{ $page }})">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                @if ($paginator->hasMorePages())
                    <li>
                        <a wire:click="nextPage">
                            <i class="fal fa-chevron-double-right"></i>
                        </a>
                    </li>
                @else
                    <li>
                        <i class="fal fa-chevron-double-right"></i>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif
