@extends('layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Panel Principal')

@section('content')

<div class="dashboard">

    <!-- Tarjetas -->
    <div class="cards">

        <div class="card card-primary">
            <div class="card-icon">
                <i class="bi bi-book-fill"></i>
            </div>

            <div class="card-info">
                <h2>120</h2>
                <p>Total de Libros</p>
                <small>+8 registrados este mes</small>
            </div>
        </div>

        <div class="card card-success">
            <div class="card-icon">
                <i class="bi bi-tags-fill"></i>
            </div>

            <div class="card-info">
                <h2>10</h2>
                <p>Categorías</p>
                <small>Actualizadas</small>
            </div>
        </div>

        <div class="card card-warning">
            <div class="card-icon">
                <i class="bi bi-journal-check"></i>
            </div>

            <div class="card-info">
                <h2>45</h2>
                <p>Préstamos</p>
                <small>12 activos</small>
            </div>
        </div>

        <div class="card card-danger">
            <div class="card-icon">
                <i class="bi bi-people-fill"></i>
            </div>

            <div class="card-info">
                <h2>5</h2>
                <p>Usuarios</p>
                <small>Administradores</small>
            </div>
        </div>

    </div>

    <div class="dashboard-grid">

        <!-- Tabla -->
        <div class="table-card">

            <div class="section-title">
                <h3>Últimos libros registrados</h3>
            </div>

            <table>

                <thead>

                    <tr>

                        <th>Título</th>

                        <th>Autor</th>

                        <th>Categoría</th>

                        <th>Estado</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Clean Code</td>

                        <td>Robert C. Martin</td>

                        <td>Programación</td>

                        <td><span class="badge success">Disponible</span></td>

                    </tr>

                    <tr>

                        <td>Laravel Up & Running</td>

                        <td>Matt Stauffer</td>

                        <td>Programación</td>

                        <td><span class="badge warning">Prestado</span></td>

                    </tr>

                    <tr>

                        <td>Don Quijote</td>

                        <td>Miguel de Cervantes</td>

                        <td>Literatura</td>

                        <td><span class="badge success">Disponible</span></td>

                    </tr>

                </tbody>

            </table>

        </div>

        <!-- Actividad -->
        <div class="activity-card">

            <div class="section-title">
                <h3>Actividad reciente</h3>
            </div>

            <ul>

                <li>📚 Nuevo libro agregado.</li>

                <li>👤 Usuario registrado.</li>

                <li>📖 Préstamo realizado.</li>

                <li>🏷 Nueva categoría creada.</li>

            </ul>

        </div>

    </div>

    <footer class="footer">

        Bibliotech CODEX © {{ date('Y') }}

    </footer>

</div>

@endsection