@extends('layouts.app')

@section('titulo', 'Tambaking')

@section('content')

    <section class="historia">
        <article>
            <h2>Nuestra Historia</h2>
            <p>Un sitio web para un negocio familiar dedicado al criadero y venta de pescados,
                dirigido a clientes particulares, restaurantes y comerciantes que buscan productos frescos y
                de calidad. El sitio permitirá conocer las especies disponibles, sus precios,
                información del negocio y facilitar el contacto o la realización de pedidos,
                evitando que los clientes tengan que desplazarse o llamar para obtener información."
            </p>
        </article>
    </section>

    <section class="productos">

        <article>
            <h3>Tambaquí</h3>
            <img src="{{ asset('img/tambaqui.jpeg') }}" alt="Tambaquí">
            <p>Pescado fresco.</p>
        </article>

        <article>
            <h3>Pacú</h3>
            <img src="{{ asset('img/pacu.jpg') }}" alt="Pacú">
            <p>Excelente calidad.</p>
        </article>

        <article>
            <h3>Bagre</h3>
            <img src="{{ asset('img/surubi.jpg') }}" alt="Surubi">
            <p>Ideal para restaurantes.</p>
        </article>

    </section>

    <section class="calidad">
        <h2>Comprometidos con la Calidad</h2>
        <p>En Tambaking, nos enorgullece ofrecer productos de la más alta calidad.
            Nuestro compromiso con la frescura y el sabor se refleja en cada pescado
            que criamos y vendemos. Trabajamos arduamente para garantizar que nuestros
            clientes reciban solo lo mejor.</p>
    </section>

@endsection