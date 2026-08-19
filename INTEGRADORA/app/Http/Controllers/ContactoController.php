<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function create()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        $validado = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        \App\Models\Contacto::create($validado);

        return back()->with('exito', '¡Formulario enviado con éxito!');
    }
}
