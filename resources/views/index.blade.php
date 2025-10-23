<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daniel de la Corte - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    <main>
        @include('header')

        <div @class(['descripcio'])>
            <p><strong>HOLA, MI NOMBRE ES DANIEL</strong></p>
            <h1><strong>Soy Desarrollador Web.</strong></h1>
            <p>
                Soy desarrollador web full stack especializado en crear soluciones digitales eficientes y 
                escalables. Trabajo con PHP, JavaScript, Python, Laravel y frameworks 
                modernos como Tailwind y Bootstrap, aplicando metodologías ágiles y buenas 
                prácticas de desarrollo. <br><br> He completado más de 12 proyectos, incluyendo colaboraciones 
                con empresas reales, abarcando desde el diseño UI/UX hasta la implementación backend, 
                optimización SEO y gestión de bases de datos. Mi experiencia en atención al cliente 
                me ha dado una visión clara de cómo traducir necesidades de negocio en soluciones 
                técnicas efectivas.
            </p>
        </div>

        <section @class(['projectes'])>
            <p>WORK IN PROGRESS...</p>
        </section>

        @include('footer')
    </main>

</body>
</html>