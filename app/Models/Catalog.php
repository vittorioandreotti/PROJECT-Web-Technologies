<?php

namespace App\Models;

use App\Models\Resources\Category;
use App\Models\Resources\Product;
use Illuminate\Support\Facades\Log;


class Catalog
{
    /*Metodo per prelevare tutte le macrocategorie*/
     public function getTopCategories() {
        return Category::where('codPar', 0)->get();
    }
    
    /*Metodo per prelevare tutte le sottocategorie
     */
    public function getSubCategories($codPar) {
        return Category::whereIn('codPar', $codPar)->get();
    }   
    
    /*Metodo per estrarre i prodotti della macrocategoria o sottocategoria*/
    public function getProducts($codCat, $paged, $order=null) {
        /*Metodo che consente di estrarre tutti i prodotti che hanno una categoria contenuta in $codCat oppure
         * che hanno una categoria che ha come padre quella che specifichiamo come $codCat
         */
        $product = Product::whereIn('codCat', $codCat)
                ->orWhereHas('prodCat', function ($query) use ($codCat) {
                        $query->whereIn('codPar', $codCat);
        });
        /*Ordina i prodotti in ordine alfabetico*/
        if (!is_null($order)) {
            $product = $product->orderBy('nome', $order);
        }
        return $product->paginate($paged);
    }
    
    /**
     * 
     * @param $descLong: descrizione estesa del prodotto
     * @param $codCat: codice della categoria selezionata
     * @param $paged: numero di elementi per pagina
     * @param $order: tipologia di ordinamento ('asc', 'desc')
     * @return prodotti eventualmente paginati e ordinati che hanno nella descrizione estesa il parametro $descLong
     */
    public function getProductByDescLong($descLong, $codCat, $paged, $order=null) {
        $product = Product::whereIn('codCat', $codCat)
                            ->where('descLunga', 'LIKE', '%'.$descLong.'%');
        /*Ordina i prodotti in ordine alfabetico*/
        if (!is_null($order)) {
            $product = $product->orderBy('nome', $order);
        }
        return $product->paginate($paged);
    }
}
