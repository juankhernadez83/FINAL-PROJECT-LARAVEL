<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //hago referencia a la tabla de mi base de datos
    protected $table = 'stock';

    //deshabilitando los campos update_at y create_at
    public $timestamps = false;
}
