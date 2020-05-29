<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    
    protected $table = 'prodotto';
    protected $primaryKey = 'idProdotto';
    
    // prodId non modificabile da un HTTP Request (Mass Assignment)
    protected $guarded = ['idProdotto'];
    public $timestamps = false;
    
    public function getPrice($withDiscount = false) {
        $price = $this->prezzo;
        if (true == ($this->flagSconto) && true == $withDiscount) {
            $discount = ($price * $this->percSconto) / 100;
            $price = round($price - $discount, 2);
        }
        return $price;
    }

    // Relazione One-To-One con SubCategory
    public function prodSubCat() {
        return $this->hasOne(SubCategory::class, 'idSottocategoria', 'idSottocategoria');
    }
          
}
