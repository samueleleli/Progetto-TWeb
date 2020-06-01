@extends('layouts.public')

@section('title', 'Modifica Dati Personali')

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Modifica Dati Personali</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="admin-profile">
    <div class="container area-main-content">
        <div class="center">
            <div class="row">
                <p> In questa sezione l'utente ha la possibilità di modificare i suoi dati personali tramite la form apposita sottostante.<br>
                    Ricordiamo all'utente che non è possibile modificare il proprio username scelto in fase di registrazione.<br>
                    Inoltre tutti i campi sono richiesti. Se non si desidera modificare un campo, lasciare il valore attuale se presente.<br>
                </p>

                {{ Form::open(array('route' => 'modData.edit')) }}

                
                    <div id="customer_details" class="form-width center">
                        <div class="col-5 form-login-signup">
                            <h3>MODIFICA I TUOI DATI</h3>

                            <p>
                                {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                                {{ Form::text('username', Auth::user()->username , ['class' => 'input', 'id' => 'username', 'readonly' => 'readonly']) }}
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
                                {{ Form::text('nome',  Auth::user()->nome , ['class' => 'input', 'id' => 'nome']) }}
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
                                {{ Form::text('cognome', Auth::user()->cognome , ['class' => 'input', 'id' => 'cognome']) }}
                                @if ($errors->first('cognome'))                            
                                <ul class="errors">
                                    @foreach ($errors->get('cognome') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </p>

                            <p>
                                {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                                {{ Form::text('email',  Auth::user()->email , ['class' => 'input', 'id' => 'email']) }}
                                @if ($errors->first('email'))                            
                                <ul class="errors">
                                    @foreach ($errors->get('email') as $message)
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

                            <p>
                                {{ Form::label('via', 'Via', ['class' => 'label-input']) }}
                                {{ Form::text('via',  Auth::user()->via , ['class' => 'input', 'id' => 'via']) }}
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
                                {{ Form::text('citta',  Auth::user()->citta , ['class' => 'input', 'id' => 'citta']) }}
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
                                {{ Form::text('cap',  Auth::user()->cap , ['class' => 'input', 'id' => 'cap']) }}
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
                                {{ Form::text('stato',  Auth::user()->stato , ['class' => 'input', 'id' => 'stato']) }}
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
                                {{ Form::date('dataNascita') }}
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

