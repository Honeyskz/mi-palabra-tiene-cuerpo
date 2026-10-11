@php $c = config('contenido.s5'); @endphp

<section id="s5" class="seccion fondo-amarillo patron-rombos-oscuro">
    <div class="contenedor">
        <h2 class="titulo-principal oscuro reveal">{{ $c['titulo'] }}</h2>
        <div class="tarjeta reveal"><p>{{ $c['texto'] }}</p></div>
        <a class="btn btn-grande btn-verde" href="{{ $c['url'] }}" target="_blank" rel="noopener">{{ $c['boton'] }}</a>
    </div>
</section>