<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeBonClone - Header</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        :root {
            --lbc-orange: #FF6E14;
            --lbc-blue: #002D59;
            --lbc-gradient: linear-gradient(135deg, #FF6E14 0%, #FF9E53 100%);
        }
        
        .bg-lbc-orange { background-color: var(--lbc-orange); }
        .text-lbc-orange { color: var(--lbc-orange); }
        .border-lbc-orange { border-color: var(--lbc-orange); }
        .bg-lbc-gradient { background: var(--lbc-gradient); }
        
        .nav-link {
            position: relative;
            padding: 0.5rem 0;
            transition: all 0.3s ease;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--lbc-orange);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        .dropdown-menu {
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
            pointer-events: none;
        }
        
        .dropdown-menu.show {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }
        
        .user-avatar {
            transition: all 0.3s ease;
        }
        
        .user-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 0 0 3px rgba(255, 110, 20, 0.2);
        }
        
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }
        
        .mobile-menu.open {
            max-height: 500px;
        }
        
        .notification-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #EF4444;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="font-sans bg-gray-50 text-gray-800 antialiased">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50" x-data="{ mobileMenuOpen: false, userDropdownOpen: false, notificationsOpen: false }">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="/" class="flex items-center space-x-2">
                    <div class="bg-lbc-gradient w-10 h-10 rounded-lg flex items-center justify-center">
                        <i class="fas fa-store text-white text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold text-gray-800">
                        <span class="text-lbc-orange">LeBon</span><span class="text-blue-800">Clone</span>
                    </span>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-1 xl:space-x-2">
                    <a href="/" class="nav-link px-3 py-2 text-gray-700 hover:text-lbc-orange font-medium">
                        Accueil
                    </a>
                    <a href="/ads" class="nav-link px-3 py-2 text-gray-700 hover:text-lbc-orange font-medium">
                        Annonces
                    </a>
                    
                    <!-- Authenticated User Menu -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="nav-link px-3 py-2 text-gray-700 hover:text-lbc-orange font-medium flex items-center">
                            <span>Plus</span>
                            <i class="fas fa-chevron-down text-xs ml-1"></i>
                        </button>

                        <div x-show="open" @click.away="open = false" 
                             class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-xl py-2 z-50 border border-gray-100">
                            <a href="/categories" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-lbc-orange">
                                <i class="fas fa-layer-group mr-2"></i>Catégories
                            </a>
                            <a href="/regions" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-lbc-orange">
                                <i class="fas fa-map-marker-alt mr-2"></i>Par région
                            </a>
                            <a href="/professionals" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-lbc-orange">
                                <i class="fas fa-building mr-2"></i>Professionnels
                            </a>
                        </div>
                    </div>
                </nav>

                <!-- Right side actions -->
                <div class="flex items-center space-x-4">
                    <!-- Create Ad Button -->
                    <a href="/ads/create" class="hidden md:flex items-center space-x-2 bg-lbc-gradient text-white px-4 py-2 rounded-lg font-semibold hover:shadow-md transition-shadow">
                        <i class="fas fa-plus-circle"></i>
                        <span>Déposer une annonce</span>
                    </a>
                    
                    <!-- Notifications -->
                    <div class="relative hidden md:block">
                        <button @click="notificationsOpen = !notificationsOpen" class="w-10 h-10 rounded-full flex items-center justify-center text-gray-600 hover:bg-gray-100 relative">
                            <i class="fas fa-bell"></i>
                            <span class="notification-badge">3</span>
                        </button>
                        
                        <div x-show="notificationsOpen" @click.away="notificationsOpen = false" 
                             class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-xl py-2 z-50 border border-gray-100">
                            <div class="px-4 py-2 border-b border-gray-100">
                                <h3 class="font-semibold text-gray-800">Notifications</h3>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                <a href="#" class="block px-4 py-3 hover:bg-gray-50 border-b border-gray-100">
                                    <p class="text-sm font-medium">Nouveau message</p>
                                    <p class="text-xs text-gray-500">Vous avez reçu un message concernant votre annonce</p>
                                    <p class="text-xs text-orange-500 mt-1">Il y a 5 min</p>
                                </a>
                                <a href="#" class="block px-4 py-3 hover:bg-gray-50 border-b border-gray-100">
                                    <p class="text-sm font-medium">Vente confirmée</p>
                                    <p class="text-xs text-gray-500">Votre canapé a été vendu</p>
                                    <p class="text-xs text-orange-500 mt-1">Hier</p>
                                </a>
                                <a href="#" class="block px-4 py-3 hover:bg-gray-50">
                                    <p class="text-sm font-medium">Nouveau favori</p>
                                    <p class="text-xs text-gray-500">Quelqu'un a aimé votre annonce</p>
                                    <p class="text-xs text-orange-500 mt-1">Il y a 2 jours</p>
                                </a>
                            </div>
                            <div class="px-4 py-2 border-t border-gray-100">
                                <a href="/notifications" class="text-sm text-lbc-orange font-medium">Voir toutes les notifications</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- User menu -->
                    <div class="relative">
                        <button @click="userDropdownOpen = !userDropdownOpen" class="flex items-center space-x-2">
                            <div class="user-avatar w-10 h-10 bg-gradient-to-r from-orange-100 to-orange-200 rounded-full flex items-center justify-center border-2 border-white shadow-sm">
                                <i class="fas fa-user text-orange-600"></i>
                            </div>
                            <span class="hidden md:block text-gray-700 font-medium">JeanDupont</span>
                            <i class="fas fa-chevron-down text-xs text-gray-500 hidden md:block"></i>
                        </button>

                        <!-- Dropdown menu -->
                        <div x-show="userDropdownOpen" @click.away="userDropdownOpen = false" 
                             class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-xl py-2 z-50 border border-gray-100">
                            <div class="px-4 py-3 border-b border-gray-100">
                                <p class="text-sm font-medium text-gray-800">Jean Dupont</p>
                                <p class="text-xs text-gray-500">jean.dupont@example.com</p>
                            </div>
                            
                            <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-lbc-orange">
                                <i class="fas fa-chart-line mr-2"></i>Tableau de bord
                            </a>
                            <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-lbc-orange">
                                <i class="fas fa-user-edit mr-2"></i>Mon profil
                            </a>
                            <a href="/my-ads" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-lbc-orange">
                                <i class="fas fa-list mr-2"></i>Mes annonces
                            </a>
                            <a href="/favorites" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-lbc-orange">
                                <i class="fas fa-heart mr-2"></i>Favoris
                            </a>
                            <a href="/messages" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-lbc-orange">
                                <i class="fas fa-comments mr-2"></i>Messages
                                <span class="ml-auto bg-lbc-orange text-white text-xs px-2 py-0.5 rounded-full">5</span>
                            </a>
                            
                            <div class="border-t border-gray-100 my-2"></div>
                            
                            <a href="/settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-lbc-orange">
                                <i class="fas fa-cog mr-2"></i>Paramètres
                            </a>
                            <a href="/help" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-lbc-orange">
                                <i class="fas fa-question-circle mr-2"></i>Aide
                            </a>
                            
                            <div class="border-t border-gray-100 my-2"></div>
                            
                            <form method="POST" action="/logout">
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-lbc-orange">
                                    <i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden w-10 h-10 rounded-full flex items-center justify-center text-gray-600 hover:bg-gray-100">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile menu -->
            <div x-show="mobileMenuOpen" class="mobile-menu lg:hidden bg-white mt-4 rounded-lg shadow-lg p-4 border border-gray-100">
                <div class="space-y-4">
                    <a href="/" class="block py-2 px-4 rounded-lg hover:bg-orange-50 hover:text-lbc-orange font-medium">
                        <i class="fas fa-home mr-3"></i>Accueil
                    </a>
                    <a href="/ads" class="block py-2 px-4 rounded-lg hover:bg-orange-50 hover:text-lbc-orange font-medium">
                        <i class="fas fa-list mr-3"></i>Annonces
                    </a>
                    <a href="/categories" class="block py-2 px-4 rounded-lg hover:bg-orange-50 hover:text-lbc-orange font-medium">
                        <i class="fas fa-layer-group mr-3"></i>Catégories
                    </a>
                    <a href="/regions" class="block py-2 px-4 rounded-lg hover:bg-orange-50 hover:text-lbc-orange font-medium">
                        <i class="fas fa-map-marker-alt mr-3"></i>Par région
                    </a>
                    
                    <div class="pt-4 border-t border-gray-100">
                        <a href="/ads/create" class="flex items-center justify-center bg-lbc-gradient text-white px-4 py-3 rounded-lg font-semibold mb-3">
                            <i class="fas fa-plus-circle mr-2"></i>
                            Déposer une annonce
                        </a>
                        
                        <div class="grid grid-cols-2 gap-3">
                            <a href="/login" class="text-center py-2 px-4 border border-gray-300 rounded-lg font-medium hover:border-lbc-orange hover:text-lbc-orange">
                                Connexion
                            </a>
                            <a href="/register" class="text-center py-2 px-4 bg-gray-800 text-white rounded-lg font-medium hover:bg-gray-900">
                                Inscription
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Page content for context -->
    <main class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Header Modernisé LeBonClone</h1>
            <p class="text-gray-600 mb-8">Cette démonstration présente un header amélioré avec un design moderne, une navigation intuitive et des animations fluides.</p>
            
            <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Fonctionnalités implémentées</h2>
                <ul class="text-left grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-700">
                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> Design moderne avec dégradé de couleurs</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> Menu déroulant animé</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> Indicateur de notifications</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> Menu mobile optimisé</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> États au survol améliorés</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i> Navigation intuitive avec indicateurs visuels</li>
                </ul>
            </div>
        </div>
    </main>

    <script>
        // Additional interactive behaviors
        document.addEventListener('DOMContentLoaded', function() {
            // Handle user dropdown
            const userButton = document.querySelector('[x-data] button');
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>