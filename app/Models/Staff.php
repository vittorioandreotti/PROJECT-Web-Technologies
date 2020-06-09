<?php

namespace App\Models;

use App\Models\Resources\Product;
use App\Models\Resources\Category;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model{
    /**
     * Metodo per estrarre quelle categorie che non sono categorie top
     * @return Insieme delle categorie che non sono top
     */
    public function getProdsCats() {
        return Category::where('codPar', '!=', 0)->get();
    }
    
    /**
     * Preleva il prodotto che ha un codice uguale a $id
     * @param $id: id del prodotto
     * @return Prodotto con codProd=$id
     */
    public function getProduct($id) {
        return Product::where('codProd','=',$id)->get()->first();
    }
    
    /**
     * Estrae i prodotti e li pagina con un eventuale ordinamento
     * @param $paged: numero di elementi per pagina
     * @param $order: tipologia di ordinamento ('asc', 'desc')
     * @return Ritorna l'insieme dei prodotti paginati ed eventualmente ordinati
     */
    public function getProducts($paged, $order=null) {
        $products=Product::all();
         if (!is_null($order)) {
            $products = $products->orderBy('codPar', $order);
        }
        return $products->paginate($paged); 
    }
    
    /**
     * Estrae le macrocategorie dalla tabella Categoria
     * @return macrocategorie del catalogo
     */
     public function getTopCategories() {
        return Category::where('codPar', '=', 0)->get();
    }

}
