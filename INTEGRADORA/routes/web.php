<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoginController;
use App\Models\Libro;

Route::view('/', 'inicio');
Route::view('/nosotros', 'nosotros');
Route::view('/galeria', 'galeria');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store')->middleware('auth');

Route::get('/contacto', [ContactoController::class, 'create'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/libros', function () {
    $libros = Libro::all();
    return view('libros.index', ['libros' => $libros]);
});

Route::get('/libros/nuevo', function () {
    return view('libros.nuevo');
});

Route::post('/libros/nuevo', function () {
    $datos = request()->validate([
        'titulo' => 'required',
        'precio' => 'required|integer',
    ], [
        'titulo.required' => 'Falta el titulo del libro.',
        'precio.required' => 'Falta el precio del libro.',
        'precio.integer' => 'Ese precio no es un numero entero.',
    ]);

    Libro::create($datos);

    return redirect('/libros');
});