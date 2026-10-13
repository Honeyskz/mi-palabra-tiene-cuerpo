@php $c = config('contenido.s1'); @endphp

<section id="s1" class="seccion fondo-verde patron-rombos">
    <div class="contenedor">
        <h1 class="titulo-principal reveal">{{ $c['titulo'] }}</h1>

        <div class="escenario" id="escenario">
            @foreach ($c['palabras'] as $grupo => $lista)
                @foreach ($lista as $palabra)
                    <span class="palabra g{{ $grupo }}" data-grupo="{{ $grupo }}">{{ $palabra }}</span>
                @endforeach
            @endforeach
        </div>
        <div class="centro">
            <button type="button" class="btn btn-crema" id="repetir">↻ Repetir animación</button>
        </div>

        <div class="una-col">
            <div class="tarjeta reveal">
                <h3>Consigna</h3>
                <p>{{ $c['consigna'] }}</p>
            </div>
        </div>

        <h2 class="subtitulo reveal">{{ $c['preguntas_titulo'] }}</h2>
        <div class="grid-3">
            @foreach ($c['preguntas'] as $i => $pregunta)
                <div class="tarjeta pregunta reveal">
                    <span class="num">{{ $i + 1 }}</span>
                    <p>{{ $pregunta }}</p>
                </div>
            @endforeach
        </div>

        <div class="tarjeta destacada reveal" style="margin-top:2rem">
            <h3>Dibujo</h3>
            <p>{{ $c['consigna_dibujo'] }}</p>

            @if (session('ok_foto'))
                <p class="aviso">{{ session('ok_foto') }}</p>
            @endif

            <form action="{{ route('fotos.store') }}" method="POST" enctype="multipart/form-data"
                  class="formulario" @if ($errors->foto->any()) data-scroll @endif>
                @csrf
                <label>Tu nombre (opcional)
                    <input type="text" name="nombre" maxlength="60">
                </label>
                <div class="camara">
                    <label class="subir" id="subir-nativo">
                        <span>📸 Sacar foto</span>
                        <input type="file" name="imagen" accept="image/*" capture="environment" id="input-foto">
                    </label>

                    <button type="button" class="btn btn-crema" id="btn-camara" hidden>📸 Sacar foto</button>

                    <div class="visor" id="visor" hidden>
                        <video id="video" autoplay playsinline muted></video>
                        <canvas id="lienzo" hidden></canvas>
                        <div class="visor-botones">
                            <button type="button" class="btn btn-naranja" id="btn-capturar">Capturar</button>
                            <button type="button" class="btn btn-crema" id="btn-cancelar">Cancelar</button>
                        </div>
                    </div>
                </div>
                <img id="vista-previa" class="vista-previa" alt="Vista previa" hidden>
                @error('imagen', 'foto') <p class="error">{{ $message }}</p> @enderror
                <button class="btn btn-naranja" type="submit">Enviar foto al mural</button>
            </form>
        </div>

        <h2 class="subtitulo reveal" id="mural-fotos">Mural de dibujos</h2>
        <div class="mural-fotos">
            @forelse ($fotos as $foto)
                <figure class="foto rot{{ $loop->index % 4 }}">
                    <img src="{{ asset('storage/' . $foto->imagen) }}" loading="lazy" alt="Foto de {{ $foto->nombre ?: 'participante' }}">
                    <figcaption>{{ $foto->nombre ?: 'Anónimo' }}</figcaption>
                </figure>
            @empty
                <p class="vacio">Todavía no hay fotos. ¡Sé la primera persona en subir una!</p>
            @endforelse
        </div>
    </div>
</section>