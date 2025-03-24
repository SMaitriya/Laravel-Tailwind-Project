<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



// Route de la page d’accueil (liste des produits)

Route::get('/', [ProductController::class, 'index']); 





// Génère toutes les routes REST pour les produits

Route::resource('products', ProductController::class);


// Route de la page edit a product


Route::get('edit-products/list', [ProductController::class, 'editList'])->name('products.edit.list');





