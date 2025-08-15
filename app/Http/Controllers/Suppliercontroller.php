<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Http\Requests\SupplierRequest;

class Suppliercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::latest()->paginate(10);
        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = new Supplier();
        return view('suppliers.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplierRequest $request)
    {
        Supplier::create($request->validated());
        return redirect()->route('suppliers.index')->with('suppliers', 'Categoria creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $catesuppliersgories = Supplier::find($id);
        return view('suppliers.show', compact('suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Supplier::find($id);
        return view('categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplierRequest $request, string $id)
    {
        $suppliers = Supplier::find($id);
        $suppliers->update($request->validated());

        return redirect()->route('suppliers.index')->with('updated', 'Categoria actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suppliers = Supplier::find($id);
        $suppliers->delete();

        return redirect()->route('suppliers.index')->with('deleted', 'Categoria eliminada correctamente');
    }
}
