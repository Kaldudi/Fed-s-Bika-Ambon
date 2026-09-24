<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fed's Bika Ambon</title>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            teal: '#0D9488',
                            orange: '#FDBA74',
                            dark: '#0F172A',
                            light: '#F8FAFC'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Smooth scrolling and basic resets */
        html { scroll-behavior: smooth; }
        body { background-color: #F8FAFC; color: #0F172A; }
    </style>
</head>
<body class="font-sans antialiased flex flex-col min-h-screen">
    
    <!-- Navbar -->
    <header class="bg-brand-dark/95 backdrop-blur-md border-b border-white/10 text-white sticky top-0 z-50 shadow-xl transition-all duration-300">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="group flex items-center gap-3 text-2xl font-black tracking-tighter text-brand-orange hover:text-white transition-all duration-500">
                <img src="/uploads/logo.jpg" alt="Fed's Bika Ambon Logo" class="h-14 w-14 md:h-16 md:w-16 rounded-full border-2 border-brand-orange/50 shadow-lg group-hover:scale-110 group-hover:border-brand-orange transition-all duration-500 bg-white object-cover">
                <div class="flex flex-col">
                    <span class="bg-gradient-to-r from-brand-orange to-yellow-400 text-transparent bg-clip-text group-hover:from-white group-hover:to-gray-300 transition-all duration-500 leading-none">
                        Fed's
                    </span>
                    <span class="text-white font-light tracking-widest text-xs group-hover:text-brand-orange transition-colors duration-500 mt-1">
                        BIKA AMBON
                    </span>
                </div>
            </a>
            
            <!-- Navigation -->
            <nav class="hidden md:flex items-center space-x-10">
                <a href="/" class="relative font-bold text-sm tracking-widest uppercase text-white hover:text-brand-orange transition-colors group py-2">
                    Menu
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-orange transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#about" class="relative font-bold text-sm tracking-widest uppercase text-white hover:text-brand-orange transition-colors group py-2">
                    Tentang Kami
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-orange transition-all duration-300 group-hover:w-full"></span>
                </a>
            </nav>

            <!-- Login & Contact Us -->
            <div class="flex items-center gap-6">
                <!-- Login / Dashboard Button -->
                <div>
                    <?php if(session()->get('logged_in')): ?>
                        <a href="/admin" class="bg-brand-orange text-brand-dark px-6 py-2.5 rounded-full font-bold hover:bg-yellow-400 transition-colors shadow-sm">Dashboard</a>
                        <a href="/auth/logout" class="ml-3 text-sm text-gray-200 hover:text-white font-medium">Logout</a>
                    <?php else: ?>
                        <a href="/auth" class="bg-brand-orange text-brand-dark px-6 py-2.5 rounded-full font-bold hover:bg-yellow-400 transition-colors shadow-sm">Sign In</a>
                    <?php endif; ?>
                </div>
                
                <!-- Contact Us Block (KFC Style) -->
                <div class="hidden sm:flex flex-col items-center bg-white/5 rounded-xl overflow-hidden shadow-sm border border-white/10 backdrop-blur-sm hover:bg-white/10 transition-colors">
                    <span class="text-[11px] font-extrabold text-brand-orange uppercase px-4 py-1 tracking-wider">Contact Us</span>
                    <a href="tel:081388321263" class="bg-brand-teal text-white flex items-center gap-2 px-4 py-1.5 w-full justify-center hover:bg-teal-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <span class="font-extrabold text-sm tracking-wide">081388321263</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-brand-dark text-white pt-16 mt-12">
        <div class="container mx-auto px-4 md:px-12">
            <!-- App Promo Section -->
            <div class="flex flex-col md:flex-row justify-between items-center border-b border-gray-800 pb-16 mb-12">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h2 class="text-3xl md:text-5xl font-black mb-4 uppercase leading-tight">UNLOCK MORE <br>BIKA AMBON<br>GOOD BENEFITS</h2>
                    <p class="text-gray-300 mb-8 max-w-sm">Create an account to get access to exclusive promos and rewards, and reorder your favourites.</p>
                    <a href="/auth" class="bg-brand-orange text-brand-dark px-8 py-3 rounded-full font-bold inline-block hover:bg-yellow-400 transition-colors mb-10 shadow-lg">Sign me up</a>
                    
                    <div>
                        <p class="font-bold mb-3 text-sm">Download The New Bika Ambon APP</p>
                        <div class="flex gap-4">
                            <a href="https://play.google.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" class="h-10"></a>
                            <a href="https://www.apple.com/app-store/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="App Store" class="h-10"></a>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center md:justify-end">
                    <img src="/uploads/app_mockup.jpg" alt="Bika Ambon App" class="max-w-xs md:max-w-sm rounded-[2.5rem] shadow-2xl border-4 border-gray-800">
                </div>
            </div>

            <!-- Main Footer Links -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8 mb-12 text-sm">
                <!-- Col 1 -->
                <div>
                    <h4 class="font-extrabold mb-4 uppercase tracking-wider text-brand-orange">PT Bika Ambon Nusantara Tbk</h4>
                    <p class="text-gray-400 mb-4 leading-relaxed">Alamat : Jl. Merdeka No. 1 / Medan<br>20111, Indonesia</p>
                    <p class="text-gray-400 mb-4 leading-relaxed">Operating hours<br>Weekday : 08:00 - 20:00<br>Weekend : 10:00 - 19:00</p>
                    <p class="text-gray-400 mb-2">Telephone: 081388321263</p>
                    <p class="text-gray-400">E-mail: info@fedsbikaambon.com</p>
                </div>
                
                <!-- Col 2 -->
                <div>
                    <h4 class="font-extrabold mb-4 uppercase tracking-wider">Layanan</h4>
                    <ul class="text-gray-400 space-y-3">
                        <li><a href="#" class="hover:text-brand-orange transition-colors">Delivery Order</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition-colors">Dine in</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition-colors">Take Away</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition-colors">Catering</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition-colors">Drive Thru</a></li>
                    </ul>
                </div>
                
                <!-- Col 3 -->
                <div>
                    <h4 class="font-extrabold mb-4 uppercase tracking-wider">Karir</h4>
                    <ul class="text-gray-400 space-y-3">
                        <li><a href="#" class="hover:text-brand-orange transition-colors">Karir</a></li>
                    </ul>
                </div>
                
                <!-- Col 4 -->
                <div>
                    <h4 class="font-extrabold mb-4 uppercase tracking-wider">Info</h4>
                    <ul class="text-gray-400 space-y-3">
                        <li><a href="#" class="hover:text-brand-orange transition-colors">Terms & Conditions</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition-colors">Contact Us</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition-colors">Allergen Info</a></li>
                    </ul>
                </div>

                <!-- Col 5 -->
                <div>
                    <h4 class="font-extrabold mb-4 uppercase tracking-wider">Download App</h4>
                    <div class="flex flex-col gap-4">
                        <a href="https://play.google.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" class="h-10 w-auto object-contain"></a>
                        <a href="https://www.apple.com/app-store/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="App Store" class="h-10 w-auto object-contain"></a>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-800 py-6 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">
                <p>&copy; <?= date('Y') ?> FEDSBIKAAMBON.com by PT Bika Ambon Nusantara Tbk. | All rights reserved.</p>
                <div class="flex gap-4 mt-4 md:mt-0">
                    <a href="https://facebook.com" target="_blank" class="w-8 h-8 rounded-full border border-gray-600 flex items-center justify-center hover:bg-brand-orange hover:text-brand-dark hover:border-brand-orange transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="w-8 h-8 rounded-full border border-gray-600 flex items-center justify-center hover:bg-brand-orange hover:text-brand-dark hover:border-brand-orange transition-all">
                         <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path></svg>
                    </a>
                    <a href="https://youtube.com" target="_blank" class="w-8 h-8 rounded-full border border-gray-600 flex items-center justify-center hover:bg-brand-orange hover:text-brand-dark hover:border-brand-orange transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 00-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 00-1.94 2A29 29 0 001 11.75a29 29 0 00.46 5.33 2.78 2.78 0 001.94 2c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 001.94-2 29 29 0 00.46-5.33 29 29 0 00-.46-5.33z"></path><path fill="currentColor" stroke="none" d="M9.75 15.02l5.75-3.27-5.75-3.27v6.54z"></path></svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="w-8 h-8 rounded-full border border-gray-600 flex items-center justify-center hover:bg-brand-orange hover:text-brand-dark hover:border-brand-orange transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
