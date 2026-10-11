<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('contenido.nombre_sitio') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/guarani.css') }}">
</head>
<body>
    <header class="nav">
        <a href="#s1" class="logo">{{ config('contenido.nombre_sitio') }}</a>
        <button type="button" id="menu-toggle" class="menu-toggle" aria-label="Menú">☰</button>
        <nav id="menu" class="menu">
            <a href="#s1">Mi palabra</a>
            <a href="#s2">Vitalidad</a>
            <a href="#s3">Mapa</a>
            <a href="#s4">Videos</a>
            <a href="#s5">Participá</a>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer class="pie">
        <p>{{ config('contenido.nombre_sitio') }}</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>