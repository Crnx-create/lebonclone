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
                    <a class="nav-link" href="#"><i class="fas fa-car mr-1"></i> Voitures</a>
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
                    <a href="{{route('create')}}" class="btn-primary">
                        <i class="fas fa-plus-circle mr-1"></i> Déposer
                    </a>
                </div>
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