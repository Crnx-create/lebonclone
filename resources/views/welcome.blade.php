<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarketPlace Premium - Petites annonces</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FF6E14',
                        'primary-dark': '#E05D00',
                        secondary: '#00AA5B',
                        accent: '#007DFF',
                        dark: '#2D2D2D',
                        light: '#F5F5F5',
                        gray: '#E5E7EB',
                        success: '#00AA5B',
                        warning: '#FF9500',
                        danger: '#FF3B30',
                        'leboncoin-orange': '#FF6E14',
                        'leboncoin-green': '#00AA5B',
                        'leboncoin-blue': '#007DFF',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Poppins', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 1px 3px rgba(0, 0, 0, 0.1)',
                        'medium': '0 4px 6px rgba(0, 0, 0, 0.1)',
                        'hard': '0 10px 15px rgba(0, 0, 0, 0.1)',
                        'glow': '0 0 15px rgba(255, 110, 20, 0.3)',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-slow': 'bounce 3s infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        :root {
            --radius: 8px;
            --transition: all 0.2s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F5F5F5;
            color: #2D2D2D;
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #F1F5F9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #FF6E14;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #E05D00;
        }
        
        /* Navigation Styles */
        .navbar {
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            padding: 1rem 2rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: var(--transition);
            border-bottom: 1px solid #E5E7EB;
        }
        
        .navbar.scrolled {
            padding: 0.75rem 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: #FF6E14;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .nav-link {
            color: #4B5563 !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            margin: 0 0.2rem;
            border-radius: 8px;
            transition: var(--transition);
            position: relative;
        }
        
        .nav-link:hover {
            color: #FF6E14 !important;
        }
        
        .nav-link.active {
            color: #FF6E14 !important;
            font-weight: 600;
        }
        
        .btn-primary {
            background: #FF6E14;
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 4px;
            font-weight: 600;
            transition: var(--transition);
            color: white;
        }
        
        .btn-primary:hover {
            background: #E05D00;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(255, 110, 20, 0.2);
        }
        
        .btn-secondary {
            background: #00AA5B;
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 4px;
            font-weight: 600;
            transition: var(--transition);
            color: white;
        }
        
        .btn-secondary:hover {
            background: #008F4D;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 170, 91, 0.2);
        }
        
        /* Hero Section */
        .hero-section {
            padding: 8rem 0 4rem;
            background: white;
            position: relative;
            overflow: hidden;
        }
        
        .search-bar {
            background: white;
            border-radius: 4px;
            padding: 0.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #E5E7EB;
            transition: var(--transition);
        }
        
        .search-bar:focus-within {
            border-color: #FF6E14;
            box-shadow: 0 0 0 3px rgba(255, 110, 20, 0.1);
        }
        
        .search-input {
            background: transparent;
            border: none;
            color: #2D2D2D;
            padding: 0.8rem 1.5rem;
            width: 100%;
        }
        
        .search-input::placeholder {
            color: #9CA3AF;
        }
        
        .search-input:focus {
            outline: none;
        }
        
        .search-btn {
            background: #FF6E14;
            border: none;
            border-radius: 4px;
            padding: 0.8rem 1.8rem;
            color: white;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .search-btn:hover {
            background: #E05D00;
        }
        
        /* Category Cards */
        .category-card {
            background: white;
            border-radius: var(--radius);
            padding: 1.5rem;
            text-align: center;
            transition: var(--transition);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
            height: 100%;
            border: 1px solid #E5E7EB;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            border-color: #FF6E14;
        }
        
        .category-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            background: #FF6E14;
            color: white;
            font-size: 1.5rem;
            transition: var(--transition);
        }
        
        .category-card:hover .category-icon {
            transform: scale(1.1);
        }
        
        /* Ad Cards */
        .ad-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            transition: var(--transition);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            height: 100%;
            border: 1px solid #E5E7EB;
        }
        
        .ad-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            border-color: #FF6E14;
        }
        
        .ad-image {
            height: 180px;
            overflow: hidden;
            position: relative;
        }
        
        .ad-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .ad-card:hover .ad-image img {
            transform: scale(1.05);
        }
        
        .ad-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: #FF6E14;
            color: white;
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            z-index: 10;
        }
        
        .ad-price {
            position: absolute;
            bottom: 12px;
            left: 12px;
            background: rgba(0, 0, 0, 0.7);
            padding: 6px 12px;
            border-radius: 4px;
            font-weight: 700;
            color: white;
            font-size: 1.1rem;
        }
        
        .ad-content {
            padding: 1rem;
        }
        
        .ad-title {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-weight: 600;
        }
        
        .ad-location {
            color: #6B7280;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }
        
        .ad-time {
            color: #9CA3AF;
            font-size: 0.8rem;
            margin-top: 0.5rem;
        }
        
        /* Auth Modal */
        .auth-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }
        
        .auth-modal.active {
            opacity: 1;
            visibility: visible;
        }
        
        .auth-container {
            background: white;
            border-radius: var(--radius);
            width: 90%;
            max-width: 450px;
            padding: 2rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transform: translateY(50px);
            opacity: 0;
            transition: var(--transition);
        }
        
        .auth-modal.active .auth-container {
            transform: translateY(0);
            opacity: 1;
        }
        
        .auth-tabs {
            display: flex;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #E5E7EB;
        }
        
        .auth-tab {
            padding: 0.8rem 1.5rem;
            cursor: pointer;
            font-weight: 600;
            color: #6B7280;
            transition: var(--transition);
            border-bottom: 3px solid transparent;
        }
        
        .auth-tab.active {
            color: #FF6E14;
            border-bottom: 3px solid #FF6E14;
        }
        
        .auth-form {
            display: none;
        }
        
        .auth-form.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #2D2D2D;
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem 1.2rem;
            border: 1px solid #E5E7EB;
            border-radius: 4px;
            transition: var(--transition);
            font-family: 'Inter', sans-serif;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #FF6E14;
            box-shadow: 0 0 0 3px rgba(255, 110, 20, 0.1);
        }
        
        /* Footer */
        .footer {
            background: #2D2D2D;
            color: white;
            padding: 4rem 0 2rem;
            margin-top: 3rem;
        }
        
        .footer-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: #FF6E14;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: #D1D5DB;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }
        
        .social-link:hover {
            background: #FF6E14;
            transform: translateY(-3px);
        }
        
        /* User dropdown */
        .user-dropdown {
            background: #FF6E14;
            color: white;
            border-radius: 4px;
            padding: 0.5rem 1rem 0.5rem 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
        }
        
        .user-dropdown:hover {
            background: #E05D00;
        }
        
        .user-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #FF6E14;
            font-weight: 600;
        }
        
        /* Dropdown Menu */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
            min-width: 200px;
            z-index: 100;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: var(--transition);
            border: 1px solid #E5E7EB;
        }
        
        .dropdown-menu.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .dropdown-item {
            padding: 0.75rem 1.5rem;
            color: #2D2D2D;
            text-decoration: none;
            display: block;
            transition: var(--transition);
        }
        
        .dropdown-item:hover {
            background: #F3F4F6;
            color: #FF6E14;
        }
        
        /* Stats Cards */
        .stats-card {
            background: white;
            border-radius: var(--radius);
            padding: 1.5rem;
            text-align: center;
            transition: var(--transition);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            border: 1px solid #E5E7EB;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .stats-number {
            font-size: 2rem;
            font-weight: 700;
            color: #FF6E14;
            margin-bottom: 0.5rem;
        }
        
        /* Testimonials */
        .testimonial-card {
            background: white;
            border-radius: var(--radius);
            padding: 2rem;
            transition: var(--transition);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            border: 1px solid #E5E7EB;
            position: relative;
        }
        
        .testimonial-card:before {
            content: '"';
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            font-size: 4rem;
            color: #E5E7EB;
            font-family: serif;
            line-height: 1;
            z-index: 0;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial-content {
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            margin-top: 1.5rem;
        }
        
        .testimonial-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 1rem;
        }
        
        /* Quick Links */
        .quick-links {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }
        
        .quick-link {
            background: white;
            border: 1px solid #E5E7EB;
            border-radius: 4px;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
            transition: var(--transition);
        }
        
        .quick-link:hover {
            border-color: #FF6E14;
            color: #FF6E14;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                padding: 0.8rem 1rem;
            }
            
            .hero-section {
                padding: 6rem 0 3rem;
            }
            
            .hero-title {
                font-size: 2.2rem;
            }
            
            .search-bar {
                flex-direction: column;
            }
            
            .search-input {
                margin-bottom: 0.5rem;
            }
            
            .search-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
        <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <a class="navbar-brand" href="/">
                <i class="fas fa-store"></i>
                MarketPlace
            </a>
            
            <button class="md:hidden text-gray-700 focus:outline-none" id="mobile-menu-button">
                <i class="fas fa-bars text-2xl"></i>
            </button>
            
            <div class="hidden md:flex items-center space-x-6" id="navbar-menu">
                <div class="flex space-x-6">
                    <a class="nav-link active" href="/"><i class="fas fa-home mr-1"></i> Accueil</a>
                    <a class="nav-link" href="{{route('create')}}"><i class="fas fa-car mr-1"></i> Voitures</a>
                    <a class="nav-link" href="#"><i class="fas fa-building mr-1"></i> Immobilier</a>
                    <a class="nav-link" href="#"><i class="fas fa-tshirt mr-1"></i> Mode</a>
                    <a class="nav-link" href="#"><i class="fas fa-mobile-alt mr-1"></i> Multimédia</a>
                </div>
                
                <!-- Dynamic Authentication Links -->
                <div id="auth-links" class="flex items-center space-x-4">
                    <!-- This will be populated by JavaScript based on auth status -->
                    <a href="#" class="px-4 py-2 rounded-md border border-primary text-primary hover:bg-primary hover:text-white transition" id="show-login">
                        <i class="fas fa-sign-in-alt mr-1"></i> Connexion
                    </a>
    
                </div>
                <a href="{{route('create')}}" class="btn-primary">
                        <i class="fas fa-plus-circle mr-1"></i> Déposer une annonce
                    </a>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-white w-full absolute left-0 top-full shadow-lg" id="mobile-menu">
            <div class="px-4 py-3 space-y-3">
                <a class="block px-3 py-2 rounded-md hover:bg-gray-100" href="/"><i class="fas fa-home mr-2"></i> Accueil</a>
                <a class="block px-3 py-2 rounded-md hover:bg-gray-100" href="#"><i class="fas fa-car mr-2"></i> Voitures</a>
                <a class="block px-3 py-2 rounded-md hover:bg-gray-100" href="#"><i class="fas fa-building mr-2"></i> Immobilier</a>
                <a class="block px-3 py-2 rounded-md hover:bg-gray-100" href="#"><i class="fas fa-tshirt mr-2"></i> Mode</a>
                <a class="block px-3 py-2 rounded-md hover:bg-gray-100" href="#"><i class="fas fa-mobile-alt mr-2"></i> Multimédia</a>
                
                <div id="mobile-auth-links" class="pt-2 border-t border-gray-200 space-y-2">
                    <a href="#" class="block px-3 py-2 rounded-md bg-gray-100 text-center" id="mobile-show-login">
                        <i class="fas fa-sign-in-alt mr-2"></i> Connexion
                    </a>
                    <a href="/ads/create" class="block px-3 py-2 rounded-md bg-primary text-white text-center">
                        <i class="fas fa-plus-circle mr-2"></i> Déposer une annonce
                    </a>
                </div>
            </div>
        </div>
    </nav>
                
                <!-- Dynamic Authentication Links -->
                <div id="auth-links" class="flex items-center space-x-4">
                    <!-- This will be populated by JavaScript based on auth status -->
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-white w-full absolute left-0 top-full shadow-lg" id="mobile-menu">
            <div class="px-4 py-3 space-y-3">
                <a class="block px-3 py-2 rounded-md hover:bg-gray-100" href="#"><i class="fas fa-home mr-2"></i> Accueil</a>
                <a class="block px-3 py-2 rounded-md hover:bg-gray-100" href="#"><i class="fas fa-car mr-2"></i> Voitures</a>
                <a class="block px-3 py-2 rounded-md hover:bg-gray-100" href="#"><i class="fas fa-building mr-2"></i> Immobilier</a>
                <a class="block px-3 py-2 rounded-md hover:bg-gray-100" href="#"><i class="fas fa-tshirt mr-2"></i> Mode</a>
                <a class="block px-3 py-2 rounded-md hover:bg-gray-100" href="#"><i class="fas fa-mobile-alt mr-2"></i> Multimédia</a>
                
                <div id="mobile-auth-links" class="pt-2 border-t border-gray-200">
                    <!-- Mobile auth links will be populated here -->
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="search-bar flex items-center max-w-2xl mx-auto mb-8">
                    <input type="text" class="search-input flex-grow" placeholder="Que recherchez-vous ?">
                    <button class="search-btn">Rechercher</button>
                </div>
                
                <div class="quick-links justify-center">
                    <a href="#" class="quick-link"><i class="fas fa-car mr-1"></i> Voitures</a>
                    <a href="#" class="quick-link"><i class="fas fa-building mr-1"></i> Immobilier</a>
                    <a href="#" class="quick-link"><i class="fas fa-briefcase mr-1"></i> Emploi</a>
                    <a href="#" class="quick-link"><i class="fas fa-couch mr-1"></i> Maison</a>
                    <a href="#" class="quick-link"><i class="fas fa-mobile-alt mr-1"></i> Multimédia</a>
                    <a href="#" class="quick-link"><i class="fas fa-tshirt mr-1"></i> Mode</a>
                    <a href="#" class="quick-link"><i class="fas fa-bicycle mr-1"></i> Véhicules</a>
                    <a href="#" class="quick-link"><i class="fas fa-paw mr-1"></i> Animaux</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Ads Section -->
    <section class="py-8 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <div class="mb-6 md:mb-0">
                    <h2 class="text-2xl font-bold mb-2">Annonces en vedette</h2>
                    <p class="text-gray-600">Découvrez nos meilleures offres du moment</p>
                </div>
                <a href="#" class="text-primary hover:underline font-medium">
                    Voir tout <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    <div class="ad-card">
                        <div class="ad-image">
                            <img src="https://images.unsplash.com/photo-1549399542-7e82138d43aa?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Voiture">
                            <div class="ad-badge">Nouveau</div>
                            <div class="ad-price">12 500 €</div>
                        </div>
                        <div class="ad-content">
                            <h5 class="ad-title">Peugeot 208 - État impeccable</h5>
                            <p class="ad-location"><i class="fas fa-map-marker-alt text-xs"></i> Paris</p>
                            <p class="ad-time">Aujourd'hui, 10:45</p>
                        </div>
                    </div>
                    <div class="ad-card">
                        <div class="ad-image">
                            <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Appartement">
                            <div class="ad-price">1 200 €</div>
                        </div>
                        <div class="ad-content">
                            <h5 class="ad-title">Appartement T3 lumineux</h5>
                            <p class="ad-location"><i class="fas fa-map-marker-alt text-xs"></i> Lyon</p>
                            <p class="ad-time">Hier, 18:30</p>
                        </div>
                    </div>
                    <div class="ad-card">
                        <div class="ad-image">
                            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="iPhone">
                            <div class="ad-price">950 €</div>
                        </div>
                        <div class="ad-content">
                            <h5 class="ad-title">iPhone 14 Pro Max 256 Go</h5>
                            <p class="ad-location"><i class="fas fa-map-marker-alt text-xs"></i> Marseille</p>
                            <p class="ad-time">Hier, 15:15</p>
                        </div>
                    </div>
                    <div class="ad-card">
                        <div class="ad-image">
                            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Canapé">
                            <div class="ad-price">450 €</div>
                        </div>
                        <div class="ad-content">
                            <h5 class="ad-title">Canapé d'angle convertible</h5>
                            <p class="ad-location"><i class="fas fa-map-marker-alt text-xs"></i> Bordeaux</p>
                            <p class="ad-time">Il y a 2 jours</p>
                        </div>
                    </div>
                    <div class="ad-card">
                        <div class="ad-image">
                            <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Appareil photo">
                            <div class="ad-badge">Urgent</div>
                            <div class="ad-price">350 €</div>
                        </div>
                        <div class="ad-content">
                            <h5 class="ad-title">Appareil photo Canon EOS 2000D</h5>
                            <p class="ad-location"><i class="fas fa-map-marker-alt text-xs"></i> Lille</p>
                            <p class="ad-time">Il y a 3 jours</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="py-8 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                    <div class="mb-6 md:mb-0">
                        <h2 class="text-2xl font-bold mb-2">Catégories populaires</h2>
                        <p class="text-gray-600">Parcourez nos catégories les plus populaires</p>
                    </div>
                    <a href="#" class="text-primary hover:underline font-medium">
                        Toutes les catégories <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h5 class="font-semibold">Voitures</h5>
                        <p class="text-gray-500 text-sm">12,450 annonces</p>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h5 class="font-semibold">Immobilier</h5>
                        <p class="text-gray-500 text-sm">8,720 annonces</p>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h5 class="font-semibold">Emploi</h5>
                        <p class="text-gray-500 text-sm">5,310 annonces</p>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-couch"></i>
                        </div>
                        <h5 class="font-semibold">Maison</h5>
                        <p class="text-gray-500 text-sm">15,890 annonces</p>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h5 class="font-semibold">Multimédia</h5>
                        <p class="text-gray-500 text-sm">22,150 annonces</p>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <h5 class="font-semibold">Mode</h5>
                        <p class="text-gray-500 text-sm">18,640 annonces</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- User Ads Section -->
<section class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center mb-8">
            <div class="mb-6 md:mb-0">
                <h2 class="text-2xl font-bold mb-2">Dernières annonces</h2>
                <p class="text-gray-600">Les annonces récemment publiées</p>
            </div>
        </div>
        
        <!-- ADD YOUR CODE HERE -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($posts as $post)
                <div class="ad-card">
                    <div class="ad-image">
                        <img src="{{ $post->image ? asset('storage/' . $post->image) : 'https://via.placeholder.com/300x200' }}" alt="{{ $post->title }}">
                        <span class="ad-badge">Nouveau</span>
                        <span class="ad-price">{{ $post->price }} €</span>
                    </div>
                    <div class="ad-content">
                        <h3 class="ad-title">{{ $post->title }}</h3>
                        <p class="ad-location">
                            <i class="fas fa-map-marker-alt"></i> {{ $post->location }}
                        </p>
                        <p class="ad-time">{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>  

        <!-- Local Ads Section -->
        <section class="py-8 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                    <div class="mb-6 md:mb-0">
                        <h2 class="text-2xl font-bold mb-2">Annonces près de chez vous</h2>
                        <p class="text-gray-600">Découvrez les meilleures offres dans votre région</p>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt text-primary mr-2"></i>
                        <span class="font-medium">Paris 75015</span>
                        <button class="ml-2 text-primary hover:underline">Changer</button>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    <div class="ad-card">
                        <div class="ad-image">
                            <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Meuble">
                            <div class="ad-price">120 €</div>
                        </div>
                        <div class="ad-content">
                            <h5 class="ad-title">Armoire en chêne massif</h5>
                            <p class="ad-location"><i class="fas fa-map-marker-alt text-xs"></i> Paris 15e</p>
                            <p class="ad-time">Aujourd'hui, 09:20</p>
                        </div>
                    </div>
                    <div class="ad-card">
                        <div class="ad-image">
                            <img src="https://images.unsplash.com/photo-1545173168-9f1947eebb7f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Vélo">
                            <div class="ad-price">250 €</div>
                        </div>
                        <div class="ad-content">
                            <h5 class="ad-title">Vélo de ville homme</h5>
                            <p class="ad-location"><i class="fas fa-map-marker-alt text-xs"></i> Paris 14e</p>
                            <p class="ad-time">Aujourd'hui, 08:45</p>
                        </div>
                    </div>
                    <div class="ad-card">
                        <div class="ad-image">
                            <img src="https://images.unsplash.com/photo-1565538810643-b5bdb714032a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Chaussures">
                            <div class="ad-price">45 €</div>
                        </div>
                        <div class="ad-content">
                            <h5 class="ad-title">Chaussures de sport Nike</h5>
                            <p class="ad-location"><i class="fas fa-map-marker-alt text-xs"></i> Paris 13e</p>
                            <p class="ad-time">Hier, 19:30</p>
                        </div>
                    </div>
                    <div class="ad-card">
                        <div class="ad-image">
                            <img src="https://images.unsplash.com/photo-1560343090-f0409e80491a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Frère">
                            <div class="ad-badge">Bon état</div>
                            <div class="ad-price">80 €</div>
                        </div>
                        <div class="ad-content">
                            <h5 class="ad-title">Réfrigérateur combiné</h5>
                            <p class="ad-location"><i class="fas fa-map-marker-alt text-xs"></i> Paris 12e</p>
                            <p class="ad-time">Hier, 16:15</p>
                        </div>
                    </div>
                    <div class="ad-card">
                        <div class="ad-image">
                            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Montre">
                            <div class="ad-price">150 €</div>
                        </div>
                        <div class="ad-content">
                            <h5 class="ad-title">Montre connectée Samsung</h5>
                            <p class="ad-location"><i class="fas fa-map-marker-alt text-xs"></i> Paris 11e</p>
                            <p class="ad-time">Il y a 2 jours</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- App Download Section -->
        <section class="py-12 bg-primary text-white">
            <div class="container mx-auto px-4">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-10">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Téléchargez notre application</h2>
                        <p class="text-xl mb-8 opacity-90">Achetez et vendez où que vous soyez, disponible sur iOS et Android.</p>
                        
                        <div class="flex flex-wrap gap-4">
                            <a href="#" class="bg-black bg-opacity-20 hover:bg-opacity-30 px-6 py-3 rounded-lg flex items-center transition">
                                <i class="fab fa-apple text-3xl mr-3"></i>
                                <div>
                                    <div class="text-xs">Télécharger sur</div>
                                    <div class="font-semibold">App Store</div>
                                </div>
                            </a>
                            <a href="#" class="bg-black bg-opacity-20 hover:bg-opacity-30 px-6 py-3 rounded-lg flex items-center transition">
                                <i class="fab fa-google-play text-3xl mr-3"></i>
                                <div>
                                    <div class="text-xs">Disponible sur</div>
                                    <div class="font-semibold">Google Play</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/2 text-center">
                        <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="App mobile" class="inline-block max-h-96 rounded-lg shadow-xl transform rotate-3 hover:rotate-0 transition duration-500">
                    </div>
                </div>
            </div>
        </section>

        <!-- Auth Modal -->
        <div class="auth-modal" id="auth-modal">
            <div class="auth-container">
                <div class="auth-tabs">
                    <div class="auth-tab active" data-tab="login">Connexion</div>
                    <div class="auth-tab" data-tab="register">Inscription</div>
                    <button type="button" class="ml-auto text-gray-400 hover:text-gray-600 focus:outline-none" id="close-auth-modal">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div class="auth-form active" id="login-form">
                    <form>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="votre@email.com">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" placeholder="Votre mot de passe">
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-check-input rounded text-primary focus:ring-primary" id="rememberMe">
                                <label class="ml-2 text-sm text-gray-600" for="rememberMe">Se souvenir de moi</label>
                            </div>
                            <a href="#" class="text-sm text-primary hover:underline">Mot de passe oublié ?</a>
                        </div>
                        <button type="submit" class="btn-primary w-full py-3">Se connecter</button>
                    </form>
                    <div class="text-center mt-4">
                        <p class="text-gray-600">Vous n'avez pas de compte ? <a href="#" class="text-primary font-medium hover:underline" id="switch-to-register">S'inscrire</a></p>
                    </div>
                    
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">Ou connectez-vous avec</span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-3">
                        <a href="#" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            <i class="fab fa-google text-red-500 mr-2"></i> Google
                        </a>
                        <a href="#" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            <i class="fab fa-facebook-f text-blue-600 mr-2"></i> Facebook
                        </a>
                    </div>
                </div>
                
                <div class="auth-form" id="register-form">
                    <form>
                        <div class="form-group">
                            <label class="form-label">Nom complet</label>
                            <input type="text" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="votre@email.com">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" placeholder="Créez un mot de passe">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirmer le mot de passe</label>
                            <input type="password" class="form-control" placeholder="Confirmez votre mot de passe">
                        </div>
                        <div class="flex items-center mb-4">
                            <input type="checkbox" class="form-check-input rounded text-primary focus:ring-primary" id="acceptTerms">
                            <label class="ml-2 text-sm text-gray-600" for="acceptTerms">J'accepte les <a href="#" class="text-primary hover:underline">conditions d'utilisation</a></label>
                        </div>
                        <button type="submit" class="btn-primary w-full py-3">Créer un compte</button>
                    </form>
                    <div class="text-center mt-4">
                        <p class="text-gray-600">Vous avez déjà un compte ? <a href="#" class="text-primary font-medium hover:underline" id="switch-to-login">Se connecter</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="mb-8">
                        <h3 class="footer-title">MarketPlace</h3>
                        <p class="text-gray-400 mb-4">La plateforme de petites annonces gratuites la plus simple et sécurisée.</p>
                        <div class="social-links">
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="mb-8">
                        <h5 class="text-white font-semibold mb-4">À propos</h5>
                        <ul class="footer-links">
                            <li><a href="#">Qui sommes-nous</a></li>
                            <li><a href="#">Nous rejoindre</a></li>
                            <li><a href="#">Espace presse</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="mb-8">
                        <h5 class="text-white font-semibold mb-4">Assistance</h5>
                        <ul class="footer-links">
                            <li><a href="#">Centre d'aide</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Sécurité</a></li>
                            <li><a href="#">Conditions d'utilisation</a></li>
                        </ul>
                    </div>
                    <div class="mb-8">
                        <h5 class="text-white font-semibold mb-4">Newsletter</h5>
                        <p class="text-gray-400 mb-4">Inscrivez-vous pour recevoir nos meilleures offres</p>
                        <div class="flex">
                            <input type="email" class="flex-grow px-4 py-2 rounded-l-md focus:outline-none text-gray-800" placeholder="Votre email">
                            <button class="bg-primary text-white px-4 py-2 rounded-r-md hover:bg-primary-dark transition">S'inscrire</button>
                        </div>
                    </div>
                </div>
                <hr class="border-gray-700 my-8">
                <div class="text-center text-gray-400">
                    <p>&copy; 2023 MarketPlace. Tous droits réservés.</p>
                </div>
            </div>

        </footer>

        <script>
            // DOM Elements
            const authLinks = document.getElementById('auth-links');
            const mobileAuthLinks = document.getElementById('mobile-auth-links');
            const authModal = document.getElementById('auth-modal');
            const closeAuthModal = document.getElementById('close-auth-modal');
            const authTabs = document.querySelectorAll('.auth-tab');
            const authForms = document.querySelectorAll('.auth-form');
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const navbarMenu = document.getElementById('navbar-menu');
            const switchToRegister = document.getElementById('switch-to-register');
            const switchToLogin = document.getElementById('switch-to-login');

            // Check if user is logged in (from localStorage)
            let isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
            let currentUser = JSON.parse(localStorage.getItem('currentUser')) || {};

            // Update UI based on authentication status
            function updateUI() {
                if (isLoggedIn) {
                    // User is logged in - show account dropdown and logout
                    const userInitial = currentUser.name ? currentUser.name.charAt(0).toUpperCase() : 'U';
                    
                    // Desktop version
                    authLinks.innerHTML = `
                        <div class="relative">
                            <div class="user-dropdown" id="user-dropdown">
                                <div class="user-avatar">${userInitial}</div>
                                <span>${currentUser.name || 'Mon Compte'}</span>
                                <i class="fas fa-chevron-down ml-2"></i>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu">
                                <a href="#" class="dropdown-item"><i class="fas fa-user mr-2"></i> Mon profil</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-heart mr-2"></i> Favoris</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell mr-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog mr-2"></i> Paramètres</a>
                                <div class="border-t border-gray-200 my-1"></div>
                                <a href="#" class="dropdown-item text-red-500" id="logout-btn"><i class="fas fa-sign-out-alt mr-2"></i> Déconnexion</a>
                            </div>
                        </div>
                        <a href="#" class="btn-secondary inline-flex items-center">
                            <i class="fas fa-plus-circle mr-2"></i> Déposer une annonce
                        </a>
                    `;

                    // Mobile version
                    mobileAuthLinks.innerHTML = `
                        <a href="#" class="block px-3 py-2 rounded-md bg-secondary text-white mb-2 text-center">
                            <i class="fas fa-plus-circle mr-2"></i> Déposer une annonce
                        </a>
                        <div class="space-y-2">
                            <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100"><i class="fas fa-user mr-2"></i> Mon profil</a>
                            <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100"><i class="fas fa-heart mr-2"></i> Favoris</a>
                            <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100"><i class="fas fa-bell mr-2"></i> Notifications</a>
                            <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100"><i class="fas fa-cog mr-2"></i> Paramètres</a>
                            <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100 text-red-500" id="mobile-logout-btn"><i class="fas fa-sign-out-alt mr-2"></i> Déconnexion</a>
                        </div>
                    `;

                    // Add event listeners to dropdown and logout buttons
                    const dropdownToggle = document.getElementById('user-dropdown');
                    const dropdownMenu = document.getElementById('dropdown-menu');
                    const logoutBtn = document.getElementById('logout-btn');
                    const mobileLogoutBtn = document.getElementById('mobile-logout-btn');

                    dropdownToggle.addEventListener('click', function(e) {
                        e.stopPropagation();
                        dropdownMenu.classList.toggle('active');
                    });

                    logoutBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        logout();
                    });

                    mobileLogoutBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        logout();
                    });

                    // Close dropdown when clicking outside
                    document.addEventListener('click', function(e) {
                        if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                            dropdownMenu.classList.remove('active');
                        }
                    });
                } else {
                    // User is not logged in - show login and register buttons
                    authLinks.innerHTML = `
                        <a href="#" class="px-4 py-2 rounded-md border border-primary text-primary hover:bg-primary hover:text-white transition" id="show-login">
                            <i class="fas fa-sign-in-alt mr-1"></i> Connexion
                        </a>
                        <a href="#" class="btn-primary" id="show-register">
                            <i class="fas fa-user-plus mr-1"></i> Inscription
                        </a>
                    `;

                    mobileAuthLinks.innerHTML = `
                        <a href="#" class="block px-3 py-2 rounded-md bg-gray-100 mb-2 text-center" id="mobile-show-login">
                            <i class="fas fa-sign-in-alt mr-2"></i> Connexion
                        </a>
                        <a href="#" class="block px-3 py-2 rounded-md bg-primary text-white text-center" id="mobile-show-register">
                            <i class="fas fa-user-plus mr-2"></i> Inscription
                        </a>
                    `;

                    // Add event listeners to auth buttons
                    document.getElementById('show-login').addEventListener('click', function(e) {
                        e.preventDefault();
                        showAuthModal('login');
                    });

                    document.getElementById('show-register').addEventListener('click', function(e) {
                        e.preventDefault();
                        showAuthModal('register');
                    });

                    document.getElementById('mobile-show-login').addEventListener('click', function(e) {
                        e.preventDefault();
                        mobileMenu.classList.add('hidden');
                        showAuthModal('login');
                    });

                    document.getElementById('mobile-show-register').addEventListener('click', function(e) {
                        e.preventDefault();
                        mobileMenu.classList.add('hidden');
                        showAuthModal('register');
                    });
                }
            }

            // Show auth modal with specific tab
            function showAuthModal(tab) {
                authModal.classList.add('active');

                // Switch to the specified tab
                authTabs.forEach(t => t.classList.remove('active'));
                authForms.forEach(f => f.classList.remove('active'));

                document.querySelector(`.auth-tab[data-tab="${tab}"]`).classList.add('active');
                document.getElementById(`${tab}-form`).classList.add('active');
            }

            // Hide auth modal
            function hideAuthModal() {
                authModal.classList.remove('active');
            }

            // Login function
            function login(email, name) {
                isLoggedIn = true;
                currentUser = {
                    email: email,
                    name: name || 'Utilisateur'
                };

                // Save to localStorage
                localStorage.setItem('isLoggedIn', 'true');
                localStorage.setItem('currentUser', JSON.stringify(currentUser));

                // Update UI
                updateUI();

                // Hide auth modal
                hideAuthModal();

                // Show success toast
                showToast('Vous êtes maintenant connecté !', 'success');
            }

            // Logout function
            function logout() {
                isLoggedIn = false;
                currentUser = {};

                // Remove from localStorage
                localStorage.removeItem('isLoggedIn');
                localStorage.removeItem('currentUser');

                // Update UI
                updateUI();

                // Show success toast
                showToast('Vous avez été déconnecté avec succès.', 'info');
            }

            // Show toast notification
            function showToast(message, type) {
                const toast = document.createElement('div');
                toast.className = `fixed bottom-4 right-4 px-6 py-3 rounded-md shadow-lg text-white font-medium ${
                    type === 'success' ? 'bg-green-500' : 
                    type === 'error' ? 'bg-red-500' : 
                    'bg-blue-500'
                }`;
                toast.textContent = message;
                document.body.appendChild(toast);

                setTimeout(() => {
                    toast.classList.add('opacity-0', 'translate-y-2', 'transition-all', 'duration-300');
                    setTimeout(() => {
                        document.body.removeChild(toast);
                    }, 300);
                }, 3000);
            }

            // Form event listeners
            document.getElementById('login-form').addEventListener('submit', function(e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;
                login(email);
            });

            document.getElementById('register-form').addEventListener('submit', function(e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;
                const name = this.querySelector('input[type="text"]').value;
                login(email, name);
            });

            // Auth tab switching
            authTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const tabName = this.getAttribute('data-tab');

                    authTabs.forEach(t => t.classList.remove('active'));
                    authForms.forEach(f => f.classList.remove('active'));

                    this.classList.add('active');
                    document.getElementById(`${tabName}-form`).classList.add('active');
                });
            });

            // Switch between login and register forms
            switchToRegister.addEventListener('click', function(e) {
                e.preventDefault();
                showAuthModal('register');
            });

            switchToLogin.addEventListener('click', function(e) {
                e.preventDefault();
                showAuthModal('login');
            });

            // Close modal when clicking close button or outside
            closeAuthModal.addEventListener('click', hideAuthModal);
            authModal.addEventListener('click', function(e) {
                if (e.target === authModal) {
                    hideAuthModal();
                }
            });

            // Mobile menu toggle
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Initialize the UI
            updateUI();

            // Add animations to elements when they come into view
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                        
                        // For stats cards, add a counting animation
                        if (entry.target.classList.contains('stats-number')) {
                            const target = +entry.target.textContent.replace(/[^0-9]/g, '');
                            const suffix = entry.target.textContent.replace(/[0-9]/g, '');
                            const duration = 2000;
                            const start = 0;
                            const increment = target / (duration / 16);
                            
                            const animateCount = () => {
                                const current = +entry.target.textContent.replace(/[^0-9]/g, '');
                                if (current < target) {
                                    entry.target.textContent = Math.ceil(current + increment) + suffix;
                                    setTimeout(animateCount, 16);
                                } else {
                                    entry.target.textContent = target + suffix;
                                }
                            };
                            
                            entry.target.textContent = start + suffix;
                            setTimeout(animateCount, 16);
                        }
                    }
                });
            }, { threshold: 0.1 });

            // Observe all cards and stats numbers
            document.querySelectorAll('.category-card, .ad-card, .testimonial-card, .stats-number').forEach(el => {
                observer.observe(el);
            });

            // Add hover effect to ad cards
            document.querySelectorAll('.ad-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.querySelector('.ad-image img').style.transform = 'scale(1.05)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.querySelector('.ad-image img').style.transform = 'scale(1)';
                });
            });
        </script>
    </body>
    </html>