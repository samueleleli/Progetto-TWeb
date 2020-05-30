
@extends('layouts.public')
@section('title','Home')
@section('content')

        <div class="product-big-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-bit-title text-center">
                            <h2>Home</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="maincontent-area">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <img src="{{ asset('images/home_image.jpg') }}" alt="Home Image" >
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest-product">
                            <h2 class="section-title">Descrizione generale</h2>
                            <div class="product-carousel">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?
                            </div>
                        </div>
                        <div class="latest-product">
                            <h2 class="section-title">Missione</h2>
                            <div class="product-carousel">
                                L'alta tecnologia, per tutti.
                                Vogliamo rendere accessibile la tecnologia
                                più innovativa al più vasto numero di
                                consumatori.
                                Tutte le nostre attività ruotano intorno a questa mission.
                                Raccogliamo le ultime novità tecnologiche e manteniamo costante la disponibilità dei prodotti.
                                Forniamo consigli e soluzioni a chi ne ha bisogno con un'attenzione sempre rivolta all'innovazione.
                                Offriamo la miglior tecnologia ai prezzi più bassi del mercato.
                                Siamo distribuiti su tutto il territorio nazionale, così puoi venirci a trovare quando vuoi, e i nostri store sono ordinati e facili da visitare.
                                Facciamo tutto questo, e tanto di più, per mettere l’alta tecnologia a disposizione di tutti.
                            </div>
                        </div>
                        <div class="latest-product">
                            <h2 class="section-title">Modalità d'acquisto prodotti</h2>
                            <div class="product-carousel">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             </div>    <!-- End main content area -->
  
@endsection
