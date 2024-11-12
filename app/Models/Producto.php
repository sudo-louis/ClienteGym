<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos_carrito';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
        'image',
    ];
}
