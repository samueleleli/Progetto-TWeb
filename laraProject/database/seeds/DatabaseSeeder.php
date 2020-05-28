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
            
            
        ]);
        
        DB::table('users')->insert([     
            ['nome' => 'NomeAdmin', 'cognome' => 'CognomeAdmin', 'username' => 'adminadmin',
                'password' => Hash::make('G3BREUJw'), 'tipologiaUtente' => 'admin', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['nome' => 'NomeUser', 'cognome' => 'CognomeUser', 'username' => 'useruser',
                'password' => Hash::make('G3BREUJw'), 'tipologiaUtente' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['nome' => 'NomeStaff', 'cognome' => 'CognomeStaff', 'username' => 'staffstaff',
                'password' => Hash::make('G3BREUJw'), 'tipologiaUtente' => 'staff', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
        ]);
        
        
    }
}
