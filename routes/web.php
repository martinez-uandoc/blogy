<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('articulo/1', function () {
    $carrera = "LSC";
    $semestre = "4-5-6";
    $unidad = "Lado servidor";
    return view('articulo', compact('carrera', 'semestre', 'unidad'));
});

Route::get('etiquetas/nombre', function () {
    $grupo = "Equilibrium";
    $cancion = "Blut im auge";
    $enlace = "https://www.youtube.com/watch?v=MMpSVPAjWhI&list=RDMMpSVPAjWhI&start_radio=1&pp=ygUMYmx1dCBpbSBhdWdloAcB";


    return view('etiquetas')
            ->with("artista", $grupo)
            ->with("titulo", $cancion)
            ->with('youtube', $enlace);
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
