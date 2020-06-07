<?php

namespace App\Http\Controllers;

use App\Models\Resources\Product;
use App\Models\Resources\Category;
use App\Http\Requests\prodRequest;
use App\Models\Staff;
use App\Http\Requests\EditProductRequest;
use App\Http\Requests\DeleteProductsRequest;
use App\Http\Requests\InsertCategoryRequest;
use App\Http\Requests\InsertSubCategoryRequest;
use Illuminate\Support\Facades\Log;


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
        return view('product.insertProd')
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
            $destinationPath = public_path() . '/img/products';
            $image->move($destinationPath, $imageName);
        };
        return response()->json(['redirect' => route('staff')]);
        
    }
    
    public function editProduct($id) {
        $product=new Product;
        $product=$this->_staffModel->getProduct($id);
        return view ('product.editProduct')
                    ->with('prod', $product);
    }
    public function storeEditProduct(EditProductRequest $request,$id){
        $product=$this->_staffModel->getProduct($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $destinationPath = public_path() . '/images/products';
            $image->move($destinationPath, $imageName);
            $product->image = $imageName;
        } 
        $product->update($request->validated());
        $product->save();
        return response()->json(['redirect' => route('staff')]);
    }
    
    public function deleteProduct($id) {
        $product=new Product;
        $product=$this->_staffModel->getProduct($id);
        $selectedTopCategory = Category::find($product->prodCat->codPar);
        return view('product.deleteProduct')
                ->with('product', $product)
                ->with('selectedTopCategory', $selectedTopCategory);
        
    }
    
    public function storeDeleteProduct($id){
        $product=$this->_staffModel->getProduct($id);
        $product->delete();
        return redirect()->route('catalog1');
    }
    
    public function manageProducts() {
        $products=Product::where('codCat','!=','3000')->paginate(10);
        return view('product.manageProduct')
                    ->with('products', $products);
    }
    
    public function storeManageProducts(DeleteProductsRequest $request) {
        /*Estrae ogni prodotto in funzione del codice prodotto contenuto nell'array delle checkbox selezionate e lo elimina*/
        foreach ($request->input('products') as $r) {
          $product=$this->_staffModel->getProduct($r);
          $product->delete();
        }
        return redirect()->route('staff');
    }
    
    public function insertCategory(){
        $prodCats = $this->_staffModel->getTopCategories()->pluck('name', 'codCat');
        return view('staff.insertCategory')
               ->with('cats',$prodCats);
        
    }
    
    public function storeCategory(InsertCategoryRequest $request){
        $category= new Category();
        $category->fill($request->validated());
        $category->codPar =0;
        $category->save();
        return redirect()->route('staff');
        
    }
    public function storeSubCategory(InsertSubCategoryRequest $request){
        $category= new Category();
        $category->fill($request->validated());
        $category->codPar = $request->input('codCat');
        $category->save();
        return redirect()->route('staff');
    }

}


