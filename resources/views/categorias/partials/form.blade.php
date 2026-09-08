<div class="form-grid">

    <div class="form-group">

        <label for="nombre">Nombre</label>

        <input
            type="text"
            id="nombre"
            name="nombre"
            value="{{ old('nombre', $categoria->nombre ?? '') }}"
            placeholder="Ejemplo: Programación">

        @error('nombre')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="form-group">

        <label for="descripcion">Descripción</label>

        <textarea
            id="descripcion"
            name="descripcion"
            rows="5"
            placeholder="Descripción de la categoría...">{{ old('descripcion', $categoria->descripcion ?? '') }}</textarea>

        @error('descripcion')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

</div>