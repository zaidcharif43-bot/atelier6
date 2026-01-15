<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

class PageController extends Controller
{
    /**
     * Affiche la page d'accueil
     */
    public function home()
    {
        // Récupérer les produits vedettes (8 premiers)
        $productController = new ProductController();
        $featuredProducts = $productController->getFeaturedProducts();
        
        return view('pages.home', compact('featuredProducts'));
    }

    /**
     * Affiche la page À propos
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Affiche la page Contact
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Traite l'envoi du formulaire de contact
     */
    public function sendContact(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Pour cette version statique, on simule l'envoi
        // Dans une vraie application, on enverrait un email ici
        
        return back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous recontacterons bientôt.');
    }
}