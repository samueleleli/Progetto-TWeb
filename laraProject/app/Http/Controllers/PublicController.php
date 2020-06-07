<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Catalog;

class PublicController extends Controller {
    
    protected $_catalogModel;
    use AuthenticatesUsers;
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
        
        $search = $request->get('search');
        if(!is_null($search)){
          if(!is_null(auth()->user()))
          { 
            //se è un utente registrato  
            $role = auth()->user()->tipologiaUtente; //ottengo il livello
            if($role == "user")
            {
              //se l'utente è di livello 1  
              $prods = $this->_catalogModel->getProds($request->get('search')); //filtro dati
            }
          }
          else
          {
            //nel caso non è un utente registrato              
            $prods = $this->_catalogModel->getProds($request->get('search')); //filtro dati
          }
        }
        
        
        
        return view('catalog')
                        ->with('searchvalue',$search)
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

        $search = $request->get('search');
        if(!is_null($search)){
          if(!is_null(auth()->user()))
          { 
            //se è un utente registrato  
            $role = auth()->user()->tipologiaUtente; //ottengo il livello
            if($role == "user")
            {
              //se l'utente è di livello 1  
              $prods = $this->_catalogModel->getProdsByCatSearch([$catId],$request->get('search')); //filtro dati
            }
          }
          else
          {
            //nel caso non è un utente registrato              
            $prods = $this->_catalogModel->getProdsByCatSearch([$catId],$request->get('search')); //filtro dati
          }
        }
         
        return view('catalog')
                        ->with('route',$route)
                        ->with('searchvalue',$search)
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
        
        $search = $request->get('search');
        if(!is_null($search)){
          if(!is_null(auth()->user()))
          { 
            //se è un utente registrato  
            $role = auth()->user()->tipologiaUtente; //ottengo il livello
            if($role == "user")
            {
              //se l'utente è di livello 1  
              $prods = $this->_catalogModel->getProdsBySubCatSearch($sotCatId,$catId,$request->get('search'),3); //filtro dati
            }
          }
          else
          {
            //nel caso non è un utente registrato              
            $prods = $this->_catalogModel->getProdsBySubCatSearch($sotCatId,$catId,$request->get('search'),3); //filtro dati
          }
        }
        
        return view('catalog')
                        ->with('route',$route)
                        ->with('searchvalue',$search)
                        ->with('categories', $cats)
                        ->with('selectedCat', $selCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods)
                        ->with('flagpub',$flagPub)
                        ->with('cat',$catId)
                        ->with('subcat',$sotCatId);
    }
}
