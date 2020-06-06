@extends('layouts.public')

@section('title','Home')

@section('scripts')

<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script type="text/javascript">
$(function () {
    $('div.caption h2').on('click', function () {
        $(this).closest('div.latest-product').find('div.text-home p').slideToggle();
    });
});

function fotografie(x, n) {
    var foto = new Array(n);
    /* scrivere il path ed il nome delle foto che volere usare */
    foto[0] = '{{ asset("images/img_home1.png") }}';
    foto[1] = '{{ asset("images/img_home2.png") }}';
    foto[2] = '{{ asset("images/img_home3.png") }}';
    return foto[x];
}

$(document).ready(function () {
    $('div.text-home p').hide();
    slideshow(3, 1000, 4000);
});
</script>

@endsection

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

    <div class="d-flex justify-content-center" id="slide">
        <img id="foto1" src="">
        <img id="foto2" src="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="latest-product">
                    <h2 class="title-home">Benvenuti su eElectronics,<br> la nuova frontiera dello shopping online!</h2>
                    <div class="text-intro">
                        Benvenuti nel sito di eElectronics. Siamo un'organizzione dedita alla vendita al dettaglio di prodotti
                        tecnologici di ultima generazione! Negli ultimi anni i clienti sono diventati sempre più interessati alla
                        tecnologia, tra le informazioni richieste non c'è più solo il nome del prodotto, ma anche specifiche tecniche e
                        modalità d'uso. Proprio per questo, noi di eElectronics, abbiamo deciso di portarvi questa novità, da oggi potrete
                        visualizzare tutti i prodotti disponibili da un'unica pagina, così da rendere la vostra esperienza di shopping
                        veloce e moderna. Tra le informazioni di ogni prodotto potrete trovare: una descrizione breve ed una estesa per le specifiche
                        tecniche, la foto del prodotto se disponibile e il prezzo. Per i nostri clienti più affezionati che decidono di iscriversi al sito,
                        abbiamo incluso la possibilità di visualizzare se i prodotti sono in sconto!<br>
                    </div>
                </div>

                <div class="latest-product background-section-home">
                    <div class="caption">
                        <h2 class="home-section">Modalità d'acquisto</h2>
                    </div>
                    <div class="text-home">
                        <p> Per visualizzare i prodotti in vendita, cliccare su "Catalogo
                            Prodotti", nella pagina troverete le varie categorie di prodotti. Se desiderate
                            visualizzare solo i prodotti di una categoria, cliccate su uno dei link nella lista a
                            sinistra della pagina. In caso vogliate filtrare ulteriormente i prodotti da visualizzare, potrete
                            cliccare su una sottocategoria associata alla macrocategoria appena selezionata.<br>

                            Per l'acquisto dei prodotti potrete recarvi direttamente in negozio oppure contattarci
                            tramite email o numero di telefono. Nella parte inferiore del sito potete trovare la geolocalizzazione della nostra sede e i nostri contatti.<br>

                            Saremo lieti di rispondere a qualsiasi vostra richiesta.
                        </p>
                    </div>
                </div>

                <div class="latest-product background-section-home">
                    <div class="caption">
                        <h2 class="home-section">Modalità d'iscrizione</h2>
                    </div>
                    <div class="text-home">
                        <p> Per accedere al nostro sito basterà cliccare in alto a destra 
                            sul pulsante "Registrazione/Login": verrete riportati nella pagina di login
                            in cui potrete inserire le vostre credenziali per l'accesso. <br>
                            Se non siete già iscritti avrete modo di cliccare sul link "Registrati" 
                            presente nella form di autenticazione.
                            Una volta arrivati alla form di registrazione dovrete compilare tutti i campi:
                            i campi "Via", "Città", "CAP" e "Stato" si riferiscono al vostro indirizzo di residenza,
                            mentre lo username e la password saranno le vostre credenziali per accedere in seguito. <br>
                            Tutti i dati del vostro account potranno essere modificati successivamente nella vostra
                            sezione personale, tranne lo username poiché è il valore che vi identifica.
                            Quando accedete con il vostro account personale avrete la possibilità di vedere nel
                            catalogo prodotti quali di essi sono in sconto e il relativo prezzo scontato.
                        </p>
                    </div>
                </div>

                <div class="latest-product background-section-home">
                    <div class="caption">
                        <h2 class="home-section">Missione</h2>
                    </div>
                    <div class="text-home">
                        <p> L'alta tecnologia, per tutti.
                            Vogliamo rendere accessibile la tecnologia
                            più innovativa al più vasto numero di
                            consumatori.
                            Tutte le nostre attività ruotano intorno a questa missione.
                            Raccogliamo le ultime novità tecnologiche e manteniamo costante la disponibilità dei prodotti.
                            Forniamo consigli e soluzioni a chi ne ha bisogno con un'attenzione sempre rivolta all'innovazione.
                            Offriamo la miglior tecnologia ai prezzi più bassi del mercato.
                            Facciamo tutto questo, e tanto di più, per mettere l’alta tecnologia a disposizione di tutti.
                        </p>
                    </div>
                </div>

                <div class="latest-product background-relazione">
                    <h2 class="title-relazione">Relazione</h2>
                    <div class="text-relazione">
                        La relazione del Gruppo si potrà visualizzare cliccando sul link "Group 13" nella parte bassa del footer.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    <!-- End main content area -->

@endsection
