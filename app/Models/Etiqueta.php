<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Etiqueta extends Model
{
    protected $table = "etiquetas";


    public function articulos(): BelongsToMany{
        return $this->belongsToMany(Articulo::class, "articulo_etiqueta", "etiqueta_id", "articulo_id");
    }

    public function scopeNombre($query, $nombre){
        return $query->where('nombre', $nombre);
    }
}
