<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Rol;
use App\Models\Status;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $admin = Admin::join('status','admin.id_status','=','status.id')->join('rol','admin.id_rol','=','rol.id')->select('admin.*','status.name as status', 'rol.name as rol')->get();
        
        //view() => retorna una vista
        return view("pages.admin", ["admin" => $admin]);
    }

    public function viewForm(){
        $status = Status::all();
        $rol = Rol::all();
        return view("pages.registerAdmin", ["status" => $status], ["rol" => $rol]);
    }

     /** metodo para registrar un admin */
     public function storeAdmin(Request $request){
        //INSERT INTO table(campos) VALUES (valores) => save()
        //instancia del modelo
        $admin = new Admin();
        
        $admin->name = $request->post('name');
        $admin->last_name = $request->post('last_name');        
        $admin->phone = $request->post('phone');
        $admin->email = $request->post('email');
        $admin->password = $request->post('password');
        $admin->id_status = 1; 
        $admin->id_rol = $request->post('rol');           
        $admin->save();

        //redireccionamos al apartado de admin por el name de la ruta que esta en web.php
        return redirect()->route('getAdmin');
    }

}
