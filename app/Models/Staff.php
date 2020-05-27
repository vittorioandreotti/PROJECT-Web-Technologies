<?php

namespace App\Models;

use App\Models\Resources\Category;


class Staff {

    public function getProdsCats() {
        return Category::where('codPar', '!=', 0)->get();
    }

}
