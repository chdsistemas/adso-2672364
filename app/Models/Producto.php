<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Indicar la tabla a la que apunta este modelo:
    protected $table = 'productos';

    // Describir los campos que deben ser tenidos en cuenta
    // No es necesario incluir campos autoincrementables
    protected $fillable = [
        'nombre',
        'descripcion',
        'pais_origen',
        'presentacion',
        'precio',
        'stock'
    ];
}
