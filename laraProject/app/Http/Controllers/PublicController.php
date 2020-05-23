<?php

namespace App\Http\Controllers;

use App\Models\Catalog;

class PublicController extends Controller {
    
    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog;
    }

    public function showCatalog() {

        //Categorie
        $cats = $this->_catalogModel->getCats();
        
        //Prodotti in sconto di tutte le categorie, ordinati per sconto decrescente
        //$prods = $this->_catalogModel->getProdsByCat($cats->map->only(['catId']), 3, 'desc', true);

        return view('catalog')
                        ->with('categories', $cats);
                        //->with('products', $prods);
    }

    public function showCategories($catId) {

        //Categorie
        $cats = $this->_catalogModel->getCats();

        //Categoria selezionata
        $selCat = $cats->where('catId', $catId)->first();

        // Sottocategorie
        $subCats = $this->_catalogModel->getSubCatsById([$catId]);
        
        //Prodotti in sconto della categoria selezionata, ordinati per sconto decrescente 
        //$prods = $this->_catalogModel->getProdsByCat([$catId], 3, 'desc', true);

        return view('catalog')
                        ->with('categories', $cats)
                        ->with('selectedCat', $selCat)
                        ->with('subCategories', $subCats);
                        //->with('products', $prods);
        }

    public function showSubCategories($catId, $sotCatId) {

        //Categorie
        $cats = $this->_catalogModel->getCats();

        //Categoria selezionata
        $selCat = $cats->where('catId', $catId)->first();

        // Sottocategorie
        $subCats = $this->_catalogModel->getSubCatsById([$catId]);

        // Prodotti
        $prods = $this->_catalogModel->getProdsByCat([$sotCatId]);

       return view('catalog')
                        ->with('categories', $cats)
                        ->with('selectedCat', $selCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }
    
}
