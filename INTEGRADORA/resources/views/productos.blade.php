@extends('layouts.app')

@section('titulo', 'Productos - Tambaking')

@section('content')

    <section class="productos-admin">
        <h2>Productos</h2>

        @if (session('exito'))
            <p class="aviso exito">{{ session('exito') }}</p>
        @endif

        @auth
            <form method="POST" action="{{ route('productos.store') }}" novalidate>
                @csrf

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej: Tambaquí" value="{{ old('nombre') }}" required>

                <label for="descripcion">Descripción:</label>
                <input type="text" id="descripcion" name="descripcion" placeholder="Ej: Pescado fresco" value="{{ old('descripcion') }}" required>

                <label for="precio">Precio (Bs):</label>
                <input type="number" id="precio" name="precio" step="0.01" min="0" placeholder="Ej: 35.00" value="{{ old('precio') }}" required>

                <button type="submit">Agregar producto</button>

                @error('nombre')
                    <p class="aviso">{{ $message }}</p>
                @enderror
                @error('descripcion')
                    <p class="aviso">{{ $message }}</p>
                @enderror
                @error('precio')
                    <p class="aviso">{{ $message }}</p>
                @enderror
            </form>

            <form method="POST" action="{{ route('logout') }}" style="margin-top: 10px;">
                @csrf
                <button type="submit">Cerrar sesión</button>
            </form>
        @else
            <p><a href="{{ route('login') }}">Inicia sesión</a> para agregar productos.</p>
        @endauth
    </section>

    <section class="lista-productos">
        @forelse ($productos as $producto)
            <article>
                <h3>{{ $producto->nombre }}</h3>
                <p>{{ $producto->descripcion }}</p>
                <p><strong>Bs {{ number_format($producto->precio, 2) }}</strong></p>
            </article>
        @empty
            <p>Todavía no hay productos registrados.</p>
        @endforelse
    </section>

@endsection