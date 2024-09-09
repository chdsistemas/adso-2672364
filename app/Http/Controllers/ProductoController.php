<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Método para insertar datos en la tabla productos
    public function store(Request $request)
    {
        // Crer reglas de validación de datos una vez se reciben del formulario
        $validados = $request->validate([
            'nombre'=>'required|string|min:3|max:30',
            'descripcion'=>'required|string|min:5|max:255',
            'pais_origen'=>'required|string|min:5|max:30',
            'presentacion'=>'required|string|min:5|max:30',
            'precio'=>'required|numeric',
            'stock'=>'required|integer'
        ]);
        
        //Crear un nuevo producto con los datos validados:
        $producto = Producto::create([
            'nombre' => $validados['nombre'],
            'descripcion' => $validados['descripcion'],
            'pais_origen' => $validados['pais_origen'],
            'presentacion' => $validados['presentacion'],
            'precio' => $validados['precio'],
            'stock' => $validados['stock']
        ]);

        // Con el método create() se deberá crear un nuevo producto
        // Ahora devolvemos al formulario con una respuesta
        return redirect()->back()->with('success','Producto guardado con éxito');

    }

    public function create()
    {
        return view('producto.create');
    }

}
