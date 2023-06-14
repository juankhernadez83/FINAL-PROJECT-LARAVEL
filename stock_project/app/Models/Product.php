<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //hago referencia a la tabla de mi base de datos
    protected $table = 'product';

    //deshabilitando los campos update_at y create_at
    public $timestamps = false;
}
