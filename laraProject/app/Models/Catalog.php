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

    // Estrae i prodotti della categoria $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getProdsByCat($catId, $paged = 5, $order = null, $discounted = false) {

        $prods = Product::whereHas('prodSubCat', function ($query) use ($catId) {
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
    
    // Estrae i prodotti della sottocategoria $subCatId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getProdsBySubCat($sotCatId, $paged = 3, $order = null, $discounted = false) {

        $prods = Product::whereIn('idSottocategoria', $sotCatId);
        if ($discounted) {
            $prods = $prods->where('flagSconto', true);
        }
        if (!is_null($order)) {
            $prods = $prods->orderBy('percSconto', $order);
        }
        return $prods->paginate($paged);
    }
    
    public function getProds($search,$paged = 5){
       $prods = Product::where('descrEstesa','LIKE','%'.$search."%");
       return $prods->paginate($paged);
    }
    
    public function getProdsByCatSearch($idCat,$search,$paged=3){
        $prods = Product::whereHas('prodSubCat', function ($query) use ($idCat) {
                        $query->whereIn('idCategoria', $idCat);
        })->where('descrEstesa','LIKE','%'.$search."%");
       return $prods->paginate($paged);
    }
    
    public function getProdsBySubCatSearch($idSubCat,$idCat,$search,$paged=3){
       $prods = Product::where('descrEstesa','LIKE','%'.$search."%")->where('idSottocategoria',$idSubCat);
       return $prods->paginate($paged);
    }
}
