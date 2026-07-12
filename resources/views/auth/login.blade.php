<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | BiblioTech CODEX</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    @vite('resources/css/app.css')

</head>


<body>


<div class="login-container">


    <div class="login-card">


        <div class="login-logo">

            <i class="bi bi-book-half"></i>

            <h1>
                BiblioTech <span>CODEX</span>
            </h1>

        </div>


        <h2>Bienvenido</h2>

        <p>
            Ingresa tus datos para acceder al sistema.
        </p>


        @if ($errors->any())

            <div class="login-error">

                {{ $errors->first() }}

            </div>

        @endif



        <form method="POST" action="{{ route('login.authenticate') }}">

            @csrf


            <div class="input-group">


                <i class="bi bi-envelope"></i>


                <input
                    type="email"
                    name="email"
                    placeholder="Correo electrónico"
                    value="{{ old('email') }}"
                    required>


            </div>



            <div class="input-group">


                <i class="bi bi-lock"></i>


                <input
                    type="password"
                    name="password"
                    placeholder="Contraseña"
                    required>


            </div>



            <button type="submit" class="btn-login">

                <i class="bi bi-box-arrow-in-right"></i>

                Iniciar sesión

            </button>


        </form>


    </div>


</div>


</body>

</html>