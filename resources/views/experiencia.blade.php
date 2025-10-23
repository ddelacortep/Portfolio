<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daniel de la Corte - Experiencia</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/experiencia.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    <main>
        @include('header')

        <section class="experiencia-section">
            <h1>Mi Experiencia</h1>

            <div class="timeline">
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">Mayo 2025 - Octubre 2025</div>
                        <h3>Maquetador/Desarrollador Web</h3>
                        <h4>Tandem Projects</h4>
                        <p>Diseñé y desarrollé sitios web responsivos con enfoque mobile-first utilizando PHP, JavaScript, HTML, 
                            CSS y Python, priorizando código limpio, escalable y de alto rendimiento. Para proyectos con plazos ajustados, 
                            implementé soluciones ágiles mediante WordPress, adaptándome a las necesidades de urgencia de los clientes. 
                            Implementé optimizaciones SEO, estrategias de carga eficiente y mejoras de rendimiento, gestionando además 
                            el hosting, dominios y la seguridad de los proyectos. Coordiné revisiones continuas con clientes para 
                            incorporar su feedback y garantizar experiencias de usuario óptimas aplicando principios UI/UX.</p>
                        <ul class="timeline-skills">
                            <li>PHP</li>
                            <li>JavaScript</li>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>Wordpress</li>
                            <li>Python</li>
                            <li>SEO</li>
                            <li>Hosting</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">Junio 2024 - Febrero 2025</div>
                        <h3>Gestión de llamadas de emergencia en carretera</h3>
                        <h4>Catserveis S.XXI</h4>
                        <p>Gestioné más de 1.500 llamadas de emergencia mensuales con un tiempo de respuesta
                            promedio de 3 minutos, manteniendo un índice de satisfacción del cliente del 95%. 
                            Formé y acompañé a nuevos empleados, transmitiendo procedimientos y buenas prácticas 
                            que mejoraron la calidad del servicio y la agilidad operativa. Supervisé la operativa en sala, 
                            asegurando el cumplimiento de protocolos internos y la gestión correcta de datos conforme a estándares 
                            de calidad, fomentando una comunicación fluida y colaborativa entre el equipo para 
                            crear un entorno orientado a resultados.</p>
                        <ul class="timeline-skills">
                            <li>Gestión eficiente</li>
                            <li>Liderazgo y mentoría</li>
                            <li>CRM Microsoft</li>
                            <li>Comunicación efectiva</li>
                            <li>Trabajo en equipo</li>  
                            <li>Adaptabilidad y gestión bajo presión</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        @include('footer')
    </main>

    <script src="{{ asset('JavaScript/experiencia.js') }}"></script>
</body>
</html>