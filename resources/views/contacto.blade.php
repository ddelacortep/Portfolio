<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daniel de la Corte - Contacto</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    <main>
        @include('header')

        <div class="content-wrapper">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="contacto-container">
                <div class="contacto-text">
                    <h2>Contacta conmigo</h2>

                    <p>Si estás buscando sumar talento a tu equipo, tienes una vacante que podría encajar 
                        conmigo o simplemente quieres conocer más sobre mi experiencia y habilidades, 
                        estaré encantado de conversar contigo.</p>
                    
                    <p>Puedes contactarme a través del formulario de esta página, por LinkedIn o redes sociales. 
                        Estoy abierto a nuevas oportunidades laborales y respondo a todos los mensajes.
                        ¡Espero tu contacto!</p>
                </div>

                <div class="contacto-form">
                    @include('form')
                </div>
            </div>
        </div>
    </main>

    @include('footer')
</body>
</html>