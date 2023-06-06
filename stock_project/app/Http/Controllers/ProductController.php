<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
     //CRUD => index(), store(), update(), destroy()

    //metodo index() para enlistar todos los productos
    public function index(){
        $product = Product::all();
        
        //view() => retorna una vista
        return view("pages.product", ["product" => $product]);
    }
}
