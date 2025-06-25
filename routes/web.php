<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio', [
        "etiquetas" => DB::table('etiquetas')->get(),
        "articulos" => DB::table('articulos')->orderBy('created_at')->get()
    ]);
});

Route::get('articulo/{id}', function ($id) {
    return view('articulo', [
        "registro" => DB::table('articulos')->find($id)
    ]);
});

Route::get('etiquetas/{nombre}', function ($nombre) {
    $registros = DB::table("articulos AS a")
            ->join('articulo_etiqueta AS ae', 'a.id', 'ae.articulo_id')
            ->join('etiquetas AS e', 'e.id', 'ae.etiqueta_id')
            ->where('e.nombre', $nombre)
            ->select('a.*')
            ->get();
    return view('etiquetas', [
        "articulos" => $registros
    ]);
});

Route::get('busqueda', function () {
    return view('busqueda', [
        "nombre_personaje" => "La campeona de los precios bajos",
        "imagen_personaje" => "https://i.pinimg.com/736x/ac/b5/de/acb5de161d451113a6ed182bf5c5e2f1.jpg",
    ]);
});

Route::get('admin/iniciar-sesion', function () {
    return view('admin.login');
});

Route::get('admin/inicio', function () {
    return view('admin.inicio');
});
