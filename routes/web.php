<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\SitioController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::controller(SitioController::class)->group(function(){
    Route::get("/", "inicio");
    Route::get("articulo/{id}", "verArticulo");
    Route::get("etiquetas/{nombre}", "verArticulosDeEtiqueta");
    Route::get("busqueda", "busqueda");
});


Route::controller(AdministradorController::class)->group(function(){
    Route::get("admin/iniciar-sesion", "iniciarSesion");
    Route::get("admin/inicio", "inicio");
});
