
    
            <div class="container">
                <div class="row">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('catalog1') }}">Catalogo Prodotti</a></li>
                            
                            @can('isUser')
                            <li><a href="{{ route('modData') }}">Modifica Profilo</a></li>
                            <li><a href="{{ route('user') }}">Profilo</a></li>
                            @endcan
                            
                            @can('isStaff')
                            <li><a href="{{ route('modificacatalogo') }}">Modifica Catalogo</a></li>
                            <li><a href="{{ route('staff') }}">Profilo</a></li>
                            @endcan
                            
                            @can('isAdmin')
                            <li><a href="{{ route('manUsers') }}">Gestione Utenti</a></li>
                            <li><a href="{{ route('admin') }}">Profilo</a></li>
                            @endcan
                            
                            @auth
                            <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            @endauth    
                        </ul>
                    </div>  
                </div>
            </div>

