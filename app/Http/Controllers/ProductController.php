<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(3); // pour la pagination 
        return view('home', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'photo' => 'required|image', 
        ]);

        $image = null;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo')->store('images', 'public');
        }

    

        Product::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $image,
        ]);

        return redirect()->route('products.create')->with('success', 'Produit ajouté avec succès !');

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            \Storage::disk('public')->delete($product->image);
        }
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product has been deleted');
    }
}
