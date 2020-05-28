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
                    {{ Form::open(array('route' => 'newproduct.store', 'id' => 'addproduct', 'files' => true)) }}        
                    <div id="customer_details" class="col2-set">
                        <div class="col-4">
                            <p>
                                {{Form::label('nome_prodotto','Nome Prodotto')}}
                                {{Form::text('nome_prodotto','',['id' => 'nome_prodotto'])}}
                                @if ($errors->first('nome_prodotto'))
                            <ul class="errors">
                                @foreach ($errors->get('nome_prodotto') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                            </p>
                            <p>
                                {{ Form::label('catId', 'Categoria', ['class' => 'label-input']) }}
                                {{Form::select('catId', $cats,['id' => 'categoria'])}}
                                @if ($errors->first('catId'))                            
                            <ul class="errors">
                                @foreach ($errors->get('catId') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                            </p>
                            <p>
                                {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
                            </p>                                     
                            <p>
                                {{Form::label('descrizione_breve','Descrizione Breve')}}
                                {{Form::textarea('descrizione_breve','',['id' => 'descrizione_breve','cols'=>'30', 'rows'=>'5'])}}
                                @if ($errors->first('descrizione_breve'))                            
                            <ul class="errors">
                                @foreach ($errors->get('descrizione_breve') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                            </p>
                            <p>
                                {{Form::label('descrizione_estesa','Descrizione Estesa')}}
                                {{Form::textarea('descrizione_estesa','',['id' => 'descrizione_estesa','cols'=>'30', 'rows'=>'10'])}}
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
                                {{Form::label('perc_sconto','Percentuale di sconto (%)')}}
                                {{Form::text('perc_sconto','',['id' => "percentuale_sconto"])}}

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