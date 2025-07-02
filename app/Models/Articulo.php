<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Articulo extends Model
{
    protected $table = "articulos";

    public function usuario(): BelongsTo{
        return $this->belongsTo(User::class, "usuario_id", "id");
    }

    public function etiquetas(): BelongsToMany{
        return $this->belongsToMany(Etiqueta::class, "articulo_etiqueta", "articulo_id", "etiqueta_id");
    }

    public function scopeOrdernarPorFecha($query){
        return $query->orderBy('created_at');
    }
}
