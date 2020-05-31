<?php

namespace App\Models;

use App\Models\Resources\Product;
use App\Models\Resources\Category;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model{
    protected $table= "users";
    protected $primaryKey = 'id';
    
    protected $guarded = ['name'];
    
    public function getProdsCats() {
        return Category::where('codPar', '!=', 0)->get();
    }
    public function getProduct($id) {
        return Product::where('codProd','=',$id)->get()->first();
    }
    protected $fillable = ['name','surname','username', 'email','password','residence','birthday','job' ];
    
    public function getProducts($paged, $order=null) {
        $products=Product::all();
         if (!is_null($order)) {
            $products = $products->orderBy('codPar', $order);
        }
        return $products->paginate($paged);
        
    }
    

    
}
