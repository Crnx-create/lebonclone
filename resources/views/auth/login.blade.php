<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter - Leboncoin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(120deg, #f0f9ff 0%, #e6f3ff 100%);
        }

        .lbc-orange {
            color: #ff6600;
        }

        .bg-lbc-orange {
            background-color: #ff6600;
        }

        .bg-lbc-orange:hover {
            background-color: #e55a00;
        }

        .border-lbc-orange {
            border-color: #ff6600;
        }

        .card-shadow {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(255, 102, 0, 0.15);
        }

        .social-btn {
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #718096;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e2e8f0;
        }

        .divider:not(:empty)::before {
            margin-right: 1em;
        }

        .divider:not(:empty)::after {
            margin-left: 1em;
        }

        .password-toggle {
            cursor: pointer;
            transition: color 0.2s;
        }

        .password-toggle:hover {
            color: #ff6600;
        }

        .alert {
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center py-8 px-4">
    <div class="w-full max-w-md">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <div class="text-4xl font-bold lbc-orange">
                <span class="bg-orange-500 text-white px-3 py-2 rounded-lg">lbc</span>
                <span class="text-gray-800">oncoin</span>
            </div>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-xl card-shadow p-8">
            <!-- Title -->
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">Content de vous revoir</h2>
            <p class="text-gray-600 text-center mb-6">Connectez-vous à votre compte</p>

            <!-- Social Login -->
            <div class="grid grid-cols-2 gap-3 mb-6">
                <button
                    class="social-btn flex items-center justify-center gap-2 py-2.5 px-4 border border-gray-300 rounded-lg text-gray-700 font-medium">
                    <i class="fab fa-google text-red-500"></i>
                    Google
                </button>
                <button
                    class="social-btn flex items-center justify-center gap-2 py-2.5 px-4 border border-gray-300 rounded-lg text-gray-700 font-medium">
                    <i class="fab fa-facebook text-blue-600"></i>
                    Facebook
                </button>
            </div>

            <!-- Divider -->
            <div class="divider text-sm mb-6">Ou</div>

            <!-- Login Form -->
            <form class="space-y-5">
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="far fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" id="email"
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-lbc-orange"
                            placeholder="exemple@email.com" required>
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between mb-1">
                        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                        <a href="#" class="text-sm text-lbc-orange hover:underline">Mot de passe oublié ?</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" id="password"
                            class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-lbc-orange"
                            placeholder="••••••••" required>
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <span class="password-toggle text-gray-400" id="togglePassword">
                                <i class="far fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="h-4 w-4 text-lbc-orange focus:ring-lbc-orange border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-700">Se souvenir de moi</label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-3 px-4 bg-lbc-orange text-white font-semibold rounded-lg hover:bg-opacity-90 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                    Se connecter
                </button>
            </form>

            <!-- Register Link -->
            <p class="mt-6 text-center text-gray-600 text-sm">
                Pas encore de compte ?
                <a href="{{ route('create') }}"class="font-semibold text-lbc-orange hover:underline ml-1">Créer un
                    compte</a>
            </p>
        </div>

        <!-- Additional Links -->
        <div class="mt-6 text-center text-sm text-gray-500">
            <a href="#" class="hover:text-lbc-orange">Conditions d'utilisation</a>
            <span class="mx-2">•</span>
            <a href="#" class="hover:text-lbc-orange">Politique de confidentialité</a>
            <span class="mx-2">•</span>
            <a href="#" class="hover:text-lbc-orange">Aide</a>
        </div>
    </div>

    <script>
        // Password visibility toggle
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function() {
                // Toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                // Toggle the eye icon
                const icon = this.querySelector('i');
                icon.classList.toggle('fa-eye');
                icon.classList.toggle('fa-eye-slash');
            });

            // Form validation
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;

                if (!email || !password) {
                    showAlert('Veuillez remplir tous les champs', 'error');
                    return;
                }

                if (!isValidEmail(email)) {
                    showAlert('Veuillez entrer une adresse email valide', 'error');
                    return;
                }

                // Simulate successful login
                showAlert("Compte créé avec succès! Redirection...", "success");
                setTimeout(() => {
                    window.location.href = "/welcome";
                }, 1500);

                // Here you would typically submit the form to your backend
                // form.submit();
            });

            function isValidEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }

            function showAlert(message, type) {
                // Remove existing alerts
                const existingAlert = document.querySelector('.alert');
                if (existingAlert) {
                    existingAlert.remove();
                }

                const alert = document.createElement('div');
                alert.className =
                    `alert fixed top-4 left-1/2 transform -translate-x-1/2 z-50 px-4 py-3 rounded-lg border ${type === 'success' ? 'bg-green-100 border-green-400 text-green-700' : 'bg-red-100 border-red-400 text-red-700'}`;
                alert.textContent = message;

                document.body.appendChild(alert);

                // Remove alert after 3 seconds
                setTimeout(() => {
                    alert.remove();
                }, 3000);
            }
        });
    </script>
</body>

</html>
