<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Etiqueta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitioController extends Controller
{
    public function inicio(){
        return view('inicio', [
            "etiquetas" => Etiqueta::all(),
            "articulos" => Articulo::ordernarPorFecha()->get()
        ]);
    }

    public function verArticulo($id){
        return view('articulo', [
            "registro" => Articulo::find($id)
        ]);
    }


    public function verArticulosDeEtiqueta($nombre){
        $registros = Etiqueta::nombre($nombre)->first()?->articulos;
        return view('etiquetas', [
            "articulos" => $registros
        ]);
    }

    public function busqueda(){
        return view('busqueda', [
            "nombre_personaje" => "La campeona de los precios bajos",
            "imagen_personaje" => "https://i.pinimg.com/736x/ac/b5/de/acb5de161d451113a6ed182bf5c5e2f1.jpg",
        ]);
    }
}
