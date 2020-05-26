<?php

namespace App\Models;

use App\Models\Resources\Category;
use App\Models\Resources\SubCategory;
use App\Models\Resources\Product;

class Catalog {
    
    public function getCats() {
        return Category::all();
    }

    public function getSubCatsById($catId) {
        return SubCategory::whereIn('idCategoria', $catId)->get();
    }

    // Estrae i prodotti della categoria o della sottocategoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getProdsByCat($catId, $paged = 3, $order = null, $discounted = false) {

        $prods = Product::whereIn('idSottocategoria', $catId)
                ->orWhereHas('prodSubCat', function ($query) use ($catId) {
                        $query->whereIn('idCategoria', $catId);
        });
        if ($discounted) {
            $prods = $prods->where('flagSconto', true);
        }
        if (!is_null($order)) {
            $prods = $prods->orderBy('percSconto', $order);
        }
        return $prods->paginate($paged);
    }
}
