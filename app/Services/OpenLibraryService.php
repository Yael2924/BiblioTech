<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OpenLibraryService
{
    public function buscarPorISBN($isbn)
    {
        $response = Http::get(
            "https://openlibrary.org/api/books",
            [
                'bibkeys' => "ISBN:$isbn",
                'format' => 'json',
                'jscmd' => 'data'
            ]
        );

        if (!$response->successful()) {
            return null;
        }

        $datos = $response->json();

        $libro = $datos["ISBN:$isbn"] ?? null;

        if (!$libro) {
            return null;
        }

        return [
            'titulo' => $libro['title'] ?? '',
            'autor' => $libro['authors'][0]['name'] ?? '',
            'editorial' => $libro['publishers'][0]['name'] ?? '',
            'anio_publicacion' => substr(
                $libro['publish_date'] ?? '',
                -4
            ),
        ];
    }
}