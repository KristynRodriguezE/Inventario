<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductEntry;
use App\Http\Requests\ProductEntryRequest;

class ProductEntrycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_entries = ProductEntry::latest()->paginate(10);
        return view('product_entries.index', compact('product_entries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product_entries = new ProductEntry();
        return view('product_entries.create', compact('product_entries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductEntryRequest $request)
    {
        ProductEntry::create($request->validated());
        return redirect()->route('product_entries.index')->with('v', 'Categoria creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $product_entries = ProductEntry::find($id);
        return view('product_entries.show', compact('product_entries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $product_entries = ProductEntry::find($id);
        return view('product_entries.edit', compact('product_entries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductEntryRequest $request, int $id)
    {
        $product_entries = ProductEntry::find($id);
        $product_entries->update($request->validated());

        return redirect()->route('product_entries.index')->with('updated', 'Categoria actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product_entries = ProductEntry::find($id);
        $product_entries->delete();

        return redirect()->route('product_entries.index')->with('deleted', 'Categoria eliminada correctamente');
    }
}
