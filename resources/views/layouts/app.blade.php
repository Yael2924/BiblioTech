<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Bibliotech CODEX')</title>

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- CSS --}}
    @vite(['resources/css/app.css'])

</head>

<body>

    <div class="layout">

        {{-- Sidebar --}}
        @include('components.sidebar')

        <div class="main-content">

            {{-- Navbar --}}
            @include('components.navbar')

            <main class="content">

                @yield('content')

            </main>

        </div>

    </div>

</body>

</html>