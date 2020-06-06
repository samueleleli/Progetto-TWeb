@extends('layouts.public')

@section('title', 'Modifica Dati Personali')

@section('scripts')

<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
        var actionUrl = "{{ route('modData.edit') }}";
        var formId = 'editdata';
        $(":input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#editdata").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
        });
});

$(document).ready(function () {
    $("#edit").on('click', function() {
        var domanda = confirm("Sei sicuro di voler confermare le modifiche?");
        if (domanda === true) {
            return true;  
        }else{
            alert('Operazione annullata');
            return false;
        }
    });
});
</script>

@endsection

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



<div class="container area-main-content">
    <div class="center">
        <div class="row">
                
            {{ Form::open(array('route' => 'modData.edit', 'id' => 'editdata')) }}

                <div id="customer_details" class="form-width center">
                    <div class="col-5 form-login-signup">
                        <h3>MODIFICA I TUOI DATI</h3>

                        <p>
                            {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                            {{ Form::text('username', Auth::user()->username , ['class' => 'input', 'id' => 'username', 'readonly' => 'readonly']) }}
                        </p>

                        <p>
                            {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                            {{ Form::text('nome',  Auth::user()->nome , ['class' => 'input', 'id' => 'nome']) }}
                        </p>

                        <p>
                            {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                            {{ Form::text('cognome', Auth::user()->cognome , ['class' => 'input', 'id' => 'cognome']) }}
                        </p>

                        <p>
                            {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                            {{ Form::text('email',  Auth::user()->email , ['class' => 'input', 'id' => 'email']) }}
                        </p>

                        <p>
                            {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                            {{ Form::password('password',  ['class' => 'input', 'id' => 'password']) }}
                        </p>

                        <p>
                            {{ Form::label('via', 'Via', ['class' => 'label-input']) }}
                            {{ Form::text('via',  Auth::user()->via , ['class' => 'input', 'id' => 'via']) }}
                        </p>

                        <p>
                            {{ Form::label('citta', 'Città', ['class' => 'label-input']) }}
                            {{ Form::text('citta',  Auth::user()->citta , ['class' => 'input', 'id' => 'citta']) }}
                        </p>

                        <p>
                            {{ Form::label('cap', 'CAP', ['class' => 'label-input']) }}
                            {{ Form::text('cap',  Auth::user()->cap , ['class' => 'input', 'id' => 'cap']) }}
                        </p>

                        <p>
                            {{ Form::label('stato', 'Stato', ['class' => 'label-input']) }}
                            {{ Form::text('stato',  Auth::user()->stato , ['class' => 'input', 'id' => 'stato']) }}
                        </p>

                        <p>
                            {{ Form::label('dataNascita', 'Data di Nascita', ['class' => 'label-input']) }}
                            {{ Form::date('dataNascita', Auth::user()->dataNascita) }}
                        </p>

                        <p>
                            {{ Form::label('occupazione', 'Occupazione', ['class' => 'label-input']) }}
                            {{ Form::select('occupazione', ['dipendente' => 'Dipendente', 'libero professionista' => 'Libero Professionista', 'imprenditore' => 'Imprenditore', 'casalinga' => 'Casalinga', 'disoccupato' => 'Disoccupato', 'studente' => 'Studente', 'pensionato' => 'Pensionato'],Auth::user()->occupazione) }}
                        </p>

                        <p>
                            Lo username non è modificabile. <br>
                            Tutti i campi sono richiesti. <br>
                            Compilare con i valori attuali i campi che non si desiderano modificare, se possibile.
                        </p>
                            
                        <p>
                            {{ Form::submit('Modifica', ['id' => 'edit', 'class' => 'button']) }}
                        </p>
                        
                    </div>
                </div>
            
            {{ Form::close() }}
            
        </div>    
    </div>                    
</div>

@endsection

