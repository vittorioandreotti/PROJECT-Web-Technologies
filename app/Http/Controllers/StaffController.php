<?php

namespace App\Http\Controllers;

use App\Models\Resources\Product;
use App\Http\Requests\prodRequest;
use App\Models\Staff;


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
            $product=$this->_staffModel->getProduct($id);
        return view ('prod/editProduct')
                    ->with('prod', $product);
    }
}
