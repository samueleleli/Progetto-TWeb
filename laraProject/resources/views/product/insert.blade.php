@extends('staff')

@section('title', 'Inserisci Prodotto')

@section('content')

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Inserimento Prodotto</h2>
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
                    {{ Form::open(array('route' => 'newproduct.store', 'files' => true)) }}        
                    <div id="customer_details" class="col2-set">
                        <div class="col-4">
                            <p>
                                {{Form::label('nome','Nome Prodotto')}}
                                {{Form::text('nome','',['id' => 'nome'])}}
                                @if ($errors->first('nome_prodotto'))
                            <ul class="errors">
                                @foreach ($errors->get('nome_prodotto') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                            </p>
                            <p>
                                {{ Form::label('idSottocategoria', 'Categoria', ['class' => 'label-input']) }}
                                {{Form::select('idSottocategoria', $cats,' ',['id' => 'idSottocategoria'])}}
                                @if ($errors->first('catId'))                            
                            <ul class="errors">
                                @foreach ($errors->get('catId') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                            </p>
                            <p>
                                {{ Form::label('immagine', 'Immagine', ['class' => 'label-input']) }}
                                {{ Form::file('immagine', ['class' => 'input', 'id' => 'immagine']) }}
                            </p>                                     
                            <p>
                                {{Form::label('descrBreve','Descrizione Breve')}}
                                {{Form::textarea('descrBreve','',['id' => 'descrBreve','cols'=>'30', 'rows'=>'5'])}}
                                @if ($errors->first('descrizione_breve'))                            
                            <ul class="errors">
                                @foreach ($errors->get('descrizione_breve') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                            </p>
                            <p>
                                {{Form::label('descrEstesa','Descrizione Estesa')}}
                                {{Form::textarea('descrEstesa','',['id' => 'descrEstesa','cols'=>'30', 'rows'=>'10'])}}
                                @if ($errors->first('descrizione_estesa'))                            
                            <ul class="errors">
                                @foreach ($errors->get('descrizione_estesa') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                            </p>
                            <p>
                                {{Form::label('prezzo','Prezzo')}}
                                {{Form::text('prezzo','',['id' => 'prezzo'])}}
                                @if ($errors->first('prezzo'))                            
                            <ul class="errors">
                                @foreach ($errors->get('prezzo') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                            </p>
                            <p>
                                {{Form::label('percSconto','Percentuale di sconto (%)')}}
                                {{Form::text('percSconto','',['id' => "percSconto"])}}
                            @if ($errors->first('percSconto'))                            
                            <ul class="errors">
                                @foreach ($errors->get('percSconto') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                            </p>
                        </div>
                    </div>
                    <div class="form-row place-order">
                        {{ Form::submit('Inserisci Prodotto', ['class' => 'button']) }}

                    </div>
                    {{Form::close()}}
                </div>

            </div>
        </div>
    </div>
</div>

@endsection