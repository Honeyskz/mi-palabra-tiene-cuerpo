@php $c = config('contenido.s3'); @endphp

<section id="s3" class="seccion fondo-celeste patron-escalera">
    <div class="contenedor">
        <h2 class="titulo-principal reveal">{{ $c['titulo'] }}</h2>
        <div class="tarjeta reveal"><p>{{ $c['texto'] }}</p></div>

        <div class="marco-mapa reveal">
            <iframe src="{{ $c['mapa_url'] }}" title="Mapa" loading="lazy" allowfullscreen></iframe>
        </div>
        <div class="centro">
            <a class="btn btn-crema" href="{{ $c['mapa_url'] }}" target="_blank" rel="noopener">Abrir mapa en pantalla completa</a>
        </div>
    </div>
</section>