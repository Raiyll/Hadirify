<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Guru untuk Konsultasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto max-w-6xl p-4">
        <!-- Header -->
        <header class="bg-blue-600 text-white rounded-t-lg shadow-md">
            <div class="flex items-center justify-between p-4">
                <div class="flex items-center space-x-4">
                    <a href="/dashboard" class="text-white hover:text-blue-200">
                        <i class="fas fa-arrow-left text-xl"></i>
                    </a>
                    <div>
                        <h1 class="text-xl font-bold">Pilih Guru</h1>
                        <p class="text-sm text-blue-100">Konsultasi dengan guru mata pelajaran</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="p-2 rounded-full hover:bg-blue-500">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </header>

      
        <div class="bg-white p-4 rounded-lg shadow-sm mt-4">
            <div class="flex flex-wrap gap-2">
                <button class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-medium hover:bg-blue-200 transition">Semua</button>
                <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-medium hover:bg-gray-200 transition">Matematika</button>
                <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-medium hover:bg-gray-200 transition">Jurusan</button>
                <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-medium hover:bg-gray-200 transition">Informatika</button>
                <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-medium hover:bg-gray-200 transition">Bahasa</button>
                <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-medium hover:bg-gray-200 transition">IPA</button>
            </div>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-sm mt-4">
            <div class="relative">
                <input type="text" placeholder="Cari nama guru atau mata pelajaran..." class="w-full border border-gray-300 rounded-full py-2 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
            </div>
        </div>


        <div class="bg-white rounded-lg shadow-sm mt-4 overflow-hidden">
        
         <a href="/konsultasi">   <div class="border-b border-gray-200 p-4 hover:bg-blue-50 transition cursor-pointer">
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Guru" class="w-12 h-12 rounded-full mr-4">
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold">Latifah S.pd</h3>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Online</span>
                        </div>
                        <p class="text-sm text-gray-600">PPKN</p>
                        <div class="flex items-center mt-1">
                        </div>
                    </div>
                    <button class="ml-4 p-2 bg-blue-500 text-white rounded-full hover:bg-blue-600">
                        <i class="fas fa-comment-dots"></i>
                    </button>
                </div>
            </div>

        
            <div class="border-b border-gray-200 p-4 hover:bg-blue-50 transition cursor-pointer">
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Guru" class="w-12 h-12 rounded-full mr-4">
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold">Komariah S.kom</h3>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Online</span>
                        </div>
                        <p class="text-sm text-gray-600">Pemrograman Dasar</p>
                        <div class="flex items-center mt-1">
                        </div>
                    </div>
                    <button class="ml-4 p-2 bg-blue-500 text-white rounded-full hover:bg-blue-600">
                        <i class="fas fa-comment-dots"></i>
                    </button>
                </div>
            </div>

            <div class="border-b border-gray-200 p-4 hover:bg-blue-50 transition cursor-pointer">
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Guru" class="w-12 h-12 rounded-full mr-4">
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold">Dwiki S.pd</h3>
                            <span class="text-xs bg-gray-100 text-gray-800 px-2 py-1 rounded-full">Offline</span>
                        </div>
                        <p class="text-sm text-gray-600">Matematika</p>
                        <div class="flex items-center mt-1">
                        </div>
                    </div>
                    <button class="ml-4 p-2 bg-blue-500 text-white rounded-full hover:bg-blue-600">
                        <i class="fas fa-comment-dots"></i>
                    </button>
                </div>
            </div>

          
            <div class="border-b border-gray-200 p-4 hover:bg-blue-50 transition cursor-pointer">
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Guru" class="w-12 h-12 rounded-full mr-4">
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold">Wahyudin S.Kom</h3>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Online</span>
                        </div>
                        <p class="text-sm text-gray-600">Aset Design</p>
                        <div class="flex items-center mt-1">
                        </div>
                    </div>
                    <button class="ml-4 p-2 bg-blue-500 text-white rounded-full hover:bg-blue-600">
                        <i class="fas fa-comment-dots"></i>
                    </button>
                </div>
            </div>

            <div class="p-4 hover:bg-blue-50 transition cursor-pointer">
                <a class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Guru" class="w-12 h-12 rounded-full mr-4">
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold">NugrahaNingtyas S.pd</h3>
                            <span class="text-xs bg-gray-100 text-gray-800 px-2 py-1 rounded-full">Offline</span>
                        </div>
                        <p class="text-sm text-gray-600">Bahasa Inggris</p>
                        <div class="flex items-center mt-1">
                        </div>
                    </div>
                    <button class="ml-4 p-2 bg-blue-500 text-white rounded-full hover:bg-blue-600">
                        <i class="fas fa-comment-dots"></i>
                    </button> </a>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm mt-6 p-4">
            <h2 class="font-bold text-lg mb-3 flex items-center">
                <i class="fas fa-calendar-alt text-blue-500 mr-2"></i>
                Guru dengan Jadwal Tersedia Hari Ini
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            
                <div class="border border-blue-200 rounded-lg p-3 bg-blue-50 hover:bg-blue-100 transition cursor-pointer">
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Guru" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h3 class="font-medium">Komariah S.kom</h3>
                            <p class="text-xs text-gray-600">Pemrograman Dasar</p>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center text-sm">
                        <i class="fas fa-clock text-blue-500 mr-1"></i>
                        <span class="font-medium">13:00 - 15:00</span>
                        <span class="mx-2 text-gray-300">|</span>
                        <i class="fas fa-map-marker-alt text-blue-500 mr-1"></i>
                        <span>Ruang Lab A</span>
                    </div>
                    <button class="mt-2 w-full bg-blue-500 text-white py-1 rounded-md text-sm hover:bg-blue-600 transition">
                        Buat Janji
                    </button>
                </div>

             
                <div class="border border-blue-200 rounded-lg p-3 bg-blue-50 hover:bg-blue-100 transition cursor-pointer">
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Guru" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h3 class="font-medium">Wahyudin S.Kom</h3>
                            <p class="text-xs text-gray-600">Pemrograman Lanjut</p>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center text-sm">
                        <i class="fas fa-clock text-blue-500 mr-1"></i>
                        <span class="font-medium">10:00 - 12:00</span>
                        <span class="mx-2 text-gray-300">|</span>
                        <i class="fas fa-map-marker-alt text-blue-500 mr-1"></i>
                        <span>Ruang Lab B</span>
                    </div>
                    <button class="mt-2 w-full bg-blue-500 text-white py-1 rounded-md text-sm hover:bg-blue-600 transition">
                        Buat Janji
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
      
        const filterButtons = document.querySelectorAll('.flex-wrap button');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
              
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-blue-100', 'text-blue-600');
                    btn.classList.add('bg-gray-100', 'text-gray-600');
                });
                
             
                button.classList.remove('bg-gray-100', 'text-gray-600');
                button.classList.add('bg-blue-100', 'text-blue-600');
                
                
                
            });
        });


        const guruItems = document.querySelectorAll('.cursor-pointer');
        
        guruItems.forEach(item => {
            item.addEventListener('click', (e) => {
                if (!e.target.closest('button')) {
                    window.location.href = 'konsultasi.html';
                }
            });
        });
    </script>
</body>
</html>