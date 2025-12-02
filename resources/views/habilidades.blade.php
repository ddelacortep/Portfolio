<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daniel de la Corte - Habilidades</title>
    <meta name="asset-url" content="{{ asset('') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/habilidades.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    <main>
        @include('header')

        <section class="habilidades-section">
            <h1>Mis Habilidades</h1>
            <!-- El contenido se cargará dinámicamente desde habilidades.json -->
        </section>

        @include('footer')
    </main>

    <script src="{{ asset('JavaScript/habilidades.js') }}"></script>
</body>
</html>