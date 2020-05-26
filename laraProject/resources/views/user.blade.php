@extends('layouts.public')

@section('title', 'Area User')

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Area Utente</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="admin-profile">
    <h3>Benvenuto {{ Auth::user()->nome }} {{ Auth::user()->cognome }}</h3>
    <p> In questa sezione l'utente ha la possibilità di modificare i suoi dati personali. </p>
</div>

@endsection

