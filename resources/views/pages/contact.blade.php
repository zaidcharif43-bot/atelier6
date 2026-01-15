@extends('layouts.app')

@section('title', 'Contact - ClothesZC')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <nav class="breadcrumb">
            <a href="{{ route('home') }}">Accueil</a>
            <span>/</span>
            <span>Contact</span>
        </nav>
        <h1>Contactez-Nous</h1>
        <p>Nous sommes là pour vous aider</p>
    </div>
</section>

<!-- Contact Section -->
<section class="section contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info">
                <span class="section-tag">Restons en Contact</span>
                <h2>Parlons de Votre Style</h2>
                <p class="contact-intro">N'hésitez pas à nous contacter pour toute question ou suggestion. Notre équipe est là pour vous aider et vous répondra dans les plus brefs délais.</p>
                
                <div class="info-cards">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3>Adresse</h3>
                            <p>123 Rue de la Mode<br>75001 Paris, France</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3>Téléphone</h3>
                            <p>+33 1 23 45 67 89</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p>contact@clotheszc.com</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <h3>Horaires</h3>
                            <p>Lun - Ven : 9h - 18h<br>Sam : 10h - 16h</p>
                        </div>
                    </div>
                </div>

                <div class="social-section">
                    <h3>Suivez-nous</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrapper">
                <div class="form-header">
                    <h2>Envoyez-nous un message</h2>
                    <p>Nous vous répondrons sous 24h</p>
                </div>
                
                @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i> Nom complet</label>
                            <input type="text" id="name" name="name" required placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i> Email</label>
                            <input type="email" id="email" name="email" required placeholder="votre@email.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject"><i class="fas fa-tag"></i> Sujet</label>
                        <input type="text" id="subject" name="subject" required placeholder="Sujet de votre message">
                    </div>
                    <div class="form-group">
                        <label for="message"><i class="fas fa-comment-alt"></i> Message</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Écrivez votre message ici..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">
                        <i class="fas fa-paper-plane"></i> Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="map-placeholder">
        <div class="map-content">
            <i class="fas fa-map-marked-alt"></i>
            <h3>Notre Boutique</h3>
            <p>123 Rue de la Mode, 75001 Paris</p>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section faq-section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">FAQ</span>
            <h2 class="section-title">Questions Fréquentes</h2>
            <p class="section-subtitle">Trouvez rapidement les réponses à vos questions</p>
        </div>
        <div class="faq-grid">
            <div class="faq-item">
                <div class="faq-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <h3>Quels sont les délais de livraison ?</h3>
                <p>La livraison standard prend 3-5 jours ouvrés. La livraison express est disponible en 24-48h pour les commandes passées avant 14h.</p>
            </div>
            <div class="faq-item">
                <div class="faq-icon">
                    <i class="fas fa-undo"></i>
                </div>
                <h3>Comment effectuer un retour ?</h3>
                <p>Les retours sont gratuits sous 30 jours. Contactez notre service client pour obtenir votre étiquette de retour prépayée.</p>
            </div>
            <div class="faq-item">
                <div class="faq-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h3>Quels moyens de paiement acceptez-vous ?</h3>
                <p>Nous acceptons Visa, Mastercard, PayPal, Apple Pay et le paiement en 3x sans frais à partir de 100€.</p>
            </div>
            <div class="faq-item">
                <div class="faq-icon">
                    <i class="fas fa-ruler"></i>
                </div>
                <h3>Comment choisir ma taille ?</h3>
                <p>Consultez notre guide des tailles détaillé disponible sur chaque fiche produit. En cas de doute, n'hésitez pas à nous contacter.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
/* ===== CONTACT SECTION ===== */
.contact-section {
    background: var(--light);
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 60px;
    align-items: start;
}

/* ===== CONTACT INFO ===== */
.contact-info h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--dark);
    margin: 15px 0;
}

.contact-intro {
    color: var(--gray);
    line-height: 1.8;
    margin-bottom: 35px;
}

.info-cards {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-bottom: 35px;
}

.info-card {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 25px;
    background: var(--white);
    border-radius: 15px;
    box-shadow: var(--shadow);
    transition: var(--transition);
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-hover);
}

.info-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.info-icon i {
    font-size: 1.2rem;
    color: var(--white);
}

.info-content h3 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 5px;
}

.info-content p {
    color: var(--gray);
    font-size: 0.9rem;
    line-height: 1.6;
}

.social-section h3 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--dark);
    margin-bottom: 15px;
}

.social-icons {
    display: flex;
    gap: 12px;
}

.social-icon {
    width: 45px;
    height: 45px;
    background: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    box-shadow: var(--shadow);
    transition: var(--transition);
}

.social-icon:hover {
    background: var(--accent);
    color: var(--white);
    transform: translateY(-3px);
}

/* ===== CONTACT FORM ===== */
.contact-form-wrapper {
    background: var(--white);
    padding: 45px;
    border-radius: 25px;
    box-shadow: var(--shadow-hover);
}

.form-header {
    text-align: center;
    margin-bottom: 35px;
}

.form-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 5px;
}

.form-header p {
    color: var(--gray);
}

.contact-form .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.contact-form .form-group {
    margin-bottom: 20px;
}

.contact-form label {
    display: block;
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--dark);
    margin-bottom: 8px;
}

.contact-form label i {
    color: var(--accent);
    margin-right: 8px;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 15px 20px;
    border: 2px solid var(--light);
    border-radius: 12px;
    font-family: 'Raleway', sans-serif;
    font-size: 1rem;
    color: var(--dark);
    transition: var(--transition);
}

.contact-form input:focus,
.contact-form textarea:focus {
    outline: none;
    border-color: var(--accent);
    box-shadow: 0 0 0 4px rgba(233, 69, 96, 0.1);
}

.contact-form input::placeholder,
.contact-form textarea::placeholder {
    color: #aaa;
}

.btn-full {
    width: 100%;
    padding: 16px;
    font-size: 1rem;
}

.btn-full i {
    margin-right: 10px;
}

.alert-success {
    background: #d4edda;
    border: 1px solid #c3e6cb;
    color: #155724;
    padding: 15px 20px;
    border-radius: 12px;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    gap: 10px;
}

/* ===== MAP SECTION ===== */
.map-section {
    height: 350px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
}

.map-placeholder {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.map-content {
    text-align: center;
    color: var(--white);
}

.map-content i {
    font-size: 4rem;
    margin-bottom: 20px;
    opacity: 0.8;
}

.map-content h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    margin-bottom: 10px;
}

.map-content p {
    opacity: 0.9;
}

/* ===== FAQ SECTION ===== */
.faq-section {
    background: var(--white);
}

.faq-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.faq-item {
    padding: 35px;
    background: var(--light);
    border-radius: 20px;
    transition: var(--transition);
}

.faq-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow);
}

.faq-icon {
    width: 55px;
    height: 55px;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.faq-icon i {
    font-size: 1.3rem;
    color: var(--white);
}

.faq-item h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 12px;
}

.faq-item p {
    color: var(--gray);
    line-height: 1.7;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }

    .info-cards {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .contact-form-wrapper {
        padding: 30px;
    }

    .contact-form .form-row {
        grid-template-columns: 1fr;
    }

    .faq-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 576px) {
    .info-cards {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection
