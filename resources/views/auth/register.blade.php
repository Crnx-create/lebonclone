<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte - Leboncoin</title>
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

        .password-strength {
            height: 5px;
            border-radius: 3px;
            margin-top: 5px;
            transition: all 0.3s ease;
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

        .terms-text {
            font-size: 0.875rem;
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
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">Rejoignez-nous</h2>
            <p class="text-gray-600 text-center mb-6">Créez votre compte en quelques secondes</p>

            <!-- Social Registration -->
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

            <!-- Registration Form -->
            <form class="space-y-5">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom complet</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="far fa-user text-gray-400"></i>
                        </div>
                        <input type="text" id="name"
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-lbc-orange"
                            placeholder="Votre nom complet" required>
                    </div>
                    <p id="name-error" class="mt-1 text-sm text-red-600 hidden">Veuillez entrer votre nom complet</p>
                </div>

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
                    <p id="email-error" class="mt-1 text-sm text-red-600 hidden">Veuillez entrer une adresse email
                        valide</p>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" id="password"
                            class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-lbc-orange"
                            placeholder="Créez un mot de passe" required>
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <span class="password-toggle text-gray-400" id="togglePassword">
                                <i class="far fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-1 mt-2">
                        <div class="password-strength bg-gray-200" id="strength-1"></div>
                        <div class="password-strength bg-gray-200" id="strength-2"></div>
                        <div class="password-strength bg-gray-200" id="strength-3"></div>
                        <div class="password-strength bg-gray-200" id="strength-4"></div>
                    </div>
                    <p id="password-error" class="mt-1 text-sm text-red-600 hidden">Le mot de passe doit contenir au
                        moins 8 caractères</p>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot
                        de passe</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" id="confirm-password"
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-lbc-orange"
                            placeholder="Confirmez votre mot de passe" required>
                    </div>
                    <p id="confirm-error" class="mt-1 text-sm text-red-600 hidden">Les mots de passe ne correspondent
                        pas</p>
                </div>

                <!-- Terms and Conditions -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" type="checkbox"
                            class="h-4 w-4 text-lbc-orange focus:ring-lbc-orange border-gray-300 rounded" required>
                    </div>
                    <div class="ml-3 terms-text">
                        <label for="terms" class="text-gray-700">J'accepte les <a href="#"
                                class="text-lbc-orange hover:underline">Conditions d'utilisation</a> et la <a
                                href="#" class="text-lbc-orange hover:underline">Politique de
                                confidentialité</a></label>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-3 px-4 bg-lbc-orange text-white font-semibold rounded-lg hover:bg-opacity-90 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                    Créer un compte
                </button>
            </form>

            <!-- Login Link -->
            <p class="mt-6 text-center text-gray-600 text-sm">
                Vous avez déjà un compte ?
                <a href="{{ route('login') }}" class="font-semibold text-lbc-orange hover:underline ml-1">Se
                    connecter</a>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Password visibility toggle
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                const icon = this.querySelector('i');
                icon.classList.toggle('fa-eye');
                icon.classList.toggle('fa-eye-slash');
            });

            // Password strength indicator
            password.addEventListener('input', function() {
                checkPasswordStrength(this.value);
            });

            // Confirm password validation
            const confirmPassword = document.getElementById('confirm-password');
            confirmPassword.addEventListener('input', function() {
                validatePasswordMatch();
            });

            // Form validation
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const passwordVal = document.getElementById('password').value;
                const confirmPasswordVal = document.getElementById('confirm-password').value;
                const terms = document.getElementById('terms').checked;

                // Reset errors
                document.querySelectorAll('[id$="-error"]').forEach(el => {
                    el.classList.add('hidden');
                });

                let isValid = true;

                if (!name) {
                    document.getElementById('name-error').classList.remove('hidden');
                    isValid = false;
                }

                if (!isValidEmail(email)) {
                    document.getElementById('email-error').classList.remove('hidden');
                    isValid = false;
                }

                if (passwordVal.length < 8) {
                    document.getElementById('password-error').classList.remove('hidden');
                    isValid = false;
                }

                if (passwordVal !== confirmPasswordVal) {
                    document.getElementById('confirm-error').classList.remove('hidden');
                    isValid = false;
                }

                if (!terms) {
                    showAlert('Veuillez accepter les conditions d\'utilisation', 'error');
                    isValid = false;
                }

                if (isValid) {
                    showAlert('Compte créé avec succès! Redirection...', 'success');
                    setTimeout(() => {
                        window.location.href = '/welcome'; // this sends them to homepage
                    }, 1500); // wait 1.5 seconds so alert shows first
                }

            });

            function isValidEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }

            function checkPasswordStrength(password) {
                let strength = 0;

                // Length check
                if (password.length >= 8) strength++;

                // Contains lowercase, uppercase, number, special char
                if (/[a-z]/.test(password)) strength++;
                if (/[A-Z]/.test(password)) strength++;
                if (/[0-9]/.test(password)) strength++;
                if (/[^A-Za-z0-9]/.test(password)) strength++;

                // Update strength indicators
                for (let i = 1; i <= 4; i++) {
                    const bar = document.getElementById(`strength-${i}`);
                    if (i <= strength) {
                        // Set color based on strength
                        if (strength <= 2) {
                            bar.style.backgroundColor = '#e53e3e'; // red
                        } else if (strength === 3) {
                            bar.style.backgroundColor = '#ed8936'; // orange
                        } else {
                            bar.style.backgroundColor = '#38a169'; // green
                        }
                    } else {
                        bar.style.backgroundColor = '#e2e8f0'; // gray
                    }
                }
            }

            function validatePasswordMatch() {
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirm-password').value;
                const errorElement = document.getElementById('confirm-error');

                if (confirmPassword && password !== confirmPassword) {
                    errorElement.classList.remove('hidden');
                } else {
                    errorElement.classList.add('hidden');
                }
            }

            function showAlert(message, type) {
                const existingAlert = document.querySelector('.alert');
                if (existingAlert) {
                    existingAlert.remove();
                }

                const alert = document.createElement('div');
                alert.className =
                    `alert fixed top-4 left-1/2 transform -translate-x-1/2 z-50 px-4 py-3 rounded-lg border ${type === 'success' ? 'bg-green-100 border-green-400 text-green-700' : 'bg-red-100 border-red-400 text-red-700'}`;
                alert.textContent = message;

                document.body.appendChild(alert);

                setTimeout(() => {
                    alert.remove();
                }, 3000);
            }
        });
    </script>
</body>

</html>
