<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\SitioController;
use App\Http\Middleware\esAdministrador;
use App\Http\Middleware\estaLoggeado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::name("sitio.")->group( function(){
    Route::controller(SitioController::class)->group(function(){
        Route::get("/", "inicio")->name("inicio");
        Route::get("publicacion/{id}", "verArticulo")->name("sistemaArticulo");
        Route::get("tags/{nombre}", "verArticulosDeEtiqueta")->name("etiqueta");
        Route::get("busqueda", "busqueda")->name("sistemaBusqueda");
    });
});


Route::name("admin.")->group( function(){
    Route::controller(AdministradorController::class)->group(function(){
        
        Route::middleware(esAdministrador::class)->group(function(){
            Route::get("admin/inicio", "inicio")->name("adminInicio");
            Route::get("admin/cerrar-sesion", "cerrarSesion")->name("logout");
        });
        Route::middleware(estaLoggeado::class)->group(function(){
            Route::get("admin/iniciar-sesion", "iniciarSesion")->name("login");
            Route::post("admin/entrar", "entrar")->name("entrar");
            Route::get("admin/registro", "registro")->name("registro");
            Route::post("admin/registrar", "registrar")->name("registrar");
        });

    });
});
