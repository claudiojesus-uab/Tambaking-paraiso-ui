@extends('layouts.app')

@section('titulo', 'Iniciar sesión - Tambaking')

@section('content')

    <section class="login">
        <h2>Iniciar sesión</h2>

        <form method="POST" action="{{ route('login.store') }}" novalidate>
            @csrf

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="tu@email.com" value="{{ old('email') }}" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Entrar</button>

            @error('email')
                <p class="aviso">{{ $message }}</p>
            @enderror
        </form>
    </section>

@endsection