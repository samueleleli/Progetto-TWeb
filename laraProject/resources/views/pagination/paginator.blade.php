@if ($paginator->lastPage() != 1)
<div class="col-md-12">
    <div class="text-center">
        <nav>
            <ul class="pagination">
                
                    <!-- Link alla prima pagina -->
                    @if (!$paginator->onFirstPage())
                        <li><a href="{{ $paginator->url(1) }}">First</a></li> 
                    @else
                        <li>First</li> 
                    @endif

                    <!-- Link alla pagina precedente -->
                    @if ($paginator->currentPage() != 1)
                        <li><a href="{{ $paginator->previousPageUrl() }}">Previous</a></li> 
                    @else
                        <li>Previous</li> 
                    @endif

                    <!-- Link alla pagina successiva -->
                    @if ($paginator->hasMorePages())
                        <li><a href="{{ $paginator->nextPageUrl() }}">Next</a></li>
                    @else
                        <li>Next</li>
                    @endif

                    <!-- Link all'ultima pagina -->
                    @if ($paginator->hasMorePages())
                        <li><a href="{{ $paginator->url($paginator->lastPage()) }}">Last</a></li>
                    @else
                        <li>Last</li>
                    @endif               
            </ul>
        </nav>                        
    </div>
</div>

@endif
