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
            "resultados" => Articulo::where('titulo', "like", "%".request('busqueda')."%")->paginate(2),
        ]);
    }
}
