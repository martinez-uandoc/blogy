<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\SitioController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::name("sitio.")->group( function(){
    Route::controller(SitioController::class)->group(function(){
        Route::get("/", "inicio")->name("sistemaInicio");
        Route::get("publicacion/{id}", "verArticulo")->name("sistemaArticulo");
        Route::get("tags/{nombre}", "verArticulosDeEtiqueta")->name("etiqueta");
        Route::get("busqueda", "busqueda")->name("sistemaBusqueda");
    });
});


Route::name("admin.")->group( function(){
    Route::controller(AdministradorController::class)->group(function(){
        Route::get("admin/iniciar-sesion", "iniciarSesion")->name("login");
        Route::post("admin/entrar", "entrar")->name("entrar");
        Route::get("admin/inicio", "inicio")->name("adminInicio");
    });
});
