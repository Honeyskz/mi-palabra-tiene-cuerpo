@php
    $c = config('contenido.s4');
    $embed = fn ($u) => preg_match('~(?:youtu\.be/|v=|embed/|shorts/)([A-Za-z0-9_-]{11})~', $u, $m)
        ? 'https://www.youtube.com/embed/' . $m[1]
        : $u;
@endphp

<section id="s4" class="seccion fondo-tierra patron-cruces">
    <div class="contenedor">
        <h2 class="titulo-principal reveal">{{ $c['titulo'] }}</h2>
        <div class="tarjeta reveal"><p>{{ $c['intro'] }}</p></div>

        <div class="grid-videos">
            @foreach ($c['videos'] as $v)
                <article class="video-card reveal">
                    <h3>{{ $v['titulo'] }}</h3>
                    <div class="video-marco">
                        @if (empty($v['url']))
                            <div class="ph">[ACÁ VA EL VIDEO]</div>
                        @elseif ($v['tipo'] === 'mp4')
                            <video controls preload="metadata" src="{{ asset($v['url']) }}"></video>
                        @else
                            <iframe src="{{ $embed($v['url']) }}" title="{{ $v['titulo'] }}" loading="lazy"
                                    allow="accelerometer; autoplay; encrypted-media; picture-in-picture; fullscreen"
                                    allowfullscreen></iframe>
                        @endif
                    </div>
                    @if (!empty($v['texto']))
                        <p>{{ $v['texto'] }}</p>
                    @endif
                </article>
            @endforeach
        </div>
    </div>
</section>