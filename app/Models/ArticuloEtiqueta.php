<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticuloEtiqueta extends Model
{
    protected $table = "articulo_etiqueta";
    
    protected $fillable = ["articulo_id","etiqueta_id"];
}
