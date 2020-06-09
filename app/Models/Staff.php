<?php

namespace App\Models;

use App\Models\Resources\Product;
use App\Models\Resources\Category;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model{
    public function getProdsCats() {
        return Category::where('codPar', '!=', 0)->get();
    }
    public function getProduct($id) {
        return Product::where('codProd','=',$id)->get()->first();
    }
    
    public function getProducts($paged, $order=null) {
        $products=Product::all();
         if (!is_null($order)) {
            $products = $products->orderBy('codPar', $order);
        }
        return $products->paginate($paged); 
    }
     public function getTopCategories() {
        return Category::where('codPar', '=', 0)->get();
    }

}
