<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hadirify - Sistem Absensi Sekolah Modern dengan fitur real-time, analitik canggih, dan notifikasi otomatis">
    <meta name="keywords" content="absensi sekolah, sistem absensi, manajemen sekolah, aplikasi sekolah">
    <title>Hadirify - Sistem Absensi Sekolah Modern</title>
    
    <!-- Preload important resources -->
    <link rel="preload" href="https://cdn.tailwindcss.com" as="script">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" as="script">
    
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s ease-in-out infinite',
                        'pulse-slower': 'pulse 5s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'slide-in-left': 'slideInLeft 0.8s ease-out',
                        'slide-in-right': 'slideInRight 0.8s ease-out',
                        'border-rotate': 'borderRotate 6s linear infinite',
                        'text-gradient': 'textGradient 8s ease infinite',
                        'neon-pulse': 'neonPulse 2s ease infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(50px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-50px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        slideInRight: {
                            '0%': { opacity: '0', transform: 'translateX(50px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        borderRotate: {
                            '0%': { 'border-image': 'linear-gradient(0deg, #4f46e5, #c026d3, #db2777) 1' },
                            '100%': { 'border-image': 'linear-gradient(360deg, #4f46e5, #c026d3, #db2777) 1' }
                        },
                        textGradient: {
                            '0%, 100%': { 'background-position': '0% 50%' },
                            '50%': { 'background-position': '100% 50%' }
                        },
                        neonPulse: {
                            '0%, 100%': { 
                                'text-shadow': '0 0 5px #fff, 0 0 10px #fff, 0 0 15px #4f46e5, 0 0 20px #4f46e5',
                                'box-shadow': '0 0 5px rgba(79, 70, 229, 0.5), 0 0 20px rgba(79, 70, 229, 0.5)'
                            },
                            '50%': { 
                                'text-shadow': '0 0 10px #fff, 0 0 20px #fff, 0 0 30px #4f46e5, 0 0 40px #4f46e5',
                                'box-shadow': '0 0 10px rgba(79, 70, 229, 0.8), 0 0 30px rgba(79, 70, 229, 0.8)'
                            }
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- GSAP for advanced animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    
    <!-- Particle.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    
    <!-- Confetti.js -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    
    <style>
        /* Custom styles */
        .particles-js-canvas-el {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }
        
        .gradient-text {
            background-image: linear-gradient(90deg, #f59e0b, #ef4444, #ec4899, #8b5cf6);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: textGradient 8s ease infinite;
        }
        
        .feature-card {
            perspective: 1000px;
            transform-style: preserve-3d;
        }
        
        .feature-card-inner {
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }
        
        .feature-card:hover .feature-card-inner {
            transform: rotateY(180deg);
        }
        
        .feature-card-front, .feature-card-back {
            backface-visibility: hidden;
            position: absolute;
            width: 100%;
            height: 100%;
        }
        
        .feature-card-back {
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }
        
        .rotating-border {
            border: 4px solid transparent;
            border-image: linear-gradient(45deg, #4f46e5, #c026d3, #db2777);
            border-image-slice: 1;
            animation: borderRotate 6s linear infinite;
        }
        
        .glow-on-hover {
            transition: all 0.3s ease;
        }
        
        .glow-on-hover:hover {
            box-shadow: 0 0 15px rgba(79, 70, 229, 0.7);
        }
        
        .dark .dark\:bg-gradient-dark {
            background: linear-gradient(135deg, #1e1b4b 0%, #2e1065 50%, #3b0764 100%);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-800 via-purple-800 to-pink-800 min-h-screen dark:bg-gradient-dark transition-colors duration-300">
    <!-- Particle Background -->
    <div id="particles-js" class="fixed inset-0 z-0 opacity-30"></div>
    
    <!-- Navigation -->
    <nav id="navbar" class="fixed top-0 w-full bg-white/95 backdrop-blur-md z-50 transition-all duration-300 shadow-lg dark:bg-gray-900/95">
        <div class="container mx-auto px-4 sm:px-6 py-3">
            <div class="flex justify-between items-center">
                <a href="#home" class="flex items-center">
                    <img src="{{ asset('img/hadirify-logo.jpg') }}" alt="Hadirify Logo" class="h-10 w-auto" loading="lazy">
                    <span class="ml-2 text-xl font-bold text-indigo-800 dark:text-indigo-300 hidden sm:inline">Hadirify</span>
                </a>
                
                <div class="hidden md:flex space-x-6 lg:space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-indigo-800 dark:text-gray-300 dark:hover:text-indigo-300 transition-colors duration-300 font-medium">Beranda</a>
                    <a href="#features" class="text-gray-700 hover:text-indigo-800 dark:text-gray-300 dark:hover:text-indigo-300 transition-colors duration-300 font-medium">Fitur</a>
                    <a href="#about" class="text-gray-700 hover:text-indigo-800 dark:text-gray-300 dark:hover:text-indigo-300 transition-colors duration-300 font-medium">Tentang</a>
                    <a href="#contact" class="text-gray-700 hover:text-indigo-800 dark:text-gray-300 dark:hover:text-indigo-300 transition-colors duration-300 font-medium">Kontak</a>
                </div>
                
                <div class="flex items-center space-x-3 sm:space-x-4">
                    <button id="theme-toggle" class="p-2 rounded-full focus:outline-none text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg id="theme-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path id="moon-icon" d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" style="display:none;"></path>
                            <path id="sun-icon" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"></path>
                        </svg>
                    </button>
                    <button onclick="showLoginModal()" class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-300 dark:hover:text-indigo-200 font-medium transition-colors duration-300 text-sm sm:text-base">
                        Masuk
                    </button>
                    <button onclick="showRegisterModal()" class="bg-gradient-to-r from-indigo-800 to-purple-600 text-white px-4 sm:px-6 py-2 rounded-full hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 text-sm sm:text-base glow-on-hover">
                        Daftar Sekarang
                    </button>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700 dark:text-gray-300 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-3 pb-3 space-y-2 dark:bg-gray-800/95 rounded-lg">
                <a href="#home" class="block py-2 px-4 text-gray-700 hover:text-indigo-800 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-indigo-300 dark:hover:bg-gray-700 rounded-lg transition-colors">Beranda</a>
                <a href="#features" class="block py-2 px-4 text-gray-700 hover:text-indigo-800 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-indigo-300 dark:hover:bg-gray-700 rounded-lg transition-colors">Fitur</a>
                <a href="#about" class="block py-2 px-4 text-gray-700 hover:text-indigo-800 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-indigo-300 dark:hover:bg-gray-700 rounded-lg transition-colors">Tentang</a>
                <a href="#contact" class="block py-2 px-4 text-gray-700 hover:text-indigo-800 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-indigo-300 dark:hover:bg-gray-700 rounded-lg transition-colors">Kontak</a>
                <div class="pt-2 border-t border-gray-200 dark:border-gray-700">
                    <button onclick="showLoginModal()" class="w-full text-left py-2 px-4 text-indigo-600 hover:bg-indigo-50 dark:text-indigo-300 dark:hover:bg-gray-700 rounded-lg transition-colors">
                        Masuk
                    </button>
                    <button onclick="showRegisterModal()" class="w-full text-left py-2 px-4 bg-indigo-600 text-white hover:bg-indigo-700 rounded-lg transition-colors mt-2">
                        Daftar Sekarang
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center pt-16 pb-10 sm:pt-20 sm:pb-16 relative overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 z-10">
            <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div class="animate-slide-in-left">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-4 sm:mb-6 leading-tight">
                        Sistem <span class="gradient-text">Absensi</span> Sekolah Modern
                    </h1>
                    <p class="text-lg sm:text-xl text-white/90 mb-6 sm:mb-8 leading-relaxed">
                        Kelola absensi siswa dengan mudah, akurat, dan real-time. Hadirify memberikan solusi digital terdepan untuk administrasi sekolah yang efisien.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                        <button onclick="showDemoModal(); celebrate()" class="bg-white text-indigo-600 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold hover:shadow-xl transform hover:-translate-y-1 sm:hover:-translate-y-2 transition-all duration-300 text-sm sm:text-base glow-on-hover group relative overflow-hidden">
                            <span class="relative z-10">Coba Sekarang!</span>
                            <span class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        </button>
                        <button onclick="scrollToFeatures()" class="border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold hover:bg-white hover:text-indigo-600 transition-all duration-300 text-sm sm:text-base relative overflow-hidden group">
                            <span class="relative z-10">Pelajari Lebih Lanjut</span>
                            <span class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></span>
                        </button>
                    </div>
                    
                    <div class="mt-8 flex flex-wrap gap-4 items-center">
                        <div class="flex items-center">
                            <div class="flex -space-x-2">
                                <img src="https://randomuser.me/api/portraits/women/12.jpg" class="w-8 h-8 rounded-full border-2 border-white hover:transform hover:scale-110 hover:z-10 transition-transform duration-300" alt="User" loading="lazy">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-8 h-8 rounded-full border-2 border-white hover:transform hover:scale-110 hover:z-10 transition-transform duration-300" alt="User" loading="lazy">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg" class="w-8 h-8 rounded-full border-2 border-white hover:transform hover:scale-110 hover:z-10 transition-transform duration-300" alt="User" loading="lazy">
                            </div>
                            <span class="ml-3 text-white text-sm">500+ sekolah bergabung</span>
                        </div>
                    </div>
                </div>
                
                <div class="animate-slide-in-right mt-8 md:mt-0">
                    <div class="relative max-w-md mx-auto">
                        <div class="bg-white rounded-2xl shadow-2xl p-4 sm:p-6 transform rotate-3 hover:rotate-0 transition-transform duration-500 rotating-border">
                            <div class="flex items-center gap-2 mb-3 sm:mb-4">
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full animate-pulse-slower"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full animate-pulse-slower" style="animation-delay: 0.5s;"></div>
                                <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full animate-pulse-slower" style="animation-delay: 1s;"></div>
                                <div class="ml-2 sm:ml-4 text-xs sm:text-sm text-gray-500">Dashboard Hadirify</div>
                            </div>
                            
                            <div class="bg-gray-50 rounded-xl p-3 sm:p-4 mb-3 sm:mb-4">
                                <div class="grid grid-cols-2 gap-3 sm:gap-4 mb-3 sm:mb-4">
                                    <div class="bg-white rounded-lg p-2 sm:p-3 text-center shadow-sm hover:shadow-md transition-shadow duration-300">
                                        <div class="text-xl sm:text-2xl font-bold text-indigo-600 countup" data-target="1247">0</div>
                                        <div class="text-xs sm:text-sm text-gray-600">Total Siswa</div>
                                    </div>
                                    <div class="bg-white rounded-lg p-2 sm:p-3 text-center shadow-sm hover:shadow-md transition-shadow duration-300">
                                        <div class="text-xl sm:text-2xl font-bold text-green-600 countup" data-target="1089">0</div>
                                        <div class="text-xs sm:text-sm text-gray-600">Hadir Hari Ini</div>
                                    </div>
                                </div>
                                
                                <div class="mb-2 sm:mb-3">
                                    <div class="flex justify-between text-xs sm:text-sm text-gray-600 mb-1">
                                        <span>Tingkat Kehadiran</span>
                                        <span class="countup" data-target="87">0</span>%
                                    </div>
                                    <div class="bg-gray-200 rounded-full h-2 overflow-hidden">
                                        <div class="bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full h-2 transition-all duration-1000 progress-bar" style="width: 0%"></div>
                                    </div>
                                </div>
                                
                                <div class="text-xs text-gray-500 text-center">
                                    Update real-time setiap detik
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Elements -->
                        <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 bg-yellow-400 rounded-full p-2 sm:p-3 animate-float shadow-lg">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        
                        <div class="absolute -bottom-3 -left-3 sm:-bottom-4 sm:-left-4 bg-green-400 rounded-full p-2 sm:p-3 animate-pulse-slow shadow-lg">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scrolling Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 sm:py-20 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 dark:text-white mb-3 sm:mb-4">Fitur Unggulan Hadirify</h2>
                <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Solusi komprehensif untuk mengelola absensi sekolah dengan teknologi terdepan
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Feature 1 - 3D Flip Card -->
                <div class="feature-card">
                    <div class="feature-card-inner relative w-full h-full">
                        <div class="feature-card-front bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900/30 dark:to-indigo-900/30 p-6 sm:p-8 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="bg-indigo-500 w-14 h-14 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mb-4 sm:mb-6 mx-auto">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3 sm:mb-4 text-center">Absensi Real-time</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-center text-sm sm:text-base">
                                Pantau kehadiran siswa secara langsung dengan sistem yang terintegrasi dan akurat
                            </p>
                        </div>
                        <div class="feature-card-back bg-gradient-to-br from-indigo-100 to-blue-100 dark:from-indigo-900/50 dark:to-blue-900/50 rounded-2xl">
                            <p class="text-gray-700 dark:text-gray-200 text-center">
                                <span class="font-bold">Fitur Tambahan:</span> Pemindaian wajah, QR code, dan NFC untuk berbagai metode absensi
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Feature 2 - 3D Flip Card -->
                <div class="feature-card">
                    <div class="feature-card-inner relative w-full h-full">
                        <div class="feature-card-front bg-gradient-to-br from-green-50 to-emerald-100 dark:from-green-900/30 dark:to-emerald-900/30 p-6 sm:p-8 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="bg-green-500 w-14 h-14 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mb-4 sm:mb-6 mx-auto">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm8 0a1 1 0 011-1h6a1 1 0 011 1v2a1 1 0 01-1 1h-6a1 1 0 01-1-1V8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3 sm:mb-4 text-center">Dashboard Analytics</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-center text-sm sm:text-base">
                                Analisis mendalam dengan grafik dan laporan yang membantu pengambilan keputusan
                            </p>
                        </div>
                        <div class="feature-card-back bg-gradient-to-br from-emerald-100 to-green-100 dark:from-emerald-900/50 dark:to-green-900/50 rounded-2xl">
                            <p class="text-gray-700 dark:text-gray-200 text-center">
                                <span class="font-bold">Fitur Tambahan:</span> Prediksi tren kehadiran dan rekomendasi perbaikan
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Feature 3 - 3D Flip Card -->
                <div class="feature-card">
                    <div class="feature-card-inner relative w-full h-full">
                        <div class="feature-card-front bg-gradient-to-br from-purple-50 to-violet-100 dark:from-purple-900/30 dark:to-violet-900/30 p-6 sm:p-8 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="bg-purple-500 w-14 h-14 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mb-4 sm:mb-6 mx-auto">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3 sm:mb-4 text-center">Notifikasi Otomatis</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-center text-sm sm:text-base">
                                Kirim pemberitahuan kepada orang tua dan guru secara otomatis via email/SMS
                            </p>
                        </div>
                        <div class="feature-card-back bg-gradient-to-br from-violet-100 to-purple-100 dark:from-violet-900/50 dark:to-purple-900/50 rounded-2xl">
                            <p class="text-gray-700 dark:text-gray-200 text-center">
                                <span class="font-bold">Fitur Tambahan:</span> Template pesan yang dapat disesuaikan dan jadwal pengiriman
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Feature 4 - 3D Flip Card -->
                <div class="feature-card">
                    <div class="feature-card-inner relative w-full h-full">
                        <div class="feature-card-front bg-gradient-to-br from-orange-50 to-amber-100 dark:from-orange-900/30 dark:to-amber-900/30 p-6 sm:p-8 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="bg-orange-500 w-14 h-14 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mb-4 sm:mb-6 mx-auto">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3 sm:mb-4 text-center">Integrasi Mudah</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-center text-sm sm:text-base">
                                Terhubung dengan sistem sekolah yang sudah ada tanpa perlu perubahan besar
                            </p>
                        </div>
                        <div class="feature-card-back bg-gradient-to-br from-amber-100 to-orange-100 dark:from-amber-900/50 dark:to-orange-900/50 rounded-2xl">
                            <p class="text-gray-700 dark:text-gray-200 text-center">
                                <span class="font-bold">Fitur Tambahan:</span> API untuk kustomisasi dan integrasi dengan platform lain
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Feature 5 - 3D Flip Card -->
                <div class="feature-card">
                    <div class="feature-card-inner relative w-full h-full">
                        <div class="feature-card-front bg-gradient-to-br from-pink-50 to-rose-100 dark:from-pink-900/30 dark:to-rose-900/30 p-6 sm:p-8 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="bg-pink-500 w-14 h-14 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mb-4 sm:mb-6 mx-auto">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3 sm:mb-4 text-center">Keamanan Data</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-center text-sm sm:text-base">
                                Data siswa terlindungi dengan enkripsi tingkat tinggi dan sistem keamanan berlapis
                            </p>
                        </div>
                        <div class="feature-card-back bg-gradient-to-br from-rose-100 to-pink-100 dark:from-rose-900/50 dark:to-pink-900/50 rounded-2xl">
                            <p class="text-gray-700 dark:text-gray-200 text-center">
                                <span class="font-bold">Fitur Tambahan:</span> Audit log dan notifikasi aktivitas mencurigakan
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Feature 6 - 3D Flip Card -->
                <div class="feature-card">
                    <div class="feature-card-inner relative w-full h-full">
                        <div class="feature-card-front bg-gradient-to-br from-cyan-50 to-sky-100 dark:from-cyan-900/30 dark:to-sky-900/30 p-6 sm:p-8 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                            <div class="bg-cyan-500 w-14 h-14 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mb-4 sm:mb-6 mx-auto">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3 sm:mb-4 text-center">Laporan Otomatis</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-center text-sm sm:text-base">
                                Hasilkan laporan bulanan dan tahunan secara otomatis untuk kebutuhan administrasi
                            </p>
                        </div>
                        <div class="feature-card-back bg-gradient-to-br from-sky-100 to-cyan-100 dark:from-sky-900/50 dark:to-cyan-900/50 rounded-2xl">
                            <p class="text-gray-700 dark:text-gray-200 text-center">
                                <span class="font-bold">Fitur Tambahan:</span> Ekspor ke berbagai format (PDF, Excel, CSV)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 sm:py-20 bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-900 dark:to-purple-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxjaXJjbGUgZmlsbD0iI2ZmZiIgY3g9IjIwIiBjeT0iMjAiIHI9IjEiLz48L2c+PC9zdmc+')]"></div>
        </div>
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 text-center text-white">
                <div class="animate-slide-up p-4 bg-white/10 rounded-xl backdrop-blur-sm hover:bg-white/20 transition-colors duration-300">
                    <div class="text-3xl sm:text-4xl font-bold mb-2 countup" data-target="500">0</div>
                    <div class="text-indigo-200 text-sm sm:text-base">Sekolah Terdaftar</div>
                </div>
                <div class="animate-slide-up p-4 bg-white/10 rounded-xl backdrop-blur-sm hover:bg-white/20 transition-colors duration-300" style="animation-delay: 0.2s;">
                    <div class="text-3xl sm:text-4xl font-bold mb-2 countup" data-target="50000">0</div>
                    <div class="text-indigo-200 text-sm sm:text-base">Siswa Aktif</div>
                </div>
                <div class="animate-slide-up p-4 bg-white/10 rounded-xl backdrop-blur-sm hover:bg-white/20 transition-colors duration-300" style="animation-delay: 0.4s;">
                    <div class="text-3xl sm:text-4xl font-bold mb-2 countup" data-target="2500">0</div>
                    <div class="text-indigo-200 text-sm sm:text-base">Guru & Staff</div>
                </div>
                <div class="animate-slide-up p-4 bg-white/10 rounded-xl backdrop-blur-sm hover:bg-white/20 transition-colors duration-300" style="animation-delay: 0.6s;">
                    <div class="text-3xl sm:text-4xl font-bold mb-2">
                        <span class="countup" data-target="99">0</span>.<span class="countup" data-target="8">0</span>%
                    </div>
                    <div class="text-indigo-200 text-sm sm:text-base">Akurasi Sistem</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 sm:py-20 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 dark:text-white mb-3 sm:mb-4">Apa Kata Mereka?</h2>
                <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Testimoni dari sekolah yang telah menggunakan Hadirify
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Testimoni" class="w-12 h-12 rounded-full mr-4 hover:ring-2 hover:ring-indigo-500 transition-all" loading="lazy">
                        <div>
                            <h4 class="font-bold text-gray-800 dark:text-white">Ibu Siti Rahayu</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Kepala Sekolah SMPN 5 Jakarta</p>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">
                        "Hadirify sangat membantu kami dalam mengelola absensi siswa. Sistem yang mudah digunakan dan laporan yang lengkap."
                    </p>
                    <div class="mt-4 flex text-yellow-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>
                
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Testimoni" class="w-12 h-12 rounded-full mr-4 hover:ring-2 hover:ring-indigo-500 transition-all" loading="lazy">
                        <div>
                            <h4 class="font-bold text-gray-800 dark:text-white">Bapak Andi Wijaya</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Wakil Kepala Sekolah SMAN 8 Bandung</p>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">
                        "Hadirify telah mengubah cara kami mengelola absensi. Dengan fitur notifikasi otomatis, orang tua selalu mendapatkan informasi terkini tentang kehadiran anak mereka."
                    </p>
                    <div class="mt-4 flex text-yellow-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Testimoni" class="w-12 h-12 rounded-full mr-4 hover:ring-2 hover:ring-indigo-500 transition-all" loading="lazy">
                        <div>
                            <h4 class="font-bold text-gray-800 dark:text-white">Ibu Maria Lestari</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Guru Kelas SDN 1 Surabaya</p>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">
                        "Dengan Hadirify, saya bisa fokus mengajar tanpa khawatir tentang absensi. Sistemnya sangat efisien dan mudah digunakan."
                    </p>
                    <div class="mt-4 flex text-yellow-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.57.41-.82 1.196-.588 1.81l1.518 4.674a1 1 0 01-.363 1.118l-3.976 2.888c-.784.57-1.838-.197-1.539-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 sm:py-20 bg-gradient-to-r from-indigo-700 to-purple-700 dark:from-indigo-900 dark:to-purple-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxjaXJjbGUgZmlsbD0iI2ZmZiIgY3g9IjMwIiBjeT0iMzAiIHI9IjEuNSIvPjwvZz48L3N2Zz4=')]"></div>
        </div>
        <div class="container mx-auto px-4 sm:px-6 text-center relative z-10">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6 animate-neon-pulse">Siap Mengubah Cara Anda Mengelola Absensi?</h2>
            <p class="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
                Bergabunglah dengan ratusan sekolah yang telah mempercayakan sistem absensi mereka kepada Hadirify.
            </p>
            <button onclick="showRegisterModal(); celebrate()" class="bg-white text-indigo-700 px-8 sm:px-10 py-3 sm:py-4 rounded-full font-bold hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 text-lg sm:text-xl relative overflow-hidden group">
                <span class="relative z-10">Daftar Sekarang - Gratis 30 Hari</span>
                <span class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">Hadirify</h3>
                    <p class="mb-4">
                        Solusi modern untuk manajemen absensi sekolah yang efisien dan terintegrasi.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-