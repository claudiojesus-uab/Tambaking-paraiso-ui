@extends('layouts.app')

@section('content')
    <h1>Libreria El Lapiz</h1>
    <p>Libreria de barrio con un catalogo pensado para lectores de todas las edades.</p>

    <p>Hay {{ count($libros) }} libros en el catalogo.</p>

    <ul>
        @foreach ($libros as $libro)
            <li>{{ $libro->titulo }} — Bs {{ $libro->precio }}</li>
        @endforeach
    </ul>

    <p>Catalogo atendido por Claudio</p>

    <a href="/libros/nuevo">Registrar nuevo libro</a>
@endsection