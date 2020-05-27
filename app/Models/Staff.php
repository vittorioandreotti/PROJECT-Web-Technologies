<?php

namespace App\Models;

use App\Models\Resources\Category;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model{
    protected $table= "users";
    protected $primaryKey = 'id';
    
    protected $guarded = ['name'];
    
    public function getProdsCats() {
        return Category::where('codPar', '!=', 0)->get();
    }

}
