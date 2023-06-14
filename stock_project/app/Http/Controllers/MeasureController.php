<?php

namespace App\Http\Controllers;
use App\Models\Measure;
use Illuminate\Http\Request;

class MeasureController extends Controller
{
    public function index(){
        $measure = Measure::all();
        
        //view() => retorna una vista
        return view("pages.measure", ["measure" => $measure]);
    }

    public function viewForm(){
        $measure = Measure::all();
        return view("pages.registerMeasure", ["measure" => $measure]);
    }

     /** metodo para registrar un producto */
     public function storeMeasure(Request $request){
        //INSERT INTO table(campos) VALUES (valores) => save()
        //instancia del modelo
        $measure = new Measure();
        
        $measure->name = $request->post('name');
        $measure->save();

        //redireccionamos al apartado de productos por el name de la ruta que esta en web.php
        return redirect()->route('getMeasure');
    }

}
