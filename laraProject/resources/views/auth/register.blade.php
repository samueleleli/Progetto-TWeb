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
            
            {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}
       
            <div class="center">
                <div id="customer_details">
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
                            {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
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
                            {{ Form::submit('Registra', ['class' => 'form-btn1']) }}
                        </p>
                        
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        
        </div>    
    </div>                    
</div>

@endsection
