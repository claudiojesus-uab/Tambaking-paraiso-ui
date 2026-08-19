@extends('layouts.app')

@section('titulo', 'Contacto - Tambaking')

@section('content')

    <section class="contacto">
        <h2>Contacto</h2>
        <p>
            ¿Tienes alguna pregunta? ¡Contáctanos!
        </p>

        @if (session('exito'))
            <p class="aviso exito">{{ session('exito') }}</p>
        @endif

        <form id="form-contacto" method="POST" action="{{ route('contacto.store') }}" novalidate>
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" value="{{ old('nombre') }}" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Tu email" value="{{ old('email') }}" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" placeholder="Tu mensaje" required>{{ old('mensaje') }}</textarea>

            <button type="submit">Enviar</button>
            <p id="error-pedido" class="aviso"></p>
        </form>
    </section>

@endsection

@section('scripts')
    <script src="{{ asset('js/contacto.js') }}"></script>
@endsection