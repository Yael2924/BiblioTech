<aside class="sidebar">

    <div class="logo">

        <i class="bi bi-book-half"></i>

        <div>

            <h2>Bibliotech</h2>

            <span>CODEX</span>

        </div>

    </div>

    <ul>

        <li>

            <a href="{{ route('dashboard') }}"
                class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid-fill"></i>

                Dashboard

            </a>

        </li>

        <li>

            <a href="{{ route('libros.index') }}"
            class="{{ request()->routeIs('libros.*') ? 'active' : '' }}">

                <i class="bi bi-book-fill"></i>

                Libros

            </a>

        </li>

        <li>

            <a href="{{ route('categorias.index') }}"
            class="{{ request()->routeIs('categorias.*') ? 'active' : '' }}">

                <i class="bi bi-tags-fill"></i>

                Categorías

            </a>

        </li>

        <li>

            <a href="{{ route('prestamos.index') }}">

                <i class="bi bi-journal-check"></i>

                Préstamos

            </a>

        </li>

        <li>

            <a href="{{ route('usuarios.index') }}">

                <i class="bi bi-people-fill"></i>

                Usuarios

            </a>

        </li>

    </ul>

    <div class="logout">

        <a href="#">

            <i class="bi bi-box-arrow-right"></i>

            Cerrar sesión

        </a>

    </div>

</aside>