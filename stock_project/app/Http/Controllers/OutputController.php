<?php

namespace App\Http\Controllers;
use App\Models\Output;
use App\Models\Product;
use Illuminate\Http\Request;

class OutputController extends Controller
{
    public function index(){
        $output = Output::join('product','output.id_product','=','product.id')->select('output.*','product.name as product')->get();
        
        //view() => retorna una vista
        return view("pages.output", ["output" => $output]);
    }

    public function viewForm(){
        $product = Product::all();
        return view("pages.registerOutput", ["product" => $product]);
    }

     /** metodo para registrar un admin */
     public function storeOutput(Request $request){
        //INSERT INTO table(campos) VALUES (valores) => save()
        //instancia del modelo
        $output = new Output();
        
        $output->quantity = $request->post('quantity');
        $output->date_output = $request->post('date_output');  
        $output->id_product = $request->post('product');        
        $output->save();

        //redireccionamos al apartado de admin por el name de la ruta que esta en web.php
        return redirect()->route('getOutput');
    }
}
