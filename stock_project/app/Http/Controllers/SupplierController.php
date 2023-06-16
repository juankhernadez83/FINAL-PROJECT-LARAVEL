<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SupplierController extends Controller
{
    //metodo index() para enlistar todos los suppliers
    public function index(){
        $supplier = Supplier::all();
        
        //view() => retorna una vista
        return view("pages.supplier", ["supplier" => $supplier]);
    }

    public function indexR(){
        $supplier = Supplier::all();
        $products = Product::join('measure','product.id_measure','=','measure.id')
                        ->join('supplier','product.id_supplier','=','supplier.id')
                        ->select('product.*','measure.name as measure', 'supplier.name as supplier')->get();
        $totals = Supplier::join('product', 'supplier.id', '=', 'product.id_supplier')
                        ->groupBy('supplier.id')
                        ->select('supplier.id', DB::raw('COUNT(product.id) as total'))
                        ->get();
        // $products = Product::all();
        return view("pages.report-supplier", ["supplier" => $supplier, "products" => $products, "totals" => $totals]);
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
