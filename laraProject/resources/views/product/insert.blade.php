@extends('staff')

@section('title', 'Inserisci Prodotto')

@section('scripts')

<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
        var actionUrl = "{{ route('newproduct.store') }}";
        var formId = 'addproduct';
        $(":input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#addproduct").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
        });
});

$(function () {
        var actionUrl = "{{ route('newproduct.update') }}";
        var formId = 'updateproduct';
        $(":input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#updateproduct").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
        });
});
</script>

@section('content')

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    @if(!$flagAgg)
                    <h2>Inserimento Prodotto</h2> 
                    @else 
                    <h2>Aggiorna Prodotto</h2>
                    @endif  
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="container">
        <div class="center">
            <div class="row">
                <div class="center">
                    
                    @if(!$flagAgg) {{ Form::open(array('route' => 'newproduct.store', 'id' => 'addproduct', 'files' => true)) }}
                    @else 
                    {{ Form::open(array('route' => 'newproduct.update', 'id' => 'updateproduct', 'files' => true)) }}
                    {{ Form::hidden('id',$prod->idProdotto)}}
                        @if($prod->immagine != '') {{ Form::hidden('oldPhoto',$prod->immagine)}}
                        @else {{ Form::hidden('oldPhoto','void')}}
                        @endif  
                    @endif
                    
                    <div id="customer_details" class="col2-set">
                        <div class="col-4">
                            
                            <p>
                                {{Form::label('nome','Nome Prodotto')}}
                                @if(!$flagAgg) {{Form::text('nome','',['id' => 'nome'])}}
                                @else {{Form::text('nome',$prod->nome,['id' => 'nome'])}}
                                @endif
                            </p>
                            
                            <p>
                                {{ Form::label('idSottocategoria', 'Categoria', ['class' => 'label-input']) }}
                                @if(!$flagAgg) {{Form::select('idSottocategoria', $cats,' ',['id' => 'idSottocategoria'])}}
                                @else {{Form::select('idSottocategoria', $cats,$prod->idSottocategoria,['id' => 'idSottocategoria'])}}
                                @endif
                            </p>
                            
                            @if($flagAgg)
                            <h5><b>Immagine attuale:</b></h5>
                            @include('helpers/productImg', ['imgFile' => $prod->immagine])
                            @endif
                            <p>
                                {{ Form::label('immagine', 'Immagine', ['class' => 'label-input']) }}
                                {{ Form::file('immagine', ['class' => 'input', 'id' => 'immagine']) }}
                            </p>
                            
                            <p>
                                {{Form::label('descrBreve','Descrizione Breve')}}
                                @if(!$flagAgg)  {{Form::textarea('descrBreve','',['id' => 'descrBreve','cols'=>'30', 'rows'=>'5'])}}
                                @else {{Form::textarea('descrBreve',$prod->descrBreve,['id' => 'descrBreve','cols'=>'30', 'rows'=>'5'])}}
                                @endif
                            </p>
                            
                            <p>
                                {{Form::label('descrEstesa','Descrizione Estesa')}}
                                @if(!$flagAgg) {{Form::textarea('descrEstesa','',['id' => 'descrEstesa','cols'=>'30', 'rows'=>'10'])}}
                                @else 
                                {{Form::textarea('descrEstesa',$prod->descrEstesa,['id' => 'descrEstesa','cols'=>'30', 'rows'=>'10'])}}
                                @endif
                            </p>
                            
                            <p>
                                {{Form::label('prezzo','Prezzo (€)')}}
                                @if(!$flagAgg) {{Form::text('prezzo','',['id' => 'prezzo'])}}
                                @else {{Form::text('prezzo',$prod->prezzo,['id' => 'prezzo'])}}
                                @endif
                            </p>
                            
                            <p>
                                {{Form::label('percSconto','Percentuale di sconto (%)')}}
                                @if(!$flagAgg) {{Form::text('percSconto','',['id' => "percSconto"])}}
                                @else {{Form::text('percSconto',$prod->percSconto,['id' => "percSconto"])}}
                                @endif
                            </p>
                            
                        </div>
                    </div>
                    
                    <div class="form-row place-order">
                        @if(!$flagAgg) {{ Form::submit('Inserisci Prodotto', ['class' => 'button']) }}
                        @else {{ Form::submit('Aggiorna Prodotto', ['class' => 'button']) }}
                        @endif
                    </div>
                    
                    {{Form::close()}}
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection