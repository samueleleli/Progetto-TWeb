@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Registrazione</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container area-main-content">
    <div class="center">
        <div class="row">
            
            {{ Form::open(array('route' => 'register')) }}
       
            <div class="center">
                <div id="customer_details" class="form-width">
                    <div class="col-5 form-login-signup">
                        <h3>REGISTRAZIONE</h3>
                        <p>
                            {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                            {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                            @if ($errors->first('name'))                            
                            <ul class="errors">
                                @foreach ($errors->get('name') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                            
                
                        <p>
                            {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
                            {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname']) }}
                            @if ($errors->first('surname'))                            
                            <ul class="errors">
                                @foreach ($errors->get('surname') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                        
                        <p>
                            {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                            {{ Form::text('email', '', ['class' => 'input', 'id' => 'email']) }}
                            @if ($errors->first('email'))                            
                            <ul class="errors">
                                @foreach ($errors->get('email') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                        
                        <p>
                            {{ Form::label('via', 'Via', ['class' => 'label-input']) }}
                            {{ Form::text('via', '', ['class' => 'input', 'id' => 'via']) }}
                            @if ($errors->first('via'))                            
                            <ul class="errors">
                                @foreach ($errors->get('via') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                        <p>
                            {{ Form::label('citta', 'Città', ['class' => 'label-input']) }}
                            {{ Form::text('citta', '', ['class' => 'input', 'id' => 'citta']) }}
                            @if ($errors->first('citta'))                            
                            <ul class="errors">
                                @foreach ($errors->get('citta') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                        <p>
                            {{ Form::label('cap', 'CAP', ['class' => 'label-input']) }}
                            {{ Form::text('cap', '', ['class' => 'input', 'id' => 'cap']) }}
                            @if ($errors->first('cap'))                            
                            <ul class="errors">
                                @foreach ($errors->get('cap') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                        <p>
                            {{ Form::label('stato', 'Stato', ['class' => 'label-input']) }}
                            {{ Form::text('stato', '', ['class' => 'input', 'id' => 'stato']) }}
                            @if ($errors->first('stato'))                            
                            <ul class="errors">
                                @foreach ($errors->get('stato') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                        <p>
                            {{ Form::label('dataNascita', 'Data di Nascita', ['class' => 'label-input']) }}
                            {{ Form::date('dataNascita', \Carbon\Carbon::now()) }}
                          
                            @if ($errors->first('dataNascita'))                            
                            <ul class="errors">
                                @foreach ($errors->get('dataNascita') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </p>
                        <p>
                            {{ Form::label('occupazione', 'Occupazione', ['class' => 'label-input']) }}
                            {{ Form::select('occupazione', ['dipendente' => 'Dipendente', 'libero professionista' => 'Libero Professionista', 'imprenditore' => 'Imprenditore', 'casalinga' => 'Casalinga', 'disoccupato' => 'Disoccupato', 'studente' => 'Studente', 'pensionato' => 'Pensionato'],null, ['placeholder' => 'Seleziona una occupazione']) }}
                            @if ($errors->first('occupazione'))                            
                            <ul class="errors">
                                @foreach ($errors->get('occupazione') as $message)
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
                            {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                            {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
                        </p>    
    
                        <p>
                            {{ Form::submit('Registra', ['class' => 'button']) }}
                        </p>
                        
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        
        </div>    
    </div>                    
</div>

@endsection
