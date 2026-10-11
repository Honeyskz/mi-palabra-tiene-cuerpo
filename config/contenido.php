<?php

return [

    'nombre_sitio' => 'Mi palabra tiene cuerpo',

    // ───────────── SECCIÓN 1 ─────────────
    's1' => [
        'titulo' => 'Mi palabra tiene cuerpo',
        
        // 6 grupos = 6 colores. Podés cambiar los textos, pero respetá las cantidades.
        'palabras' => [
            1 => ['Quilmes', 'Con nuestra voz recordamos', 'Yúncm xamina cuchuch guchecreyna'],
            2 => ['Nande ayvu rupi japurãí', 'Con nuestra voz cantamos', 'Ore hay’ópy ropurahéi avaĩ’ẽme', 'Ore ñẽ’ épy ropurahéi', 'Nande ayvu ñamo ñeñdurevc japorai'],
            3 => ['Da setarasoqtak naċ’é sugete saparagentaratak', 'Sapaxaguenataxanaq suoqta’a na maiche qaraullaxac napaxenataxac', 'Con nuestra voz enseñamos'],
            4 => ['Con nuestra voz creamos', 'Wichi lhi̇met ta tamenej ta iche', 'Yönashujlh'],
            5 => ['Osh wash ’a’yshk’, wenayish osh-pek’', 'Kashpen yikwa', 'uf-tú-ku', 'Con nuestra voz estamos', 'Taiñ dungun mew muleiñ', 'Rupu chem dungu', 'Do takar chan'],
            6 => ['Rimayminchajwan qonakuyku', 'Con nuestra voz compartimos', 'Rimayan cuscanacus'],
        ],

        'consigna'  => 'Elige una palabra o frase que te llame la atención y escríbela grande en una hoja.',
        'preguntas_titulo' => 'Para reflexionar',
        'preguntas' => [
            '¿Qué te hace sentir esta palabra?',
            '¿Qué imaginás del pueblo que la habla?',
            '¿Qué significa para vos “escuchar una lengua que no conozco”?',
        ],

        'consigna_dibujo' => 'Ahora transforma tu palabra o frase elegida en una imagen simbólica que sintetice tu reflexión y sube una foto al Mural.',
    ],

    // ───────────── SECCIÓN 2 ─────────────
    's2' => [
        'titulo' => 'La vitalidad de las lenguas',
        'intro'  => 'Para que una lengua no muera, es necesario que haya gente que la hable y que tenga con quién hacerlo.',
        'preguntas' => [
            '¿Qué lenguas se hablan en mi familia, barrio o comunidad?',
            '¿Qué lenguas están presentes en la escuela?',
            '¿Qué lenguas están ausentes? ¿Por qué?',
        ],
        'acciones_titulo' => 'Elige una de las siguientes acciones:',
        'acciones' => [
            'Estar',
            'Cantar',
            'Crear',
            'Recordar',
            'Enseñar',
            'Coompartir',
        ],
        'consigna' => 'Con esa acción escribe un texto (3 - 5 líneas) que responda a la consigna: ¿Qué significa para nosotros estar, cantar, crear, recordar, enseñar o compartir en un país pluricultural?',
        'texto_extra' => 'Con nuestra voz creamos mundos, ideas, poesía, palabras, conocimientos. Con nuestra voz compartimos puntos de vista, celebraciones, recetas, adivinanzas, imágenes, trabajos y sentimientos. Con nuestra voz estamos presentes, ocupamos espacios, participamos de los debates y la toma de decisiones. Con nuestra voz enseñamos y aprendemos, investigamos, transmitimos saberes y maneras de ver el mundo. Con nuestra voz recordamos y reelaboramos los recuerdos en el presente, honramos a nuestros antepasados en acciones cotidianas y recuperamos su sabiduría y su lucha. Con nuestra voz cantamos alegrías y tristezas, arrullamos a los niños, hacemos coplas y festejamos el presente. Nuestra voz nos hace únicos y nos reúne con los demás. Es identidad dinámica, historia y memoria colectiva. Nuestra voz es palabra viva.',
    ],

    // ───────────── SECCIÓN 3 ─────────────
    's3' => [
        'titulo'   => 'Mapa',
        'texto'    => 'Texto breve sobre el mapa explicando que es (opcional).',
        'mapa_url' => 'https://script.google.com/macros/s/AKfycbzYhI5_cVp5FwZYcS51qixUKkqpAP-wb7Y9H-2SPIkPwPZGNwf22V6gb5WciY010suDIg/exec',
    ],

    // ───────────── SECCIÓN 4 ─────────────
    's4' => [
        'titulo' => 'Videos en guaraní',
        'intro'  => 'El guaraní pertenece al tronco lingüístico tupí-guaraní y es hablado por aproximadamente 5 millones de personas, en la región nordeste de la Argentina (provincias de Corrientes, Formosa, Chaco, Misiones) y en el sur del estado brasileño de Mato Grosso do Sul. Además, es idioma oficial en la República de Paraguay y en el Mercosur. 

El guaraní –lengua subordinada– se mezcla en nuestras ciudades, en los medios de transporte, en los trabajos y en las calles con el castellano; es frecuente encontrarlo en conversaciones, cantos, bromas, bailes. 

En una rara paradoja de la realidad latinoamericana, muchos de los que no se reconocen como hablantes de guaraní, dice Eduardo Galeano, “a la hora de la verdad, que es la hora de los sueños, la hora del amor, la hora de los chistes, y la hora de la ira, hablan guaraní”',
        // tipo: 'youtube' (URL normal), 'mp4' (ruta dentro de /public, ej: 'videos/uno.mp4') o 'iframe' (URL embed)
        // Agregá o quitá bloques libremente. url vacía = muestra [ACÁ VA EL VIDEO]
        'videos' => [
            ['titulo' => '[ACÁ VA EL TÍTULO] Video 1', 'tipo' => 'youtube', 'url' => '', 'texto' => '[ACÁ VA EL TEXTO]'],
            ['titulo' => '[ACÁ VA EL TÍTULO] Video 2', 'tipo' => 'youtube', 'url' => '', 'texto' => '[ACÁ VA EL TEXTO]'],
            ['titulo' => '[ACÁ VA EL TÍTULO] Video 3', 'tipo' => 'mp4',     'url' => '', 'texto' => '[ACÁ VA EL TEXTO]'],
        ],
    ],

    // ───────────── SECCIÓN 5 ─────────────
    's5' => [
        'titulo' => 'Seguí participando',
        'texto'  => 'Completa este formulario y contanos.',
        'boton'  => 'Completar formulario',
        'url'    => 'https://forms.gle/KgHKknGpGMvh29qt6',
    ],
];