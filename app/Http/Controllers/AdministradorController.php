<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function registro(){
        return view('admin.registro');
    }

    public function registrar(Request $request){

        $request->validate([
            'nombre' => 'required|string|max:20',
            'correo' => 'required|email|unique:usuarios,email',
        ]);

        $contra = round(1000,9999);
        $usuario = new User;
        $usuario->nombre = $request->get("nombre");
        $usuario->email = $request->get('correo');
        $usuario->password = Hash::make($contra);
        $usuario->save();//id 7
        Auth::loginUsingId($usuario->id);
        return redirect()->route("sitio.inicio");
    }

    public function inicio(){
        return view('admin.inicio');
    }
}
