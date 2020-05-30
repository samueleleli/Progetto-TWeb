@extends('layouts.public')

@section('title', 'Modifica Staff')

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Modifica Utente Staff</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container area-main-content">
    <div class="center">
        <div class="row">
            
            {{ Form::open(array('route' => 'modStaff.edit')) }}
       
            <div class="center">
                <div id="customer_details" class="form-width">
                    <div class="col-5 form-login-signup">
                        <h3>MODIFICA I DATI</h3>
                        @foreach ($users as $user)
                        <p>
                            {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                            {{ Form::text('username', $user->username, ['class' => 'input', 'id' => 'username', 'readonly' => 'readonly']) }}
                            @if ($errors->first('username'))                            
                            <ul class="errors">
                                @foreach ($errors->get('username') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                        <p>
                            {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                            {{ Form::text('nome', $user->nome, ['class' => 'input', 'id' => 'nome']) }}
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
                            {{ Form::text('cognome', $user->cognome, ['class' => 'input', 'id' => 'cognome']) }}
                            @if ($errors->first('cognome'))                            
                            <ul class="errors">
                                @foreach ($errors->get('cognome') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                            
                        <p>
                            {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                            {{ Form::password('password',  ['class' => 'input', 'id' => 'password']) }}
                            @if ($errors->first('password'))
                            <ul class="errors">
                                @foreach ($errors->get('password') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                        @endforeach
                        <p>
                            Lo username non è modificabile. <br>
                            Tutti i campi sono richiesti. <br>
                            Compilare con i valori attuali i campi che non si desiderano modificare.
                        </p>
                        <p>
                            {{ Form::submit('Modifica', ['class' => 'button']) }}
                        </p>
                        
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        
        </div>    
    </div>                    
</div>

@endsection

