<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Données des catégories avec métadonnées
     */
    private function getCategoriesMetadata()
    {
        return [
            'homme' => [
                'name' => 'Homme',
                'icon' => '👨',
                'description' => 'Mode masculine tendance',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1920&q=80'
            ],
            'femme' => [
                'name' => 'Femme',
                'icon' => '👩',
                'description' => 'Mode féminine élégante',
                'image' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?w=1920&q=80'
            ],
            'accessoires' => [
                'name' => 'Accessoires',
                'icon' => '👜',
                'description' => 'Sacs, bijoux, accessoires',
                'image' => 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=1920&q=80'
            ]
        ];
    }

    /**
     * Liste tous les produits avec filtrage par catégorie et pagination
     */
    public function index(Request $request)
    {
        // Récupérer le filtre de catégorie
        $categorySlug = $request->get('category');
        
        // Récupérer les produits (filtrés ou tous) avec pagination (3 par page)
        if ($categorySlug) {
            $products = Produit::where('categorie', $categorySlug)->paginate(3);
        } else {
            $products = Produit::paginate(3);
        }
        
        // Préparer les catégories avec le nombre de produits
        $categoriesMetadata = $this->getCategoriesMetadata();
        $categories = [];
        
        foreach ($categoriesMetadata as $slug => $cat) {
            $categories[] = [
                'slug' => $slug,
                'name' => $cat['name'],
                'icon' => $cat['icon'],
                'count' => Produit::where('categorie', $slug)->count()
            ];
        }
        
        return view('pages.index', compact('products', 'categories', 'categorySlug'));
    }

    /**
     * Affiche les produits d'une catégorie spécifique avec pagination
     */
    public function category($categorySlug)
    {
        // Récupérer les produits de la catégorie avec pagination (3 par page)
        $products = Produit::where('categorie', $categorySlug)->paginate(3);
        
        // Métadonnées des catégories
        $allCategories = $this->getCategoriesMetadata();
        $currentCategory = $categorySlug;
        
        // Préparer les catégories pour la sidebar
        $categories = [];
        foreach ($allCategories as $slug => $cat) {
            $categories[] = [
                'slug' => $slug,
                'name' => $cat['name'],
                'icon' => $cat['icon'],
                'count' => Produit::where('categorie', $slug)->count()
            ];
        }
        
        $category = $allCategories[$categorySlug] ?? [
            'name' => ucfirst($categorySlug),
            'description' => 'Découvrez notre collection',
            'image' => 'https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?w=1920&q=80'
        ];
        
        return view('pages.index', compact('products', 'categories', 'currentCategory', 'category', 'categorySlug'));
    }

    /**
     * Affiche un produit spécifique
     */
    public function show($id)
    {
        $product = Produit::find($id);
        
        if (!$product) {
            abort(404);
        }
        
        // Récupérer les produits similaires (même catégorie)
        $relatedProducts = Produit::where('categorie', $product->categorie)
            ->where('id', '!=', $id)
            ->limit(4)
            ->get();
        
        return view('pages.show', compact('product', 'relatedProducts'));
    }

    /**
     * Récupère les produits vedettes pour la page d'accueil
     */
    public function getFeaturedProducts()
    {
        return Produit::orderBy('rating', 'desc')->limit(8)->get();
    }

    /**
     * Récupère les catégories avec métadonnées
     */
    public function getCategories()
    {
        return $this->getCategoriesMetadata();
    }
}
