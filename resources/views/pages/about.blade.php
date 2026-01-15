@extends('layouts.app')

@section('title', 'À Propos - ClothesZC')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <nav class="breadcrumb">
            <a href="{{ route('home') }}">Accueil</a>
            <span>/</span>
            <span>À Propos</span>
        </nav>
        <h1>Notre Histoire</h1>
        <p>Découvrez l'univers ClothesZC</p>
    </div>
</section>

<!-- Story Section -->
<section class="section">
    <div class="container">
        <div class="story-grid">
            <div class="story-images">
                <div class="story-img-main">
                    <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=600&q=80" alt="Notre Boutique">
                </div>
                <div class="story-img-secondary">
                    <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=400&q=80" alt="Mode">
                </div>
                <div class="story-badge">
                    <span class="badge-number">2024</span>
                    <span class="badge-text">Depuis</span>
                </div>
            </div>
            <div class="story-content">
                <span class="section-tag">Notre Histoire</span>
                <h2>De la Passion à la Réalité</h2>
                <p><strong>ClothesZC</strong> est née d'une passion profonde pour la mode et d'une vision simple : rendre les vêtements de qualité accessibles à tous.</p>
                <p>Fondée en 2024, notre boutique en ligne s'est donné pour mission de proposer une sélection soigneusement choisie de vêtements tendance, alliant style, confort et qualité.</p>
                <p>Nous croyons fermement que le style ne devrait jamais être compromis par le budget. C'est pourquoi nous travaillons directement avec des fabricants de confiance pour vous offrir le meilleur rapport qualité-prix.</p>
                <div class="story-stats">
                    <div class="stat">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Clients Satisfaits</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Produits</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">99%</span>
                        <span class="stat-label">Avis Positifs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="mission-section">
    <div class="container">
        <div class="mission-content">
            <span class="section-tag section-tag-light">Notre Mission</span>
            <h2>"Offrir à nos clients des vêtements de qualité, tendance et accessibles, tout en garantissant une expérience d'achat simple, sécurisée et agréable."</h2>
            <div class="mission-icon">
                <i class="fas fa-quote-right"></i>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Ce Qui Nous Guide</span>
            <h2 class="section-title">Nos Valeurs</h2>
            <p class="section-subtitle">Les principes qui définissent ClothesZC</p>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h3>Qualité</h3>
                <p>Nous sélectionnons chaque produit avec soin pour vous garantir une qualité irréprochable.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Passion</h3>
                <p>La mode est notre passion. Nous suivons les dernières tendances pour vous proposer le meilleur.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Service Client</h3>
                <p>Votre satisfaction est notre priorité. Notre équipe est là pour vous accompagner.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>Responsabilité</h3>
                <p>Nous nous engageons pour une mode plus responsable et durable.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Notre Famille</span>
            <h2 class="section-title">L'Équipe ClothesZC</h2>
            <p class="section-subtitle">Des passionnés à votre service</p>
        </div>
        <div class="team-grid">
            <div class="team-member">
                <div class="member-image">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80" alt="Zakaria C.">
                    <div class="member-overlay">
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Zakaria C.</h3>
                    <span>Fondateur & CEO</span>
                </div>
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&q=80" alt="Sarah M.">
                    <div class="member-overlay">
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Sarah M.</h3>
                    <span>Directrice Artistique</span>
                </div>
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80" alt="Ahmed B.">
                    <div class="member-overlay">
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Ahmed B.</h3>
                    <span>Service Client</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Prêt à découvrir notre collection ?</h2>
            <p>Explorez nos produits et trouvez votre style unique</p>
            <div class="cta-buttons">
                <a href="{{ route('produits.index') }}" class="btn btn-primary">Voir nos produits</a>
                <a href="{{ route('contact') }}" class="btn btn-outline btn-outline-white">Nous contacter</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
/* ===== STORY SECTION ===== */
.story-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}

.story-images {
    position: relative;
}

.story-img-main {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-hover);
}

.story-img-main img {
    width: 100%;
    height: 500px;
    object-fit: cover;
}

.story-img-secondary {
    position: absolute;
    bottom: -40px;
    right: -40px;
    width: 200px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-hover);
    border: 5px solid var(--white);
}

.story-img-secondary img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.story-badge {
    position: absolute;
    top: 30px;
    left: -30px;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
    padding: 25px;
    border-radius: 20px;
    text-align: center;
    color: var(--white);
    box-shadow: var(--shadow-hover);
}

.badge-number {
    display: block;
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
}

.badge-text {
    font-size: 0.9rem;
    opacity: 0.9;
}

.story-content h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--dark);
    margin: 15px 0 25px;
}

.story-content p {
    color: var(--gray);
    line-height: 1.8;
    margin-bottom: 20px;
}

.story-stats {
    display: flex;
    gap: 40px;
    margin-top: 40px;
    padding-top: 40px;
    border-top: 2px solid var(--light);
}

.stat {
    text-align: center;
}

.stat-number {
    display: block;
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--accent);
}

.stat-label {
    color: var(--gray);
    font-size: 0.9rem;
}

/* ===== MISSION SECTION ===== */
.mission-section {
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    padding: 100px 0;
}

.mission-content {
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
    color: var(--white);
    position: relative;
}

.section-tag-light {
    background: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,0.3);
    color: var(--white);
}

.mission-content h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 400;
    font-style: italic;
    line-height: 1.6;
    margin-top: 20px;
}

.mission-icon {
    position: absolute;
    bottom: -30px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 60px;
    background: var(--accent);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.mission-icon i {
    font-size: 1.5rem;
    color: var(--white);
}

/* ===== VALUES GRID ===== */
.values-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.value-card {
    text-align: center;
    padding: 40px 30px;
    background: var(--white);
    border-radius: 20px;
    box-shadow: var(--shadow);
    transition: var(--transition);
}

.value-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-hover);
}

.value-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 25px;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.value-icon i {
    font-size: 2rem;
    color: var(--white);
}

.value-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 15px;
}

.value-card p {
    color: var(--gray);
    line-height: 1.7;
}

/* ===== TEAM SECTION ===== */
.team-section {
    background: var(--light);
    padding: 100px 0;
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}

.team-member {
    text-align: center;
}

.member-image {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    margin-bottom: 25px;
}

.member-image img {
    width: 100%;
    height: 350px;
    object-fit: cover;
    transition: var(--transition);
}

.member-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(26, 26, 46, 0.9) 0%, transparent 50%);
    opacity: 0;
    transition: var(--transition);
    display: flex;
    align-items: flex-end;
    justify-content: center;
    padding-bottom: 30px;
}

.team-member:hover .member-overlay {
    opacity: 1;
}

.team-member:hover .member-image img {
    transform: scale(1.05);
}

.member-social {
    display: flex;
    gap: 15px;
}

.member-social a {
    width: 40px;
    height: 40px;
    background: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    transition: var(--transition);
}

.member-social a:hover {
    background: var(--accent);
    color: var(--white);
}

.member-info h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 5px;
}

.member-info span {
    color: var(--accent);
    font-weight: 500;
}

/* ===== CTA SECTION ===== */
.cta-section {
    background: linear-gradient(135deg, rgba(26, 26, 46, 0.95) 0%, rgba(22, 33, 62, 0.95) 100%),
                url('https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=1920&q=80');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding: 100px 0;
}

.cta-content {
    text-align: center;
    color: var(--white);
}

.cta-content h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.cta-content p {
    opacity: 0.9;
    font-size: 1.1rem;
    margin-bottom: 35px;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
}

.btn-outline-white {
    border-color: var(--white);
    color: var(--white);
}

.btn-outline-white:hover {
    background: var(--white);
    color: var(--primary);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .story-grid {
        grid-template-columns: 1fr;
        gap: 60px;
    }

    .story-img-secondary {
        right: 20px;
    }

    .values-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .team-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .values-grid,
    .team-grid {
        grid-template-columns: 1fr;
    }

    .story-stats {
        flex-direction: column;
        gap: 25px;
    }

    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
}
</style>
@endsection
