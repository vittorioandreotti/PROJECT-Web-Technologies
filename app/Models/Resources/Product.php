<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table= "prodotto";
    protected $primaryKey = 'codProd';

    // prodId non modificabile da un HTTP Request (Mass Assignment)
    protected $guarded = ['codProd'];
    public $timestamps = false;
    
    /*Metodo che calcola il prezzo del prodotto tenendo conto di un eventuale sconto*/
    public function getPrice() {
        $prezzo= $this->prezzo;
        if ($this->sconto==true) {
            $sconto = ($prezzo * $this->percSconto) / 100;
            $prezzo = round($prezzo - $sconto, 2);
        }
        return $prezzo;
    }
    
    // Realazione One-To-One con Categoria
    /*Permette di ricavare la tupla della tabella 'categoria' dal codCat di un certo prodotto*/
    public function prodCat() {
        return $this->hasOne(Category::class, 'codCat', 'codCat');
    }
}
