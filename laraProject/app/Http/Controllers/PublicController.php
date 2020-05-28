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
        
        //Prodotti di tutte le categorie
        $prods = $this->_catalogModel->getProdsByCat($cats->map->only(['idCategoria']), 5);

        return view('catalog')
                        ->with('categories', $cats)
                        ->with('products', $prods);
    }

    public function showCategories($catId) {

        //Categorie
        $cats = $this->_catalogModel->getCats();

        //Categoria selezionata
        $selCat = $cats->where('idCategoria', $catId)->first();

        //Sottocategorie
        $subCats = $this->_catalogModel->getSubCatsById([$catId]);
        
        //Prodotti della categoria selezionata 
        $prods = $this->_catalogModel->getProdsByCat([$catId]);

        return view('catalog')
                        ->with('categories', $cats)
                        ->with('selectedCat', $selCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
        }

    public function showSubCategories($catId, $sotCatId) {

        //Categorie
        $cats = $this->_catalogModel->getCats();

        //Categoria selezionata
        $selCat = $cats->where('idCategoria', $catId)->first();

        //Sottocategorie
        $subCats = $this->_catalogModel->getSubCatsById([$catId]);

        //Prodotti della sottocategoria selezionata
        $prods = $this->_catalogModel->getProdsByCat([$sotCatId]);

       return view('catalog')
                        ->with('categories', $cats)
                        ->with('selectedCat', $selCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }
    
}
