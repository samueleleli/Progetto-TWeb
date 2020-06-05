<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;
use App\Models\Resources\Category;
use App\Models\Resources\SubCategory;
use App\Http\Requests\NewCategoryRequest;

class StaffController extends Controller {

    protected $_staffModel;

    public function __construct() {
        $this->middleware('can:isStaff');
        $this->_staffModel = new Staff;
    }

    public function index() {
        return view('staff');
    }
    
    public function menuStaff(){
        return view('product.modificaCat');
    }

    public function addProduct($id=-1) {
        $route = request()->route()->getName();
        $prodCats = $this->_staffModel->getProdsCats()->pluck('sottoCategoria', 'idsottoCategoria');
        if($route=='newproduct'){
            $flagAgg=false;
            return view('product.insert')
                        ->with('cats', $prodCats)
                        ->with('flagAgg', $flagAgg);
        }
        else{
            $prod = $this->_staffModel->getProdData($id);
            $flagAgg=true;
            return view('product.insert')
                        ->with('cats', $prodCats)
                        ->with('flagAgg', $flagAgg)
                        ->with('prod',$prod);        
        } 
                  
    }

    public function storeProduct(NewProductRequest $request) {
        
      
        $product = new Product;

        if ($request->hasFile('immagine')) {
            $image = $request->file('immagine');
            $imageName = $image->getClientOriginalName();
         } else {
            $imageName = NULL;
         }
                                
        $product->fill($request->validated());
        if($product->percSconto == 0){
            $product->flagSconto=0;
        }
        else{
            $product->flagSconto=1;
        }
        
        
        $route = request()->route()->getName();
        if($route == 'newproduct.store'){
               
         $product->immagine = $imageName;
         
         $product->save();
        }
        else {
            $oldPhoto = $request->oldPhoto;             
             if($oldPhoto!="void"){
                 if(!is_null($imageName)){
                     $product->immagine = $imageName;
                 }
                 else{
                     $product->immagine = $oldPhoto;                     
                 }
             }
             else{
                 $product->immagine = $imageName;
             }
            Product::find($request->id)->update($product->toArray());
   
        }
        if (!is_null($imageName)) {   
            $destinationPath = public_path() . '/images/products';
            $image->move($destinationPath, $imageName);
         }
        return response()->json(['redirect' => route('staff')]);
    }
    
    public function removeProduct($idProd){
        $prod = $this->_staffModel->getProdData($idProd);
        $imageName = $prod -> immagine;
        if(!is_null($imageName)){ 
            $file_path = public_path().'/images/products/'.$prod -> immagine;
            unlink($file_path);
        }
        Product::find($idProd)->delete();
        
        return redirect()->action('StaffController@index');
    }
    
    public function addCategory(){
        $prodCats = $this->_staffModel->getCats()->pluck('Categoria', 'idCategoria');
        return view('product.addCategory')->with('cats', $prodCats);
    }
    
    public function storeCategory(NewCategoryRequest $request){
        if($request->radioButton == 'categoria'){
            $category = new Category;
            $category->categoria = $request->categoria;
            $category->save();
            return response()->json(['redirect' => route('staff')]);
            
        } else if($request->radioButton == 'sottocategoria'){
            $subcategory = new SubCategory;
            $subcategory->sottocategoria = $request->categoria;
            $subcategory->idCategoria = $request->categorie;
            $subcategory->save();
            return response()->json(['redirect' => route('staff')]);
        }
    }

}
