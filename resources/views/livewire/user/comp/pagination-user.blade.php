<div>
    @if ($paginator->hasPages())
        <div class="flex flex-col items-center justify-between gap-y-4 md:flex-row">
            <p class="text-xs font-normal text-slate-400">Showing {{ $paginator->currentPage() }} to
                {{ $paginator->count() }} of
                {{ $paginator->total() }} result</p>
            <!-- Pagination -->
            <nav class="pagination">
                <ul class="pagination-list">
                    @if (!$paginator->onFirstPage())
                        <li class="pagination-item">
                            <a class="pagination-link pagination-link-prev-icon" wire:click="previousPage"
                                wire:loading.attr="disabled">
                                <iconify-icon icon="solar:alt-arrow-left-line-duotone"></iconify-icon>
                            </a>
                        </li>
                    @endif

                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <li class="page-item disabled">{{ $element }}</li>
                        @endif

                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="pagination-item active">
                                        <a class="pagination-link">{{ $page }}</a>
                                    </li>
                                @else
                                    <li class="pagination-item">
                                        <a class="pagination-link"
                                            wire:click="setPage({{ $page }})">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    @if ($paginator->hasMorePages())
                        <li class="pagination-item">
                            <a class="pagination-link pagination-link-next-icon" wire:click="nextPage"
                                wire:loading.attr="disabled">
                                <iconify-icon icon="solar:alt-arrow-right-line-duotone"></iconify-icon>
                            </a>
                        </li>
                    @endif

                </ul>
            </nav>
        </div>
    @endif
</div>
