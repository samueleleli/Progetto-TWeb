
@extends('layouts.public')
@section('title', 'Catalogo Prodotti')
@section('content')

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                         @if($flagpub)
                            <h2>Catalogo Prodotti</h2>
                         @else   
                            <h2>Modifica Prodotti</h2>
                         @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-area">
        <div class="container">
            <div class="row">
                
                <!-- inizio sezione laterale -->
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Categorie Prodotti</h2>
                            <ul>
                                @if($flagpub) 
                                        @foreach ($categories as $category)
                                            <li><a href="{{ route('catalog2', [$category->idCategoria])}}">{{ $category->categoria }}</a>
                                        @endforeach
                                @else
                                        @foreach ($categories as $category)
                                            <li><a href="{{ route('catalog2Staff', [$category->idCategoria])}}">{{ $category->categoria }}</a>
                                        @endforeach
                                @endif
                            </ul>
                    </div>
                    @isset($selectedCat)
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Sottocategorie in {{ $selectedCat->categoria }}</h2>
                                <ul>
                                    @if($flagpub) 
                                        @foreach ($subCategories as $subCategory)
                                            <li><a href="{{ route('catalog3', [$selectedCat->idCategoria, $subCategory->idSottocategoria])}}">{{ $subCategory->sottocategoria }}</a>
                                        @endforeach
                                    @else
                                        @foreach ($subCategories as $subCategory)
                                            <li><a href="{{ route('catalog3Staff', [$selectedCat->idCategoria, $subCategory->idSottocategoria])}}">{{ $subCategory->sottocategoria }}</a>
                                        @endforeach
                                    @endif    
                                </ul>
                        </div>
                    @endisset()
                </div>
                
                <!-- inizio sezione prodotti -->
                <div class="col-md-8">
                    <div class="row ">
                        @isset($products)
                            @foreach ($products as $product)
                               <div class="row rounded-corner">
                                <div class="col-md-3 col-sm-3">
                                    <div>
                                        @include('helpers/productImg', ['imgFile' => $product->immagine])
                                    </div>    
                                </div>  
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-6">    
                                           <div class="row"> 
                                               <div class="col-sm-6">
                                                    <h2>{{ $product->nome }}</h2>
                                               </div>
                                               <div class="col-sm-6">
                                                @if(!$flagpub)
                                              @can('isStaff')
                                               <a href="{{ route('delproduct',[$product->idProdotto])}}"> 
                                                   <img src="{{ asset('images/trash.png') }} " width="45" height="45" alt="none" align="right"> 
                                                </a>
                                                <a href="{{ route('modproduct',[$product->idProdotto])}}"> 
                                                    <img src="{{ asset('images/modify.jpg') }} " width="30" height="30" alt="none" align="right"> 
                                                </a>
                                               
                                              @endcan
                                            @endif
                                               </div>
                                            
                                            
                                           </div>
                                            <h4>Descrizione breve: </h4><p class="descr">{{ $product->descrBreve }}</p>                                        
                                            <h4>Descrizione estesa: </h4><p class="descr">{{ $product->descrEstesa }}</p>
                                            
                                            @include('helpers/productPrice')
                                        </div>
                                    </div>
                                </div>
                               </div>
                            @endforeach
                            
                            <!--Paginazione-->
                            @include('pagination.paginator', ['paginator' => $products])
                            
                        @endisset()
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection
