<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdministradorController extends Controller
{
    
    public function iniciarSesion(){
        return view('admin.login');
    }

    public function entrar(Request $request){

        if(     Auth::attempt(["email" => $request->get('correo'), "password" => $request->get('contrasena')])  ){
            alert()->success('Bienvenido','Has iniciado sesión');
            return redirect()->route("sitio.inicio");
        }else{
            alert()->error('Algo ha salido mal','Tus datos de acceso no coinciden');
            return redirect()->route("admin.login");
        }

    }
    
    public function cerrarSesion(){
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();
        return redirect()->route("sitio.inicio");
    }

    public function inicio(){
        return view('admin.inicio');
    }
}
