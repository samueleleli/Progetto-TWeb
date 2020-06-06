@extends('layouts.public')

@section('title', 'Modifica Staff')

@section('scripts')

<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
        var actionUrl = "{{ route('modStaff.edit') }}";
        var formId = 'editstaff';
        $(":input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#editstaff").on('submit', function (event) {
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
                    <h2>Modifica Utente Staff</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container area-main-content">
    <div class="center">
        <div class="row">
            
            {{ Form::open(array('route' => 'modStaff.edit', 'id' => 'editstaff')) }}
       
                <div id="customer_details" class="form-width center">
                    <div class="col-5 form-login-signup">
                        <h3>MODIFICA I DATI</h3>

                        <p>
                            {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                            {{ Form::text('username', $user->username, ['class' => 'input', 'id' => 'username', 'readonly' => 'readonly']) }}
                        </p>
                        
                        <p>
                            {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                            {{ Form::text('nome', $user->nome, ['class' => 'input', 'id' => 'nome']) }}
                        </p>
                            
                        <p>
                            {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                            {{ Form::text('cognome', $user->cognome, ['class' => 'input', 'id' => 'cognome']) }}
                        </p>
                            
                        <p>
                            {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                            {{ Form::password('password',  ['class' => 'input', 'id' => 'password']) }}
                        </p>
                        
                        <p>
                            Lo username non è modificabile. <br>
                            Tutti i campi sono richiesti. <br>
                            Compilare con i valori attuali i campi che non si desiderano modificare.
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

