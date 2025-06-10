<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hadirify | Sistem Absensi Digital</title>
    <link rel="icon" href="/hadirify-logo.jpg" type="image/jpeg">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap');
        
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(25px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes floatIn {
            0% { opacity: 0; transform: translateY(10px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes fadeScale {
            0% { opacity: 0; transform: scale(0.94); }
            100% { opacity: 1; transform: scale(1); }
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }
        
        /* Custom styles */
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #f8fafc;
            background-image: 
                radial-gradient(circle at 10% 90%, rgba(225, 232, 250, 0.4) 10%, transparent 20%),
                radial-gradient(circle at 90% 10%, rgba(225, 232, 250, 0.4) 10%, transparent 20%);
            background-size: 100px 100px;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        
        .animated-card {
            animation: fadeScale 0.5s ease-out forwards;
        }
        
        .card-gradient {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0.95) 100%);
            border-top: 3px solid transparent;
            transition: all 0.3s ease;
        }
        
        .nav-gradient {
            background: linear-gradient(135deg, #3a47a8 0%, #2d1a73 100%);
            background-size: 200% 200%;
            animation: gradientShift 15s ease infinite;
        }
        
        .sidebar-item {
            position: relative;
            transition: all 0.2s ease;
            border-radius: 0 30px 30px 0;
            margin-right: 8px;
            border-left: 3px solid transparent;
        }
        
        .sidebar-item:hover {
            background-color: rgba(255, 255, 255, 0.15);
            border-left-color: #ffcc29;
        }
        
        .active-sidebar-item {
            background-color: rgba(255, 255, 255, 0.12);
            border-left-color: #ffcc29;
        }
        
        .profile-badge {
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
        }
        
        .progress-bar {
            position: relative;
            height: 6px;
            overflow: hidden;
            border-radius: 6px;
        }
        
        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.5) 50%, rgba(255,255,255,0) 100%);
            background-size: 1000px 100%;
            animation: shimmer 2s infinite;
        }
        
        .badge-anim {
            animation: pulse 2s infinite;
        }
        
        .stat-icon {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }
        
        .label-style {
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }
        
        .chart-animate {
            animation: slideUp 0.8s ease-out forwards;
        }
        
        .floating-button {
            transition: all 0.3s ease;
            transform-origin: center;
        }
        
        .floating-button:hover {
            transform: translateY(-4px) scale(1.05);
        }
        
        .card-accent {
            position: relative;
            overflow: hidden;
        }
        
        .card-accent::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(58, 71, 168, 0.1) 0%, rgba(45, 26, 115, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .card-accent:hover::before {
            opacity: 1;
        }
        
        .schedule-item {
            transition: all 0.2s ease;
        }
        
        .schedule-item:hover {
            padding-left: 12px;
        }
        
        .time-badge {
            background: #edf1fd;
            font-variant-numeric: tabular-nums;
        }
        
        .custom-scroll::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scroll::-webkit-scrollbar-track {
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 10px;
        }

        .custom-scroll::-webkit-scrollbar-thumb {
            background-color: rgba(58, 71, 168, 0.3);
            border-radius: 10px;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.05); opacity: 0.8; }
        }
        
        .animate-float-1 {
            animation: floatIn 0.5s ease-out forwards;
        }
        
        .animate-float-2 {
            animation: floatIn 0.5s ease-out 0.1s forwards;
            opacity: 0;
        }
        
        .animate-float-3 {
            animation: floatIn 0.5s ease-out 0.2s forwards;
            opacity: 0;
        }
        
        .animate-float-4 {
            animation: floatIn 0.5s ease-out 0.3s forwards;
            opacity: 0;
        }
    </style>
</head>
<body class="text-gray-800">
    <div class="flex min-h-screen">
    
        <div class="nav-gradient text-white w-64 flex flex-col shadow-lg transform transition-all duration-500 ease-in-out z-20">
            <div class="p-5 flex items-center border-b border-indigo-900/20 animate-float-1">
                <div class="w-9 h-9 bg-white rounded-full flex items-center justify-center">
                    <img src="/img/hadirify-logo.jpg" class="h-5 w-5 text-indigo-800" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838l-2.328.996.002 1.069c0 .137.022.268.063.39L10 9.5l.002-.004a.996.996 0 00.063-.386v-1.07l.001-.002 2.328-.996a1 1 0 11.788 1.838l-1.532.655 3.257 1.392a1 1 0 00.788-1.838l-7-3 .001-.001z"/>
                    </svg>
                </div>
                <h2 class="text-xl ml-3 font-bold tracking-wide">Hadirify</h2>
            </div>
            <div class="py-5 flex-grow px-2 custom-scroll overflow-y-auto">
                <div class="sidebar-item active-sidebar-item flex items-center px-5 py-3 cursor-pointer mb-1 animate-float-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </div>
                <a href="/qr-scanner"> 
                   <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer mb-1 animate-float-2">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zM13 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z" clip-rule="evenodd" />
                          <path d="M11 4a1 1 0 10-2 0v1a1 1 0 002 0V4zM10 7a1 1 0 011 1v1h2a1 1 0 110 2h-3a1 1 0 01-1-1V8a1 1 0 011-1zM16 9a1 1 0 100 2 1 1 0 000-2zM9 13a1 1 0 011-1h1a1 1 0 110 2v2a1 1 0 11-2 0v-3zM7 11a1 1 0 100-2H4a1 1 0 100 2h3zM17 13a1 1 0 01-1 1h-2a1 1 0 110-2h2a1 1 0 011 1zM16 17a1 1 0 100-2h-3a1 1 0 100 2h3z" />
                       </svg>
                      <span class="ml-3">Absensi Scan</span>
                    </div>
                </a>
                <a href="/riwayatkehadiran">
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer mb-1 animate-float-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-3">Kehadiran</span>
                </div>
                </a>
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer mb-1 animate-float-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                    </svg>
                    <span class="ml-3">Laporan</span>
                </div>
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer mb-1 animate-float-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-3">Riwayat</span>
                </div>
                <a href="/hukuman">
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer mb-1 animate-float-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-3">Hukuman</span>
                </div>
                </a>
               <a href="/profile"> 
                   <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer mb-1 animate-float-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                        <span class="ml-3">Pengaturan</span>
                    </div> 
                </a>
                <a href="/pilihanguru">
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer mb-1 animate-float-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-5V3a1 1 0 00-1-1zm0 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-.293.707L10.707 6.293A1.001 1.001 0 0010 6z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-3">Konsultasi</span>
                </div>
                </a>
                
                <div class="mt-4 mb-4 mx-3 border-t border-indigo-900/20"></div>
                
           
                <div class="mb-2 px-5">
                    <p class="text-xs font-medium text-indigo-100/60 tracking-wider uppercase">Info Sekolah</p>
                </div>
                
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer mb-1 animate-float-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                    </svg>
                    <span class="ml-3">Akademik</span>
                </div>
                <a href="/kalender">
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer mb-1 animate-float-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                    </svg>
                    <span class="ml-3">Kalender</span>
                </div>
                </a>
                <div class="sidebar-item flex items-center px-5 py-3 cursor-pointer mb-1 animate-float-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-5V3a1 1 0 00-1-1zm0 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1.293.707L10.707 6.293A1.001 1.001 0 0010 6z" />
                    </svg>
                    <span class="ml-3">Jadwal</span>
            </div>
            </div>
           
            <div class="px-4 py-4 bg-indigo-900/20 mt-auto">
                <div class="flex items-center">
                    <div class="relative mr-3 animate-float-1">
                        <img src="/img/gw.jpg" alt="Profile" class="w-10 h-10 rounded-full profile-badge object-cover">
                        <div class="absolute -bottom-1 -right-1 bg-green-400 w-4 h-4 rounded-full border-2 border-indigo-900"></div>
                    </div>
                    <div class="flex-grow">
                        <div class="text-sm font-semibold">Ahmad Rafi Fadhilah</div>
                        <div class="flex items-center">
                            <div class="text-xs text-indigo-100/70">Siswa</div>
                            <div class="ml-2 px-2 py-0.5 bg-indigo-800/30 rounded-full text-xs">Kelas XI</div>
                        </div>
                    </div>
                    <button class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/10 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- MAIN CONTENT AREA -->
        <div class="flex-grow overflow-y-auto custom-scroll">
            <!-- Sticky Header -->
            <div class="sticky top-0 z-10 glass-card shadow-sm backdrop-blur-lg">
                <div class="flex justify-between items-center p-4">
                    <div class="relative w-64 animate-float-1">
                        <input type="text" placeholder="Cari informasi..." class="w-full py-2 pl-10 pr-4 rounded-xl bg-white/80 border-0 focus:ring-2 focus:ring-indigo-400 text-sm transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex items-center space-x-3 animate-float-1">
                        <div class="relative group">
                            <button class="w-10 h-10 rounded-xl bg-white/90 flex items-center justify-center shadow-sm hover:bg-indigo-50 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 group-hover:text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                                </svg>
                                <div class="absolute -top-1 -right-1 bg-red-500 text-white w-5 h-5 rounded-full flex items-center justify-center text-xs badge-anim">3</div>
                            </button>
                            <div class="absolute hidden group-hover:block right-0 mt-2 w-72 bg-white rounded-xl shadow-lg z-10 p-2 opacity-0 transform translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-200">
                                <div class="flex items-center justify-between p-2 border-b">
                                    <div class="text-sm font-medium">Notifikasi</div>
                                    <div class="text-xs text-indigo-600 cursor-pointer">Tandai Semua Terbaca</div>
                                </div>
                                <div class="max-h-64 overflow-y-auto custom-scroll">
                                    <div class="p-2 hover:bg-gray-50 rounded-lg cursor-pointer">
                                        <div class="flex items-start">
                                            <div class="w-2 h-2 mt-1.5 bg-indigo-500 rounded-full mr-2"></div>
                                            <div>
                                                <div class="text-sm">Pengingat: Raport akan dibagikan besok</div>
                                                <div class="text-xs text-gray-500 mt-1">10 menit yang lalu</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 hover:bg-gray-50 rounded-lg cursor-pointer">
                                        <div class="flex items-start">
                                            <div class="w-2 h-2 mt-1.5 bg-indigo-500 rounded-full mr-2"></div>
                                            <div>
                                                <div class="text-sm">Anda memiliki tugas yang belum dikumpulkan</div>
                                                <div class="text-xs text-gray-500 mt-1">1 jam yang lalu</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 hover:bg-gray-50 rounded-lg cursor-pointer">
                                        <div class="flex items-start">
                                            <div class="w-2 h-2 mt-1.5 bg-transparent rounded-full mr-2"></div>
                                            <div>
                                                <div class="text-sm">Pengumuman: Libur akhir semester dimulai tanggal 15</div>
                                                <div class="text-xs text-gray-500 mt-1">Kemarin, 09:41</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DASHBOARD CONTENT -->
            <div class="p-6">
                <h1 class="text-2xl font-bold mb-6 animate-float-1">Selamat Datang, Rai!</h1>
                
                <!-- Stats Cards Row -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <!-- Card 1 -->
                    <div class="glass-card rounded-xl p-5 shadow-sm animate-float-1">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Kehadiran Bulan Ini</p>
                                <p class="text-2xl font-bold mt-1">87%</p>
                            </div>
                            <div class="p-3 bg-indigo-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="glass-card rounded-xl p-5 shadow-sm animate-float-2">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Deadline Tugas</p>
                                <p class="text-xl font-bold mt-1">Matematika</p>
                            </div>
                            <div class="p-3 bg-amber-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="glass-card rounded-xl p-5 shadow-sm animate-float-3">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Pelajaran Selanjutnya</p>
                                <p class="text-xl font-bold mt-1">10:00 - B. Inggris</p>
                            </div>
                            <div class="p-3 bg-emerald-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jadwal Hari Ini Section -->
                <div class="glass-card w-full max-w-6xl p-8 rounded-2xl shadow-xl bg-white/10 backdrop-blur-md border border-white/20 text-white space-y-6">
                <h3 class="text-2xl font-semibold text-black/80">Jadwal X RPL 1 Hari Ini</h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Pelajaran 1 -->
                    <div class="bg-white/30 p-4 rounded-xl shadow text-black space-y-2 relative">
                    <h4 class="font-bold text-lg">Matematika</h4>
                    <p class="text-sm opacity-80">07:30 - 09:30</p>
                    <p class="text-sm opacity-60">Dwiki Mauliditya S.pd</p>
                    <span class="absolute top-2 right-2 bg-indigo-500 text-white text-xs font-medium px-3 py-1 rounded-full shadow">
                        Kelas X
                    </span>
                    </div>

                    <!-- Pelajaran 2 -->
                    <div class="bg-white/30 p-4 rounded-xl shadow text-black space-y-2 relative">
                    <h4 class="font-bold text-lg">Sejarah</h4>
                    <p class="text-sm opacity-80">10:00 - 11:30</p>
                    <p class="text-sm opacity-60">Siti Nurjanah S.pd</p>
                    <span class="absolute top-2 right-2 bg-indigo-500 text-white text-xs font-medium px-3 py-1 rounded-full shadow">
                        Kelas X
                    </span>
                    </div>

                    <!-- Pelajaran 3 -->
                    <div class="bg-white/30 p-4 rounded-xl shadow text-black space-y-2 relative">
                    <h4 class="font-bold text-lg">Bahasa Inggris</h4>
                    <p class="text-sm opacity-80">12:00 - 13:30</p>
                    <p class="text-sm opacity-60">Ahmad Rafi Fadhilah S.pd</p>
                    <span class="absolute top-2 right-2 bg-indigo-500 text-white text-xs font-medium px-3 py-1 rounded-full shadow">
                        Kelas X
                    </span>
                    </div>
                    <!-- Pelajaran 4 -->
                    <div class="bg-white/30 p-4 rounded-xl shadow text-black space-y-2 relative">
                    <h4 class="font-bold text-lg">Pemrograman Dasar</h4>
                    <p class="text-sm opacity-80">13:30 - 14:30</p>
                    <p class="text-sm opacity-60">Komariah S.Kom</p>
                    <span class="absolute top-2 right-2 bg-indigo-500 text-white text-xs font-medium px-3 py-1 rounded-full shadow">
                        Kelas X
                    </span>
                    </div>
                </div>
                        