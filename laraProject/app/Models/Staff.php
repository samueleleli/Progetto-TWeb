<?php

namespace App\Models;

use App\Models\Resources\SubCategory;
use App\Models\Resources\Product;

class Staff {
    
    public function getProdsCats() {
        
        foreach(SubCategory::all() as $category) { 
          $Allcategory = $category;
        }
        return $Allcategory;
    }

}