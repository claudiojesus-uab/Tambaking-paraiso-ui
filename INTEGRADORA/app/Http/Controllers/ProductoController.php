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

    public function store(Request $request)
    {
        $validado = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:500',
            'precio' => 'required|numeric|min:0',
        ]);

        Producto::create($validado);

        return back()->with('exito', '¡Producto agregado con éxito!');
    }
}