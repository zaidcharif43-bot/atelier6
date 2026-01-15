<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Liste tous les produits avec catégories
     */
    public function index(Request $request)
    {
        $allProducts = $this->getAllProducts();
        
        // Filtrer par catégorie si spécifiée
        $categorySlug = $request->get('category');
        if ($categorySlug) {
            $products = $this->getProductsByCategory($categorySlug);
        } else {
            $products = $allProducts;
        }
        
        // Préparer les catégories avec le nombre de produits
        $categoriesData = $this->getCategories();
        $categories = [];
        foreach ($categoriesData as $slug => $cat) {
            $categories[] = [
                'slug' => $slug,
                'name' => $cat['name'],
                'count' => count($this->getProductsByCategory($slug))
            ];
        }
        
        return view('pages.index', compact('products', 'categories'));
    }

    /**
     * Affiche les produits d'une catégorie spécifique
     */
    public function category($categorySlug)
    {
        $products = $this->getProductsByCategory($categorySlug);
        $allCategories = $this->getCategories();
        $currentCategory = $categorySlug;
        
        $category = $allCategories[$categorySlug] ?? [
            'name' => ucfirst($categorySlug),
            'description' => 'Découvrez notre collection',
            'image' => 'https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?w=1920&q=80'
        ];
        
        return view('pages.index', compact('products', 'allCategories', 'currentCategory', 'category'));
    }

    /**
     * Affiche un produit spécifique
     */
    public function show($id)
    {
        $product = $this->getProductById($id);
        
        if (!$product) {
            abort(404);
        }
        
        $relatedProducts = $this->getRelatedProducts($product['category'], $id);
        
        return view('pages.show', compact('product', 'relatedProducts'));
    }

    /**
     * Récupère les produits vedettes pour la page d'accueil
     */
    public function getFeaturedProducts()
    {
        return $this->getAllProducts();
    }

    /**
     * Données statiques des catégories
     */
    public function getCategories()
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
     * Données statiques des 5 produits réels
     */
    private function getAllProducts()
    {
        return [
            1 => [
                'id' => 1,
                'name' => 'T-Shirt Blanc Classique',
                'category' => 'homme',
                'price' => 24.99,
                'old_price' => 34.99,
                'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800&q=80',
                'rating' => 4.8,
                'reviews' => 156,
                'description' => 'T-shirt blanc en coton 100% biologique, coupe régulière. Parfait pour un look décontracté et élégant au quotidien.',
                'features' => ['100% Coton biologique', 'Coupe régulière', 'Lavable à 30°C', 'Disponible en S, M, L, XL'],
                'stock' => 45,
                'new' => false,
                'sale' => true
            ],
            2 => [
                'id' => 2,
                'name' => 'Robe d\'Été Fleurie',
                'category' => 'femme',
                'price' => 59.99,
                'old_price' => null,
                'image' => 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=800&q=80',
                'rating' => 4.9,
                'reviews' => 89,
                'description' => 'Magnifique robe d\'été avec motifs floraux. Tissu léger et fluide, parfaite pour les journées ensoleillées.',
                'features' => ['Viscose légère', 'Motifs floraux', 'Coupe évasée', 'Longueur midi'],
                'stock' => 23,
                'new' => true,
                'sale' => false
            ],
            3 => [
                'id' => 3,
                'name' => 'Jean Slim Bleu Foncé',
                'category' => 'homme',
                'price' => 49.99,
                'old_price' => 69.99,
                'image' => 'https://images.unsplash.com/photo-1542272604-787c3835535d?w=800&q=80',
                'rating' => 4.6,
                'reviews' => 234,
                'description' => 'Jean slim stretch en denim premium. Coupe moderne et confortable grâce à l\'élasthanne.',
                'features' => ['98% Coton, 2% Élasthanne', 'Coupe slim', 'Lavage stone wash', 'Tailles 28 à 38'],
                'stock' => 67,
                'new' => false,
                'sale' => true
            ],
            4 => [
                'id' => 4,
                'name' => 'Blazer Noir Élégant',
                'category' => 'femme',
                'price' => 89.99,
                'old_price' => 119.99,
                'image' => 'https://images.unsplash.com/photo-1591369822096-ffd140ec948f?w=800&q=80',
                'rating' => 4.7,
                'reviews' => 112,
                'description' => 'Blazer noir classique et intemporel. Coupe ajustée parfaite pour le bureau ou les occasions spéciales.',
                'features' => ['Polyester premium', 'Doublure satin', 'Coupe ajustée', 'Poches avant'],
                'stock' => 18,
                'new' => true,
                'sale' => true
            ],
            5 => [
                'id' => 5,
                'name' => 'Sac à Main Cuir Marron',
                'category' => 'accessoires',
                'price' => 79.99,
                'old_price' => null,
                'image' => 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=800&q=80',
                'rating' => 4.8,
                'reviews' => 78,
                'description' => 'Sac à main en cuir véritable avec finitions soignées. Élégant et pratique avec plusieurs compartiments.',
                'features' => ['Cuir véritable', 'Fermeture éclair', 'Bandoulière ajustable', 'Dimensions: 30x25x12 cm'],
                'stock' => 34,
                'new' => true,
                'sale' => false
            ]
        ];
    }

    /**
     * Obtenir les produits par catégorie
     */
    private function getProductsByCategory($category)
    {
        $allProducts = $this->getAllProducts();
        return array_filter($allProducts, function($product) use ($category) {
            return $product['category'] === $category;
        });
    }

    /**
     * Obtenir un produit par ID
     */
    private function getProductById($id)
    {
        $products = $this->getAllProducts();
        return isset($products[$id]) ? $products[$id] : null;
    }

    /**
     * Obtenir des produits similaires
     */
    private function getRelatedProducts($category, $excludeId)
    {
        $products = $this->getProductsByCategory($category);
        unset($products[$excludeId]);
        return array_slice($products, 0, 4, true);
    }
}
