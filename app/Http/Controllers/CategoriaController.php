<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::latest()->get();
        return view('categorias.index', compact('categorias'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaRequest $request)
    {

        Categoria::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'estado'=>true
        ]);


        return redirect()
            ->route('categorias.index')
            ->with('success','Categoría creada correctamente.');
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
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {

        $categoria->update([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion
        ]);


        return redirect()
            ->route('categorias.index')
            ->with('success','Categoría actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()
            ->route('categorias.index')
            ->with('success','Categoría eliminada correctamente.');
    }
}
