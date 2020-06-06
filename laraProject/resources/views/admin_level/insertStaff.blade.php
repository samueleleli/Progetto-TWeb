@extends('layouts.public')

@section('title', 'Inserimento Staff')

@section('scripts')

<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
        var actionUrl = "{{ route('newStaff.store') }}";
        var formId = 'addstaff';
        $(":input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#addstaff").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
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
                    <h2>Inserisci Utente Staff</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container area-main-content">
    <div class="center">
        <div class="row">
            
            {{ Form::open(array('route' => 'newStaff.store', 'id' => 'addstaff')) }}
       
            <div>
                <div id="customer_details" class="form-width">
                    <div class="col-5 form-login-signup">
                        <h3>INSERISCI UTENTE STAFF</h3>
                        <p>
                            {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                            {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome']) }}
                        </p>
                            
                
                        <p>
                            {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                            {{ Form::text('cognome', '', ['class' => 'input', 'id' => 'cognome']) }}   
                        </p>
                
                        <p>
                            {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                            {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                        </p>
                            
                        <p>
                            {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                            {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
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

