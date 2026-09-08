@extends('layouts.app')

@section('title','Préstamos')

@section('page-title','Gestión de Préstamos')

@section('content')

<div class="page-header">

    <div>

        <h2>Préstamos</h2>

        <p>Administra los préstamos realizados por los usuarios.</p>

    </div>

    <a href="#" class="btn-primary">

        <i class="bi bi-plus-circle"></i>

        Nuevo Préstamo

    </a>

</div>


<div class="table-card">

    <div class="table-toolbar">

        <input
            type="text"
            class="search-input"
            placeholder="Buscar préstamo...">

    </div>


    <table>

        <thead>

            <tr>

                <th>ID</th>

                <th>Usuario</th>

                <th>Libro</th>

                <th>Fecha préstamo</th>

                <th>Fecha devolución</th>

                <th>Estado</th>

                <th>Acciones</th>

            </tr>

        </thead>


        <tbody>

            <tr>

                <td>1</td>

                <td>Juan Pérez</td>

                <td>Programación en Laravel</td>

                <td>12/07/2026</td>

                <td>19/07/2026</td>

                <td>
                    <span class="badge success">
                        Activo
                    </span>
                </td>

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

                <td>Ana López</td>

                <td>Base de Datos</td>

                <td>05/07/2026</td>

                <td>12/07/2026</td>

                <td>
                    <span class="badge warning">
                        Devuelto
                    </span>
                </td>

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