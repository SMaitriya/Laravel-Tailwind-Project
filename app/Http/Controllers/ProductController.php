<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */// Récupère et affiche les produits avec pagination (3 par page)

    public function index()
    {
        $products = Product::paginate(3); 
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

        // Validation des champs du formulaire


        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'photo' => 'required|image', 
        ]);

        // Stocke l'image 

        $image = $request->file('photo')->store('images', 'public');


        // Création du produit

        Product::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $image,
        ]);

        return redirect()->route('products.create')->with('success', 'Product added successfully !');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Affiche le formulaire d’édition d’un produit.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));


    }

    /**
     * Met à jour les informations d’un produit existant.
     */
    public function update(Request $request, string $id)
    {

        $product = Product::findOrFail($id);


        // Validation des champs


        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'photo' => 'nullable|image', 
        ]);

        // Mise à jour de l’image si une nouvelle est envoyée


        if ($request->hasFile('photo')) {
            if($product->image) {
                \Storage::disk('public')->delete($product->image);
            }

            $product->image =$request->file('photo')->store('images', 'public');
        }

         // Mets à jour les autres données

         $product->update([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'description' => $request->description,
         ]);

         return redirect()->route('products.edit.list')->with('success', 'The product has been successfully updated');
            

    }

    /**
     * Remove the specified resource from storage.
     *
     * // Supprime le produit et son image associée du stockage

     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            \Storage::disk('public')->delete($product->image);
        }
        $product->delete();

        return redirect()->route('products.edit.list')->with('success', 'The product has been successfully deleted');
    }



    /**
     * Affiche la liste des produits pour les modifier.
     */

    public function editList()
    {
        
        $products = Product::all();
        return view('edit-list', compact('products'));
    
    }

}
