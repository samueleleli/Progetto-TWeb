<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model {
    
    protected $table = 'sottocategoria';
    protected $primaryKey = 'catId';
    public $timestamps = false;

    // Relazione One-To-One con Category
    /* Non sono ancora sicuro se ci servirà questa relazione uno a uno ma per sicurezza l'ho implementata
     * public function subCatToCat() {
        return $this->hasOne(Category::class, 'idCategoria', 'idCategoria');
    }*/
}
