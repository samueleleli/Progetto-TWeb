<?php

namespace App\Models;

use App\Models\Resources\SubCategory;
use App\Models\Resources\Product;

class Staff {
    
    public function getProdsCats() {
        return SubCategory::where('idSottocategoria', '!=', 0)->get();
    }

}