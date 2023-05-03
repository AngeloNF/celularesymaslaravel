<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class categorias extends Model
{
    use HasFactory;

    public function productos(): HasMany
    {
        return $this->hasMany(productos::class,"categoria_id","id");
    }
}
