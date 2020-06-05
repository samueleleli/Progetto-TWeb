@extends('layouts.public')

@section('title', 'Inserimento Categoria')

@section('scripts')


<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(function () {
        var actionUrl = "{{ route('addCategory.store') }}";
        var formId = 'addCategory';
        $(":input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#addCategory").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
        });
    });

    $(document).ready(function () {

        $('div.select-category').hide();

        $('input[type="radio"]').click(function () {
            if ($(this).attr("value") === "categoria") {
                $(".select-category").hide('slow');
            }
            if ($(this).attr("value") === "sottocategoria") {
                $(".select-category").show('slow');
            }
        });

    });
</script>


@section('content')

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Inserisci Categoria</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container area-main-content">
    <div class="center">
        <div class="row">

            {{ Form::open(array('route' => 'addCategory.store', 'id' => 'addCategory')) }}

            <div>
                <div id="customer_details" class='form-width'>
                    <div class="col-5 form-login-signup">
                        <h3>INSERISCI CATEGORIA</h3>
                        <p>
                            {{ Form::label('categoria', 'Nome', ['class' => 'label-input']) }}
                            {{ Form::text('categoria', '', ['class' => 'input', 'id' => 'categoria']) }}
                        </p>

                        <div>
                            <label>
                                {{Form::radio('radioButton', 'categoria', true)}}
                                Categoria
                            </label>
                        </div>

                        <div>
                            <label>
                                {{Form::radio('radioButton', 'sottocategoria')}}
                                Sottocategoria
                            </label>
                        </div>

                        <div class='select-category'>
                            {{ Form::select('categorie', $cats, 'Informatica') }}
                        </div>

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

