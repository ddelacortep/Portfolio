<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daniel de la Corte - Habilidades</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/habilidades.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    <main>
        @include('header')

        <section class="habilidades-section">
            <h1>Mis Habilidades</h1>
            
            <div class="categoria">
                <h2>Lenguajes de Programación</h2>
                <div class="skills-grid">
                    <div class="skill-card" data-skill="html">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/html-5.png') }}" alt="HTML5">
                        </div>
                        <p class="skill-name">HTML5</p>
                    </div>
                    <div class="skill-card" data-skill="css">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/css-3.png') }}" alt="CSS3">
                        </div>
                        <p class="skill-name">CSS3</p>
                    </div>
                    <div class="skill-card" data-skill="javascript">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/js.png') }}" alt="JavaScript">
                        </div>
                        <p class="skill-name">JavaScript</p>
                    </div>
                    <div class="skill-card" data-skill="python">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/python.png') }}" alt="Python">
                        </div>
                        <p class="skill-name">Python</p>
                    </div>
                    <div class="skill-card" data-skill="java">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/java.png') }}" alt="Java">
                        </div>
                        <p class="skill-name">Java</p>
                    </div>
                    <div class="skill-card" data-skill="sql">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/sql.png') }}" alt="SQL">
                        </div>
                        <p class="skill-name">SQL</p>
                    </div>
                    <div class="skill-card" data-skill="php">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/php.png') }}" alt="PHP">
                        </div>
                        <p class="skill-name">PHP</p>
                    </div>
                </div>
            </div>

            <div class="categoria">
                <h2>Frameworks</h2>
                <div class="skills-grid">
                    <div class="skill-card" data-skill="laravel">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/laravel.svg') }}" alt="Laravel">
                        </div>
                        <p class="skill-name">Laravel</p>
                    </div>
                    <div class="skill-card" data-skill="vue">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/vue.svg') }}" alt="Vue.js">
                        </div>
                        <p class="skill-name">Vue.js</p>
                    </div>
                    <div class="skill-card" data-skill="bootstrap">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/bootstrap.svg') }}" alt="Bootstrap">
                        </div>
                        <p class="skill-name">Bootstrap</p>
                    </div>
                    <div class="skill-card" data-skill="wordpress">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/wordpress.svg') }}" alt="WordPress">
                        </div>
                        <p class="skill-name">WordPress</p>
                    </div>
                    <div class="skill-card" data-skill="tailwind">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/tailwind.png') }}" alt="Tailwind CSS">
                        </div>
                        <p class="skill-name">Tailwind CSS</p>
                    </div>
                </div>
            </div>

            <div class="categoria">
                <h2>Herramientas</h2>
                <div class="skills-grid">
                    <div class="skill-card" data-skill="git">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/git.png') }}" alt="Git">
                        </div>
                        <p class="skill-name">Git</p>
                    </div>
                    <div class="skill-card" data-skill="vscode">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/vs.png') }}" alt="VS Code">
                        </div>
                        <p class="skill-name">VS Code</p>
                    </div>
                    <div class="skill-card" data-skill="github">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/github.svg') }}" alt="GitHub">
                        </div>
                        <p class="skill-name">GitHub</p>
                    </div>
                    <div class="skill-card" data-skill="docker">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/docker.svg') }}" alt="Docker">
                        </div>
                        <p class="skill-name">Docker</p>
                    </div>
                    <div class="skill-card" data-skill="figma">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/figma.svg') }}" alt="Figma">
                        </div>
                        <p class="skill-name">Figma</p>
                    </div>
                    <div class="skill-card" data-skill="mysql">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/mysql.svg') }}" alt="MySQL">
                        </div>
                        <p class="skill-name">MySQL</p>
                    </div>
                    <div class="skill-card" data-skill="intellij">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/intellij.svg') }}" alt="IntelliJ">
                        </div>
                        <p class="skill-name">IntelliJ</p>
                    </div>
                    <div class="skill-card" data-skill="mongodb">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/mongodb.png') }}" alt="MongoDB">
                        </div>
                        <p class="skill-name">MongoDB</p>
                    </div>
                    <div class="skill-card" data-skill="linux">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/linux.png') }}" alt="Linux">
                        </div>
                        <p class="skill-name">Linux</p>
                    </div>
                </div>
            </div>

            <div class="categoria">
                <h2>Metodologías</h2>
                <div class="skills-grid">
                    <div class="skill-card" data-skill="scrum">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/scrum.svg') }}" alt="Scrum">
                        </div>
                        <p class="skill-name">Scrum</p>
                    </div>
                    <div class="skill-card" data-skill="express">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/express.png') }}" alt="Proyectos Express">
                        </div>
                        <p class="skill-name">Proyectos Express</p>
                    </div>
                    <div class="skill-card" data-skill="ajustes">
                        <div class="skill-image">
                            <img src="{{ asset('Portfolio.icons/ajustes.png') }}" alt="Desarrollo Ágil">
                        </div>
                        <p class="skill-name">Desarrollo Ágil</p>
                    </div>
                </div>
            </div>
        </section>

        @include('footer')
    </main>

    <script src="{{ asset('JavaScript/habilidades.js') }}"></script>
</body>
</html>