<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = new Product();
        return view('products.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('products.index')->with('products', 'Categoria creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $products = Product::find($id);
        return view('products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $products = Product::find($id);
        return view('products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, int $id)
    {
        $products = Product::find($id);
        $products->update($request->validated());

        return redirect()->route('products.index')->with('updated', 'Categoria actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $products = Product::find($id);
        $products->delete();

        return redirect()->route('products.index')->with('deleted', 'Categoria eliminada correctamente');
    }
}
