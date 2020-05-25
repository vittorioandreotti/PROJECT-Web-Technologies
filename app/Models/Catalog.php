<?php

namespace App\Models;

use App\Models\Resources\Category;
use App\Models\Resources\Product;


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
        /*Metodo per ordinare i prodotti in ordine alfabetico*/
        if (!is_null($order)) {
            $product = $product->orderBy('nome', $order);
        }
        return $product->paginate($paged);
    }
    
}
