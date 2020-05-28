@extends('staff')

@section('title', 'Modifica il Catalogo')

@section('content')        
<div class="product-big-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-bit-title text-center">
                            <h2>Modifica il Catalogo</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="maincontent-area">
          
            <div class="container">
                
                   <div class="center"> 
                <div class="row">
                    
                    <div class="pulsante_staff">
                        <a href="{{ route('newproduct') }}">Inserimento Prodotto</a>
                    </div>
                        
                </div>
                <div class="row">
                    
                    <div class="pulsante_staff">
                        <a href="{{ route('delproduct') }}">Elimina Prodotto</a>
                    </div>
                        
                </div>
                <div class="row">
                    
                    <div class="pulsante_staff">
                        <a href="{{ route('selproduct') }}">Modifica Prodotto</a>
                    </div>
                        
                </div>
                   </div>       
            </div>
                  
            
        </div> <!-- End main content area -->
@endsection