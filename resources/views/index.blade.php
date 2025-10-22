<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daniel de la Corte - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <main>
        <header>
            <img src="Daniel de la Corte" alt="">
            <p><strong>Daniel de la Corte</strong></p>
            <div>
                <button @class(['button'])>Button 21</button>
                <button @class(['button'])>Button 2</button>
                <button @class(['button'])>Button 3</button>
                <button @class(['button'])>Button 4</button>
            </div>
        </header>

        <div @class(['descripcio'])>
            <p>Hola, mi nombre es Daniel</p>
            <h1><strong>Soy tecnico en desarrollo de aplicaciones web</strong></h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>

        <section @class(['projectes'])>
            <div @class(['projecte'])>
                <img src="project1.jpg" alt="Project 1">
                <h2>Project 1</h2>
                <p>Descripción del proyecto 1.</p>
            </div>
            <div @class(['projecte'])>
                <img src="project2.jpg" alt="Project 2">
                <h2>Project 2</h2>
                <p>Descripción del proyecto 2.</p>
            </div>
            <div @class(['projecte'])>
                <img src="project3.jpg" alt="Project 3">
                <h2>Project 3</h2>
                <p>Descripción del proyecto 3.</p>
            </div>
        </section>

        <footer>
            <div class="social">
                <p>
                    © 2025 Daniel de la Corte. All rights reserved
                    </br>
                    <a href="{{ route('index') }}">Daniel de la corte</a>
                </p>
            </div>
        </footer>
    </main>

</body>
</html>