<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class Categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = new Category();
        return view('categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect()->route('categories.index')->with('categories', 'Categoria creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $categories = Category::find($id);
        return view('categories.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $categories = Category::find($id);
        return view('categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, int $id)
    {
        $categories = Category::find($id);
        $categories->update($request->validated());

        return redirect()->route('categories.index')->with('updated', 'Categoria actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return redirect()->route('categories.index')->with('deleted', 'Categoria eliminada correctamente');
    }
}
