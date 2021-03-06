<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @section('link')
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        @show
        @section('scripts')
        @show    
        <title>eElectronics | @yield('title', 'Catalogo eElectronics')</title>
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="{{ route('home') }}">e<span>Electronics</span></a></h1>
                    </div>
                </div>
                @guest
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="{{ route('login') }}">Registrazione/Login</a>
                    </div>
                </div>
                @endguest
            </div>
        </div>
        <div class="mainmenu-area">
             @include('layouts/_navpublic')
        </div>
        <div>
            @yield('content')
        </div>   
        
       
        <div class="footer-top-area">
            <div class="container">
                <div class="col-md-4">
                    <div class="footer-about-us">
                        <h2><span>Dove trovarci:</span></h2>
                        <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.9389088091184!2d13.515168062225193!3d43.586988801920846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d80233dd931ef%3A0x161719e4f3f5daaf!2sUniversit%C3%A0%20Politecnica%20delle%20Marche%20-%20Facolt%C3%A0%20di%20Ingegneria!5e0!3m2!1sit!2sit!4v1589646495762!5m2!1sit!2sit" 
                                    width="350" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                                    
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Contatti</h2>
                        <ul>
                            <li><b>Telefono fisso</b> <br> 071 651536</li>
                            <li><b>Telefono cellulare</b> <br> 333 2251907</li>
                            <li><b>PEC</b> <br><a href="mailto:eelectronics@pec.com">eelectronics@pec.com</a></li>
                            <li><b>Email</b> <br> <a href="mailto:eelectronics@gmail.com">eelectronics@gmail.com</a></li>
                        </ul>                        
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="footer-about-us">
                        <h2><span>Privacy Policy</span></h2>
                        <p class="testo-footer">
                            La tua privacy è importante per noi. È politica di eElectronics S.p.a. rispettare la tua privacy in merito a qualsiasi informazione che possiamo raccogliere da te attraverso il nostro sito Web.
                            Chiediamo informazioni personali solo quando ne abbiamo veramente bisogno per fornirti un servizio. Le raccogliamo con mezzi leciti, con la tua conoscenza e il tuo consenso. Ti facciamo anche sapere perché lo stiamo raccogliendo e come verrà utilizzato.
                            Conserviamo le informazioni raccolte solo per il tempo necessario a fornire il servizio richiesto. I dati che archiviamo li proteggiamo con mezzi commercialmente accettabili per prevenire la perdita e il furto, nonché accesso, divulgazione, copia, utilizzo o modifica non autorizzati.
                            Non condividiamo informazioni di identificazione personale pubblicamente o con terze parti, tranne quando richiesto dalla legge.
                            Il nostro sito Web può essere collegato a siti esterni che non sono gestiti da noi. Si prega di essere consapevoli del fatto che non abbiamo alcun controllo sul contenuto e sulle pratiche di questi siti e che non possiamo accettare alcuna responsabilità per le rispettive politiche sulla privacy.
                            Sei libero di rifiutare la nostra richiesta di informazioni personali, con la consapevolezza che potremmo non essere in grado di fornirti alcuni dei servizi desiderati.
                            L'uso continuato del nostro sito Web sarà considerato come accettazione delle nostre pratiche in materia di privacy e informazioni personali. In caso di domande su come trattiamo i dati degli utenti e le informazioni personali, non esitate a contattarci.
                            Questa politica è in vigore dal 16 maggio 2020.
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- End footer top area -->

        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright">
                            <p>&copy; 2020 eElectronics. All Rights Reserved. Coded with &hearts; by <a href="{{asset('/relazione/Relazione.pdf')}}" target="_blank">Group 13</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End footer bottom area -->

    </body> 

</html>


