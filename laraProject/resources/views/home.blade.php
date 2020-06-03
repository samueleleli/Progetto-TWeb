
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
                    <img src="{{ asset('images/img_home.png') }}" alt="Home Image" >
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest-product">
                            <h2 class="section-title">Benvenuti su eElectronics, la nuova frontiera dello shopping online!</h2>
                            <div class="product-carousel">
                                Benvenuti nel sito di eElectronics. Siamo un'organizzione dedita alla vendita al dettaglio di prodotti
                                tecnologici di ultima generazione! Negli ultimi anni i clienti sono diventati sempre più interessati alla
                                tecnologia, tra le informazioni richieste non c'è più solo il nome del prodotto, ma anche specifiche tecniche e
                                modalità d'uso. Proprio per questo, noi di eElectronics, abbiamo deciso di portavi questa novità, da oggi potrete
                                visualizzare tutti i prodotti disponibili da un'unica pagina, così da rendere la vostra esperienza di shopping
                                veloce e moderna. Tra le informazioni di ogni prodotto potrete trovare: una descrizione breve ed una estesa per le specifiche
                                tecniche, la foto del prodotto se disponibile e il prezzo. Per i nostri clienti più affezionati che decidono di iscriversi al sito,
                                abbiamo incluso la possibilità di visualizzare se i prodotti sono in sconto!<br>
                                
                                
                            </div>
                        </div>
                        <div class="latest-product">
                            <h2 class="section-title">Missione</h2>
                            <div class="product-carousel">
                                L'alta tecnologia, per tutti.
                                Vogliamo rendere accessibile la tecnologia
                                più innovativa al più vasto numero di
                                consumatori.
                                Tutte le nostre attività ruotano intorno a questa missione.
                                Raccogliamo le ultime novità tecnologiche e manteniamo costante la disponibilità dei prodotti.
                                Forniamo consigli e soluzioni a chi ne ha bisogno con un'attenzione sempre rivolta all'innovazione.
                                Offriamo la miglior tecnologia ai prezzi più bassi del mercato.
                                Facciamo tutto questo, e tanto di più, per mettere l’alta tecnologia a disposizione di tutti.
                            </div>
                        </div>
                        <div class="latest-product">
                            <h2 class="section-title">Modalità d'acquisto prodotti</h2>
                            <div class="product-carousel">
                                Per visualizzare i prodotti in vendita, cliccare su "Catalogo
                                Prodotti", nella pagina troverete le varie categorie di prodotti. Se desiderate
                                visualizzare solo i prodotti di una categoria, cliccate su uno dei link nella lista a
                                sinistra della pagina. In caso vogliate filtrare ulteriormente i prodotti da visualizzare, potrete
                                cliccare su una sottocategoria associata alla macrocategoria appena selezionata.<br>
                                
                                Per l'acquisto dei prodotti potrete recarvi direttamente in negozio oppure contattarci
                                tramite email o numero di telefono.<br>
                                
                                Nella parte inferiore del sito potete trovare la geolocalizzazione della nostra sede e i nostri contatti.<br>
                                
                                Saremo lieti di rispondere a qualsiasi vostra richiesta.
                                
                            </div>
                        </div>
                        <div class="latest-product">
                            <h2 class="section-title">Relazione</h2>
                            <div class="product-carousel">
                                <b>La relazione del Gruppo la si potrà visualizzare cliccando sul link "Group 13" in basso nel footer della pagina.</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             </div>    <!-- End main content area -->
  
@endsection
