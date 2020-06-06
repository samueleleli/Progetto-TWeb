@section('scripts')
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
        ItemSelected();
});
</script>

@section('content')
   <div class="container">
                <div class="row">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('home') }}" id='1'>Home</a></li>
                            <li><a href="{{ route('catalog1') }}"  id='2'>Catalogo Prodotti</a></li>
                            
                            @can('isUser')
                            <li><a href="{{ route('modData') }}" class="item" id='3'>Modifica Profilo</a></li>
                            <li><a href="{{ route('user') }}" class="item" id='4'>Profilo</a></li>
                            @endcan
                            
                            @can('isStaff')
                            <li><a href="{{ route('modificacatalogo') }}"  id='5'>Modifica Catalogo</a></li>
                            <li><a href="{{ route('staff') }}" id='6'>Profilo</a></li>
                            @endcan
                            
                            @can('isAdmin')
                            <li><a href="{{ route('manUsers') }}" class="item" id='7'>Gestione Utenti</a></li>
                            <li><a href="{{ route('admin') }}" class="item" id='8'>Profilo</a></li>
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

