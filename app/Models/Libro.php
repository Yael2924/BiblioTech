<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Libro extends Model
{
    protected $table = 'libros';

    protected $fillable = [
        'categoria_id',
        'titulo',
        'autor',
        'editorial',
        'isbn',
        'anio_publicacion',
        'portada',
        'estado'
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];

    /**
     * Un libro pertenece a una categoría.
     */
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    /**
     * Un libro puede tener muchos préstamos.
     */
    public function prestamos(): HasMany
    {
        return $this->hasMany(Prestamo::class);
    }
}