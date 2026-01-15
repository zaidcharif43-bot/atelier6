@extends('layouts.app')

@section('title', 'Nos Produits - ClothesZC')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <nav class="breadcrumb">
            <a href="{{ route('home') }}">Accueil</a>
            <span>/</span>
            <span>Nos Produits</span>
        </nav>
        <h1>Notre Collection</h1>
        <p>Découvrez tous nos vêtements tendance</p>
    </div>
</section>

<!-- Products Section -->
<section class="section products-section">
    <div class="container">
        <div class="products-layout">
            <!-- Sidebar -->
            <aside class="products-sidebar">
                <div class="sidebar-widget">
                    <h3 class="widget-title">Catégories</h3>
                    <ul class="category-list">
                        <li><a href="{{ route('produits.index') }}" class="{{ !request('category') ? 'active' : '' }}">
                            <span>Tous les produits</span>
                            <span class="count">{{ count($products) }}</span>
                        </a></li>
                        @foreach($categories as $cat)
                        <li><a href="{{ route('produits.index', ['category' => $cat['slug']]) }}" class="{{ request('category') == $cat['slug'] ? 'active' : '' }}">
                            <span>{{ $cat['name'] }}</span>
                            <span class="count">{{ $cat['count'] }}</span>
                        </a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <h3 class="widget-title">Prix</h3>
                    <div class="price-range">
                        <input type="range" min="0" max="200" value="100" class="range-slider">
                        <div class="price-labels">
                            <span>0€</span>
                            <span>200€</span>
                        </div>
                    </div>
                </div>

                <div class="sidebar-widget">
                    <h3 class="widget-title">Tailles</h3>
                    <div class="size-options">
                        <button class="size-btn">XS</button>
                        <button class="size-btn">S</button>
                        <button class="size-btn active">M</button>
                        <button class="size-btn">L</button>
                        <button class="size-btn">XL</button>
                    </div>
                </div>

                <div class="sidebar-widget">
                    <h3 class="widget-title">Couleurs</h3>
                    <div class="color-options">
                        <button class="color-btn" style="background: #000"></button>
                        <button class="color-btn" style="background: #fff; border: 1px solid #ddd"></button>
                        <button class="color-btn" style="background: #1a1a2e"></button>
                        <button class="color-btn active" style="background: #e94560"></button>
                        <button class="color-btn" style="background: #8B4513"></button>
                    </div>
                </div>
            </aside>

            <!-- Products Grid -->
            <div class="products-main">
                <div class="products-toolbar">
                    <div class="results-count">
                        <span>{{ count($products) }} produit(s) trouvé(s)</span>
                    </div>
                    <div class="toolbar-right">
                        <div class="sort-select">
                            <select>
                                <option>Trier par: Populaire</option>
                                <option>Prix croissant</option>
                                <option>Prix décroissant</option>
                                <option>Nouveautés</option>
                            </select>
                        </div>
                        <div class="view-options">
                            <button class="view-btn active"><i class="fas fa-th"></i></button>
                            <button class="view-btn"><i class="fas fa-list"></i></button>
                        </div>
                    </div>
                </div>

                <div class="products-grid">
                    @forelse($products as $product)
                    <article class="product-card">
                        <div class="product-image">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                            <div class="product-overlay"></div>
                            @if($product['new'])
                            <span class="product-badge badge-new">Nouveau</span>
                            @elseif($product['sale'])
                            <span class="product-badge badge-sale">Promo</span>
                            @endif
                            <div class="product-actions">
                                <button class="action-btn" title="Aperçu"><i class="fas fa-eye"></i></button>
                                <button class="action-btn" title="Ajouter au panier"><i class="fas fa-shopping-bag"></i></button>
                                <button class="action-btn" title="Favoris"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="product-category">{{ ucfirst($product['category']) }}</span>
                            <h3 class="product-name">
                                <a href="{{ route('produits.show', $product['id']) }}">{{ $product['name'] }}</a>
                            </h3>
                            <div class="product-price">
                                <span class="price-current">{{ number_format($product['price'], 2) }}€</span>
                                @if($product['old_price'])
                                <span class="price-old">{{ number_format($product['old_price'], 2) }}€</span>
                                @endif
                            </div>
                            <div class="product-rating">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star{{ $i <= floor($product['rating']) ? '' : '-half-alt' }}"></i>
                                @endfor
                                <span>({{ $product['reviews'] }})</span>
                            </div>
                        </div>
                    </article>
                    @empty
                    <div class="no-products">
                        <i class="fas fa-search"></i>
                        <h3>Aucun produit trouvé</h3>
                        <p>Essayez de modifier vos filtres</p>
                        <a href="{{ route('produits.index') }}" class="btn btn-primary">Voir tous les produits</a>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
/* ===== PRODUCTS LAYOUT ===== */
.products-section {
    background: var(--light);
}

.products-layout {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 40px;
}

/* ===== SIDEBAR ===== */
.products-sidebar {
    position: sticky;
    top: 120px;
    height: fit-content;
}

.sidebar-widget {
    background: var(--white);
    padding: 25px;
    border-radius: 15px;
    box-shadow: var(--shadow);
    margin-bottom: 25px;
}

.widget-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid var(--light);
}

.category-list {
    list-style: none;
}

.category-list li {
    margin-bottom: 8px;
}

.category-list a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 15px;
    border-radius: 10px;
    color: var(--gray);
    text-decoration: none;
    transition: var(--transition);
}

.category-list a:hover,
.category-list a.active {
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
    color: var(--white);
}

.category-list .count {
    background: rgba(0,0,0,0.1);
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
}

.category-list a.active .count {
    background: rgba(255,255,255,0.2);
}

/* Price Range */
.range-slider {
    width: 100%;
    height: 6px;
    appearance: none;
    background: var(--light);
    border-radius: 3px;
    outline: none;
}

.range-slider::-webkit-slider-thumb {
    appearance: none;
    width: 20px;
    height: 20px;
    background: var(--accent);
    border-radius: 50%;
    cursor: pointer;
}

.price-labels {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
    color: var(--gray);
    font-size: 0.9rem;
}

/* Size Options */
.size-options {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.size-btn {
    width: 45px;
    height: 45px;
    border: 2px solid var(--light);
    background: var(--white);
    border-radius: 10px;
    font-weight: 600;
    color: var(--gray);
    cursor: pointer;
    transition: var(--transition);
}

.size-btn:hover,
.size-btn.active {
    border-color: var(--accent);
    color: var(--accent);
}

/* Color Options */
.color-options {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.color-btn {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    border: 3px solid transparent;
    cursor: pointer;
    transition: var(--transition);
}

.color-btn:hover,
.color-btn.active {
    transform: scale(1.1);
    box-shadow: 0 0 0 3px rgba(233, 69, 96, 0.3);
}

/* ===== PRODUCTS MAIN ===== */
.products-toolbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: var(--white);
    padding: 20px 25px;
    border-radius: 15px;
    box-shadow: var(--shadow);
    margin-bottom: 30px;
}

.results-count {
    color: var(--gray);
    font-weight: 500;
}

.toolbar-right {
    display: flex;
    align-items: center;
    gap: 20px;
}

.sort-select select {
    padding: 10px 40px 10px 15px;
    border: 2px solid var(--light);
    border-radius: 10px;
    font-family: 'Raleway', sans-serif;
    color: var(--dark);
    cursor: pointer;
    appearance: none;
    background: var(--white) url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23666' d='M6 8L1 3h10z'/%3E%3C/svg%3E") no-repeat right 15px center;
}

.view-options {
    display: flex;
    gap: 5px;
}

.view-btn {
    width: 42px;
    height: 42px;
    border: 2px solid var(--light);
    background: var(--white);
    border-radius: 10px;
    color: var(--gray);
    cursor: pointer;
    transition: var(--transition);
}

.view-btn:hover,
.view-btn.active {
    border-color: var(--accent);
    color: var(--accent);
}

/* Products Grid - Override for sidebar layout */
.products-main .products-grid {
    grid-template-columns: repeat(3, 1fr);
}

/* No Products */
.no-products {
    grid-column: 1 / -1;
    text-align: center;
    padding: 80px 20px;
    background: var(--white);
    border-radius: 15px;
}

.no-products i {
    font-size: 4rem;
    color: var(--light);
    margin-bottom: 20px;
}

.no-products h3 {
    font-size: 1.5rem;
    color: var(--dark);
    margin-bottom: 10px;
}

.no-products p {
    color: var(--gray);
    margin-bottom: 25px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1200px) {
    .products-main .products-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 992px) {
    .products-layout {
        grid-template-columns: 1fr;
    }

    .products-sidebar {
        position: static;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .sidebar-widget {
        margin-bottom: 0;
    }

    .products-main .products-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .products-sidebar {
        grid-template-columns: 1fr;
    }

    .products-main .products-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .products-toolbar {
        flex-direction: column;
        gap: 15px;
    }
}

@media (max-width: 576px) {
    .products-main .products-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection
