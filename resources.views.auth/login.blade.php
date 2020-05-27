@extends('layouts.public')

@section('title', 'Autenticazione')

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Login</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container area-main-content" >
    <div class="row justify-content-center">
        <div class="col-md-8">
           
                    {{ Form::open(array('route' => 'login')) }}
                    
                            <div id="customer_details" class="col2-set">
                                <div class="col-1 form-login-signup">
                                    <h3>LOGIN</h3>
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
                                        {{ Form::submit('Login', ['class' => 'button']) }}
                                    </p>
                                    <div>
                                        <p> Se non hai già un account <a  href="{{ route('register') }}">registrati</a></p>
                                    </div> 
                                    
                                </div>
                            </div>
                    {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
