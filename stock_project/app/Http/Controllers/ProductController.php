<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Status;
use App\Models\Supplier;
use App\Models\Stock;
use App\Models\Measure;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
     //CRUD => index(), store(), update(), destroy()

    //metodo index() para enlistar todos los productos
    public function index(){
        $product = Product::join('measure','product.id_measure','=','measure.id')->join('supplier','product.id_supplier','=','supplier.id')->select('product.*','measure.name as measure', 'supplier.name as supplier')->get();
        
        //view() => retorna una vista
        return view("pages.product", ["product" => $product]);
    }

    //metodo que retorna la vista para registrar un producto
    public function viewForm(){
        $measure = Measure::all();
        $supplier = Supplier::all();
        $status = Status::all();
        return view("pages.registerProduct", ["measure" => $measure], ["supplier" => $supplier], ["status" => $status]);
    }

     /** metodo para registrar un producto */
     public function storeProduct(Request $request){
        //INSERT INTO table(campos) VALUES (valores) => save()
        //instancia del modelo
        $product = new Product();
        
        $product->name = $request->post('name');
        $product->price = $request->post('price');
        $product->id_status = 1;               
        $product->id_supplier = $request->post('supplier');
        $product->id_measure = $request->post('measure');
        $product->save();

        //redireccionamos al apartado de productos por el name de la ruta que esta en web.php
        return redirect()->route('getProducts');
    }

}
