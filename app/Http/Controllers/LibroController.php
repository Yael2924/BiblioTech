<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreLibroRequest;
use App\Models\Libro;
use App\Models\Categoria;
use App\Http\Requests\UpdateLibroRequest;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::with('categoria')
                    ->latest()
                    ->get();
         return view('libros.index',compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nombre')->get();
        return view('libros.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibroRequest $request)
    {
        Libro::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'editorial' => $request->editorial,
            'isbn' => $request->isbn,
            'anio_publicacion' => $request->anio_publicacion,
            'categoria_id' => $request->categoria_id,
            'portada' => null,
            'estado' => true,
        ]);

        return redirect()
                ->route('libros.index')
                ->with('success', 'Libro registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        $categorias = Categoria::orderBy('nombre')->get();
        return view('libros.edit', compact('libro', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibroRequest $request, Libro $libro)
    {
        $libro->update([
        'titulo' => $request->titulo,
        'autor' => $request->autor,
        'editorial' => $request->editorial,
        'isbn' => $request->isbn,
        'anio_publicacion' => $request->anio_publicacion,
        'categoria_id' => $request->categoria_id,
    ]);

    return redirect()
            ->route('libros.index')
            ->with('success','Libro actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
