<div class="form-grid">

    <div class="form-group">

        <label>Título</label>

        <input
            id="titulo"
            type="text"
            name="titulo"
            value="{{ old('titulo', $libro->titulo ?? '') }}">
        @error('titulo')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="form-group">

        <label>Autor</label>

        <input
            id="autor"
            type="text"
            name="autor"
            value="{{ old('autor', $libro->autor ?? '') }}">
        @error('autor')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="form-group">

        <label>Editorial</label>

        <input
            id="editorial"
            type="text"
            name="editorial"
            value="{{ old('editorial', $libro->editorial ?? '') }}">
        @error('editorial')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="form-group">

        <label>ISBN</label>

        <input
            id="isbn"
            type="text"
            name="isbn"
            value="{{ old('isbn', $libro->isbn ?? '') }}">

        <button
            type="button"
            id="buscarISBN"
            class="btn btn-secondary mt-2">
            Buscar por ISBN
        </button>

        @error('isbn')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="form-group">

        <label>Año de publicación</label>

        <input
            id="anio_publicacion"
            type="number"
            name="anio_publicacion"
            value="{{ old('anio_publicacion', $libro->anio_publicacion ?? '') }}">
        @error('anio_publicacion')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="form-group">

        <label>Categoría</label>

        <select id="categoria_id" name="categoria_id">

            <option value="">Selecciona una categoría</option>

            @foreach($categorias as $categoria)

                <option
                    value="{{ $categoria->id }}"
                    {{ old('categoria_id', $libro->categoria_id ?? '') == $categoria->id ? 'selected' : '' }}>
                    {{ $categoria->nombre }}
                </option>

            @endforeach

        </select>
        @error('categoria_id')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

</div>