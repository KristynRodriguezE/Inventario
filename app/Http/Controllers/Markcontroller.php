<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;
use App\Http\Requests\MarkRequest;

class Markcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marks = Mark::latest()->paginate(10);
        return view('marks.index', compact('marks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marks = new Mark();
        return view('marks.create', compact('marks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MarkRequest $request)
    {
        Mark::create($request->validated());
        return redirect()->route('marks.index')->with('marks', 'Categoria creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $marks = Mark::find($id);
        return view('marks.show', compact('marks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $marks = Mark::find($id);
        return view('marks.edit', compact('marks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MarkRequest $request, int $id)
    {
        $marks = Mark::find($id);
        $marks->update($request->validated());

        return redirect()->route('marks.index')->with('updated', 'Categoria actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $marks = Mark::find($id);
        $marks->delete();

        return redirect()->route('marks.index')->with('deleted', 'Categoria eliminada correctamente');
    }
}
