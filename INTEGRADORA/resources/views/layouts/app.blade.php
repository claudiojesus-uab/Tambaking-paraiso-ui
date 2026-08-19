<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Tambaking')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>

        <div class="logo">
            <img src="{{ asset('img/logov2.png') }}" alt="Logo de Tambaking">
        </div>
        <div class="titulo">
            <h1>TAMBAKING</h1>

            <p>Calidad y frescura directamente del criadero.</p>

            <button type="button" id="btn-tema" class="buttonMode">Cambiar Tema</button>

        </div>

        <div class="redes">
            <a href="#"><img src="{{ asset('img/iconos/whatsapp.webp') }}" alt="WhatsApp"></a>
            <a href="#"><img src="{{ asset('img/iconos/facebook.webp') }}" alt="Facebook"></a>
            <a href="#"><img src="{{ asset('img/iconos/instagram.webp') }}" alt="Instagram"></a>
            <a href="#"><img src="{{ asset('img/iconos/tiktok.webp') }}" alt="TikTok"></a>
        </div>

        <button class="menu-toggle" id="menu-toggle">☰</button>

    </header>
    <nav class="menu" id="menu">
        <a href="{{ url('/') }}">Inicio</a>
        <a href="{{ url('/nosotros') }}">Nosotros</a>
        <a href="{{ url('/productos') }}">Productos</a>
        <a href="{{ url('/galeria') }}">Galería</a>
        <a href="{{ url('/contacto') }}">Contacto</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>

        <p>&copy; Integradora - Claudio Jesus Flores - 18 de agosto de 2026</p>

    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>