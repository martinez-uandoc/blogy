<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitioController extends Controller
{
    public function inicio(){
        return view('inicio', [
            "etiquetas" => DB::table('etiquetas')->get(),
            "articulos" => DB::table('articulos')->orderBy('created_at')->get()
        ]);
    }

    public function verArticulo($id){
        return view('articulo', [
            "registro" => DB::table('articulos')->find($id)
        ]);
    }


    public function verArticulosDeEtiqueta($nombre){
        $registros = DB::table("articulos AS a")
            ->join('articulo_etiqueta AS ae', 'a.id', 'ae.articulo_id')
            ->join('etiquetas AS e', 'e.id', 'ae.etiqueta_id')
            ->where('e.nombre', $nombre)
            ->select('a.*')
            ->get();
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
