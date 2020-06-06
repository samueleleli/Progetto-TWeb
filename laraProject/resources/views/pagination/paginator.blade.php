@if ($paginator->lastPage() != 1)
<div class="col-md-12">
    <div class="text-center">
        <nav>
            <ul class="pagination">
                
                    <!-- Link alla prima pagina -->
                    @if (!$paginator->onFirstPage())
                        <li><a href="{{ $paginator->appends(['search' => $searchvalue])->url(1) }}">First</a></li> 
                    @else
                    <li><a>First</a></li> 
                    @endif

                    <!-- Link alla pagina precedente -->
                    @if ($paginator->currentPage() != 1)
                        <li><a href="{{ $paginator->appends(['search' => $searchvalue])->previousPageUrl()  }}">Previous</a></li> 
                    @else
                    <li><a>Previous</a></li> 
                    @endif

                    <!-- Link alla pagina successiva -->
                    @if ($paginator->hasMorePages())
                        <li><a href="{{ $paginator->appends(['search' => $searchvalue])->nextPageUrl()  }}">Next</a></li>
                    @else
                    <li><a>Next</a></li>
                    @endif

                    <!-- Link all'ultima pagina -->
                    @if ($paginator->hasMorePages())
                        <li><a href="{{ $paginator->appends(['search' => $searchvalue])->url($paginator->lastPage())  }}">Last</a></li>
                    @else
                    <li><a>Last</a></li>
                    @endif               
            </ul>
        </nav>                        
    </div>
</div>

@endif
