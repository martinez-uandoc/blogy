<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    
    public function iniciarSesion(){
        return view('admin.login');
    }

    public function entrar(){
        return "Información recíbida";
    }


    public function inicio(){
        return view('admin.inicio');
    }
}
