<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Input;
use App\Models\Output;
use App\Models\Product;
use DB;
use Arr;
class StockCotroller extends Controller
{
    public function index(){
        $stock = Stock::join('product','stock.id_product','=','product.id')->select('stock.*','product.name as product')->get();
        
        //view() => retorna una vista
        return view("pages.stock", ["stock" => $stock]);
        
    }

    public function calculate(){
    

        $Dato = Product::join('input','product.id','=','input.id_product')->join('output','product.id','=','output.id_product')->selectRaw('SUM(input.quantity) AS Conteo')->selectRaw('SUM(output.quantity) AS Conteo2')->groupBy('product.id')->get();
        //print_r($Dato);
        return view("pages.stock", ["Dato" => $Dato]);
    }

    public function viewForm(){
        $stock = Stock::all();
        return view("pages.registerStock", ["stock" => $stock]);
    }

     /** metodo para registrar un producto */
     public function storeStock(Request $request){
        //INSERT INTO table(campos) VALUES (valores) => save()
        //instancia del modelo
        $stock = new Stock();
        
        $stock->total = $request->post('total');
        $stock->save();

        //redireccionamos al apartado de productos por el name de la ruta que esta en web.php
        return redirect()->route('getStock');
    }
}
