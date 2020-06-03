<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('categoria')->insert([
            ['idCategoria' => 1, 'categoria' => 'Informatica'],
            ['idCategoria' => 2, 'categoria' => 'Smartphone e Tablet'],
            ['idCategoria' => 3, 'categoria' => 'TV'],
            ['idCategoria' => 4, 'categoria' => 'Foto e Video'],
            ['idCategoria' => 5, 'categoria' => 'Console e Videogiochi'],
            ['idCategoria' => 6, 'categoria' => 'Domotica'],
        ]);
        
        DB::table('sottocategoria')->insert([
            ['idSottocategoria' => 1, 'sottocategoria' => 'Desktop', 'idCategoria' => 1],
            ['idSottocategoria' => 2, 'sottocategoria' => 'Portatili', 'idCategoria' => 1],
            ['idSottocategoria' => 3, 'sottocategoria' => 'Accessori PC', 'idCategoria' => 1],
            ['idSottocategoria' => 4, 'sottocategoria' => 'Stampanti', 'idCategoria' => 1],
            ['idSottocategoria' => 5, 'sottocategoria' => 'Dispositivi di Memoria', 'idCategoria' => 1],
            ['idSottocategoria' => 6, 'sottocategoria' => 'Reti e Connettività', 'idCategoria' => 1],
            
            ['idSottocategoria' => 7, 'sottocategoria' => 'Smartphone', 'idCategoria' => 2],
            ['idSottocategoria' => 8, 'sottocategoria' => 'Tablet', 'idCategoria' => 2],
            ['idSottocategoria' => 9, 'sottocategoria' => 'Accessori Telefonia', 'idCategoria' => 2],
            
            ['idSottocategoria' => 10, 'sottocategoria' => 'TV', 'idCategoria' => 3],
            ['idSottocategoria' => 11, 'sottocategoria' => 'Decoder', 'idCategoria' => 3],
            ['idSottocategoria' => 12, 'sottocategoria' => 'Sound System', 'idCategoria' => 3],
            ['idSottocategoria' => 13, 'sottocategoria' => 'Lettori Multimediali', 'idCategoria' => 3],
            ['idSottocategoria' => 14, 'sottocategoria' => 'Accessori TV', 'idCategoria' => 3],
            
            ['idSottocategoria' => 15, 'sottocategoria' => 'Fotocamere', 'idCategoria' => 4],
            ['idSottocategoria' => 16, 'sottocategoria' => 'Videocamere', 'idCategoria' => 4],
            ['idSottocategoria' => 17, 'sottocategoria' => 'Obiettivi', 'idCategoria' => 4],
            ['idSottocategoria' => 18, 'sottocategoria' => 'Accessori Foto', 'idCategoria' => 4],
            
            ['idSottocategoria' => 19, 'sottocategoria' => 'Xbox', 'idCategoria' => 5],
            ['idSottocategoria' => 20, 'sottocategoria' => 'Playstation', 'idCategoria' => 5],
            ['idSottocategoria' => 21, 'sottocategoria' => 'Nintendo', 'idCategoria' => 5],
            ['idSottocategoria' => 22, 'sottocategoria' => 'Videogiochi', 'idCategoria' => 5],
            
            ['idSottocategoria' => 23, 'sottocategoria' => 'Sicurezza', 'idCategoria' => 6],
            ['idSottocategoria' => 24, 'sottocategoria' => 'Illuminazione', 'idCategoria' => 6],
            ['idSottocategoria' => 25, 'sottocategoria' => 'Termostati', 'idCategoria' => 6],
            ['idSottocategoria' => 26, 'sottocategoria' => 'Impianti Audio', 'idCategoria' => 6],
            
        ]);
        
        
        
        DB::table('prodotto')->insert([
            //0 prodotto non in sconto, 1 prodotto in sconto
            
            ['nome' => 'MSI Infinite', 'idSottocategoria' => 1,
                'descrBreve' => 'Desktop di fascia media', 'descrEstesa' => 'MSI Infinite A 9SC-839IT
                Intel® Core™ i7 di nona generazione i7-9700F
                16 GB DDR4-SDRAM 
                2256 GB HDD+SSD
                Desktop Nero PC
                Windows 10 Home',
                'prezzo' => 1599.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Desktop Fascia Media.jpg'],
            ['nome' => 'Lenovo IdeaCentre 510', 'idSottocategoria' => 1,
                'descrBreve' => 'Desktop Entry-Level', 'descrEstesa' => 'Intel® Core™ i5 di nona generazione i5-9400
                 8 GB DDR4-SDRAM
                 1000 GB HDD
                 Tower Nero - Argento
                 PC Windows 10',
                'prezzo' => 699.99, 'percSconto' => 20, 'flagSconto' => 1, 'immagine' => 'Desktop Fascia Entry.jpg'],
            ['nome' => 'HP OMEN 880-199nl', 'idSottocategoria' => 1,
                'descrBreve' => 'Desktop Fascia Medio-Alta', 'descrEstesa' => 'Intel® Core™ i7 di nona generazione i7-9700K
                 16 GB DDR4-SDRAM
                 1256 GB HDD+SSD
                 Tower Nero
                 PC Windows 10 Home',
                'prezzo' => 1999.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Desktop Fascia Medio-Alta.jpg'],
            ['nome' => 'OMEN by HP Obelisk 875-1026nl', 'idSottocategoria' => 1,
                'descrBreve' => 'Desktop Gaming Top di Gamma', 'descrEstesa' => 'Intel® Core™ i7 di nona generazione i7-9700F
                 32 GB DDR4-SDRAM
                 1512 GB HDD+SSD
                 Tower Nero 
                 PC Windows 10 Home',
                'prezzo' => 2299.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Desktop Top di Gamma.jpg'],
            ['nome' => 'Apple iMac 68,6 cm (27")', 'idSottocategoria' => 1,
                'descrBreve' => 'All-in-one per tutti', 'descrEstesa' => 'Intel® Core™ i5 di ottava generazione
                 8 GB DDR4-SDRAM
                 1000 GB Fusion Drive
                 AMD Radeon Pro 570X
                 Argento 
                 Jobs
                 PC All-in-one 
                 macOS Mojave 10.14',
                'prezzo' => 2199.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'iMac.jpg'],
            ['nome' => 'Apple Mac mini', 'idSottocategoria' => 1,
                'descrBreve' => 'Piccolo, ma potente', 'descrEstesa' => 'Intel® Core™ i5 di ottava generazione
                 8 GB DDR4-SDRAM
                 512 GB SSD
                 Grigio
                 Mini PC 
                 Mac OS Catalina',
                'prezzo' => 1271.00, 'percSconto' => 35, 'flagSconto' => 1, 'immagine' => 'Mac Mini.jpg'],
            
            
            ['nome' => 'ASUS VivoBook S15', 'idSottocategoria' => 2,
                'descrBreve' => 'Portatile Entry-Level', 'descrEstesa' => 'Computer portatile
                 Argento
                 (15.6") 1366 x 768 Pixel
                 Intel® Pentium® Gold
                 4 GB DDR4-SDRAM 
                 128 GB SSD 
                 Wi-Fi 5 (802.11ac) 
                 Windows 10 S',
                'prezzo' => 429.00, 'percSconto' => 10, 'flagSconto' => 1, 'immagine' => 'Portatile Entry.jpg'],
            ['nome' => 'ASUS ZenBook 14', 'idSottocategoria' => 2,
                'descrBreve' => 'Portatile di Fascia Media', 'descrEstesa' => 'Computer portatile
                 Argento
                 (14") 1920 x 1080 Pixel
                 Intel® Core™ i7 di decima generazione 
                 8 GB
                 256 GB SSD
                 NVIDIA® GeForce® MX250 Wi-Fi 5 (802.11ac) Windows 10',
                'prezzo' => 699.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Portatile Medio.jpg'],
            ['nome' => 'Apple MacBook Air', 'idSottocategoria' => 2,
                'descrBreve' => 'Leggero e Scattante', 'descrEstesa' => 'Computer portatile
                 (13.3") 2560 x 1600 Pixel
                 Intel® Core™ i5 di ottava generazione
                 8 GB LPDDR3-SDRAM
                 128 KB SSD Wi-Fi 5 (802.11ac) 
                 macOS Mojave',
                'prezzo' => 1279.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'MacBook Air.jpg'],
            ['nome' => 'Apple MacBook Pro', 'idSottocategoria' => 2,
                'descrBreve' => 'Perfetto per Content Creator', 'descrEstesa' => 'Computer portatile
                 Grigio 
                 (16") 3072 x 1920 Pixel
                 Intel® Core™ i9 di nona generazione 
                 16 GB DDR4-SDRAM 
                 1024 GB SSD 
                 AMD Radeon Pro 5500M 
                 Wi-Fi 5 (802.11ac) macOS Catalina',
                'prezzo' => 3299.00, 'percSconto' => 15, 'flagSconto' => 1, 'immagine' => 'MacBook Pro.jpg'],
            ['nome' => 'ASUS ROG Strix G531GW-AZ061T', 'idSottocategoria' => 2,
                'descrBreve' => 'Portatile da Gaming', 'descrEstesa' => 'Computer portatile
                 Nero 
                 (15.6") 1920 x 1080 Pixel
                 Intel® Core™ i7 di nona generazione
                 16 GB DDR4-SDRAM 
                 1512 GB HDD+SSD 
                 NVIDIA® GeForce RTX™ 2070 
                 Wi-Fi 5 (802.11ac) Windows 10 Home',
                'prezzo' => 2299.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Beast.jpg'],
            ['nome' => 'Dell XPS 13" 2-1', 'idSottocategoria' => 2,
                'descrBreve' => 'Leggero - Potente - Elegante', 'descrEstesa' => '2 in 1 da 13 pollici
                 con straordinario display HDR
                 Processore Intel® di decima generazione e prestazioni fino a 2 volte e 
                 mezza superiori contenute in una struttura più sottile, corredata da un design di lusso.',
                'prezzo' => 1299.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'XPS.jpg'],
            
            
            ['nome' => 'Trust Sikanda GXT 164', 'idSottocategoria' => 3,
                'descrBreve' => 'MMO Mouse', 'descrEstesa' => 'MMO mouse USB
                 tipo A Ottico 5000 DPI Mano destra',
                'prezzo' => 49.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Mouse MMO.jpg'],
            ['nome' => 'HP Pavilion Gaming 400 headset', 'idSottocategoria' => 3,
                'descrBreve' => 'Cuffie Stereo Over-ear', 'descrEstesa' => 'Cuffia Padiglione auricolare Nero, Verde',
                'prezzo' => 29.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Cuffie OverEar.jpg'],
            ['nome' => 'Logitech K780', 'idSottocategoria' => 3,
                'descrBreve' => 'Tastiera Wireless', 'descrEstesa' => 'Tastiera RF Wireless + Bluetooth QWERTY Italiano Grigio, Bianco',
                'prezzo' => 99.99, 'percSconto' => 30, 'flagSconto' => 1, 'immagine' => 'Tastiera Wireless.jpg'],
            ['nome' => 'ASUS ROG Whetstone', 'idSottocategoria' => 3,
                'descrBreve' => 'Tappetino Mouse Gaming', 'descrEstesa' => 'Tappetino per Mouse da Gaming Nero, Rosso',
                'prezzo' => 39.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Tappetino Mouse.jpg'],
            ['nome' => 'Trust Trino HD Video webcam', 'idSottocategoria' => 3,
                'descrBreve' => 'Videocamera HD', 'descrEstesa' => 'Video webcam 8 MP USB Nero',
                'prezzo' => 39.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'WebCam.jpg'],
            ['nome' => 'NortonLifeLock Norton AntiVirus', 'idSottocategoria' => 3,
                'descrBreve' => 'Antivirus Versione Base', 'descrEstesa' => 'NortonLifeLock Norton AntiVirus Basic Licenza base 1 licenza/e 1 anno/i',
                'prezzo' => 29.99, 'percSconto' => 25, 'flagSconto' => 1, 'immagine' => 'AntiVirus.jpg'],
            
            
            ['nome' => 'HP DeskJet 3762', 'idSottocategoria' => 4,
                'descrBreve' => 'Stampante - Scanner', 'descrEstesa' => ' Stampante a Getto termico di inchiostro
                 4800 x 1200 DPI 8 ppm A4 Wi-Fi',
                'prezzo' => 59.99, 'percSconto' => 10, 'flagSconto' => 1, 'immagine' => 'Stampante Mia.jpg'],
            ['nome' => 'Epson EcoTank ET-M2140', 'idSottocategoria' => 4,
                'descrBreve' => 'Stampante da Ufficio', 'descrEstesa' => 'Tecnologia di stampa Ad inchiostro 
                 Velocità di stampa (nero, qualità normale, A4/US Letter) 39  ppm
                 Risoluzione di scansione ottica 1200 x 2400  dpi
                 Interfaccia standard USB 2.0 ',
                'prezzo' => 349.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'StampanteUfficio.jpg'],
            ['nome' => 'Inchiostro HP 302 Nero + Tricolor', 'idSottocategoria' => 4,
                'descrBreve' => 'Inchiostro Nero + Tricolor', 'descrEstesa' => 'HP 302 Originale Nero + Ciano, Magenta, Giallo',
                'prezzo' => 32.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Inchiostro Stampante.jpg'],
            ['nome' => 'HP ENVY Photo 7134', 'idSottocategoria' => 4,
                'descrBreve' => 'Stampante Fascia Media', 'descrEstesa' => 'Stampante  a Getto termico di inchiostro 4800 x 1200 DPI 14 ppm A4 Wi-Fi',
                'prezzo' => 129.99, 'percSconto' => 60, 'flagSconto' => 1, 'immagine' => 'StampanteMedia.jpg'],
            ['nome' => 'Epson Singlepack Black 603 Ink', 'idSottocategoria' => 4,
                'descrBreve' => 'Inchiostro Fotografico', 'descrEstesa' => 'Inchiostro per stamopanti Epson, adatto a stampa di fotografie',
                'prezzo' => 13.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'InchiostroFoto.jpg'],
            
            
            ['nome' => 'Samsung MZ-75E500', 'idSottocategoria' => 5,
                'descrBreve' => 'SSD Samunsung 500 GB', 'descrEstesa' => 'Capacità SSD 500  GB
                 Interfaccia Solid State Drive (SSD) Serial ATA III 
                 Dimensioni di buffer del drive 512  MB
                 Velocità di scrittura 520  MB/s
                 Velocità di lettura 540  MB/s
                 Interfaccia Serial ATA III 
                 Interno Sì ',
                'prezzo' => 169.99, 'percSconto' => 15, 'flagSconto' => 1, 'immagine' => 'SSD Samsung 500.jpg'],
            ['nome' => 'Seagate Maxtor M3 2 TB', 'idSottocategoria' => 5,
                'descrBreve' => 'HDD da 2 TB', 'descrEstesa' => 'Disco rigido esterno 2000 GB Nero
                 2,5" 5000 Mb/s',
                'prezzo' => 99.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'HDD 2TB.jpg'],
            ['nome' => 'Sandisk Ultra Flair USB 32 GB USB', 'idSottocategoria' => 5,
                'descrBreve' => 'USB 3.0 32 GB', 'descrEstesa' => 'Sandisk Ultra Flair unità flash USB 32 GB USB tipo A 3.2 Gen 1 (3.1 Gen 1) Nero, Acciaio inossidabile',
                'prezzo' => 17.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'USB32GB.jpg'],
            ['nome' => 'Seagate Expansion Portable 4TB ', 'idSottocategoria' => 5,
                'descrBreve' => 'HDD da 4 TB', 'descrEstesa' => 'Disco rigido esterno 4000 GB Nero USB 3.0 5200rpm',
                'prezzo' => 159.99, 'percSconto' => 45, 'flagSconto' => 1, 'immagine' => 'HDD4TB.jpg'],
            ['nome' => 'SSD Intenso 256 GB', 'idSottocategoria' => 5,
                'descrBreve' => 'SSD interno da 256 GB', 'descrEstesa' => 'Capacità SSD 256  GB
                 Velocità di scrittura 500  MB/s
                 Velocità di lettura 520  MB/s
                 Interfaccia Serial ATA III 
                 Interno Sì ',
                'prezzo' => 49.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'SSD256GB.jpg'],
            
            
            ['nome' => 'AVM FRITZ! Repeater 3000', 'idSottocategoria' => 6,
                'descrBreve' => 'Repeatear 3000 Mb/s', 'descrEstesa' => 'Tecnologia di connessione Con cavo e senza cavo 
                 Quantità porte Ethernet LAN (RJ-45) 2 
                 Banda di frequenza 2.4, 5  GHz
                 Velocità massima di trasferimento dati 3000  MB/s
                 Algoritmi di sicurezza supportati WPA2,WPS ',
                'prezzo' => 149.99, 'percSconto' => 20, 'flagSconto' => 1, 'immagine' => 'AVMRipetitore.jpg'],
            ['nome' => 'TP-LINK Archer D50 Router', 'idSottocategoria' => 6,
                'descrBreve' => 'Router Dual-Band Fascia Media', 'descrEstesa' => 'Quantità porte Ethernet LAN (RJ-45) 4 
                 Quantità porte RJ-11 1 
                 Quantità porte USB 2.0 1 
                 Supporto DMZ Sì   
                 Server DHCP Sì 
                 Firewall Sì 
                 Banda Wi-Fi Dual-band (2.4 GHz/5 GHz) 
                 Wi-Fi standard Wi-Fi 5 (802.11ac) ',
                'prezzo' => 49.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Router TPLink.jpg'],
            ['nome' => 'AVM FRITZ!Powerline 510E', 'idSottocategoria' => 6,
                'descrBreve' => 'Ripetitore Ethernet 500 Mb/s', 'descrEstesa' => 'Quantità porte Ethernet LAN (RJ-45) 1 
                 Standard di rete IEEE 1901 
                 Collegamento ethernet LAN Sì 
                 Velocità trasferimento Ethernet LAN 10,100  Mbit/s
                 Velocità massima di trasferimento dati 500  Mbit/s
                 Altezza 68  mm
                 Larghezza 58  mm
                 Profondità 31  mm',
                'prezzo' => 49.99, 'percSconto' => 30, 'flagSconto' => 1, 'immagine' => 'RipetitoreEthernet.jpg'],
            ['nome' => 'D-Link DGS-108 Switch di Rete', 'idSottocategoria' => 6,
                'descrBreve' => 'Switch di Rete Ethernet', 'descrEstesa' => 'Quantità di porte RJ-45 8 
                 Tecnologia Ethernet su cavi in rame 1000BASE-T,100BASE-TX,10BASE-T   
                 Velocità di trasferimento dati supportate 10/100/1000 Mbps 
                 Massima velocità di trasferimento 1  GB/s',
                'prezzo' => 39.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'SwitchdiRete.jpg'],
            ['nome' => 'TP-LINK TL-MR150 Router', 'idSottocategoria' => 6,
                'descrBreve' => 'Router di Fascia Alta', 'descrEstesa' => '4G Sì 
                 Quantità porte Ethernet LAN (RJ-45) 4 
                 Supporto DMZ Sì   
                 Server DHCP Sì 
                 Firewall Sì 
                 Banda Wi-Fi Banda singola (2.4 GHz) 
                 WAN Ethernet Sì 
                 Wi-Fi standard Wi-Fi 4 (802.11n) ',
                'prezzo' => 99.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'RouterAlta.jpg'],
            ['nome' => 'TP-LINK TL-WA850RE', 'idSottocategoria' => 6,
                'descrBreve' => 'Ripetitore Wifi - Ethernet', 'descrEstesa' => 'Velocità di trasferimento dati 300  Mbit/s
                 Sicurezza WPS Push Button Sì 
                 Tipo Ricevitore di rete 
                 Quantità porte Ethernet LAN (RJ-45) 1 ',
                'prezzo' => 29.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'WifiEthernet.jpg'],
            
            
            ['nome' => 'iPhone Xs', 'idSottocategoria' => 7,
                'descrBreve' => 'Smartphone di fascia alta', 'descrEstesa' => 'Doppia Fotocamera posteriore da 12 Megapixel - Video 4K
                Display Super Retina HD 5.8 – Memoria 256 GB
                Sistema Operativo iOS12
                Processore A12 Bionic - 3D Touch - Ricarica wireless
                Riconoscimento del volto tramite la fotocamera TrueDepth
                Distribuito da Apple Italia',
                'prezzo' => 999.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => ''],
            ['nome' => 'Samsung Galaxy A71', 'idSottocategoria' => 7,
                'descrBreve' => 'Smartphone Dual SIM', 'descrEstesa' => 'Quadri Band - 4G-LTE - Wi-Fi - NFC - A-GPS
                Fotocamera posteriore: 64 Megapixel - Android 10
                Processore: 8-Core da 2,2 GHz - Memoria interna: 128 GB - RAM: 6 GB
                Display 6,7 Super AMOLED - Distribuito da SAMSUNG Italia',
                'prezzo' => 479.00, 'percSconto' => 35, 'flagSconto' => 1, 'immagine' => 'Samsung_Galaxy_A71.jpg'],
            ['nome' => 'iPhone 11', 'idSottocategoria' => 7,
                'descrBreve' => 'Smartphone di fascia alta', 'descrEstesa' => 'Display Liquid Retina HD 6,1 - iOS 13
                Processore A13 Bionic Dual Core
                Doppia Fotocamera con grandangolo e ultragrandangolo
                Smart HDR - Video 4K a 60 fps
                Memoria Interna: 64 GB
                Distribuito da APPLE Italia',
                'prezzo' => 839.00, 'percSconto' => 10, 'flagSconto' => 1, 'immagine' => 'iPhone_11.jpg'],
            ['nome' => 'Xiaomi Redmi 8', 'idSottocategoria' => 7,
                'descrBreve' => 'Smartphone Dual SIM', 'descrEstesa' => 'Quadri Band - 4G-LTE - Wi-Fi
                Fotocamera posteriore: 12 Megapixel
                Processore: 8-Core da 1,45 GHz -  Android 9.0
                Memoria interna: 64 GB - RAM: 4 GB
                Display 6,2 LCD - Distribuito da XIAOMI Italia',
                'prezzo' => 169.99, 'percSconto' => 40, 'flagSconto' => 1, 'immagine' => 'Xiaomi_Redmi_8.jpg'],
            ['nome' => 'Huawei P40 Lite', 'idSottocategoria' => 7,
                'descrBreve' => 'Smartphone Dual SIM', 'descrEstesa' => 'Quadri Band - 4G-LTE - Wi-Fi - NFC - A-GPS
                Fotocamera posteriore: 48 MP - Android 10.0 Open Source ed EMUI 10 
                Processore: 8-Core da 2,27 GHz - Memoria interna: 128 GB - RAM: 6 GB
                Display 6,4 LCD - Distribuito da HUAWEI Italia',
                'prezzo' => 299.99, 'percSconto' => 30, 'flagSconto' => 1, 'immagine' => 'Huawei_P40_Lite.jpg'],
            ['nome' => 'Samsung Galaxy A20e', 'idSottocategoria' => 7,
                'descrBreve' => 'Smartphone Dual SIM', 'descrEstesa' => 'Quadri Band - 4G-LTE - NFC - A-GPS
                Fotocamera posteriore: 13 Megapixel
                Android 9 Pie - Processore: 8-Core da 1,6 GHz
                Memoria interna: 32 GB - RAM: 3 GB
                Display 5,8 TFT - Distribuito da SAMSUNG Italia',
                'prezzo' => 179.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => ''],
            ['nome' => 'Huawei P30 Lite', 'idSottocategoria' => 7,
                'descrBreve' => 'Smartphone Dual SIM', 'descrEstesa' => 'Penta Band - 4G-LTE - NFC - A-GPS
                Fotocamera posteriore: 48 Megapixel
                Android 9.0 ed EMUI 9.0.1
                Processore: 8-Core da 2,2 GHz
                Memoria interna: 128 GB - RAM: 4 GB
                Display 6,15 LCD
                Distribuito da HUAWEI Italia',
                'prezzo' => 259.99, 'percSconto' => 65, 'flagSconto' => 1, 'immagine' => ''],
            
            
            ['nome' => 'Samsung Galaxy Tab A (2019)', 'idSottocategoria' => 8,
                'descrBreve' => 'Tablet 10,1" LTE', 'descrEstesa' => 'Sistema operativo incluso Android 9.0 
                 Dimensioni schermo 10.1  "
                 RAM installata 2  GB
                 Capacità memoria interna 32  GB
                 4G
                 Colore Prodotto: Nero ',
                'prezzo' => 279.99, 'percSconto' => 10, 'flagSconto' => 1, 'immagine' => 'TabletGalaxy.jpg'],
            ['nome' => 'Apple iPad Pro (11") 64 GB', 'idSottocategoria' => 8,
                'descrBreve' => 'iPad Pro 11" 64 GB', 'descrEstesa' => 'Sistema operativo incluso iOS 12 
                 Dimensioni schermo 11  "
                 RAM installata 4  GB
                 Capacità memoria interna 64  GB
                 4G 
                 Colore Prodotto: Argento ',
                'prezzo' => 899.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'iPadPro64.jpg'],
            ['nome' => 'Huawei MediaPad T5 (10.1") ', 'idSottocategoria' => 8,
                'descrBreve' => 'Tablet di Fascia Bassa', 'descrEstesa' => 'TSistema operativo incluso Android 8.0 
                 Dimensioni schermo 10.1  "
                 RAM installata 4  GB
                 Capacità memoria interna 64  GB
                 Colore Prodotto: Nero ',
                'prezzo' => 299.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'TabletHuawei.jpg'],
            ['nome' => 'Apple iPad (10.2")', 'idSottocategoria' => 8,
                'descrBreve' => 'iPad Adatto allo Studio', 'descrEstesa' => 'Sistema operativo incluso iPadOS 
                 Dimensioni schermo 10.2  "
                 RAM installata 3  GB
                 Capacità memoria interna 32  GB
                 4G
                 Colore Prodotto: Argento ',
                'prezzo' => 529.00, 'percSconto' => 40, 'flagSconto' => 1, 'immagine' => 'iPadStudenti.jpg'],
            ['nome' => 'Lenovo Tab M10 plus (10.3")', 'idSottocategoria' => 8,
                'descrBreve' => 'Tablet di Fascia Media', 'descrEstesa' => 'Dimensioni schermo 10.3  "
                 RAM installata 4  GB
                 Capacità memoria interna 64  GB
                 Colore Prodotto: Grigio ',
                'prezzo' => 219.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'TabletLenovo.jpg'],
            
            
            ['nome' => 'Custodia Samsung S10+', 'idSottocategoria' => 9,
                'descrBreve' => 'Custodia con Notifiche', 'descrEstesa' => ' Compatibilità marca Samsung 
                 Compatibilità Galaxy s10+ 
                 Colore del prodotto Verde 
                 Tipologia custodia Custodia a libro',
                'prezzo' => 65.99, 'percSconto' => 15, 'flagSconto' => 1, 'immagine' => 'CustodiaNotifiche.jpg'],
            ['nome' => 'Airpods Pro', 'idSottocategoria' => 9,
                'descrBreve' => 'Auricolari Wireless', 'descrEstesa' => 'Tecnologia di connessione Senza fili 
                 Effetto di cancellazione del rumore Sì 
                 Tipo di auricolare Stereofonico 
                 Stile di uso Auricolare 
                 Custodia di ricarica Sì 
                 Colore del prodotto Bianco',
                'prezzo' => 279.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Airpods Pro.jpg'],
            ['nome' => 'Cellularline PowerUp 5200', 'idSottocategoria' => 9,
                'descrBreve' => 'Powerbank da 5200 mAh', 'descrEstesa' => 'Fonte di ricarica Batteria
                 Capacità della batteria 5200  mAh',
                'prezzo' => 19.95, 'percSconto' => 25, 'flagSconto' => 1, 'immagine' => 'PowerUp5200.jpg'],
            ['nome' => 'Samsung Caricatore MicroUSB', 'idSottocategoria' => 9,
                'descrBreve' => 'Caricatore USB A - MicroUSB', 'descrEstesa' => 'Tipo di caricatore Interno 
                 Compatibilità caricatore Universale 
                 Colore del prodotto Bianco ',
                'prezzo' => 24.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'CaricatoreSamsung.jpg'],
            ['nome' => 'Phonix Caricabatteria Wireless USB con Tecnologia Qi', 'idSottocategoria' => 9,
                'descrBreve' => 'Caricatore Wireless Qi', 'descrEstesa' => 'Tipo di caricatore Interno 
                 Compatibilità caricatore Universale 
                 Prodotti compatibili Apple iPhone X, Apple iPhone 8, ',
                'prezzo' => 19.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'CaricatoreWireless.jpg'],
            
            
            ['nome' => 'Samsung Series 5 FullHD 32"', 'idSottocategoria' => 10,
                'descrBreve' => 'TV FullHD 32"', 'descrEstesa' => 'Dimensioni schermo 32  "
                 Tipologia HD Full HD 
                 Risoluzione del display 1920 x 1080  pixel
                 Formato del segnale digitale DVB-C,DVB-S2,DVB-T2 
                 Sistema operativo incluso Tizen ',
                'prezzo' => 299.00, 'percSconto' => 10, 'flagSconto' => 1, 'immagine' => 'TVHDSamsung.jpg'],
            ['nome' => 'Samsung Series 6 TV QLED 4K 49"', 'idSottocategoria' => 10,
                'descrBreve' => 'TV 4K 49"', 'descrEstesa' => 'Dimensioni schermo 49  "
                 Tipologia HD 4K Ultra HD 
                 Risoluzione del display 3840 x 2160  pixel
                 Formato del segnale digitale DVB-C,DVB-S2,DVB-T2 ',
                'prezzo' => 999.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Samsung4K.jpg'],
            ['nome' => 'Sony Android TV da 49 pollici', 'idSottocategoria' => 10,
                'descrBreve' => 'SmartTV 4K 49"', 'descrEstesa' => 'Dimensioni schermo 49  "
                 Tipologia HD 4K Ultra HD 
                 Risoluzione del display 3840 x 2160  pixel
                 Tipo di retroilluminazione LED Direct-LED 
                 Sistema operativo incluso Android ',
                'prezzo' => 1049.00, 'percSconto' => 30, 'flagSconto' => 1, 'immagine' => 'SonyTV4K.jpg'],
            ['nome' => 'Hitachi 24" HD', 'idSottocategoria' => 10,
                'descrBreve' => 'TV Low-Cost HD 24"', 'descrEstesa' => 'Dimensioni schermo 24  "
                 Tipologia HD HD 
                 Risoluzione del display 1366 x 768  pixel
                 Formato del segnale digitale DVB-C,DVB-S2,DVB-T2 ',
                'prezzo' => 179.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'TVSchifus.jpg'],
            ['nome' => 'LG 4K 70"', 'idSottocategoria' => 10,
                'descrBreve' => 'SmartTV 70" 4K', 'descrEstesa' => 'Dimensioni schermo 70  "
                 Tipologia HD 4K Ultra HD 
                 Risoluzione del display 3840 x 2160  pixel
                 Tipo di retroilluminazione LED Direct-LED 
                 Formato del segnale digitale DVB-C,DVB-S2,DVB-T2 
                 Sistema operativo incluso Web OS',
                'prezzo' => 1499.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'LGTV4K.jpg'],
            ['nome' => 'Samsung QLED 8K 75"', 'idSottocategoria' => 10,
                'descrBreve' => 'SmartTV Top di Gamma 8K', 'descrEstesa' => 'Dimensioni schermo 75  "
                 Tipologia HD 8K Ultra HD 
                 Risoluzione del display 7680 x 4320  pixel
                 Formato del segnale digitale DVB-C,DVB-C2,DVB-S2,DVB-T,DVB-T2 ',
                'prezzo' => 4999.00, 'percSconto' => 40, 'flagSconto' => 1, 'immagine' => 'TVULTRAFIGA.jpg'],
            
            
            ['nome' => 'Digiquest Cam Tivùsat 4K', 'idSottocategoria' => 11,
                'descrBreve' => 'Decoder 4K', 'descrEstesa' => 'Modulo di accesso condizionato (CAM)',
                'prezzo' => 109.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Decoder4K.jpg'],
            ['nome' => 'ADB i-CAN T280', 'idSottocategoria' => 11,
                'descrBreve' => 'Cuffie Stereo Over-ear', 'descrEstesa' => 'Numero prese Scart 1 
                 Quantità porte USB 2.0 1 
                 TV interattiva No 
                 Telecomando portatile Si 
                 Wi-Fi No ',
                'prezzo' => 44.90, 'percSconto' => 20, 'flagSconto' => 1, 'immagine' => 'DecoderSchifus.jpg'],
            ['nome' => 'Telesystem TS9015', 'idSottocategoria' => 11,
                'descrBreve' => 'Decoder Fascia Alta', 'descrEstesa' => 'Digital Satellite Equipment Control (DiSEqC) 1.0, 1.2, Sat-CR, USALS 
                 Numero prese Scart 1 
                 Quantità porte USB 2.0 1 
                 Tipologia display LCD 
                 TV interattiva Si 
                 Telecomando portatile Si 
                 Wi-Fi No ',
                'prezzo' => 149.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Decoder150.jpg'],
            ['nome' => 'Digiquest Easy Scart HD', 'idSottocategoria' => 11,
                'descrBreve' => 'Decoder per Entrata Scart', 'descrEstesa' => 'Numero prese Scart 1 
                 Quantità porte USB 2.0 1 
                 Quantità di canali 1000  channels
                 Telecomando portatile Si 
                 Wi-Fi No ',
                'prezzo' => 39.90, 'percSconto' => 25, 'flagSconto' => 1, 'immagine' => 'DecoderScart.jpg'],
            
            
            ['nome' => 'Bose SoundTouch 20 Series III', 'idSottocategoria' => 12,
                'descrBreve' => 'Smart Sound System', 'descrEstesa' => 'Certificato DLNA No 
                 Supporto di memorizzazione integrato No 
                 Servizi di streaming di rete supportati Pandora 
                 Servizi radio Internet supportati Pandora, Spotify, ',
                'prezzo' => 399.95, 'percSconto' => 20, 'flagSconto' => 1, 'immagine' => 'BoseSound.jpg'],
            ['nome' => 'LG XBOOM AI ThinQ 30W', 'idSottocategoria' => 12,
                'descrBreve' => 'Cassa Smart', 'descrEstesa' => 'Assistente virtuale Google Assistant 
                 Touch screen No 
                 Controllo vocale Sì 
                 Wi-Fi Sì 
                 Tipo di speaker 1-via 
                 Microfono incorporato Sì 
                 Colore del prodotto Nero ',
                'prezzo' => 199.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'LGXBOOX.jpg'],
            ['nome' => 'Philips BTB2515/12', 'idSottocategoria' => 12,
                'descrBreve' => 'Sound System di Fascia Media', 'descrEstesa' => 'Potenza in uscita (RMS) 15  W
                 Colore del prodotto Nero 
                 Diametro del woofer 76  mm',
                'prezzo' => 159.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'PhilipsSound.jpg'],
            ['nome' => 'Bigben Interactive TD114N', 'idSottocategoria' => 12,
                'descrBreve' => 'Giradischi di Ultima Generazione', 'descrEstesa' => 'Bigben Interactive TD114N Nero piatto giradischi',
                'prezzo' => 59.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Giradischi.jpg'],
            ['nome' => 'Bose Surround Speakers', 'idSottocategoria' => 12,
                'descrBreve' => 'Altoparlanti Wireless', 'descrEstesa' => 'Utilizzo raccomandato Casa   
                 Posizionamento diffusori Pavimento, Montabile su supporto, Tavolo/Libreria, Montabile a parete ',
                'prezzo' => 349.95, 'percSconto' => 30, 'flagSconto' => 1, 'immagine' => 'WirelessBose.jpg'],
            ['nome' => 'Sonos One', 'idSottocategoria' => 12,
                'descrBreve' => 'Cassa Smart Sonos', 'descrEstesa' => 'Utilizzo raccomandato Universale   
                 Posizionamento diffusori Tavolo/Libreria 
                 Amplificatore Da Incasso   
                 Tweeter Sì 
                 Woofer Sì ',
                'prezzo' => 229.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'CassaSonos.jpg'],
            
            
            ['nome' => 'Panasonic DMP-BD84EG-K Blu-Ray ', 'idSottocategoria' => 13,
                'descrBreve' => 'Lettore Blu-Ray Panasonic', 'descrEstesa' => 'Tipo di dispositivo Lettore Blu-Ray 
                 Formati video supportati AVCHD,BDMV,MKV,MP4,XVID 
                 Formati audio supportati AAC,ALAC,FLAC,MP3,WAV,WMA 
                 Formati immagini supportati JPEG XR,MPO 
                 Quantità porte HDMI 1 
                 Quantità porte USB 2.0 1 ',
                'prezzo' => 79.99, 'percSconto' => 70, 'flagSconto' => 1, 'immagine' => 'PanasonicBlu.jpg'],
            ['nome' => 'TELE System TS5105 Lettore DVD ', 'idSottocategoria' => 13,
                'descrBreve' => 'Lettore DVD Low-Cost', 'descrEstesa' => 'Tipo di dispositivo Lettore DVD 
                 Formati video supportati MPEG4 
                 Formati audio supportati MP3 
                 Formati immagini supportati JPG 
                 Quantità porte HDMI 1 
                 Quantità porte USB 2.0 1',
                'prezzo' => 34.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'TELEDVD.jpg'],
            ['nome' => 'Trevi 700500 9"', 'idSottocategoria' => 13,
                'descrBreve' => 'Lettore DVD a Parete', 'descrEstesa' => 'Dimensioni schermo 9  "
                 Formato di riproduzione CD audio, CD video, DVD-Audio, DVD-VR 
                 Tipi di dischi supportati CD,DVD 
                 Formato 16:9 
                 Tipologia display doppio schermo LED 
                 Tipologia alimentazione AC, dC',
                'prezzo' => 179.00, 'percSconto' => 50, 'flagSconto' => 1, 'immagine' => 'TreviDVD.jpg'],
            ['nome' => 'TELE System TS5011 PX Convertibile ', 'idSottocategoria' => 13,
                'descrBreve' => 'Lettore DVD Portatile', 'descrEstesa' => 'Dimensioni schermo 9  "
                 Formato di riproduzione CD audio,CD video,DVD-Audio,DVD-Video,SVCD,VCD 
                 Tipi di dischi supportati CD,CD-R,CD-ROM,CD-RW,DVD,DVD+R,DVD+RW,DVD-R,DVD-ROM,DVD-RW 
                 Formato 16:9 
                 Tipologia display LCD 
                 Tipologia alimentazione Batteria, DC ',
                'prezzo' => 89.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'TELEDVDPortatile.jpg'],
            ['nome' => 'Sony DVD', 'idSottocategoria' => 13,
                'descrBreve' => 'Lettore DVD Fascia Media', 'descrEstesa' => 'Tipo di dispositivo Lettore 
                 Formati video supportati: CD,CD-R,CD-ROM,CD-RW,DVD,DVD+R,DVD+RW,DVD-R,DVD-ROM,DVD-RW
                 Quantità porte USB 2.0 1 ',
                'prezzo' => 54.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'SonyDVDSconosciuto.jpg'],

            
            ['nome' => 'Sony MDR-RF855RK', 'idSottocategoria' => 14,
                'descrBreve' => 'Cuffia per TV', 'descrEstesa' => 'Interfaccia dispositivo RF 
                 Range wireless 100  m
                 Frequenza cuffia 10 - 22000  Hz',
                'prezzo' => 89.99, 'percSconto' => 60, 'flagSconto' => 1, 'immagine' => 'SonyCuffieTV.jpg'],
            ['nome' => 'Meliconi CME EDR400 50"', 'idSottocategoria' => 14,
                'descrBreve' => 'Supporto TV a Muro', 'descrEstesa' => 'Capienza massima dimensioni dello schermo 50  "
                 Peso massimo (capacità) 25  kg
                 Inclinazione -15 - 10  °
                 Numero di cardini 3 
                 Colore del prodotto Nero ',
                'prezzo' => 79.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'SupportoMuroTV.jpg'],
            ['nome' => 'Meliconi Gumbody', 'idSottocategoria' => 14,
                'descrBreve' => 'Telecomando Universale', 'descrEstesa' => 'Utilizzo appropriato telecomando TV 
                 Numero di dispositivi supportati 1 
                 Interfaccia IR Wireless 
                 Tipo di ingresso Pulsanti   
                 Display incorporato No ',
                'prezzo' => 19.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'TelecomandoUniversale.jpg'],
            ['nome' => 'Hama avo HDMI 3 m', 'idSottocategoria' => 14,
                'descrBreve' => 'Cavo HDMI da 3 m', 'descrEstesa' => 'Lunghezza cavo 3  m
                 Connettore 1 HDMI tipo A (Standard) 
                 Connettore 2 HDMI tipo A (Standard) 
                 Velocità di trasferimento dati 10.2  GB/s
                 Colore del prodotto Nero ',
                'prezzo' => 17.99, 'percSconto' => 30, 'flagSconto' => 1, 'immagine' => 'CavoHDMI.jpg'],
            
            
            ['nome' => 'Sony Alpha 6000L', 'idSottocategoria' => 15,
                'descrBreve' => 'Mirrorless di Fascia Media', 'descrEstesa' => 'Tipologia fotocamera MILC 
                 Megapixel 24.3  MP
                 Tipo sensore CMOS 
                 Dimensioni schermo 3  "
                 Stabilizzatore immagine Sì 
                 Tipi schede di memoria MS PRO Duo,MS Pro-HG Duo,MS XC-HG Duo,SD,SDHC,SDXC 
T                ipo batteria NP-FW50 ',
                'prezzo' => 899.99, 'percSconto' => 10, 'flagSconto' => 1, 'immagine' => 'SonyAlpha6000.jpg'],
            ['nome' => 'Fujifilm Instax SQ 6', 'idSottocategoria' => 15,
                'descrBreve' => 'Fotocamera Instantanea', 'descrEstesa' => 'Regolazione messa a fuoco Auto/Manuale 
                 Tipo di otturatore Elettronico 
                 Batteria ricaricabile No 
                 Colore del prodotto Oro ',
                'prezzo' => 139.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'FujifilmInstax.jpg'],
            ['nome' => 'Sony Alpha 7 II', 'idSottocategoria' => 15,
                'descrBreve' => 'Mirrorless di Fascia Alta', 'descrEstesa' => 'Tipologia fotocamera Corpo MILC 
                 Megapixel 24.3  MP
                 Tipo sensore CMOS 
                 Dimensioni schermo 3  "
                 Stabilizzatore immagine No 
                 Tipi schede di memoria MS PRO Duo,MS Pro-HG Duo,MS XC-HG Duo,SD,SDHC,SDXC 
                 Tipo batteria NP-FW50 ',
                'prezzo' => 1799.00, 'percSconto' => 25, 'flagSconto' => 1, 'immagine' => 'SonyAlpha7.jpg'],
            ['nome' => 'Canon EOS 4000D', 'idSottocategoria' => 15,
                'descrBreve' => 'Reflex Entry-Level', 'descrEstesa' => 'Tipologia fotocamera Kit fotocamere SLR 
                 Megapixel 18  MP
                 Dimensioni schermo 2.7  "
                 Stabilizzatore immagine Si 
                 Tipi schede di memoria SD,SDHC,SDXC ',
                'prezzo' => 429.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'CanonReflex.jpg'],
            ['nome' => 'Nikon D5300 18-55mm VR', 'idSottocategoria' => 15,
                'descrBreve' => 'Reflex di Fascia Media', 'descrEstesa' => 'Tipologia fotocamera SLR Body 
                 Megapixel 24.2  MP
                 Tipo sensore CMOS 
                 Dimensioni schermo 3.2  "
                 Tipi schede di memoria SD, SDHC, SDXC 
                 Tipo batteria EN-EL14a ',
                'prezzo' => 739.99, 'percSconto' => 65, 'flagSconto' => 1, 'immagine' => 'ReflexNikonMedia.jpg'],
            ['nome' => 'Panasonic Lumix DMC-FZ300 ', 'idSottocategoria' => 15,
                'descrBreve' => 'Fotocamera Bridge Panasonic', 'descrEstesa' => 'Tipologia fotocamera Fotocamera Bridge 
                 Megapixel 12.1  MP
                 Tipo sensore MOS 
                 Zoom ottico 24  X
                 Dimensioni schermo 3  "
                 Stabilizzatore immagine Sì 
                 Tipi schede di memoria SD,SDHC,SDXC ',
                'prezzo' => 479.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'PanasonicBridge.jpg'],
            
            
            ['nome' => 'GoPro HERO7 Black', 'idSottocategoria' => 16,
                'descrBreve' => 'Action Cam di Fascia Media', 'descrEstesa' => 'Megapixel totali 12  MP
                 Risoluzione massima video 3840 x 2160  pixel
                 Funzioni di protezione Resistente agli spruzzi, Resistente all’acqua, Impermeabile 
                 Tipi schede di memoria MicroSD (TransFlash)',
                'prezzo' => 349.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'GoPro.jpg'],
            ['nome' => 'Easypix StreetVision SV4', 'idSottocategoria' => 16,
                'descrBreve' => 'Videocamera Dashcam', 'descrEstesa' => 'Risoluzione della fotocamera principale 1920 x 1080  pixels
                 Angolo di visualizzazione della fotocamera principale 140  °
                 Display incorporato Sì 
                 Tipi schede di memoria MicroSD (TransFlash) 
                 Tipologia alimentazione Batteria 
                 Colore del prodotto Nero ',
                'prezzo' => 59.90, 'percSconto' => 70, 'flagSconto' => 1, 'immagine' => 'Dashcam.jpg'],
            ['nome' => 'Sony HDR-CX240E Handycam', 'idSottocategoria' => 16,
                'descrBreve' => 'Videocamere Fascia Alta', 'descrEstesa' => 'Zoom ottico 27  X
                 Tipo sensore CMOS 
                 Tipo di supporto videocamera Scheda di memoria 
                 Dimensioni sensore ottico 1/5.8  "
                 Risoluzione massima video 1920 x 1080  pixel
                 Full HD Si 
                 Stabilizzatore immagine Sì 
                 Compatibilità 3D No ',
                'prezzo' => 219.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'SonyHandycam.jpg'],
            ['nome' => 'Kodak PixPro SP360', 'idSottocategoria' => 16,
                'descrBreve' => 'Action Cam per Sport Acquatici', 'descrEstesa' => 'Megapixel totali 17.52  MP
                 Risoluzione massima video 1920 x 1080  pixel
                 Funzioni di protezione Antipolvere, Resistente al gelo, Resistente agli urti, Resistente agli spruzzi, Impermeabile 
                 Tipi schede di memoria MicroSD (TransFlash),MicroSDHC ',
                'prezzo' => 429.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'KodayActionCam.jpg'],
            ['nome' => 'GoPro MAX', 'idSottocategoria' => 16,
                'descrBreve' => 'Action Cam di Fascia Alta', 'descrEstesa' => 'Megapixel totali 16.6  MP
                 Funzioni di protezione Impermeabile 
                 Tipi schede di memoria MicroSD (TransFlash)',
                'prezzo' => 529.99, 'percSconto' => 5, 'flagSconto' => 1, 'immagine' => 'GoProMax.jpg'],
            
            
            ['nome' => 'Obiettivo Sony 35mm', 'idSottocategoria' => 17,
                'descrBreve' => '35mm Versatile', 'descrEstesa' => 'Struttura lente 8/6 
                 Stabilizzatore immagine Sì 
                 Messa a fuoco automatica Sì 
                 Focus manuale Sì 
                 Marche compatibili Sony 
                 Peso 154  g',
                'prezzo' => 470.00, 'percSconto' => 20, 'flagSconto' => 1, 'immagine' => 'Sony35mm.jpg'],
            ['nome' => 'Canon EF 24-105mm f/3.5-5.6', 'idSottocategoria' => 17,
                'descrBreve' => 'Obiettivo Zoom per Canon', 'descrEstesa' => 'Lunghezza focale 24 - 105  mm
                 Struttura lente 17/13 
                 Marche compatibili Canon 
                 Peso 525  g',
                'prezzo' => 519.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'ObiettivoCanonReflex.jpg'],
            ['nome' => 'Hama UV Filter 390, 52mm', 'idSottocategoria' => 17,
                'descrBreve' => 'Filtro UV 52mm', 'descrEstesa' => 'Filtro UV per obiettivi dal diametro di 55mm',
                'prezzo' => 8.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'FiltroUVHama.jpg'],
            ['nome' => 'Tamron 18-200mm', 'idSottocategoria' => 17,
                'descrBreve' => 'Obiettivo Zoom Tamron 18-200mm', 'descrEstesa' => 'Lunghezza focale 18 - 200  mm
                 Struttura lente 16/14 
                 Stabilizzatore immagine Sì 
                 Marche compatibili Nikon 
                 Peso 400  g',
                'prezzo' => 249.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'Tamron200mm.jpg'],
            ['nome' => 'Nikon AF-P NIKKOR 70-300mm f/4.5-5.6', 'idSottocategoria' => 17,
                'descrBreve' => 'Obiettivo Nikkor Zoom', 'descrEstesa' => 'Lunghezza focale 70 - 300  mm
                 Struttura lente 18/14 
                 Stabilizzatore immagine Sì 
                 Messa a fuoco automatica Sì 
                 Focus manuale Sì 
                 Marche compatibili Nikon 
                 Peso 680  g',
                'prezzo' => 680.00, 'percSconto' => 80, 'flagSconto' => 1, 'immagine' => 'Nikkor300mm.jpg'],
            
            
            ['nome' => 'SP-Gadgets 52032', 'idSottocategoria' => 18,
                'descrBreve' => 'Custodia Accessori GoPro', 'descrEstesa' => 'Tipo Compatta 
                 Prodotti compatibili Hero 1, 2, 3, Hero3+ 
                 Colore del prodotto Giallo ',
                'prezzo' => 24.99, 'percSconto' => 10, 'flagSconto' => 1, 'immagine' => 'AccessoriGoPro.jpg'],
            ['nome' => 'Sandisk Extreme Memoria Flash 64 GB', 'idSottocategoria' => 18,
                'descrBreve' => 'Memoria SD Flash 64 GB', 'descrEstesa' => 'Capacità 64  GB
                 Tipo flash card SDXC 
                 Classe di memoria flash Classe 10 ',
                'prezzo' => 49.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'SD64GB.jpg'],
            ['nome' => 'Hama Star 5 Tripod', 'idSottocategoria' => 18,
                'descrBreve' => 'Treppiede 106,5 cm', 'descrEstesa' => 'Numero di gambe 3
                 Altezza (max) 1065  mm
                 Peso 520  g',
                'prezzo' => 22.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'TreppiedeHama.jpg'],
            ['nome' => 'Case Logic DSLR', 'idSottocategoria' => 18,
                'descrBreve' => 'Custodia per Fotocamere Reflex', 'descrEstesa' => 'Tipo Fondina 
                 Prodotti compatibili DSLR 
                 Dimensioni (LxPxA) 218 x 175 x 109  mm
                 Colore del prodotto Nero',
                'prezzo' => 29.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'CustodiaDSLR.jpg'],
            ['nome' => 'Hama Monopod Star 78', 'idSottocategoria' => 18,
                'descrBreve' => 'Monopiede Telescopico', 'descrEstesa' => 'Monopiede telescopico di Marca Hama Colore Argento',
                'prezzo' => 39.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'MonopiedeHama.jpg'],
            ['nome' => 'Nikon Rechargeable Li-ion battery EN-EL15', 'idSottocategoria' => 18,
                'descrBreve' => 'Batteria Ricaricabile Nikon', 'descrEstesa' => 'Voltaggio della batteria 7  V
                 Capacità della batteria 1900  mAh
                 Tecnologia batteria Ioni di Litio ',
                'prezzo' => 59.99, 'percSconto' => 30, 'flagSconto' => 1, 'immagine' => 'BatteriaNikon.jpg'],
            
            
            ['nome' => 'Microsoft Controller Xbox One - PC', 'idSottocategoria' => 19,
                'descrBreve' => 'Controller Xbox One - PC', 'descrEstesa' => 'Piattaforme di gioco supportate PC,Tablet PC,Xbox One,Xbox One S 
                Interfaccia dispositivo Bluetooth 
                Tecnologia di connessione Senza fili 
                Range wireless 9  m',
                'prezzo' => 69.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'ControllerXbox.jpg'],
            ['nome' => 'Call of Duty: Modern Warfare', 'idSottocategoria' => 19,
                'descrBreve' => 'Call of Duty Modern Warfare', 'descrEstesa' => 'Classificazione PEGI 18 
                 Genere Sparatutto 
                 Data di rilascio 25 ottobre 2019 
                 Versione lingua Inglese, ITA 
                 Edizione gioco Basic ',
                'prezzo' => 69.99, 'percSconto' => 40, 'flagSconto' => 1, 'immagine' => 'CODXbox.jpg'],
            ['nome' => 'Xbox One X Bundle', 'idSottocategoria' => 19,
                'descrBreve' => 'Console + Gioco Incluso', 'descrEstesa' => 'Piattaforma Xbox One X 
                 Capacità memoria interna 1000  GB
                 RAM installata 8192  MB
                 Numero di gamepad inclusi 1 
                 Videogioco incluso Sì 
                 Colore del prodotto Bianco ',
                'prezzo' => 499.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'XboxOneX.jpg'],
            ['nome' => 'Xbox One S (1TB) Starter Pack Bianco', 'idSottocategoria' => 19,
                'descrBreve' => 'Xbox One s 1 TB', 'descrEstesa' => 'Piattaforma Xbox One S 
                    Capacità hard disk 1000  GB
                    Capacità memoria interna 1000 GB
                    Colore del prodotto Bianco',
                'prezzo' => 299.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'XboxOneS.jpg'],
            ['nome' => 'Forza Horizion 2', 'idSottocategoria' => 19,
                'descrBreve' => 'Videogioco Automobilistico', 'descrEstesa' => 'Classificazione PEGI 12 
                    Genere Guida 
                    Data di rilascio 3 ottobre 2014 
                    Versione lingua Italiano',
                'prezzo' => 64.90, 'percSconto' => 60, 'flagSconto' => 1, 'immagine' => 'ForzaHorizon2.jpg'],
            ['nome' => 'X-Joy Kripton', 'idSottocategoria' => 19,
                'descrBreve' => 'Cuffie da Gaming', 'descrEstesa' => 'Lunghezza cavo 1.2  m
                    Stile di uso Padiglione auricolare 
                    Frequenza cuffia 20 - 20000  Hz
                    Colore del prodotto Nero, Blu ',
                'prezzo' => 39.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'CuffieGamingXbox.jpg'],
            
            
            ['nome' => 'Sony DualShock 4', 'idSottocategoria' => 20,
                'descrBreve' => 'Controller PS4', 'descrEstesa' => 'Piattaforme di gioco supportate PlayStation 4 
                 Interfaccia dispositivo Bluetooth 
                 Tecnologia di connessione Con cavo e senza cavo 
                 Colore del prodotto Nero ',
                'prezzo' => 69.99, 'percSconto' => 30, 'flagSconto' => 1, 'immagine' => 'ControllerPS4.jpg'],
            ['nome' => 'FIFA 20', 'idSottocategoria' => 20,
                'descrBreve' => 'Videogioco Sportivo', 'descrEstesa' => 'Classificazione PEGI 3 
                    Genere Sport 
                    Data di rilascio 27 settembre 2019 
                    Versione lingua Inglese, ITA 
                    Edizione gioco Basic',
                'prezzo' => 69.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'FIFA20PS4.jpg'],
            ['nome' => 'Sony PlayStation 4 Slim 500GB', 'idSottocategoria' => 20,
                'descrBreve' => 'PS4 Slim 500 GB', 'descrEstesa' => 'Piattaforma PlayStation 4 
                    Capacità memoria interna 500  GB
                    RAM installata 8192  MB
                    Numero di gamepad inclusi 1 
                    Videogioco incluso No 
                    Colore del prodotto Ne',
                'prezzo' => 299.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'PS4SLIM.jpg'],
            ['nome' => 'Sony PS4 1TB Bundle 3 Giochi', 'idSottocategoria' => 20,
                'descrBreve' => 'PS4 con 3 + 1 a scelta', 'descrEstesa' => 'Sony PS4 1TB + Horizon Zero Dawn + The Last of Us + Uncharted 4 Nero 1000 GB Wi-Fi',
                'prezzo' => 359.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'PS4MEGAOFFERTA.jpg'],
            ['nome' => 'Spider-Man', 'idSottocategoria' => 20,
                'descrBreve' => 'Gioco Azione', 'descrEstesa' => 'Classificazione PEGI 16 
                    Genere Azione 
                    Data di rilascio 7 settembre 2018 
                    Versione lingua Audio Italiano, testi italiano 
                    Edizione gioco Standard ',
                'prezzo' => 39.99, 'percSconto' => 60, 'flagSconto' => 1, 'immagine' => 'SpiderMan.jpg'],
            ['nome' => 'Sony Gold Wireless Headset', 'idSottocategoria' => 20,
                'descrBreve' => 'Cuffie per PS4', 'descrEstesa' => 'Stile di uso Padiglione auricolare
                 Colore del prodotto Rose Gold',
                'prezzo' => 99.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'CuffiePS4.jpg'],
            
            
            ['nome' => 'Nintendo Switch', 'idSottocategoria' => 21,
                'descrBreve' => 'Console Nintendo Switch', 'descrEstesa' => 'Dimensioni schermo 6.2  "
                    Touch screen 
                    Wi-Fi Sì 
                    Bluetooth Sì 
                    Colore del prodotto Nero, Blu, Rosso ',
                'prezzo' => 399.98, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'NintendoSwitch.jpg'],
            ['nome' => 'Pokémon: Let’s Go, Pikachu!', 'idSottocategoria' => 21,
                'descrBreve' => 'Gioco di Avventura', 'descrEstesa' => 'Gotta catch em all!',
                'prezzo' => 59.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'PokemonSwitch.jpg'],
            ['nome' => 'Nintendo Joy-Con Gamepad ', 'idSottocategoria' => 21,
                'descrBreve' => 'Controller Aggiuntivi', 'descrEstesa' => 'Piattaforme di gioco supportate Nintendo Switch 
                    Interfaccia dispositivo Bluetooth 
                    Tecnologia di connessione Senza fili ',
                'prezzo' => 79.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'JoyconSwitch.jpg'],
            ['nome' => 'Nintendo Switch Lite', 'idSottocategoria' => 21,
                'descrBreve' => 'Console Low-Cost', 'descrEstesa' => 'Dimensioni schermo 5.5  "
                    Touch screen Sì 
                    Wi-Fi Sì 
                    Bluetooth Sì 
                    Colore del prodotto Corallo ',
                'prezzo' => 219.99, 'percSconto' => 3, 'flagSconto' => 1, 'immagine' => 'SwitchLite.jpg'],
            ['nome' => 'Memoria Nintendo Sandisk 64 GB', 'idSottocategoria' => 21,
                'descrBreve' => 'Memoria 64 GB', 'descrEstesa' => 'Capacità 64  GB'
                . 'Tipo flash card MicroSDXC ',
                'prezzo' => 34.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'MemoriaSwitch.jpg'],
            ['nome' => 'Nintendo Custodia per Console', 'idSottocategoria' => 21,
                'descrBreve' => 'Custodia per Switch', 'descrEstesa' => 'Compatibilità marca Nintendo   
                    Compatibilità Switch   
                    Colore del prodotto Grigio   ',
                'prezzo' => 19.99, 'percSconto' => 40, 'flagSconto' => 1, 'immagine' => 'CustodiaSwitch.jpg'],
            
            
            ['nome' => 'Star Wars Jedi: Fallen Order - PC', 'idSottocategoria' => 22,
                'descrBreve' => 'Gioco Avventura - Fantascienza', 'descrEstesa' => 'Classificazione PEGI 16 
                    Genere Azione, avventura 
                    Data di rilascio 15 novembre 2019 
                    Versione lingua Italiano 
                    Edizione gioco CIAB ',
                'prezzo' => 59.99, 'percSconto' => 10, 'flagSconto' => 1, 'immagine' => 'StarWarsPC.jpg'],
            ['nome' => 'Need for Speed Heat - PC', 'idSottocategoria' => 22,
                'descrBreve' => 'Gioco Automobilistico', 'descrEstesa' => 'Classificazione PEGI 16 
                    Genere Guida 
                    Data di rilascio 8 novembre 2019 
                    Versione lingua Italiano 
                    Edizione gioco Standard',
                'prezzo' => 59.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'NFSPC.jpg'],
            ['nome' => 'Marvel Avengers - PC', 'idSottocategoria' => 22,
                'descrBreve' => 'Gioco Azione', 'descrEstesa' => 'Classificazione PEGI 16 
                    Genere Azione, avventura 
                    Data di rilascio 15 maggio 2020 
                    Versione lingua Italiano 
                    Edizione gioco Basic ',
                'prezzo' => 64.99, 'percSconto' => 25, 'flagSconto' => 1, 'immagine' => 'AvengersPC.jpg'],
            ['nome' => 'Apex Legends Lifeline Edition - PC', 'idSottocategoria' => 22,
                'descrBreve' => 'Gioco Sparatutto', 'descrEstesa' => 'Classificazione PEGI 16 
                    Genere Sparatutto online 
                    Data di rilascio 18 ottobre 2019 
                    Versione lingua Audio inglese, testi italiano 
                    Edizione gioco Speciale',
                'prezzo' => 19.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'ApexPC.jpg'],
            ['nome' => 'Lego jurassic world - PC', 'idSottocategoria' => 22,
                'descrBreve' => 'Gioco Avventura', 'descrEstesa' => 'Classificazione PEGI 7 
                    Genere Azione, avventura 
                    Data di rilascio Giugno 2015 
                    Versione lingua Italiano ',
                'prezzo' => 29.99, 'percSconto' => 40, 'flagSconto' => 1, 'immagine' => 'LegoJWPC.jpg'],    
            
            
            ['nome' => 'Trust Irus Telecamera di sicurezza', 'idSottocategoria' => 23,
                'descrBreve' => 'Telecamera di Sicurezza', 'descrEstesa' => 'Tipo di montaggio Parete 
                    Posizionamento supportato Interno 
                    Visione notturna Sì 
                    Risoluzione massima 1280 x 720  pixel
                    Wi-Fi Sì 
                    Collegamento ethernet LAN No ',
                'prezzo' => 79.99, 'percSconto' => 40, 'flagSconto' => 1, 'immagine' => 'SicurezzaVideocamera.jpg'],
            ['nome' => 'Guardian Technologies Sismalarm ', 'idSottocategoria' => 23,
                'descrBreve' => 'Sistema di Allarme', 'descrEstesa' => 'Decibel allarme 105  dB
                    Intervallo temperatura di funzionamento -10 - 60  °C
                    Supporto smartphone da remoto No 
                    Numero di dispositivi connessi simultaneamente (max) 1 ',
                'prezzo' => 99.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'AllarmeSmart.jpg'],
            ['nome' => 'D-Link Mini HD', 'idSottocategoria' => 23,
                'descrBreve' => 'Telecamera Smart', 'descrEstesa' => 'Tipo di montaggio Scrivania/Parete 
                    Posizionamento supportato Interno 
                    Visione notturna Sì 
                    Risoluzione massima 1280 x 720  pixel
                    Zoom digitale 4  X
                    Wi-Fi Sì 
                    Collegamento ethernet LAN No',
                'prezzo' => 59.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'SmartCam.jpg'],
            ['nome' => 'Xiaomi Telecamera di Sorveglianza', 'idSottocategoria' => 23,
                'descrBreve' => 'Smart Cam', 'descrEstesa' => 'Tipo di montaggio Ceiling/Wall/Desk 
                    Posizionamento supportato Interno 
                    Visione notturna Sì 
                    Wi-Fi Sì 
                    Collegamento ethernet LAN No ',
                'prezzo' => 44.99, 'percSconto' => 20, 'flagSconto' => 1, 'immagine' => 'SmartCam2.jpg'],
            ['nome' => 'Arlo Ultra', 'idSottocategoria' => 23,
                'descrBreve' => 'Sistema di Sicurezza', 'descrEstesa' => 'Tipo di montaggio Parete 
                    Posizionamento supportato Interno e esterno 
                    Visione notturna Sì 
                    Risoluzione massima 3840 x 2160  pixel
                    Zoom digitale 12  X
                    Wi-Fi Sì 
                    Collegamento ethernet LAN Sì ',
                'prezzo' => 499.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'ArloSicurezza.jpg'],
            
            
            ['nome' => 'Philips Hue White and Colour Ambiance', 'idSottocategoria' => 24,
                'descrBreve' => 'Illuminazione Smart', 'descrEstesa' => 'Numero di lampadine 3  bulb(s)
                 Colore del prodotto Bianco   ',
                'prezzo' => 189.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'PhilipsSmartLights.jpg'],
            ['nome' => 'Philips Hue White and Color Ambiance Luce Portatile Go', 'idSottocategoria' => 24,
                'descrBreve' => 'Luce Portatile Smart', 'descrEstesa' => 'Numero di lampadine 1  bulb(s)'
                . 'Colore del prodotto Bianco',
                'prezzo' => 79.90, 'percSconto' => 20, 'flagSconto' => 1, 'immagine' => 'PhilipsLuceSmart.jpg'],
            ['nome' => 'Xiaomi Mi Bedside Lamp 2', 'idSottocategoria' => 24,
                'descrBreve' => 'Luce Comodino Smart', 'descrEstesa' => 'Xiaomi Mi Bedside Lamp 2 lampada da tavolo Bianco 9 W LED',
                'prezzo' => 49.90, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'XiomiLuceSmart.jpg'],
            ['nome' => 'Philips Hue Lightstrip', 'idSottocategoria' => 24,
                'descrBreve' => 'Striscia LED Smart', 'descrEstesa' => 'Flusso luminoso 1600  lm
                    Colore variabile Si   
                    Effetto luce diffusa Si   
                    Comandato a distanza Si 
                    Materiali Sintetico ',
                'prezzo' => 79.95, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'PhilipsLEDSmart.jpg'],
            ['nome' => 'Philips Hue White and Color Ambiance Lampada a Barre', 'idSottocategoria' => 24,
                'descrBreve' => 'Lampada a Barre Smart', 'descrEstesa' => 'Numero di lampadine 1  bulb(s)'
                . 'Colore del prodotto Nero',
                'prezzo' => 129.99, 'percSconto' => 30, 'flagSconto' => 1, 'immagine' => 'PhilipsBarreSmart.jpg'],
            
            
            ['nome' => 'Nest Termostato Learning Thermostat', 'idSottocategoria' => 25,
                'descrBreve' => 'Termostato Smart', 'descrEstesa' => 'Tecnologia di connessione Wi-Fi 
                    Bluetooth Si 
                    Sensore luce ambientale Si 
                    Sensore di umidità Si 
                    Sensore di temperatura Si ',
                'prezzo' => 249.00, 'percSconto' => 40, 'flagSconto' => 1, 'immagine' => 'NestTermostato.jpg'],
            ['nome' => 'Netatmo NTH01-IT-EC', 'idSottocategoria' => 25,
                'descrBreve' => 'Termostato Smart', 'descrEstesa' => 'Il tuo Termostato Intelligente Netatmo si comanda a distanza da smartphone,
                 tablet o computer. Sei sulla strada del ritorno? Riavvia il riscaldamento prima del tuo arrivo.',
                'prezzo' => 179.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'TermostatoSmart.jpg'],
            ['nome' => 'Netatmo Valvole Termotatiche Wifi Intelligente', 'idSottocategoria' => 25,
                'descrBreve' => 'Valvole Termostatiche Smart', 'descrEstesa' => 'Modulo supplementare per il Termostato Intelligente e per il Kit di base per riscaldamento centralizzato',
                'prezzo' => 80.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'TermostatoValvolaSmart.jpg'],
            ['nome' => 'Hualans Termostato WiFi', 'idSottocategoria' => 25,
                'descrBreve' => 'Termostato Smart', 'descrEstesa' => 'Termostato intelligente Schermo LCD Touch Button Retroilluminato Programmabile con Alexa Google Home e Telefono APP-Bianco',
                'prezzo' => 43.99, 'percSconto' => 30, 'flagSconto' => 1, 'immagine' => 'TermoSmartAmazon.jpg'],
            
            
            ['nome' => 'Google Nest Mini 2', 'idSottocategoria' => 26,
                'descrBreve' => 'Cassa Audio Smart', 'descrEstesa' => 'Assistente virtuale Google Assistant 
                    Touch screen No 
                    Controllo vocale Sì 
                    Wi-Fi Sì 
                    Microfono incorporato Sì 
                    Modalità viva-voce Sì 
                    Colore del prodotto Antracite',
                'prezzo' => 59.00, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'GoogleMini.jpg'],
            ['nome' => 'Google Home', 'idSottocategoria' => 26,
                'descrBreve' => 'Assitente Cassa Sorround Intellingente', 'descrEstesa' => 'Assistente virtuale Google Assistant 
                    Touch screen Si 
                    Controllo vocale Si 
                    Wi-Fi Si 
                    Tipo di speaker 1-via 
                    Streaming video Si 
                    Microfono incorporato Si 
                    Modalità viva-voce Si ',
                'prezzo' => 99.90, 'percSconto' => 800, 'flagSconto' => 1, 'immagine' => 'GoogleHome.jpg'],
            ['nome' => 'Bose Home Speaker 300', 'idSottocategoria' => 26,
                'descrBreve' => 'Cassa Smart', 'descrEstesa' => 'Assistente virtuale Amazon Alexa 
                    Touch screen No 
                    Controllo vocale Sì 
                    Wi-Fi Sì 
                    Microfono incorporato Sì 
                    Colore del prodotto Grigio ',
                'prezzo' => 279.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'BoseCassaSmart.jpg'],
            ['nome' => 'JBL Link JBL Link 10 Smart', 'idSottocategoria' => 26,
                'descrBreve' => 'Cassa Smart', 'descrEstesa' => 'Assistente virtuale Google Assistant 
                    Touch screen No 
                    Controllo vocale Sì 
                    Wi-Fi Sì 
                    Microfono incorporato Sì 
                    Modalità viva-voce Sì 
                    Colore del prodotto Bianco',
                'prezzo' => 69.99, 'percSconto' => 0, 'flagSconto' => 0, 'immagine' => 'CassaJBLSmart.jpg'],
            ['nome' => 'Panasonic Microsistema Audio per la Casa', 'idSottocategoria' => 26,
                'descrBreve' => 'Sistema Audio Smart', 'descrEstesa' => 'Potenza in uscita (RMS) 20  W
                 Colore del prodotto Nero',
                'prezzo' => 129.99, 'percSconto' => 60, 'flagSconto' => 1, 'immagine' => 'SistemaAudioSmart.jpg'],

            
        ]);
        
        DB::table('users')->insert([     
            ['nome' => 'NomeAdmin', 'cognome' => 'CognomeAdmin', 'username' => 'adminadmin',
                'password' => Hash::make('G3BREUJw'), 'tipologiaUtente' => 'admin', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['nome' => 'NomeUser', 'cognome' => 'CognomeUser', 'username' => 'useruser',
                'email' => 'EmailUser@email.com', 'via' => 'ViaUser', 'citta' => 'CittaUser', 'cap' => '10000',
                'stato' => 'StatoUser', 'dataNascita' => '1990-01-18', 'occupazione' => 'Studente',
                'password' => Hash::make('G3BREUJw'), 'tipologiaUtente' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['nome' => 'NomeStaff', 'cognome' => 'CognomeStaff', 'username' => 'staffstaff',
                'password' => Hash::make('G3BREUJw'), 'tipologiaUtente' => 'staff', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
        ]);
        
        
    }
}
