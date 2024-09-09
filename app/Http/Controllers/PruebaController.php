<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function mostrar_vista1()
    {
        return view('prueba.vista1');
    }

    public function mostrar_vista2()
    {
        return view('prueba.vista2');
    }

    public function mostrar_vista3()
    {
        return view('prueba.vista3');
    }

    
    // Método para mostrar la vista de una calculadora
    public function mostrar_calculadora()
    {
        return view('prueba.calculadora');
    }
    
    
    // Método para recibir y procesar los datos de la calculadora
    public function calcular(Request $request)
    // La clase Request recibe los datos desde el formulario
    {
        // Recibir los datos desde el formulario HTML y guardarlo en variables PHP
        
        // La función dd() de PHP permite mostrar los datos que vienen desde el cliente
        // dd() detiene la ejecución y muestra los datos recibidos desde el cliente
        //dd($request);
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $operacion = $request->input('operacion');

        $resultado = null;

        // Hacer la operación matemática con los números
        // Usemos la sentencia switch para evaluar varias operaciones matematicas

        switch($operacion)
        {
            case 'suma':
                $resultado = $numero1 + $numero2;
                break;

            case 'resta':
                $resultado = $numero1 - $numero2;
                break;

            case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                break;

            case 'division':
                if ($numero2 != 0)
                {
                    $resultado = $numero1 / $numero2;
                }
                else
                {
                    print 'Error: división por cero';
                }
                break;
            default:
                    print 'Operación no válida';           
        }
        // Listo el resultado, lo devolvemos junto con la vista
        return view('prueba.calculadora', compact('resultado'));
    }
}
