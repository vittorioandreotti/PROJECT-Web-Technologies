<?php

namespace App\Http\Controllers;

use App\Models\Resources\Product;
use App\Models\Resources\Category;
use App\Http\Requests\prodRequest;
use App\Models\Staff;
use App\Http\Requests\EditProductRequest;


class StaffController extends Controller
{
    protected $_staffModel;
    
    public function __construct() {
        $this->middleware('can:isStaff');
        $this->_staffModel = new Staff;
    }

    public function index() {
        return view('staff');
    }
    public function addProduct() {
        $prodCats = $this->_staffModel->getProdsCats()->pluck('name', 'codCat');
        return view('prod.insertProd')
                        ->with('cats', $prodCats);
    }

    public function storeProduct(prodRequest $request) {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }

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
    
    public function editProduct($id) {
        $product=new Product;
        $product=$this->_staffModel->getProduct($id);
        return view ('prod/editProduct')
                    ->with('prod', $product);
    }
    public function storeEditProduct(EditProductRequest $request,$id){
        $product=$this->_staffModel->getProduct($id);
        $product->update($request->validated());
        $product->save();
                return redirect()->action('StaffController@index');
    }
    
    public function deleteProduct($id) {
        $product=new Product;
        $product=$this->_staffModel->getProduct($id);
        $selectedTopCategory = Category::find($product->prodCat->codPar);
        return view('prod/deleteProduct')
                ->with('product', $product)
                ->with('selectedTopCategory', $selectedTopCategory);
        
    }
    
    public function storeDeleteProduct($id){
        $product=$this->_staffModel->getProduct($id);
        $product->delete();
        return redirect()->route('catalog1');
    }
}


