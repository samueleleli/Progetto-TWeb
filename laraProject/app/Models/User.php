<?php

namespace App\Models;

use App\Models\Resources\Category;
use App\Models\Resources\Product;

class User {
    
    //NON SERVER PER L'UTENTE USER MA PER L'UTENTE STAFF
    public function getProdsCats() {
        return Category::where('parId', '!=', 0)->get();
    }

}
