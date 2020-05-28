@extends('layouts.public')

@section('title', 'Gestione Utenti')

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Inserisci Utente Staff</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container area-main-content">
    <div class="center">
        <div class="row">
            
            {{ Form::open(array('route' => 'newStaff.store')) }}
       
            <div class="center">
                <div id="customer_details" class="form-width">
                    <div class="col-5 form-login-signup">
                        <h3>INSERISCI UTENTE STAFF</h3>
                        <p>
                            {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                            {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome']) }}
                            @if ($errors->first('nome'))                            
                            <ul class="errors">
                                @foreach ($errors->get('nome') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                            
                
                        <p>
                            {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                            {{ Form::text('cognome', '', ['class' => 'input', 'id' => 'cognome']) }}
                            @if ($errors->first('cognome'))                            
                            <ul class="errors">
                                @foreach ($errors->get('cognome') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                
                        <p>
                            {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                            {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                            @if ($errors->first('username'))
                            <ul class="errors">
                                @foreach ($errors->get('username') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                            
                        <p>
                            {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                            {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                            @if ($errors->first('password'))
                            <ul class="errors">
                                @foreach ($errors->get('password') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                        
                        <p>
                            {{ Form::submit('Inserisci', ['class' => 'button']) }}
                        </p>
                        
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        
        </div>    
    </div>                    
</div>

@endsection

