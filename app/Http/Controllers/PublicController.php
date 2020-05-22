<?php

namespace App\Http\Controllers;

use App\Models\Catalog;

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
        $selectedTopCategories = $topCategories->where('codCat', $topCodCat);

        // Sottocategorie
        $subCategories = $this->catalog->getSubCategories([$topCodCat]);
                        
        //Prodotti in sconto della categoria Top selezionata, ordinati per sconto decrescente 
        $products = $this->catalogModel->getProducts([$topCodCat], 4, 'asc');

        return view('catalog')
                        ->with('topCategories', $topCategories)
                        ->with('selectedTopCategories', $selectedTopCategories)
                        ->with('subCategories', $subCategories)
                        ->with('products', $products);
    }
    
    public function showCatalog3($topCodCat, $codCat) {

        //Categorie Top
        $topCategories = $this->catalog->getTopCategories();

        //Categoria Top selezionata
        $selectedTopCategories = $topCats->where('codCat', $topCodCat);

        // Sottocategorie
        $subCategories = $this->catalog->getSubCategories([$topCodCat]);

        // Prodotti della categoria selezionata
       $products = $this->catalog->getProducts([$codCat]);

        return view('catalog')
                        ->with('topCategories', $topCategories)
                        ->with('selectedTopCategories', $selectedTopCategories)
                        ->with('subCategories', $subCategories)
                        ->with('products', $products);
    }
}
