<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::latest()->get();

        return view('productos', ['productos' => $productos]);
    }

    public function store(Request $request){

    $validado = $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string|max:500',
        'precio' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
    ], [
        'stock.required' => 'Tienes que indicar cuántas unidades hay disponibles.',
        'stock.integer' => 'El stock debe ser un numero entero, sin decimales.',
        'stock.min' => 'El stock no puede ser un numero negativo.',
    ]);

    Producto::create($validado);

    return back()->with('exito', 'Producto agregado con exito!');
  }
}