<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déposer une annonce - MarketPlace</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --secondary: #10b981;
            --dark: #1f2937;
            --light: #f9fafb;
            --gray: #e5e7eb;
            --radius: 8px;
            --transition: all 0.2s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary);
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            margin-right: 0.5rem;
        }
        
        .nav-link {
            font-weight: 500;
            color: #6b7280;
            transition: var(--transition);
            display: flex;
            align-items: center;
        }
        
        .nav-link:hover {
            color: var(--primary);
        }
        
        .nav-link.active {
            color: var(--primary);
            font-weight: 600;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.2);
        }
        
        /* Post Ad Specific Styles */
        .post-ad-section {
            padding: 8rem 0 4rem;
        }
        
        .post-ad-container {
            background: white;
            border-radius: var(--radius);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 1000px;
            margin: 0 auto;
            transform: translateY(0);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .post-ad-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .post-ad-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .post-ad-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            animation: rotate 15s linear infinite;
        }
        
        .post-ad-header h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
        }
        
        .post-ad-header p {
            opacity: 0.9;
            font-size: 1rem;
            position: relative;
        }
        
        .post-ad-steps {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
            position: relative;
        }
        
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 1.5rem;
            position: relative;
            z-index: 1;
        }
        
        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-bottom: 0.5rem;
            transition: var(--transition);
            border: 2px solid rgba(255,255,255,0.3);
        }
        
        .step.active .step-number {
            background: white;
            color: var(--primary);
            transform: scale(1.1);
            border-color: white;
        }
        
        .step.completed .step-number {
            background: var(--secondary);
            color: white;
            border-color: var(--secondary);
        }
        
        .step.completed .step-number::after {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
        }
        
        .step-text {
            font-size: 0.9rem;
            opacity: 0.8;
            transition: var(--transition);
        }
        
        .step.active .step-text,
        .step.completed .step-text {
            opacity: 1;
            font-weight: 600;
        }
        
        .step:not(:last-child):after {
            content: '';
            position: absolute;
            top: 20px;
            right: -30px;
            width: 20px;
            height: 2px;
            background: rgba(255, 255, 255, 0.3);
        }
        
        .post-ad-body {
            padding: 2rem;
        }
        
        .form-step {
            display: none;
            animation: fadeIn 0.5s ease;
        }
        
        .form-step.active {
            display: block;
        }
        
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--gray);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--gray);
            color: #6B7280;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
            cursor: pointer;
        }
        
        .btn-outline:hover {
            border-color: var(--primary);
            color: var(--primary);
        }
        
        /* Category Selection */
        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }
        
        .category-card {
            background: white;
            border-radius: var(--radius);
            padding: 1.5rem 1rem;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            border: 1px solid var(--gray);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .category-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border-color: var(--primary);
        }
        
        .category-card.selected {
            border-color: var(--primary);
            background-color: rgba(79, 70, 229, 0.05);
        }
        
        .category-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(79, 70, 229, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            color: var(--primary);
            font-size: 1.5rem;
            transition: var(--transition);
        }
        
        .category-card:hover .category-icon {
            background: rgba(79, 70, 229, 0.2);
            transform: scale(1.1);
        }
        
        .category-card h3 {
            font-weight: 600;
            font-size: 1rem;
        }
        
        /* Step 2: Details Form */
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #374151;
        }
        
        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--gray);
            border-radius: var(--radius);
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }
        
        .form-textarea {
            min-height: 120px;
            resize: vertical;
        }
        
        .price-input {
            position: relative;
        }
        
        .price-input::before {
            content: '€';
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
        }
        
        .price-input input {
            padding-left: 2.5rem;
        }
        
        /* Step 3: Photo Upload */
        .photo-upload-container {
            border: 2px dashed var(--gray);
            border-radius: var(--radius);
            padding: 2rem;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            margin-bottom: 1.5rem;
        }
        
        .photo-upload-container:hover {
            border-color: var(--primary);
            background: rgba(79, 70, 229, 0.02);
        }
        
        .photo-upload-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .photo-upload-text {
            margin-bottom: 1rem;
        }
        
        .photo-preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .photo-preview {
            position: relative;
            border-radius: var(--radius);
            overflow: hidden;
            aspect-ratio: 1;
            background: #f3f4f6;
        }
        
        .photo-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .photo-remove {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .photo-remove:hover {
            background: rgba(0, 0, 0, 0.8);
        }
        
        /* Step 4: Review */
        .review-card {
            background: white;
            border-radius: var(--radius);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .review-title {
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--primary);
            display: flex;
            align-items: center;
        }
        
        .review-title i {
            margin-right: 0.5rem;
        }
        
        .review-item {
            display: flex;
            margin-bottom: 0.75rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid var(--gray);
        }
        
        .review-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        
        .review-label {
            font-weight: 500;
            min-width: 120px;
            color: #6b7280;
        }
        
        .review-value {
            flex: 1;
        }
        
        .photos-review {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }
        
        .photo-review-thumb {
            width: 60px;
            height: 60px;
            border-radius: 4px;
            object-fit: cover;
        }
        
        /* Success Message */
        .success-message {
            text-align: center;
            padding: 3rem 2rem;
        }
        
        .success-icon {
            font-size: 4rem;
            color: var(--secondary);
            margin-bottom: 1.5rem;
            animation: bounce 1s ease infinite;
        }
        
        .success-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .success-text {
            color: #6b7280;
            margin-bottom: 2rem;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .post-ad-section {
                padding: 6rem 0 2rem;
            }
            
            .post-ad-steps {
                flex-wrap: wrap;
                gap: 1rem;
            }
            
            .step {
                margin: 0 0.5rem;
            }
            
            .step:not(:last-child):after {
                display: none;
            }
            
            .category-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container mx-auto px-4 flex justify-between items-center py-4">
            <a class="navbar-brand" href="/">
                <i class="fas fa-store"></i>
                MarketPlace
            </a>
            
            <button class="md:hidden text-gray-700 focus:outline-none" id="mobile-menu-button">
                <i class="fas fa-bars text-2xl"></i>
            </button>
            
            <div class="hidden md:flex items-center space-x-6" id="navbar-menu">
                <div class="flex space-x-6">
                    <a class="nav-link" href="/"><i class="fas fa-home mr-1"></i> Accueil</a>
                    <a class="nav-link" href="#"><i class="fas fa-car mr-1"></i> Voitures</a>
                    <a class="nav-link" href="#"><i class="fas fa-building mr-1"></i> Immobilier</a>
                    <a class="nav-link" href="#"><i class="fas fa-tshirt mr-1"></i> Mode</a>
                    <a class="nav-link active" href="#"><i class="fas fa-mobile-alt mr-1"></i> Multimédia</a>
                </div>
                
                <div id="auth-links" class="flex items-center space-x-4">
                    <a href="#" class="nav-link"><i class="fas fa-user-circle mr-1"></i> Mon compte</a>
                    <a href="#" class="btn-primary px-4 py-2 text-sm"><i class="fas fa-plus mr-1"></i> Déposer une annonce</a>
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
                    <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100"><i class="fas fa-user-circle mr-2"></i> Mon compte</a>
                    <a href="#" class="block px-3 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-700"><i class="fas fa-plus mr-2"></i> Déposer une annonce</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Post Ad Section -->
    <section class="post-ad-section">
        <div class="container mx-auto px-4">
            <div class="post-ad-container">
                <div class="post-ad-header">
                    <h1>Déposer une annonce</h1>
                    <p>Vendez vos articles en quelques étapes simples</p>
                    
                    <div class="post-ad-steps">
                        <div class="step active" data-step="1">
                            <div class="step-number">1</div>
                            <div class="step-text">Catégorie</div>
                        </div>
                        <div class="step" data-step="2">
                            <div class="step-number">2</div>
                            <div class="step-text">Détails</div>
                        </div>
                        <div class="step" data-step="3">
                            <div class="step-number">3</div>
                            <div class="step-text">Photos</div>
                        </div>
                        <div class="step" data-step="4">
                            <div class="step-number">4</div>
                            <div class="step-text">Finalisation</div>
                        </div>
                    </div>
                </div>
                
                <div class="post-ad-body">
                    <!-- Step 1: Category Selection -->
                    <div class="form-step active" id="step-1">
                        <h2 class="text-xl font-semibold mb-6">Choisissez une catégorie</h2>
                        
                        <div class="category-grid">
                            <div class="category-card" data-category="voitures">
                                <div class="category-icon">
                                    <i class="fas fa-car"></i>
                                </div>
                                <h3>Voitures</h3>
                            </div>
                            
                            <div class="category-card" data-category="immobilier">
                                <div class="category-icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <h3>Immobilier</h3>
                            </div>
                            
                            <div class="category-card" data-category="mode">
                                <div class="category-icon">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                                <h3>Mode</h3>
                            </div>
                            
                            <div class="category-card" data-category="multimedia">
                                <div class="category-icon">
                                    <i class="fas fa-laptop"></i>
                                </div>
                                <h3>Multimédia</h3>
                            </div>
                            
                            <div class="category-card" data-category="mobilier">
                                <div class="category-icon">
                                    <i class="fas fa-couch"></i>
                                </div>
                                <h3>Mobilier</h3>
                            </div>
                            
                            <div class="category-card" data-category="jouets">
                                <div class="category-icon">
                                    <i class="fas fa-gamepad"></i>
                                </div>
                                <h3>Jouets & Jeux</h3>
                            </div>
                            
                            <div class="category-card" data-category="sport">
                                <div class="category-icon">
                                    <i class="fas fa-bicycle"></i>
                                </div>
                                <h3>Sports & Loisirs</h3>
                            </div>
                            
                            <div class="category-card" data-category="autres">
                                <div class="category-icon">
                                    <i class="fas fa-ellipsis-h"></i>
                                </div>
                                <h3>Autres</h3>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <div></div>
                            <button class="btn-primary" onclick="nextStep(2)">Suivant <i class="fas fa-arrow-right ml-1"></i></button>
                        </div>
                    </div>
                    
                    <!-- Step 2: Details Form -->
                    <div class="form-step" id="step-2">
                        <h2 class="text-xl font-semibold mb-6">Détails de l'annonce</h2>
                        
                        <div class="form-group">
                            <label class="form-label" for="ad-title">Titre de l'annonce *</label>
                            <input type="text" id="ad-title" class="form-control" placeholder="Ex: iPhone 13 Pro Max 256GB - Comme neuf">
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label class="form-label" for="ad-category">Catégorie *</label>
                                <select id="ad-category" class="form-control">
                                    <option value="">Sélectionnez une catégorie</option>
                                    <option value="smartphones">Smartphones</option>
                                    <option value="tablettes">Tablettes</option>
                                    <option value="ordinateurs">Ordinateurs</option>
                                    <option value="accessoires">Accessoires</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="ad-condition">État *</label>
                                <select id="ad-condition" class="form-control">
                                    <option value="">Sélectionnez un état</option>
                                    <option value="new">Neuf</option>
                                    <option value="like_new">Comme neuf</option>
                                    <option value="good">Bon état</option>
                                    <option value="fair">État correct</option>
                                    <option value="poor">À réparer</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group price-input">
                            <label class="form-label" for="ad-price">Prix (€) *</label>
                            <input type="number" id="ad-price" class="form-control" placeholder="Ex: 799">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="ad-location">Localisation *</label>
                            <input type="text" id="ad-location" class="form-control" placeholder="Ex: Paris, 75001">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="ad-description">Description détaillée *</label>
                            <textarea id="ad-description" class="form-control form-textarea" placeholder="Décrivez votre article en détail..."></textarea>
                        </div>
                        
                        <div class="form-actions">
                            <button class="btn-outline" onclick="prevStep(1)"><i class="fas fa-arrow-left mr-1"></i> Retour</button>
                            <button class="btn-primary" onclick="nextStep(3)">Suivant <i class="fas fa-arrow-right ml-1"></i></button>
                        </div>
                    </div>
                    
                    <!-- Step 3: Photo Upload -->
                    <div class="form-step" id="step-3">
                        <h2 class="text-xl font-semibold mb-6">Ajoutez des photos</h2>
                        <p class="text-gray-600 mb-6">Les annonces avec photos se vendent jusqu'à 10x plus vite ! Ajoutez au moins 3 photos de qualité.</p>
                        
                        <div class="photo-upload-container" id="photo-upload-area">
                            <div class="photo-upload-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <h3 class="photo-upload-text font-semibold">Glissez-déposez vos photos ici</h3>
                            <p class="text-gray-500 mb-4">ou</p>
                            <button class="btn-outline px-6"><i class="fas fa-folder-open mr-2"></i> Parcourir</button>
                            <input type="file" id="file-input" multiple accept="image/*" style="display: none;">
                        </div>
                        
                        <div class="photo-preview-grid" id="photo-preview-container">
                            <!-- Photos will be added here dynamically -->
                        </div>
                        
                        <div class="form-actions">
                            <button class="btn-outline" onclick="prevStep(2)"><i class="fas fa-arrow-left mr-1"></i> Retour</button>
                            <button class="btn-primary" onclick="nextStep(4)">Suivant <i class="fas fa-arrow-right ml-1"></i></button>
                        </div>
                    </div>
                    
                    <!-- Step 4: Review & Submit -->
                    <div class="form-step" id="step-4">
                        <h2 class="text-xl font-semibold mb-6">Vérifiez votre annonce</h2>
                        <p class="text-gray-600 mb-6">Vérifiez que toutes les informations sont correctes avant de publier votre annonce.</p>
                        
                        <div class="review-card">
                            <h3 class="review-title"><i class="fas fa-info-circle"></i> Informations principales</h3>
                            
                            <div class="review-item">
                                <div class="review-label">Titre</div>
                                <div class="review-value" id="review-title">iPhone 13 Pro Max 256GB - Comme neuf</div>
                            </div>
                            
                            <div class="review-item">
                                <div class="review-label">Catégorie</div>
                                <div class="review-value" id="review-category">Multimédia > Smartphones</div>
                            </div>
                            
                            <div class="review-item">
                                <div class="review-label">État</div>
                                <div class="review-value" id="review-condition">Comme neuf</div>
                            </div>
                            
                            <div class="review-item">
                                <div class="review-label">Prix</div>
                                <div class="review-value" id="review-price">799 €</div>
                            </div>
                            
                            <div class="review-item">
                                <div class="review-label">Localisation</div>
                                <div class="review-value" id="review-location">Paris, 75001</div>
                            </div>
                        </div>
                        
                        <div class="review-card">
                            <h3 class="review-title"><i class="fas fa-align-left"></i> Description</h3>
                            <div class="review-value" id="review-description">
                                iPhone 13 Pro Max 256GB en parfait état, acheté il y a 6 mois. Livré avec facture, boîte d'origine et accessoires. Écran et coque protégés depuis le premier jour. Batterie à 98% de capacité. Vente pour achat d'un nouveau modèle.
                            </div>
                        </div>
                        
                        <div class="review-card">
                            <h3 class="review-title"><i class="fas fa-camera"></i> Photos</h3>
                            <div class="photos-review" id="review-photos">
                                <img src="https://via.placeholder.com/60x60" alt="Preview" class="photo-review-thumb">
                                <img src="https://via.placeholder.com/60x60" alt="Preview" class="photo-review-thumb">
                                <img src="https://via.placeholder.com/60x60" alt="Preview" class="photo-review-thumb">
                                <img src="https://via.placeholder.com/60x60" alt="Preview" class="photo-review-thumb">
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button class="btn-outline" onclick="prevStep(3)"><i class="fas fa-arrow-left mr-1"></i> Retour</button>
                            <button class="btn-primary" onclick="submitAd()"><i class="fas fa-check mr-1"></i> Publier l'annonce</button>
                        </div>
                    </div>
                    
                    <!-- Success Message (hidden initially) -->
                    <div class="form-step" id="step-success">
                        <div class="success-message">
                            <div class="success-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h2 class="success-title">Félicitations !</h2>
                            <p class="success-text">
                                Votre annonce a été publiée avec succès. Elle est maintenant visible par des milliers d'acheteurs potentiels. Vous pouvez la gérer depuis votre espace personnel.
                            </p>
                            <div class="flex justify-center space-x-4">
                                <a href="/" class="btn-outline px-6"><i class="fas fa-home mr-2"></i> Retour à l'accueil</a>
                                <a href="#" class="btn-primary px-6"><i class="fas fa-eye mr-2"></i> Voir mon annonce</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">MarketPlace</h3>
                    <p class="text-gray-400">La plateforme de petites annonces la plus simple et efficace pour acheter et vendre près de chez vous.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Acheter</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Catégories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Annonces récentes</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Annonces favorites</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Recherche avancée</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Vendre</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Déposer une annonce</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Conseils pour vendre</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Options premium</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">À propos</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Qui sommes-nous ?</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Mentions légales</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Conditions d'utilisation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Contactez-nous</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0">© 2023 MarketPlace. Tous droits réservés.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Post ad functionality
        let currentStep = 1;
        const totalSteps = 4;
        let selectedCategory = null;
        let uploadedPhotos = [];
        
        // Category selection
        document.querySelectorAll('.category-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.category-card').forEach(c => {
                    c.classList.remove('selected');
                });
                this.classList.add('selected');
                selectedCategory = this.getAttribute('data-category');
            });
        });
        
        // Form navigation
        function updateSteps() {
            document.querySelectorAll('.step').forEach(step => {
                const stepNum = parseInt(step.getAttribute('data-step'));
                
                step.classList.remove('active', 'completed');
                if (stepNum === currentStep) {
                    step.classList.add('active');
                } else if (stepNum < currentStep) {
                    step.classList.add('completed');
                }
            });
            
            document.querySelectorAll('.form-step').forEach(step => {
                step.classList.remove('active');
            });
            
            document.getElementById(`step-${currentStep}`).classList.add('active');
        }
        
        function nextStep(step) {
            if (step <= totalSteps) {
                currentStep = step;
                updateSteps();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }
        
        function prevStep(step) {
            if (step >= 1) {
                currentStep = step;
                updateSteps();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }
        
        // Photo upload functionality
        const photoUploadArea = document.getElementById('photo-upload-area');
        const fileInput = document.getElementById('file-input');
        const photoPreviewContainer = document.getElementById('photo-preview-container');
        
        photoUploadArea.addEventListener('click', () => {
            fileInput.click();
        });
        
        fileInput.addEventListener('change', handleFileSelect);
        
        // Drag and drop functionality
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            photoUploadArea.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            photoUploadArea.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            photoUploadArea.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight() {
            photoUploadArea.classList.add('border-indigo-600', 'bg-indigo-50');
        }
        
        function unhighlight() {
            photoUploadArea.classList.remove('border-indigo-600', 'bg-indigo-50');
        }
        
        photoUploadArea.addEventListener('drop', handleDrop, false);
        
        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            handleFiles(files);
        }
        
        function handleFileSelect(e) {
            const files = e.target.files;
            handleFiles(files);
        }
        
        function handleFiles(files) {
            [...files].forEach(file => {
                if (file.type.match('image.*')) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        const photo = {
                            id: Date.now(),
                            url: e.target.result
                        };
                        
                        uploadedPhotos.push(photo);
                        renderPhotoPreview(photo);
                    };
                    
                    reader.readAsDataURL(file);
                }
            });
        }
        
        function renderPhotoPreview(photo) {
            const preview = document.createElement('div');
            preview.className = 'photo-preview';
            preview.dataset.id = photo.id;
            
            preview.innerHTML = `
                <img src="${photo.url}" alt="Preview">
                <div class="photo-remove" onclick="removePhoto(${photo.id})">
                    <i class="fas fa-times text-xs"></i>
                </div>
            `;
            
            photoPreviewContainer.appendChild(preview);
        }
        
        function removePhoto(id) {
            uploadedPhotos = uploadedPhotos.filter(photo => photo.id !== id);
            document.querySelector(`.photo-preview[data-id="${id}"]`).remove();
        }
        
        // Form submission
        function submitAd() {
            // In a real app, you would send the data to your server here
            console.log('Ad submitted:', {
                category: selectedCategory,
                title: document.getElementById('ad-title').value,
                condition: document.getElementById('ad-condition').value,
                price: document.getElementById('ad-price').value,
                location: document.getElementById('ad-location').value,
                description: document.getElementById('ad-description').value,
                photos: uploadedPhotos
            });
            
            
            // Show success message
            document.getElementById(`step-${currentStep}`).classList.remove('active');
            document.getElementById('step-success').classList.add('active');
            
            // Mark all steps as completed
            document.querySelectorAll('.step').forEach(step => {
                step.classList.add('completed');
            });
        }
        
    // ... (your existing JavaScript code remains the same until the submitAd function)

    // Form submission
    function submitAd() {
        // Create ad object with all data
        const adData = {
            id: Date.now(), // Unique ID based on timestamp
            title: document.getElementById('ad-title').value,
            category: selectedCategory,
            subcategory: document.getElementById('ad-category').value,
            condition: document.getElementById('ad-condition').value,
            price: document.getElementById('ad-price').value,
            location: document.getElementById('ad-location').value,
            description: document.getElementById('ad-description').value,
            photos: uploadedPhotos.map(photo => photo.url), // Store only URLs
            date: new Date().toISOString(),
            status: 'active'
        };
        
        // Save to localStorage
        saveAdToStorage(adData);
        
        // Show success message
        document.getElementById(`step-${currentStep}`).classList.remove('active');
        document.getElementById('step-success').classList.add('active');
        
        // Mark all steps as completed
        document.querySelectorAll('.step').forEach(step => {
            step.classList.add('completed');
        });
        
        // Update the "View my ad" link with the ad ID
        document.querySelector('#step-success a[href="#"]').href = `#ad-${adData.id}`;
    }

    function saveAdToStorage(adData) {
        // Get existing ads or initialize empty array
        const existingAds = JSON.parse(localStorage.getItem('marketplace_ads')) || [];
        
        // Add new ad to beginning of array (to show newest first)
        existingAds.unshift(adData);
        
        // Save back to localStorage
        localStorage.setItem('marketplace_ads', JSON.stringify(existingAds));
        
        console.log('Ad saved to localStorage:', adData);
    }

    // ... (the rest of your existing JavaScript code)

        // Form validation would go here in a real application
    </script>
</body>
</html>