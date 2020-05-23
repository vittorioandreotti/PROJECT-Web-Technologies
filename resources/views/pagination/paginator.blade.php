@if ($paginator->lastPage() != 1)
<div id="pagination">
    <div class="barraPaginazione">
        <!-- Link alla iniziale -->
        @if (!$paginator->onFirstPage())
            <a href="{{ $paginator->url(1) }}">Inizio</a> |
        @else
            Inizio |
        @endif

         <!-- Link alla pagina precedente -->
        @if ($paginator->currentPage() != 1)
            <a href="{{ $paginator->previousPageUrl() }}">&lt; Precedente</a> |
        @else
            &lt; Precedente |
        @endif

        <!-- Link alla pagina successiva -->
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}">Successivo &gt;</a> |
        @else
            Successivo &gt; |
        @endif

        <!-- Link all'ultima pagina -->
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->url($paginator->lastPage()) }}">Fine</a>
        @else
            Fine
        @endif
    </div>
    <div class="paginaCorrente">
        <!--Riferimento pagina corrente -->
       Pagina {{$paginator->currentPage()}} di {{$paginator->lastPage()}}
    </div>
</div>
@endif

