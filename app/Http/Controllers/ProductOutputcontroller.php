<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductOutput;
use App\Http\Requests\ProductOutputRequest;

class ProductOutputcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_outputs = ProductOutput::latest()->paginate(10);
        return view('product_outputs.index', compact('product_outputs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product_outputs = new ProductOutput();
        return view('product_outputs.create', compact('product_outputs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductOutputRequest $request)
    {
        ProductOutput::create($request->validated());
        return redirect()->route('product_outputs.index')->with('product_outputs', 'Categoria creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $product_outputs = ProductOutput::find($id);
        return view('product_outputs.show', compact('product_outputs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $product_outputs = ProductOutput::find($id);
        return view('product_outputs.edit', compact('product_outputs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductOutputRequest $request, int $id)
    {
        $product_outputs = ProductOutput::find($id);
        $product_outputs->update($request->validated());

        return redirect()->route('product_outputs.index')->with('updated', 'Categoria actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product_outputs = ProductOutput::find($id);
        $product_outputs->delete();

        return redirect()->route('product_outputs.index')->with('deleted', 'Categoria eliminada correctamente');
    }
}
