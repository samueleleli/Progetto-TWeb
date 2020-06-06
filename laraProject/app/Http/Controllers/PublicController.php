<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Catalog;

class PublicController extends Controller {
    
    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog;
    }

    public function showCatalog(Request $request) {
        $route = request()->route()->getName();
        
        if($route=='catalog1') 
            $flagPub=true;
        else 
            $flagPub=false;
        //Categorie
        $cats = $this->_catalogModel->getCats();
        
        //Prodotti di tutte le categorie
        $prods = $this->_catalogModel->getProdsByCat($cats->map->only(['idCategoria']));
        
        if(!is_null($request->get('search'))){
            $prods = $this->_catalogModel->getProds($request->get('search'));
        }
        
        return view('catalog')
                        ->with('searchvalue',$request->get('search'))
                        ->with('categories', $cats)
                        ->with('products', $prods) 
                        ->with('flagpub',$flagPub)
                        ->with('route',$route);
    }

    public function showCategories($catId,Request $request) {
        $route = request()->route()->getName();
        
        if($route=='catalog2') 
            $flagPub=true;
        else
            $flagPub=false;
        //Categorie
        $cats = $this->_catalogModel->getCats();
        
        //Categoria selezionata
        $selCat = $cats->where('idCategoria', $catId)->first();

        //Sottocategorie
        $subCats = $this->_catalogModel->getSubCatsById([$catId]);
        
        //Prodotti della categoria selezionata 
        $prods = $this->_catalogModel->getProdsByCat([$catId], 3);

        if(!is_null($request->get('search'))){
            $prods = $this->_catalogModel->getProdsByCatSearch([$catId],$request->get('search'));
        }
        return view('catalog')
                        ->with('route',$route)
                        ->with('searchvalue',$request->get('search'))
                        ->with('categories', $cats)
                        ->with('selectedCat', $selCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods)
                        ->with('flagpub',$flagPub)
                        ->with('cat',$catId);
        }

    public function showSubCategories($catId, $sotCatId,Request $request) {
        $route = request()->route()->getName();
        
        if($route=='catalog3') 
            $flagPub=true;
        else 
            $flagPub=false;
        //Categorie
        $cats = $this->_catalogModel->getCats();

        //Categoria selezionata
        $selCat = $cats->where('idCategoria', $catId)->first();

        //Sottocategorie
        $subCats = $this->_catalogModel->getSubCatsById([$catId]);

        //Prodotti della sottocategoria selezionata
        $prods = $this->_catalogModel->getProdsBySubCat([$sotCatId]);
        
        if(!is_null($request->get('search'))){
            $prods = $this->_catalogModel->getProdsBySubCatSearch($sotCatId,$catId,$request->get('search'),3);
        }
        
        return view('catalog')
                        ->with('route',$route)
                        ->with('searchvalue',$request->get('search'))
                        ->with('categories', $cats)
                        ->with('selectedCat', $selCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods)
                        ->with('flagpub',$flagPub)
                        ->with('cat',$catId)
                        ->with('subcat',$sotCatId);
    }
}
