<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Formulario para crear producto
    public function create()
    {
        return view('producto.create');
    }

    public function index()
    {
        // Seleccionar todos los productos de la BD
        $productos = Producto::all();
        return view('producto.index', ['productos'=> $productos]);
    }

    // Método para insertar datos en la tabla productos
    public function store(Request $request)
    {
        // Crear reglas de validación de datos una vez se reciben del formulario
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
        // Retornar al formulario anterior con una respuesta
        return redirect()->back()->with('success','Producto guardado con éxito');

    }

    public function edit($id)
    {
        //Buscar el producto con el id recibido
        $producto = Producto::findOrFail($id);

        //Retornar la vista edit y el producto encontrado
        return view('productos.edit', ['producto'=>$producto]);
    }

    public function update(Request $request, $id)
    {
        //Validar los datos recibidos desde la vista edit.blade.php con el id
        $request->validate([
            'nombre'=>'required|string|min:3|max:30',
            'descripcion'=>'required|string|min:5|max:255',
            'pais_origen'=>'required|string|min:5|max:30',
            'presentacion'=>'required|string|min:5|max:30',
            'precio'=>'required|numeric',
            'stock'=>'required|integer'
        ]);

        $producto = Producto::findOrFail($id);

        //Actualizar el producto con update()
        $producto->update($request->all());

        return view('producto.show');
    }
}
