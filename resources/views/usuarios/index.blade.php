@extends('layouts.app')

@section('title','Usuarios')

@section('page-title','Gestión de Usuarios')

@section('content')

<div class="page-header">

    <div>

        <h2>Usuarios</h2>

        <p>Administra los usuarios registrados en el sistema.</p>

    </div>

    <a href="#" class="btn-primary">

        <i class="bi bi-person-plus"></i>

        Nuevo Usuario

    </a>

</div>


<div class="table-card">

    <div class="table-toolbar">

        <input
            type="text"
            class="search-input"
            placeholder="Buscar usuario...">

    </div>


    <table>

        <thead>

            <tr>

                <th>ID</th>

                <th>Nombre</th>

                <th>Correo</th>

                <th>Teléfono</th>

                <th>Acciones</th>

            </tr>

        </thead>


        <tbody>


            <tr>

                <td>1</td>

                <td>Carlos Hernández</td>

                <td>carlos@gmail.com</td>

                <td>9612345678</td>

                <td>

                    <button class="btn-action edit">

                        <i class="bi bi-pencil"></i>

                    </button>


                    <button class="btn-action delete">

                        <i class="bi bi-trash"></i>

                    </button>

                </td>

            </tr>


            <tr>

                <td>2</td>

                <td>María López</td>

                <td>maria@gmail.com</td>

                <td>9618765432</td>

                <td>

                    <button class="btn-action edit">

                        <i class="bi bi-pencil"></i>

                    </button>


                    <button class="btn-action delete">

                        <i class="bi bi-trash"></i>

                    </button>

                </td>

            </tr>


        </tbody>


    </table>


</div>


@endsection