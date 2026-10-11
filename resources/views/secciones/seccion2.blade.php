@php $c = config('contenido.s2'); @endphp

<section id="s2" class="seccion fondo-naranja patron-zigzag">
    <div class="contenedor">
        <h2 class="titulo-principal reveal">{{ $c['titulo'] }}</h2>

        <div class="tarjeta reveal">
            <p>{{ $c['intro'] }}</p>
        </div>

        <div class="grid-3">
            @foreach ($c['preguntas'] as $i => $pregunta)
                <div class="tarjeta pregunta reveal">
                    <span class="num">{{ $i + 1 }}</span>
                    <p>{{ $pregunta }}</p>
                </div>
            @endforeach
        </div>

        @if (session('ok_respuesta'))
            <p class="aviso">{{ session('ok_respuesta') }}</p>
        @endif

        <form action="{{ route('respuestas.store') }}" method="POST" class="formulario formulario-grande"
              @if ($errors->respuesta->any()) data-scroll @endif>
            @csrf

            <h3 class="subtitulo-claro reveal">{{ $c['acciones_titulo'] }}</h3>
            <div class="grid-acciones">
                @foreach ($c['acciones'] as $accion)
                    <label class="accion reveal">
                        <input type="checkbox" name="acciones[]" value="{{ $accion }}"
                               {{ in_array($accion, old('acciones', [])) ? 'checked' : '' }}>
                        <span>{{ $accion }}</span>
                    </label>
                @endforeach
            </div>

            <div class="tarjeta reveal" style="margin-top:1.5rem">
                <h3>Consigna</h3>
                <p>{{ $c['consigna'] }}</p>
                <label>Tu nombre (opcional)
                    <input type="text" name="autor" maxlength="60" value="{{ old('autor') }}">
                </label>
                <label>Tu respuesta
                    <textarea name="texto" id="texto-respuesta" rows="5" maxlength="600" required>{{ old('texto') }}</textarea>
                </label>
                <small id="contador" class="contador">0 / 600</small>
                @error('texto', 'respuesta') <p class="error">{{ $message }}</p> @enderror
                <button class="btn btn-verde" type="submit">Enviar al mural</button>
                <p class="texto-extra">{{ $c['texto_extra'] }}</p>
            </div>
        </form>

        <h2 class="subtitulo reveal" id="mural-respuestas">Mural colectivo</h2>
        <div class="mural-respuestas">
            @forelse ($respuestas as $r)
                <article class="nota c{{ $loop->index % 4 }}">
                    <p>{{ $r->texto }}</p>
                    @if (!empty($r->acciones))
                        <div class="chips">
                            @foreach ($r->acciones as $a)
                                <span class="chip">{{ $a }}</span>
                            @endforeach
                        </div>
                    @endif
                    <footer>— {{ $r->autor ?: 'Anónimo' }}</footer>
                </article>
            @empty
                <p class="vacio">Todavía no hay respuestas. ¡Escribí la primera!</p>
            @endforelse
        </div>
    </div>
</section>