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
    
    /*Mostra homepage del sito*/
    public function showHome() {
        return view('home');
    }
    
    /**
     * Mostra la prima pagina del catalogo senza aver selezionato alcuna categoria top
     *
     * @return vista "catalog" con vettore delle categorie Top necessarie per il menu laterale +
     *         totalità dei prodotti da visualizzare
     */
    public function showCatalog1() {
        $topCategories = $this->catalog->getTopCategories();

        $products = $this->catalog->getProducts($topCategories->map->only(['codCat']), 4, 'asc');
        return view('catalog')
                        ->with('topCategories', $topCategories)
                        ->with('products', $products);
                        
    }
    
    
    /**
     * Mostra la pagina del catalogo dopo aver selezionato una categoria Top
     * @param $topCodCat: codice della macrocategoria selezionata
     * @return vista "catalog" con vettore delle categorie Top e delle sottocategorie necessarie per il menu laterale +
     *         prodotti appartenenti alla categoria selezionata 
     */
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
    /**
     * Ritorna la vista del catalogo a cui vengono passate le categorie top e le sottocategorie e l'insieme dei prodotti
     * da visualizziare dopo aver scelto la sottocategoria
     * @param $topCodCat: codice della macrocategoria selezionata
     * @param $codCat: codice della sottocategoria selezionata
     * @return vista catalogo con insieme delle categorie top, sottocategorie, categoria selezionata, sottocategoria selezionata
     *  e prodotti della sottocategoria selezionata
     */
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
    /**
     * 
     * @param $topCodCat: codice categoria top selezionata
     * @param $codCat: codice sottocategoria selezionata
     * @param $codProd: codice prodotto selezionato
     * @return vista della pagina del prodotto a cui viene passato l'insieme delle categorie top, sottocategorie, categoria selezionata, sottocategoria selezionata
     *  e prodotto corrisponde a $codProd
     */
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
    
    /**
     * 
     * @param $topCodCat: codice della macrocategoria selezionata
     * @param $codCat: codice della sottocategoria selezionata
     * @param SearchProductRequest $request: contenuto della barra di ricerca
     * @return vista catalogo con insieme delle categorie top, sottocategorie, categoria selezionata, sottocategoria selezionata
     *  e prodotti della sottocategoria selezionata che hanno nella descrizione estesa il termine contenuto in $request
     */
    
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
