<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;
class RolController extends Controller
{
    public function index(){
        $rol = Rol::all();
        
        //view() => retorna una vista
        return view("pages.rol", ["rol" => $rol]);
    }

    public function viewForm(){
        $rol = Rol::all();
        return view("pages.registerRol", ["rol" => $rol]);
    }

     /** metodo para registrar un producto */
     public function storeRol(Request $request){
        //INSERT INTO table(campos) VALUES (valores) => save()
        //instancia del modelo
        $rol = new Rol();
        
        $rol->name = $request->post('name');
        $rol->save();

        //redireccionamos al apartado de productos por el name de la ruta que esta en web.php
        return redirect()->route('getRol');
    }

}
