<?php

namespace App\Http\Controllers;

use App\Models\Resources\Product;
use App\Http\Requests\SearchProductRequest;
use App\Models\Catalog;
use Illuminate\Support\Facades\Log;

class PublicController extends Controller
{
       protected $catalog;
    
    /*Costruttore*/
    public function __construct() {
        $this->catalog=new Catalog();
    }
    
    public function showHome() {
        return view('home');
    }
    
    public function showCatalog1() {
        $topCategories = $this->catalog->getTopCategories();

        $products = $this->catalog->getProducts($topCategories->map->only(['codCat']), 4, 'asc');
        return view('catalog')
                        ->with('topCategories', $topCategories)
                        ->with('products', $products);
                        
    }
    
    public function showCatalog2($topCodCat) {

        //Categorie Top
        $topCategories = $this->catalog->getTopCategories();

        //Categoria Top selezionata
        $selectedTopCategory = $topCategories->where('codCat', $topCodCat)->first();

        // Sottocategorie
        $subCategories = $this->catalog->getSubCategories([$topCodCat]);
                        
        //Prodotti in sconto della categoria Top selezionata, ordinati per sconto decrescente 
        $products = $this->catalog->getProducts([$topCodCat], 4, 'asc');

        return view('catalog')
                        ->with('topCategories', $topCategories)
                        ->with('selectedTopCategory', $selectedTopCategory)
                        ->with('subCategories', $subCategories)
                        ->with('products', $products);
    }
    
    public function showCatalog3($topCodCat, $codCat) {

        //Categorie Top
        $topCategories = $this->catalog->getTopCategories();

        //Categoria Top selezionata
        $selectedTopCategory = $topCategories->where('codCat', $topCodCat)->first();

        // Sottocategorie
        $subCategories = $this->catalog->getSubCategories([$topCodCat]);
        
        $selectedSubCategory=$subCategories->where('codCat',$codCat)->first();

        // Prodotti della categoria selezionata
       $products = $this->catalog->getProducts([$codCat],4,'asc');
       Log::info($products);

        return view('catalog')
                        ->with('topCategories', $topCategories)
                        ->with('selectedTopCategory', $selectedTopCategory)
                        ->with('subCategories', $subCategories)
                        ->with('products', $products)
                        ->with('selectedSubCategory', $selectedSubCategory);
    }
    
    public function showProduct($topCodCat, $codCat, $codProd) {

        //Categorie Top
        $topCategories = $this->catalog->getTopCategories();

        //Categoria Top selezionata
        $selectedTopCategory = $topCategories->where('codCat', $topCodCat)->first();

        // Sottocategorie
        $subCategories = $this->catalog->getSubCategories([$topCodCat]);
        
        $selectedSubCategory=$subCategories->where('codCat',$codCat)->first();

        // Prodotti della categoria selezionata
       $products = $this->catalog->getProducts([$codCat],4,'asc');
       
       $selectedProduct=Product::find($codProd);
       
       /*$selectedProduct = $products->where('codProd',$codProd)->first();*/
       
       Log::info($selectedProduct);

        return view('product')
                        ->with('topCategories', $topCategories)
                        ->with('selectedTopCategory', $selectedTopCategory)
                        ->with('subCategories', $subCategories)
                        ->with('products', $products)
                        ->with('selectedSubCategory', $selectedSubCategory)
                        ->with('selectedProduct',$selectedProduct);
    }
    
     public function filterProduct($topCodCat, $codCat, SearchProductRequest $request) {

        //Categorie Top
        $topCategories = $this->catalog->getTopCategories();

        //Categoria Top selezionata
        $selectedTopCategory = $topCategories->where('codCat', $topCodCat)->first();

        // Sottocategorie
        $subCategories = $this->catalog->getSubCategories([$topCodCat]);
        
        $selectedSubCategory=$subCategories->where('codCat',$codCat)->first();

        Log::info($request);
        $descLong=$request->validated()['search'];
        Log::info($descLong);
        // Prodotti della categoria selezionata
       $products = $this->catalog->getProductByDescLong($descLong,[$codCat],4,'asc');
       Log::info($products);
       
        return view('catalog')
                        ->with('topCategories', $topCategories)
                        ->with('selectedTopCategory', $selectedTopCategory)
                        ->with('subCategories', $subCategories)
                        ->with('products', $products)
                        ->with('selectedSubCategory', $selectedSubCategory);
    }
}
