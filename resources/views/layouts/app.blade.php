<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>@yield('title','Bibliotech CODEX')</title>

    <link rel="preconnect"
        href="https://fonts.googleapis.com">

    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite('resources/css/app.css')

</head>

<body>

<div class="layout">

    @include('components.sidebar')

    <div class="main">

        @include('components.navbar')

        <div class="content">

            @if(session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
            <div class="alert-error">
                {{ session('error') }}
            </div>
            @endif
            
            @yield('content')

        </div>

    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const boton = document.getElementById('buscarISBN');

    if (!boton) return;

    boton.addEventListener('click', async function () {

        const isbn = document.getElementById('isbn').value.trim();

        if (isbn === '') {
            alert('Ingresa un ISBN.');
            return;
        }

        try {

            const respuesta = await fetch(`/api/libros/isbn/${isbn}`);

            const resultado = await respuesta.json();

            if (!resultado.success) {
                alert(resultado.message);
                return;
            }

            document.getElementById('titulo').value = resultado.data.titulo;
            document.getElementById('autor').value = resultado.data.autor;
            document.getElementById('editorial').value = resultado.data.editorial;
            document.getElementById('anio_publicacion').value = resultado.data.anio_publicacion;

        } catch (error) {
            alert('Error al consultar la API.');
            console.error(error);
        }

    });

});
</script>

</body>

</html>