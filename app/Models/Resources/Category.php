<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'codCat';
    public $timestamps = false;
    protected $fillable = [
        'name','desc'
    ];
}
