<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProduitController;

// Page d'accueil
Route::get('/', [PageController::class, 'home'])->name('home');

// Pages statiques
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Route pour traiter le formulaire de contact
Route::post('/contact', [PageController::class, 'sendContact'])->name('contact.send');

// Routes produits (version originale)
Route::get('/produits', [ProductController::class, 'index'])->name('produits.index');
Route::get('/produits/{category}', [ProductController::class, 'category'])->name('produits.category');
Route::get('/produit/{id}', [ProductController::class, 'show'])->name('produits.show');

// ========================================
// Routes TP Atelier 7 - Filtrage par catégorie
// ========================================
Route::get('/categories', [ProduitController::class, 'index'])->name('categories.index');
Route::get('/categories/{cat}', [ProduitController::class, 'getProductsByCategorie'])->name('categories.filter');
