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
            ['idSottocategoria' => 3, 'sottocategoria' => 'Accessori', 'idCategoria' => 1],
            ['idSottocategoria' => 4, 'sottocategoria' => 'Stampanti', 'idCategoria' => 1],
            ['idSottocategoria' => 5, 'sottocategoria' => 'Dispositivi di Memoria', 'idCategoria' => 1],
            ['idSottocategoria' => 6, 'sottocategoria' => 'Reti e Connettività', 'idCategoria' => 1],
            
            ['idSottocategoria' => 7, 'sottocategoria' => 'Smartphone', 'idCategoria' => 2],
            ['idSottocategoria' => 8, 'sottocategoria' => 'Tablet', 'idCategoria' => 2],
            ['idSottocategoria' => 9, 'sottocategoria' => 'Accessori', 'idCategoria' => 2],
            
            ['idSottocategoria' => 10, 'sottocategoria' => 'TV', 'idCategoria' => 3],
            ['idSottocategoria' => 11, 'sottocategoria' => 'Decoder', 'idCategoria' => 3],
            ['idSottocategoria' => 12, 'sottocategoria' => 'Sound System', 'idCategoria' => 3],
            ['idSottocategoria' => 13, 'sottocategoria' => 'Lettori Multimediali', 'idCategoria' => 3],
            ['idSottocategoria' => 14, 'sottocategoria' => 'Accessori TV', 'idCategoria' => 3],
            
            ['idSottocategoria' => 15, 'sottocategoria' => 'Fotocamere', 'idCategoria' => 4],
            ['idSottocategoria' => 16, 'sottocategoria' => 'Videocamere', 'idCategoria' => 4],
            ['idSottocategoria' => 17, 'sottocategoria' => 'Obiettivi', 'idCategoria' => 4],
            ['idSottocategoria' => 18, 'sottocategoria' => 'Accessori', 'idCategoria' => 4],
            
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
            
        ]);
        
        DB::table('users')->insert([     
            ['nome' => 'Mario', 'cognome' => 'Rossi', 'username' => 'adminadmin',
                'password' => Hash::make('adminadmin'), 'tipologiaUtente' => 'admin', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")]
        ]);
        
        
    }
}
