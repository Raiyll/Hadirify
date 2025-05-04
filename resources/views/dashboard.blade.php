<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hadirify | Sistem Absensi Digital</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        @keyframes slideInLeft {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        .bg-primary {
            background-color: #6c5ce7;
        }
        .bg-primary-dark {
            background-color: #5548c9;
        }
        .bg-primary-light {
            background-color: #8c7ae6;
        }
        .text-primary {
            color: #6c5ce7;
        }
        .border-primary-light {
            border-color: #8c7ae6;
        }
        
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
        
        .animate-delay-1 {
            animation-delay: 0.1s;
        }
        
        .animate-delay-2 {
            animation-delay: 0.2s;
        }
        
        .animate-delay-3 {
            animation-delay: 0.3s;
        }
        
        .hover-scale {
            transition: transform 0.2s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.02);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }
        
        .sidebar-item {
            transition: all 0.2s ease;
            position: relative;
        }
        
        .sidebar-item:hover {
            background-color: #5548c9;
        }
        
        .sidebar-item::after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background-color: white;
            transform: scaleY(0);
            transform-origin: center;
            transition: transform 0.2s ease;
        }
        
        .sidebar-item:hover::after {
            transform: scaleY(1);
        }
        
        .active-sidebar-item {
            background-color: #5548c9;
        }
        
        .active-sidebar-item::after {
            transform: scaleY(1);
        }
        
        .notification-badge {
            animation: pulse 2s infinite;
        }
        
        .progress-ring {
            transition: stroke-dashoffset 0.5s ease;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="bg-primary text-white w-64 flex flex-col transition-all duration-300 ease-in-out transform hover:shadow-xl">
            <div class="p-5 flex items-center border-b border-primary-light animate-fade-in">
                <i class="fa-solid fa-book text-xl"></i>
                <h2 class="text-xl ml-3 font-semibold">Hadirify</h2>
            </div>
            <div class="py-5 flex-grow">
                <div class="sidebar-item active-sidebar-item flex items-center px-5 py-3 cursor-pointer animate-fade-in animate-delay-1">
                    <i class="fa-solid fa-house w-5 text-center"></i>
                    <span class="ml-3">Dashboard</span>
                </div>
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer animate-fade-in animate-delay-2">
                    <i class="fa-solid fa-qrcode w-5 text-center"></i>
                    <span class="ml-3">Absensi Scan</span>
                </div>
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer animate-fade-in animate-delay-3">
                    <i class="fa-solid fa-calendar-check w-5 text-center"></i>
                    <span class="ml-3">Kehadiran</span>
                </div>
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer animate-fade-in animate-delay-1">
                    <i class="fa-solid fa-chart-simple w-5 text-center"></i>
                    <span class="ml-3">Laporan</span>
                </div>
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer animate-fade-in animate-delay-2">
                    <i class="fa-solid fa-clock-rotate-left w-5 text-center"></i>
                    <span class="ml-3">Riwayat</span>
                </div>
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer animate-fade-in animate-delay-3">
                    <i class="fa-solid fa-alert w-5 text-center"></i>
                    <span class="ml-3">Hukuman</span>
                </div>
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer animate-fade-in animate-delay-3">
                    <i class="fa-solid fa-gear w-5 text-center"></i>
                    <span class="ml-3">Pengaturan</span>
                </div>
            </div>
            <div class="p-4 border-t border-primary-light flex items-center animate-fade-in">
                <div class="relative">
                <img
                src="/img/gw.jpg" alt="Profile" class="w-10 h-10 rounded-full border-2 border-white hover:border-primary-light transition-all duration-300">
                    <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></div>
                </div>
                <div class="ml-3">
                    <div class="text-sm font-semibold">Ahmad Rafi Fadhilah</div>
                    <div class="text-xs opacity-80">Siswa</div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-grow p-6 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <div class="relative w-64 animate-fade-in">
                    <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input type="text" placeholder="Cari..." class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-lg bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition duration-200">
                </div>
                <div class="flex items-center space-x-4 animate-fade-in">
                    <div class="relative group">
                        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center cursor-pointer shadow hover:bg-gray-50 transition duration-200">
                            <i class="fa-solid fa-bell text-gray-600 group-hover:text-primary"></i>
                            <div class="notification-badge absolute -top-1 -right-1 bg-red-500 text-white w-5 h-5 rounded-full flex items-center justify-center text-xs">3</div>
                        </div>
                        <div class="absolute hidden group-hover:block right-0 mt-2 w-72 bg-white rounded-md shadow-lg z-10 p-2 animate-fade-in">
                            <div class="text-sm font-medium px-2 py-1">Notifikasi</div>
                            <div class="border-t mt-1"></div>
                            <div class="p-2 hover:bg-gray-50 rounded cursor-pointer transition duration-150">
                                <div class="text-sm">Pengingat: Raport akan dibagikan besok</div>
                                <div class="text-xs text-gray-500">10 menit yang lalu</div>
                            </div>
                            <div class="p-2 hover:bg-gray-50 rounded cursor-pointer transition duration-150">
                                <div class="text-sm">Anda memiliki tugas yang belum dikumpulkan</div>
                                <div class="text-xs text-gray-500">1 jam yang lalu</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center cursor-pointer shadow hover:bg-gray-50 transition duration-200 relative">
                        <i class="fa-solid fa-envelope text-gray-600 hover:text-primary"></i>
                        <div class="absolute -top-1 -right-1 bg-red-500 text-white w-5 h-5 rounded-full flex items-center justify-center text-xs">5</div>
                    </div>
                    <div class="relative group">
                        <img src="/img/gw.jpg" alt="Profile" class="w-10 h-10 rounded-full cursor-pointer border-2 border-transparent hover:border-primary transition duration-200">
                        <div class="absolute hidden group-hover:block right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 animate-fade-in">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="text-2xl font-semibold mb-1 animate-fade-in">Selamat Pagi, Ahmad Rafi Fadhilah</h1>
            <p class="text-gray-600 mb-6 animate-fade-in animate-delay-1">
                <span id="current-date">Senin, 02 Mei 2025</span> | 
                <span id="current-time" class="font-medium">08:15 WIB</span>
            </p>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white p-5 rounded-lg shadow card-hover animate-fade-in">
                    <div class="flex justify-between">
                        <div>
                            <div class="text-gray-600 text-sm mb-1">Total Kehadiran</div>
                            <div class="text-3xl font-semibold">85%</div>
                            <div class="text-green-500 text-sm mt-1 flex items-center">
                                <i class="fa-solid fa-arrow-up mr-1"></i> 2.5% dari bulan lalu
                            </div>
                        </div>
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center text-white hover:bg-primary-dark transition duration-200">
                            <i class="fa-solid fa-user-check"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-primary h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-lg shadow card-hover animate-fade-in animate-delay-1">
                    <div class="flex justify-between">
                        <div>
                            <div class="text-gray-600 text-sm mb-1">Hadir Tepat Waktu</div>
                            <div class="text-3xl font-semibold">92%</div>
                            <div class="text-green-500 text-sm mt-1 flex items-center">
                                <i class="fa-solid fa-arrow-up mr-1"></i> 4.8% dari bulan lalu
                            </div>
                        </div>
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white hover:bg-green-600 transition duration-200">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 92%"></div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-lg shadow card-hover animate-fade-in animate-delay-2">
                    <div class="flex justify-between">
                        <div>
                            <div class="text-gray-600 text-sm mb-1">Keterlambatan</div>
                            <div class="text-3xl font-semibold">7</div>
                            <div class="text-red-500 text-sm mt-1 flex items-center">
                                <i class="fa-solid fa-arrow-down mr-1"></i> 1.2% dari bulan lalu
                            </div>
                        </div>
                        <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center text-white hover:bg-yellow-600 transition duration-200">
                            <i class="fa-solid fa-hourglass-half"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 14%"></div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-lg shadow card-hover animate-fade-in animate-delay-3">
                    <div class="flex justify-between">
                        <div>
                            <div class="text-gray-600 text-sm mb-1">Absen (Sakit/Izin)</div>
                            <div class="text-3xl font-semibold">3</div>
                            <div class="text-gray-500 text-sm mt-1 flex items-center">
                                <i class="fa-solid fa-equals mr-1"></i> Sama dengan bulan lalu
                            </div>
                        </div>
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white hover:bg-blue-600 transition duration-200">
                            <i class="fa-solid fa-calendar-xmark"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 6%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts and Activity -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-5 rounded-lg shadow lg:col-span-2 card-hover animate-fade-in">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-lg">Grafik Kehadiran</h3>
                        <div class="text-primary text-sm cursor-pointer hover:underline">Bulan Ini <i class="fa-solid fa-chevron-down ml-1 text-xs"></i></div>
                    </div>
                    <div class="w-full h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                        <svg width="100%" height="100%" viewBox="0 0 500 250" class="overflow-visible">
                            <!-- X-axis -->
                            <line x1="50" y1="200" x2="450" y2="200" stroke="#ddd" stroke-width="1" />
                            
                            <!-- Y-axis -->
                            <line x1="50" y1="200" x2="50" y2="50" stroke="#ddd" stroke-width="1" />
                            
                            <!-- Grid lines -->
                            <line x1="50" y1="170" x2="450" y2="170" stroke="#eee" stroke-width="1" stroke-dasharray="5,5" />
                            <line x1="50" y1="140" x2="450" y2="140" stroke="#eee" stroke-width="1" stroke-dasharray="5,5" />
                            <line x1="50" y1="110" x2="450" y2="110" stroke="#eee" stroke-width="1" stroke-dasharray="5,5" />
                            <line x1="50" y1="80" x2="450" y2="80" stroke="#eee" stroke-width="1" stroke-dasharray="5,5" />
                            <line x1="50" y1="50" x2="450" y2="50" stroke="#eee" stroke-width="1" stroke-dasharray="5,5" />
                            
                            <!-- Y-axis labels -->
                            <text x="30" y="50" font-size="10" text-anchor="end" fill="#666">100%</text>
                            <text x="30" y="80" font-size="10" text-anchor="end" fill="#666">80%</text>
                            <text x="30" y="110" font-size="10" text-anchor="end" fill="#666">60%</text>
                            <text x="30" y="140" font-size="10" text-anchor="end" fill="#666">40%</text>
                            <text x="30" y="170" font-size="10" text-anchor="end" fill="#666">20%</text>
                            <text x="30" y="200" font-size="10" text-anchor="end" fill="#666">0%</text>
                            
                            <!-- X-axis labels -->
                            <text x="100" y="220" font-size="10" text-anchor="middle" fill="#666">Sen</text>
                            <text x="150" y="220" font-size="10" text-anchor="middle" fill="#666">Sel</text>
                            <text x="200" y="220" font-size="10" text-anchor="middle" fill="#666">Rab</text>
                            <text x="250" y="220" font-size="10" text-anchor="middle" fill="#666">Kam</text>
                            <text x="300" y="220" font-size="10" text-anchor="middle" fill="#666">Jum</text>
                            <text x="350" y="220" font-size="10" text-anchor="middle" fill="#666">Sab</text>
                            <text x="400" y="220" font-size="10" text-anchor="middle" fill="#666">Min</text>
                            
                            <!-- Data points -->
                            <circle cx="100" cy="100" r="4" fill="#6c5ce7" class="animate-fade-in" />
                            <circle cx="150" cy="120" r="4" fill="#6c5ce7" class="animate-fade-in animate-delay-1" />
                            <circle cx="200" cy="80" r="4" fill="#6c5ce7" class="animate-fade-in animate-delay-2" />
                            <circle cx="250" cy="140" r="4" fill="#6c5ce7" class="animate-fade-in animate-delay-3" />
                            <circle cx="300" cy="110" r="4" fill="#6c5ce7" class="animate-fade-in animate-delay-1" />
                            <circle cx="350" cy="160" r="4" fill="#6c5ce7" class="animate-fade-in animate-delay-2" />
                            <circle cx="400" cy="90" r="4" fill="#6c5ce7" class="animate-fade-in animate-delay-3" />
                            
                            <!-- Line connecting points -->
                            <polyline points="100,100 150,120 200,80 250,140 300,110 350,160 400,90" 
                                     fill="none" stroke="#6c5ce7" stroke-width="2" stroke-linejoin="round" 
                                     stroke-dasharray="500" stroke-dashoffset="500" class="animate-draw-line">
                                <animate attributeName="stroke-dashoffset" from="500" to="0" dur="1.5s" fill="freeze" />
                            </polyline>
                        </svg>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-lg shadow card-hover animate-fade-in">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-lg">Aktivitas Terbaru</h3>
                        <div class="text-primary text-sm cursor-pointer hover:underline">Lihat Semua</div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex group">
                            <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center text-white mr-3 flex-shrink-0 group-hover:bg-green-600 transition duration-200">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="group-hover:translate-x-1 transition duration-200">
                                <div class="font-medium">Absen Masuk</div>
                                <div class="text-gray-600 text-xs">Hari ini, 06:15 WIB</div>
                            </div>
                        </div>
                        <div class="flex group pt-3 border-t border-gray-200">
                            <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center text-white mr-3 flex-shrink-0 group-hover:bg-blue-600 transition duration-200">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="group-hover:translate-x-1 transition duration   -200">
                                <div class="font-medium">Kelas Matematika</div>
                                <div class="text-gray-600 text-xs">Hari ini, 08:00 WIB</div>
                            </div>
                        </div>
                        <div class="flex group pt-3 border-t border-gray-200">
                            <div class="w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center text-white mr-3 flex-shrink-0 group-hover:bg-yellow-600 transition duration-200">
                                <i class="fa-solid fa-bell"></i>
                            </div>
                            <div class="group-hover:translate-x-1 transition duration-200">
                                <div class="font-medium">Pengumuman Sekolah</div>
                                <div class="text-gray-600 text-xs">Kemarin, 10:30 WIB</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Schedule and Subject Comparison -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-5 rounded-lg shadow lg:col-span-2 card-hover animate-fade-in">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-lg">Jadwal Hari Ini</h3>
                        <div class="text-primary text-sm cursor-pointer hover:underline">Lihat Mingguan</div>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center py-3 border-b border-gray-200 group hover:bg-gray-50 rounded-lg px-2 transition duration-200 cursor-pointer">
                            <div class="w-16 text-sm font-medium group-hover:text-primary transition duration-200">07:00</div>
                            <div class="w-3 h-3 rounded-full bg-green-500 mr-3 group-hover:scale-125 transition duration-200"></div>
                            <div class="flex-grow">
                                <div class="font-medium group-hover:text-primary transition duration-200">Upacara</div>
                                <div class="text-gray-600 text-xs">Lapangan Utama</div>
                            </div>
                            <i class="fa-solid fa-chevron-right text-gray-400 group-hover:text-primary group-hover:translate-x-1 transition duration-200"></i>
                        </div>
                        <div class="flex items-center py-3 border-b border-gray-200 group hover:bg-gray-50 rounded-lg px-2 transition duration-200 cursor-pointer">
                            <div class="w-16 text-sm font-medium group-hover:text-primary transition duration-200">08:00</div>
                            <div class="w-3 h-3 rounded-full bg-primary mr-3 group-hover:scale-125 transition duration-200"></div>
                            <div class="flex-grow">
                                <div class="font-medium group-hover:text-primary transition duration-200">Matematika</div>
                                <div class="text-gray-600 text-xs">Ruang 26 - Pak Dwiki</div>
                            </div>
                            <i class="fa-solid fa-chevron-right text-gray-400 group-hover:text-primary group-hover:translate-x-1 transition duration-200"></i>
                        </div>
                        <div class="flex items-center py-3 border-b border-gray-200 group hover:bg-gray-50 rounded-lg px-2 transition duration-200 cursor-pointer">
                            <div class="w-16 text-sm font-medium group-hover:text-primary transition duration-200">10:15</div>
                            <div class="w-3 h-3 rounded-full bg-blue-500 mr-3 group-hover:scale-125 transition duration-200"></div>
                            <div class="flex-grow">
                                <div class="font-medium group-hover:text-primary transition duration-200">Pemrograman Dasar</div>
                                <div class="text-gray-600 text-xs">Ruang Lab A - Ibu Kokom</div>
                            </div>
                            <i class="fa-solid fa-chevron-right text-gray-400 group-hover:text-primary group-hover:translate-x-1 transition duration-200"></i>
                        </div>
                        <div class="flex items-center py-3 border-b border-gray-200 group hover:bg-gray-50 rounded-lg px-2 transition duration-200 cursor-pointer">
                            <div class="w-16 text-sm font-medium group-hover:text-primary transition duration-200">12:00</div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500 mr-3 group-hover:scale-125 transition duration-200"></div>
                            <div class="flex-grow">
                                <div class="font-medium group-hover:text-primary transition duration-200">Istirahat</div>
                                <div class="text-gray-600 text-xs">Kantin Sekolah</div>
                            </div>
                            <i class="fa-solid fa-chevron-right text-gray-400 group-hover:text-primary group-hover:translate-x-1 transition duration-200"></i>
                        </div>
                        <div class="flex items-center py-3 group hover:bg-gray-50 rounded-lg px-2 transition duration-200 cursor-pointer">
                            <div class="w-16 text-sm font-medium group-hover:text-primary transition duration-200">13:00</div>
                            <div class="w-3 h-3 rounded-full bg-red-500 mr-3 group-hover:scale-125 transition duration-200"></div>
                            <div class="flex-grow">
                                <div class="font-medium group-hover:text-primary transition duration-200">Informatika</div>
                                <div class="text-gray-600 text-xs">Lab Informatika - Sensei Dyah Nur</div>
                            </div>
                            <i class="fa-solid fa-chevron-right text-gray-400 group-hover:text-primary group-hover:translate-x-1 transition duration-200"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-lg shadow card-hover animate-fade-in">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-lg">Perbandingan Mata Pelajaran</h3>
                        <div class="text-primary text-sm cursor-pointer hover:underline">Semester Ini <i class="fa-solid fa-chevron-down ml-1 text-xs"></i></div>
                    </div>
                    <div class="w-full h-64 flex items-center justify-center">
                        <svg width="200" height="200" viewBox="0 0 200 200" class="overflow-visible">
                            <!-- Background circle -->
                            <circle cx="100" cy="100" r="80" fill="none" stroke="#eee" stroke-width="16" />
                            
                            <!-- Math segment -->
                            <circle cx="100" cy="100" r="80" fill="none" stroke="#6c5ce7" stroke-width="16" 
                                    stroke-dasharray="251.2 125.6" stroke-dashoffset="0" stroke-linecap="round">
                                <animate attributeName="stroke-dasharray" from="0 376.8" to="251.2 125.6" dur="1s" fill="freeze" />
                            </circle>
                            
                            <!-- Physics segment -->
                            <circle cx="100" cy="100" r="80" fill="none" stroke="#4cd964" stroke-width="16" 
                                    stroke-dasharray="125.6 251.2" stroke-dashoffset="-251.2" stroke-linecap="round">
                                <animate attributeName="stroke-dashoffset" from="-376.8" to="-251.2" dur="1s" fill="freeze" />
                            </circle>
                            
                            <!-- Indonesian segment -->
                            <circle cx="100" cy="100" r="80" fill="none" stroke="#ff9500" stroke-width="16" 
                                    stroke-dasharray="62.8 314" stroke-dashoffset="-376.8" stroke-linecap="round">
                                <animate attributeName="stroke-dashoffset" from="-439.6" to="-376.8" dur="1s" fill="freeze" />
                            </circle>
                            
                            <!-- Legend -->
                            <g transform="translate(20, 180)">
                                <rect x="-5" y="10" width="12" height="12" fill="#6c5ce7" rx="2" />
                                <text x="10" y="20" font-size="10" fill="#666">Matematika (60%)</text>
                            </g>
                            <g transform="translate(20, 195)">
                                <rect x="-5" y="15" width="12" height="12" fill="#4cd964" rx="2" />
                                <text x="10" y="25" font-size="10" fill="#666">Fisika (30%)</text>
                            </g>
                            <g transform="translate(110, 180)">
                                <rect x="10" y="10" width="12" height="12" fill="#ff9500" rx="2" />
                                <text x="25" y="20" font-size="10" fill="#666">B. Indonesia (15%)</text>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center justify-center cursor-pointer transform transition duration-200 hover:-translate-y-1 hover:shadow-md group animate-fade-in animate-delay-1">
                    <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center text-white text-xl mb-3 group-hover:bg-primary-dark transition duration-200">
                        <i class="fa-solid fa-qrcode"></i>
                    </div>
                    <div class="font-medium text-center group-hover:text-purple-600 transition duration-200">Scan QR</div>
                    <div class="text-xs text-gray-500">Scan QR untuk presensi</div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center justify-center cursor-pointer transform transition duration-200 hover:-translate-y-1 hover:shadow-md group animate-fade-in animate-delay-1">
                    <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white text-xl mb-3 group-hover:bg-green-600 transition duration-200">
                        <i class="fa-solid fa-file-export"></i>
                    </div>
                    <div class="font-medium text-center group-hover:text-green-500 transition duration-200">Unduh Laporan</div>
                    <div class="text-xs text-gray-500">Unduh laporan kehadiran</div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center justify-center cursor-pointer transform transition duration-200 hover:-translate-y-1 hover:shadow-md group animate-fade-in animate-delay-2">
                    <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center text-white text-xl mb-3 group-hover:bg-yellow-600 transition duration-200">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="font-medium text-center group-hover:text-yellow-500 transition duration-200">Kirim Izin</div>
                    <div class="text-xs text-gray-500">Kirim izin sakit/izin</div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center justify-center cursor-pointer transform transition duration-200 hover:-translate-y-1 hover:shadow-md group animate-fade-in animate-delay-3">
                    <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white text-xl mb-3 group-hover:bg-blue-600 transition duration-200">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <div class="font-medium text-center group-hover:text-blue-500 transition duration-200">Lihat Jadwal</div>
                    <div class="text-xs text-gray-500">Lihat jadwal pelajaran</div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center justify-center cursor-pointer transform transition duration-200 hover:-translate-y-1 hover:shadow-md group animate-fade-in animate-delay-3">
                    <div class="w-12 h-12 bg-slate-500 rounded-lg flex items-center justify-center text-white text-xl mb-3 group-hover:bg-slate-600 transition duration-200">
                    <i class="fa-solid fa-x"></i>
                    </div>
                    <div class="font-medium text-center group-hover:text-slate-500 transition duration-200">Absensi</div>
                    <div class="text-xs text-gray-500">Lihat riwayat absensi</div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center justify-center cursor-pointer transform transition duration-200 hover:-translate-y-1 hover:shadow-md group animate-fade-in animate-delay-3">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center text-white text-xl mb-3 group-hover:bg-blue-700 transition duration-200">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                    <div class="font-medium text-center group-hover:text-inherit transition duration-200">Presensi</div>
                    <div class="text-xs text-gray-500">Lihat riwayat kehadiran</div>
            </div>
                <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center justify-center cursor-pointer transform transition duration-200 hover:-translate-y-1 hover:shadow-md group animate-fade-in animate-delay-3">
                    <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center text-white text-xl mb-3 group-hover:bg-red-600 transition duration-200">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div class="font-medium text-center group-hover:text-red-500 transition duration-200">Hukuman</div>
                    <div class="text-xs text-gray-500">Lihat riwayat hukuman</div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center justify-center cursor-pointer transform transition duration-200 hover:-translate-y-1 hover:shadow-md group animate-fade-in animate-delay-3">
                    <div class="w-12 h-12 bg-emerald-600 rounded-lg flex items-center justify-center text-white text-xl mb-3 group-hover:bg-emerald-700 transition duration-200">
                    <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div class="font-medium text-center group-hover:text-emerald-600 transition duration-200">Tugas</div>
                    <div class="text-xs text-gray-500">Lihat daftar tugas</div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center justify-center cursor-pointer transform transition duration-200 hover:-translate-y-1 hover:shadow-md group animate-fade-in animate-delay-3">
                    <div class="w-12 h-12 bg-pink-600 rounded-lg flex items-center justify-center text-white text-xl mb-3 group-hover:bg-pink-700 transition duration-200">
                    <i class="fa-solid fa-comments"></i>
                    </div>
                    <div class="font-medium text-center group-hover:text-pink-600 transition duration-200">Konsultasi</div>
                    <div class="text-xs text-gray-500">Konsultasi ke guru</div>
                </div>

        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    
    <!-- Real-time clock script -->
    <script>
        function updateClock() {
            const now = new Date();
            
            // Format date
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            
            const dayName = days[now.getDay()];
            const date = now.getDate();
            const monthName = months[now.getMonth()];
            const year = now.getFullYear();
            
            document.getElementById('current-date').textContent = `${dayName}, ${date} ${monthName} ${year}`;
            
            // Format time
            let hours = now.getHours();
            let minutes = now.getMinutes();
            const ampm = hours >= 12 ? 'PM' : 'AM';
            
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0'+minutes : minutes;
            
            document.getElementById('current-time').textContent = `${hours}:${minutes} WIB`;
        }
        
        // Update clock immediately and then every minute
        updateClock();
        setInterval(updateClock, 60000);
        
        // Add hover effect to cards
        document.querySelectorAll('.card-hover').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-5px)';
                card.style.boxShadow = '0 10px 25px -5px rgba(0, 0, 0, 0.1)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
                card.style.boxShadow = '';
            });
        });
    </script>
</body>
</html>