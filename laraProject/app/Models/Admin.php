<?php

namespace App\Models;

use App\Models\Resources\Category;
use App\Models\Resources\Product;

class Admin {
    
    //NON SERVER PER L'ADMIN MA PER L'UTENTE STAFF
    public function getProdsCats() {
        return Category::where('parId', '!=', 0)->get();
    }

}
