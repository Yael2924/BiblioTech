<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Libro::insert([

            [
                'categoria_id' => 2,
                'titulo' => 'Clean Code',
                'autor' => 'Robert C. Martin',
                'editorial' => 'Prentice Hall',
                'isbn' => '9780132350884',
                'anio_publicacion' => 2008,
                'portada' => null,
                'estado' => true,
            ],

            [
                'categoria_id' => 2,
                'titulo' => 'Laravel Up & Running',
                'autor' => 'Matt Stauffer',
                'editorial' => "O'Reilly",
                'isbn' => '9781492041214',
                'anio_publicacion' => 2019,
                'portada' => null,
                'estado' => true,
            ],

            [
                'categoria_id' => 1,
                'titulo' => 'Don Quijote de la Mancha',
                'autor' => 'Miguel de Cervantes',
                'editorial' => 'Espasa',
                'isbn' => '9788424119479',
                'anio_publicacion' => 1605,
                'portada' => null,
                'estado' => true,
            ],

        ]);
    }
}
