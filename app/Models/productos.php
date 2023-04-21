<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class productos extends Model
{
    use HasFactory;

    public function Categoria(): HasOne
    {
        return $this->hasOne(categorias::class, 'id',"categoria_id");
    }
    

}
