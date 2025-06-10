<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Kehadiran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#283593',
                        secondary: '#3f37c9',
                        accent: '#4895ef',
                        success: '#28a745',
                        warning: '#f00f28',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-out',
                        'slide-up': 'slideUp 0.4s ease-out',
                        'pulse-slow': 'pulse 3s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }
            .scrollbar-hide {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
        }
    </style>
</head>
<body class="bg-gray-50 p-4 md:p-6">
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden animate-fade-in">
    
        <header class="bg-gradient-to-r from-primary to-secondary text-white p-6 text-center relative">
            <a href="/dashboard" class="absolute left-6 top-1/2 -translate-y-1/2 bg-white/20 w-10 h-10 rounded-full flex items-center justify-center cursor-pointer hover:bg-white/30 transition-all">
                <i class="fas fa-arrow-left text-white"></i>
            </a>
            <h1 class="text-2xl font-semibold mb-1">Riwayat Kehadiran</h1>
            <p class="opacity-90 font-light">Lihat catatan kehadiran Anda</p>
        </header>

        <div class="flex flex-wrap justify-around p-5 bg-gray-50 border-b border-gray-200">
            <div class="bg-white p-4 rounded-xl shadow-sm text-center w-full sm:w-1/2 md:w-1/4 m-2 animate-slide-up">
                <div class="text-3xl font-bold text-primary">92%</div>
                <div class="text-gray-500 text-sm mt-1">Kehadiran</div>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-sm text-center w-full sm:w-1/2 md:w-1/4 m-2 animate-slide-up" style="animation-delay: 0.1s">
                <div class="text-3xl font-bold text-success">24</div>
                <div class="text-gray-500 text-sm mt-1">Hadir</div>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-sm text-center w-full sm:w-1/2 md:w-1/4 m-2 animate-slide-up" style="animation-delay: 0.2s">
                <div class="text-3xl font-bold text-warning">2</div>
                <div class="text-gray-500 text-sm mt-1">Izin</div>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-sm text-center w-full sm:w-1/2 md:w-1/4 m-2 animate-slide-up" style="animation-delay: 0.3s">
                <div class="text-3xl font-bold text-gray-600">0</div>
                <div class="text-gray-500 text-sm mt-1">Alpa</div>
            </div>
        </div>

        <div class="p-5 border-b border-gray-200 flex flex-wrap items-center justify-between gap-3">
            <div class="flex items-center space-x-2">
                <span class="text-gray-600">Filter:</span>
                <select class="bg-gray-100 border-0 rounded-lg px-3 py-2 focus:ring-2 focus:ring-primary outline-none">
                    <option>Semua</option>
                    <option>Minggu ini</option>
                    <option>Bulan ini</option>
                    <option>Semester ini</option>
                </select>
            </div>
            <div class="relative w-full sm:w-auto">
                <input type="text" placeholder="Cari..." class="bg-gray-100 border-0 rounded-full pl-10 pr-4 py-2 w-full focus:ring-2 focus:ring-primary outline-none">
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
            </div>
        </div>

        <div class="overflow-y-auto max-h-96 scrollbar-hide">
            <div class="sticky top-0 bg-gray-100 z-10 px-5 py-2 border-b border-gray-200">
                <h3 class="font-medium text-gray-700">Mei 2025</h3>
            </div>

            <div class="divide-y divide-gray-200">
              
                <div class="p-5 hover:bg-gray-50 transition-colors duration-200 flex items-start">
                    <div class="bg-green-100 text-green-800 rounded-full w-10 h-10 flex items-center justify-center mr-4 flex-shrink-0">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-medium">Matematika</h4>
                                <p class="text-sm text-gray-500">Dwiki S.Pd - Ruang 26</p>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Hadir</span>
                        </div>
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <i class="far fa-clock mr-2"></i>
                            <span>Senin, 15 Mei 2025 - 08:00</span>
                        </div>
                    </div>
                </div>

                <div class="p-5 hover:bg-gray-50 transition-colors duration-200 flex items-start">
                    <div class="bg-yellow-100 text-yellow-800 rounded-full w-10 h-10 flex items-center justify-center mr-4 flex-shrink-0">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-medium">Pemrograman Dasar</h4>
                                <p class="text-sm text-gray-500">Komariah S.Kom - Ruang Lab A</p>
                            </div>
                            <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">Izin</span>
                        </div>
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <i class="far fa-clock mr-2"></i>
                            <span>Rabu, 10 Mei 2025 - 10:15</span>
                        </div>
                        <div class="mt-1 text-sm text-gray-600">
                            <i class="fas fa-info-circle mr-1"></i> Izin sakit dengan surat dokter
                        </div>
                    </div>
                </div>

                <div class="p-5 hover:bg-gray-50 transition-colors duration-200 flex items-start">
                    <div class="bg-green-100 text-green-800 rounded-full w-10 h-10 flex items-center justify-center mr-4 flex-shrink-0">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-medium">Informatika</h4>
                                <p class="text-sm text-gray-500">Dyah Nur - Lab Informatika</p>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Hadir</span>
                        </div>
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <i class="far fa-clock mr-2"></i>
                            <span>Kamis, 4 Mei 2025 - 13:00</span>
                        </div>
                    </div>
                </div>
     
                <div class="sticky top-0 bg-gray-100 z-10 px-5 py-2 border-b border-gray-200">
                    <h3 class="font-medium text-gray-700">April 2025</h3>
                </div>

           
                <div class="p-5 hover:bg-gray-50 transition-colors duration-200 flex items-start">
                    <div class="bg-green-100 text-green-800 rounded-full w-10 h-10 flex items-center justify-center mr-4 flex-shrink-0">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-medium">Upacara</h4>
                                <p class="text-sm text-gray-500">Wahyudin S.Kom - Lapangan</p>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Hadir</span>
                        </div>
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <i class="far fa-clock mr-2"></i>
                            <span>Senin, 24 April 2025 - 07:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 bg-gray-50 text-center text-sm text-gray-500">
            <p>Terakhir diperbarui: 15 Mei 2025 14:30</p>
        </div>
    </div>

    <button class="fixed bottom-6 right-6 bg-primary text-white w-14 h-14 rounded-full shadow-lg flex items-center justify-center hover:bg-secondary transition-all animate-pulse-slow">
        <i class="fas fa-download text-xl"></i>
    </button>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-slide-up');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.attendance-item').forEach(item => {
            observer.observe(item);
        });
    </script>
</body>
</html>