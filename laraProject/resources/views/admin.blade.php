@extends('layouts.public')

@section('title', 'Area Admin')

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Area Amministratore</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="admin-profile">
    <h3>Benvenuto {{ Auth::user()->nome }} {{ Auth::user()->cognome }}</h3>
    <p>Tramite la sezione "Gestione Utenti" presente nel menù si potranno scegliere le funzioni riservate all'amministratore del sito. </p>
</div>

@endsection

