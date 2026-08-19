@extends('layouts.app')

@section('content')
    <h1>Libreria El Lapiz</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/libros/nuevo" method="POST">
        @csrf

        <label for="titulo">Titulo del libro</label>
        <input type="text" id="titulo" name="titulo">

        <label for="precio">Precio en Bs</label>
        <input type="number" id="precio" name="precio">

        <button type="submit">Registrar libro</button>
    </form>
@endsection