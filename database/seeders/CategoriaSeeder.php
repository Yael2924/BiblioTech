<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Categoria::insert([
            [
                'nombre' => 'Literatura',
                'descripcion' => 'Libros de literatura',
                'estado' => true,
            ],
            [
                'nombre' => 'Tecnología',
                'descripcion' => 'Libros tecnológicos',
                'estado' => true,
            ],
            [
                'nombre' => 'Historia',
                'descripcion' => 'Libros históricos',
                'estado' => true,
            ],
            [
                'nombre' => 'Ciencia',
                'descripcion' => 'Libros científicos',
                'estado' => true,
            ],
            [
                'nombre' => 'Infantil',
                'descripcion' => 'Libros para niños',
                'estado' => true,
            ],
        ]);
    }
}
