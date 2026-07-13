@extends('layouts.app')

@section('title', 'Editar Categoría')

@section('page-title', 'Editar Categoría')

@section('content')

<div class="page-header">

    <div>

        <h2>Editar Categoría</h2>

        <p>Modifica la información de la categoría.</p>

    </div>

</div>

<div class="table-card">

    <form action="{{ route('categorias.update', $categoria) }}" method="POST">

        @csrf
        @method('PUT')

        @include('categorias.partials.form')

        <div style="margin-top:25px; display:flex; gap:10px;">

            <button type="submit" class="btn-primary">

                <i class="bi bi-check-circle"></i>

                Actualizar Categoría

            </button>

            <a href="{{ route('categorias.index') }}" class="btn-secondary">

                Cancelar

            </a>

        </div>

    </form>

</div>

@endsection