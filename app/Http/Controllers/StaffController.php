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
    
    /**
     * 
     * @return ritorna la vista con cui lo staff può modificare un prodotto
     */
    public function addProduct() {
        $prodCats = $this->_staffModel->getProdsCats()->pluck('name', 'codCat');/*si prelevano solo il nome e il relativo codice della categoria*/
        return view('product.insertProd')
                        ->with('cats', $prodCats);
    }

    /**
     * 
     * @param prodRequest $request: contenuto della form contenente i dati per inserire il prodotto
     * @return vista della home dello staff dopo aver inserito il prodotto nel catalogo
     */
    public function storeProduct(prodRequest $request) {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();//permette di estrarre il nome originale della foto caricata
        } else {
            $imageName = NULL;
        }

        $product = new Product;
        $product->fill($request->validated());
        $product->image = $imageName;
        $product->save();

        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/img/products';/*l'immagine caricata viene memorizzata dentro la cartella contenente tutte le altre dei prodotti*/
            $image->move($destinationPath, $imageName);
        };
        return response()->json(['redirect' => route('staff')]);
        
    }
    
    /**
     * 
     * @param $id: id del prodotto da modificare
     * @return pagina del profilo dello staff dopo aver modificato il prodotto d'interesse
     */
    public function editProduct($id) {
        $product=$this->_staffModel->getProduct($id);
        return view ('product.editProduct')
                    ->with('prod', $product);
    }
    public function storeEditProduct(EditProductRequest $request,$id){
        $product=$this->_staffModel->getProduct($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $destinationPath = public_path() . '/img/products';
            $image->move($destinationPath, $imageName);
            $product->image = $imageName;
        } 
        $product->update($request->validated());
        $product->save();
        return response()->json(['redirect' => route('staff')]);
    }
    
    /**
     * 
     * @param $id: id del prodotto che si vuole cancellare
     * @return vista di riepilogo delle caratteristiche del prodotto che si vuole cancellare
     */
    public function deleteProduct($id) {
        $product=new Product;
        $product=$this->_staffModel->getProduct($id);
        $selectedTopCategory = Category::find($product->prodCat->codPar);
        return view('product.deleteProduct')
                ->with('product', $product)
                ->with('selectedTopCategory', $selectedTopCategory);
        
    }
    
    /**
     * 
     * @param $id: id del prodotto che si vuole cancellare
     * @return vista del catalogo 
     */
    public function storeDeleteProduct($id){
        $product=$this->_staffModel->getProduct($id);
        $product->delete();
        return redirect()->route('catalog1');
    }
    
    /**
     * 
     * @return vista con cui è possibile gestire i prodotti paginati in tabelle ognuna da 10 righe
     */
    public function manageProducts() {
        $products=Product::where('codCat','!=','3000')->paginate(10);
        return view('product.manageProduct')
                    ->with('products', $products);
    }
    
    /**
     * 
     * @param DeleteProductsRequest $request: vettore contenente i codice dei prodotti precedentemente selezionati mediante checkbox
     * @return pagina principale dello staff
     */
    public function storeManageProducts(DeleteProductsRequest $request) {
        /*Estrae ogni prodotto in funzione del codice prodotto contenuto nell'array delle checkbox selezionate e lo elimina*/
        foreach ($request->input('products') as $r) {
          $product=$this->_staffModel->getProduct($r);
          $product->delete();
        }
        return redirect()->route('staff');
    }
    
    /**
     * 
     * @return vista che consente di inserire una nuova categoria
     */
    public function insertCategory(){
        return view('staff.insertCategory');
    }
    
    /**
     * 
     * @param InsertCategoryRequest $request: valori degli elementi che sono stati inseriti
     * @return ritorna la pagina del profilo dello staff con il nuovo elemento inserito
     */
    public function storeCategory(InsertCategoryRequest $request){
        $category= new Category();
        $category->fill($request->validated());
        $category->codPar =0;
        $category->save();
        return response()->json(['redirect' => route('staff')]);
        
    }
    
    /**
     * 
     * @return vista che consente di inserire una nuova sottocategoria
     */
    public function insertSubCategory(){
        $prodCats = $this->_staffModel->getTopCategories()->pluck('name', 'codCat');
        return view('staff.insertSubCategory')
               ->with('cats',$prodCats);
        
    }
    
    /**
     * 
     * @param InsertSubCategoryRequest $request: valori degli elementi della form
     * @return ritorna la pagina principale dello staff
     */
    public function storeSubCategory(InsertSubCategoryRequest $request){
        $category= new Category();
        $category->fill($request->validated());
        $category->codPar = $request->input('codCat');
        $category->save();
        return response()->json(['redirect' => route('staff')]);
    }

}


