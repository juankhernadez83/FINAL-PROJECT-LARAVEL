<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\Status;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //metodo index() para enlistar todos los suppliers
    public function index(){
        $supplier = Supplier::all();
        
        //view() => retorna una vista
        return view("pages.supplier", ["supplier" => $supplier]);
    }

    //metodo que retorna la vista para registrar un supplier
    public function viewForm(){
        return view("pages.registerSupplier");
    }

     /** metodo para registrar un supplier */
     public function storeSupplier(Request $request){
        //INSERT INTO table(campos) VALUES (valores) => save()
        //instancia del modelo
        $supplier = new Supplier();
        
        $supplier->name = $request->post('name');
        $supplier->last_name = $request->post('last_name');
        $supplier->phone = $request->post('phone');
        $supplier->email = $request->post('email');
        $supplier->id_status = 1;
        $supplier->save();

        //redireccionamos al apartado de suppliers por el name de la ruta que esta en web.php
        return redirect()->route('getSuppliers');
    }
}
