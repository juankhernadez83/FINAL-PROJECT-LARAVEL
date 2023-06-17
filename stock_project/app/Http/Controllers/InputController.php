<?php

namespace App\Http\Controllers;
use App\Models\Input;
use App\Models\Product;
use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index(){
        $input = Input::join('product','input.id_product','=','product.id')->select('input.*','product.name as product')->get();
        
        //view() => retorna una vista
        return view("pages.input", ["input" => $input]);
    }

    public function viewForm(){
        $product = Product::all();
        return view("pages.registerInput", ["product" => $product]);
    }

     /** metodo para registrar un admin */
     public function storeInput(Request $request){
        //INSERT INTO table(campos) VALUES (valores) => save()
        //instancia del modelo
        $input = new Input();
        
        $input->quantity = $request->post('quantity');
        $input->date_input = $request->post('date_input');  
        $input->id_product = $request->post('product');        
        $input->save();

        //redireccionamos al apartado de admin por el name de la ruta que esta en web.php
        return redirect()->route('getInput');
    }
}
