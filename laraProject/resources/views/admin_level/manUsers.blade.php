@extends('layouts.public')

@section('title', 'Gestione Utenti')

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Gestione Utenti</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">                       
                        
                        <div class="woocommerce-info">
                            <a  href="{{ route('newStaff') }}" >Clicca qui per inserire un nuovo utente Staff</a>
                        </div>
                        
                        <div class="woocommerce-info">
                            <a  href="{{ route('manStaff') }}" >Clicca qui per modificare i dati  degli utenti Staff o per eliminarli</a>
                        </div>
                        
                        <div class="woocommerce-info">
                            <a href="{{ route('delClient') }}">Clicca qui per eliminare un cliente registrato</a>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>

@endsection

