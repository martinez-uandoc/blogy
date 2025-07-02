<?php

namespace App\Http\Controllers;

use App\Mail\NotificacionesRegistro;
use App\Models\Articulo;
use App\Models\ArticuloEtiqueta;
use App\Models\Etiqueta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
        $usuario->save();

        Mail::to($request->get('correo'))
            ->send( new NotificacionesRegistro($request->get('correo'), $contra) );

        Auth::loginUsingId($usuario->id);
        return redirect()->route("sitio.inicio");
    }

    public function inicio(){
        return view('admin.inicio', [
            "articulos" => Articulo::count(),
            "etiquetas" => Etiqueta::count()
        ]);
    }


    public function articulosRegistros(){
        return view("admin.articulos.registros", [
            "registros" => Articulo::all()
        ]);
    }
    public function articulosFormulario($id = null){
        return view("admin.articulos.formulario", [
            "etiquetas" => Etiqueta::all(),
            "articulo" => Articulo::with("etiquetas")->find($id)
        ]);
    }

    public function articulosRegistrar(Request $request){

        DB::transaction( function() use ($request){
            $articulo = new Articulo();
            $articulo->titulo = $request->get('titulo');
            $articulo->portada = $request->get('portada');
            $articulo->descripcion = $request->get('descripcion');
            $articulo->contenido = $request->get('contenido');
            $articulo->fecha_visualizacion = $request->get('fecha');
            $articulo->usuario_id = Auth::id();
            $articulo->save();

            foreach ($request->get('etiqueta') as $e) {
                $etiqueta = new ArticuloEtiqueta();
                $etiqueta->articulo_id = $articulo->id;
                $etiqueta->etiqueta_id = $e;
                $etiqueta->save();
            }
        });

        return redirect()->route('admin.articuloRegistros');
    }
}
