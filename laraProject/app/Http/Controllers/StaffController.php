<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;

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

    public function addProduct() {
       
        $prodCats = $this->_staffModel->getProdsCats()->pluck('sottoCategoria', 'sottoCategoria');
        
        return view('product.insert')
                        ->with('cats', $prodCats);
    }

    public function storeProduct(NewProductRequest $request) {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }
        $catalog = new Catalog;
        $product = new Product;
        $product->fill($request->validated());
        $product->image = $imageName;
        $product->save();
        

        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/products';
            $image->move($destinationPath, $imageName);
        };

        return redirect()->action('StaffController@index');
    }

}
