<?php

namespace App\Models;

use App\Models\Resources\SubCategory;
use App\Models\Resources\Category;
use App\Models\Resources\Product;

class Staff {
    
    public function getProdsCats() {
        
        foreach(SubCategory::all() as $category) { 
          $Allcategory = $category;
        }
        return $Allcategory;
    }
    
    public function getProdData($id) {
        $prod = Product::where('idProdotto',$id)->first();
        return $prod;
    }
    
    public function getCats() {
        
        foreach(Category::all() as $category) { 
          $Allcategory = $category;
        }
        return $Allcategory;
    }
}