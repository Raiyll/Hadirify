<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hukuman - Hadirify</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'slide-in-right': 'slideInRight 0.4s ease-out',
                        'pulse-red': 'pulseRed 2s infinite',
                        'bounce-gentle': 'bounceGentle 0.6s ease-out',
                        'shimmer': 'shimmer 2s infinite',
                        'float': 'float 3s ease-in-out infinite'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideInRight: {
                            '0%': { opacity: '0', transform: 'translateX(20px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        pulseRed: {
                            '0%, 100%': { boxShadow: '0 0 0 0 rgba(239, 68, 68, 0.7)' },
                            '50%': { boxShadow: '0 0 0 10px rgba(239, 68, 68, 0)' }
                        },
                        bounceGentle: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-5px)' }
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-200px 0' },
                            '100%': { backgroundPosition: '200px 0' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-6px)' }
                        }
                    },
                    colors: {
                        primary: {
                            50: '#fef2f2',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen">
    <!-- Header -->
    <header class="bg-white/80 backdrop-blur-lg shadow-xl border-b border-red-200 sticky top-0 z-40">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="bg-gradient-to-r from-red-500 to-red-600 p-3 rounded-xl shadow-lg animate-float">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent">
                            Hukuman
                        </h1>
                        <p class="text-gray-600 text-sm">Monitoring dan Penanganan Pelanggaran Kehadiran Siswa</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="bg-gradient-to-r from-red-50 to-red-100 px-4 py-2 rounded-xl border border-red-200">
                        <p class="text-sm text-red-600 font-medium">Live Update</p>
                        <p class="text-red-800 font-bold text-lg" id="currentTime"></p>
                    </div>
                    <button onclick="exportData()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 flex items-center gap-2">
                        <i class="fas fa-download"></i> Export
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <!-- Statistics Dashboard -->
        <section class="mb-8 animate-fade-in">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-red-500 to-red-600 p-6 rounded-2xl text-white shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-red-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-red-100 text-sm font-medium">Total Pelanggar</p>
                            </div>
                            <p class="text-4xl font-bold mb-1" id="totalViolators">0</p>
                            <div class="flex items-center gap-1">
                                <i class="fas fa-arrow-up text-red-200 text-xs"></i>
                                <p class="text-xs text-red-200">+<span id="todayViolators">0</span> hari ini</p>
                            </div>
                        </div>
                        <div class="bg-red-400/30 p-3 rounded-xl">
                            <svg class="w-8 h-8 text-red-200" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-6 rounded-2xl text-white shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-orange-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 2L3 7v11a1 1 0 001 1h3v-8h6v8h3a1 1 0 001-1V7l-7-5z"/>
                                </svg>
                                <p class="text-orange-100 text-sm font-medium">Hukuman Ringan</p>
                            </div>
                            <p class="text-4xl font-bold mb-1" id="lightPunishment">0</p>
                            <p class="text-xs text-orange-200"><span id="lightPercentage">0</span>% dari total</p>
                        </div>
                        <div class="bg-orange-400/30 p-3 rounded-xl">
                            <i class="fas fa-info-circle text-2xl text-orange-200"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 p-6 rounded-2xl text-white shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-yellow-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                </svg>
                                <p class="text-yellow-100 text-sm font-medium">Hukuman Sedang</p>
                            </div>
                            <p class="text-4xl font-bold mb-1" id="mediumPunishment">0</p>
                            <p class="text-xs text-yellow-200"><span id="mediumPercentage">0</span>% dari total</p>
                        </div>
                        <div class="bg-yellow-400/30 p-3 rounded-xl">
                            <i class="fas fa-exclamation-triangle text-2xl text-yellow-200"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-6 rounded-2xl text-white shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-purple-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <p class="text-purple-100 text-sm font-medium">Hukuman Berat</p>
                            </div>
                            <p class="text-4xl font-bold mb-1" id="heavyPunishment">0</p>
                            <p class="text-xs text-purple-200"><span id="heavyPercentage">0</span>% dari total</p>
                        </div>
                        <div class="bg-purple-400/30 p-3 rounded-xl">
                            <i class="fas fa-times-circle text-2xl text-purple-200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Alert Section -->
        <section class="mb-8 animate-slide-up">
            <div id="alertContainer" class="space-y-3">
                <!-- Alerts will be dynamically added here -->
            </div>
        </section>

        <!-- Filter and Search -->
        <section class="mb-8 animate-slide-up">
            <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-xl border border-gray-200">
                <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4">
                    <div class="flex-1">
                        <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                            <i class="fas fa-search text-gray-500"></i>
                            Cari Siswa
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input type="text" id="searchInput" placeholder="Nama atau NIS siswa..." 
                                   class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-200 bg-white/50">
                        </div>
                    </div>
                    <div class="flex-1">
                        <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                            <i class="fas fa-graduation-cap text-gray-500"></i>
                            Kelas
                        </label>
                        <select id="classFilter" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-200 bg-white/50">
                            <option value="">Semua Kelas</option>
                            <option value="X-1">X-1</option>
                            <option value="X-2">X-2</option>
                            <option value="XI-1">XI-1</option>
                            <option value="XI-2">XI-2</option>
                            <option value="XII-1">XII-1</option>
                            <option value="XII-2">XII-2</option>
                        </select>
                    </div>
                    <div class="flex-1">
                        <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                            <i class="fas fa-balance-scale text-gray-500"></i>
                            Tingkat Hukuman
                        </label>
                        <select id="punishmentFilter" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-200 bg-white/50">
                            <option value="">Semua Tingkat</option>
                            <option value="ringan">Ringan</option>
                            <option value="sedang">Sedang</option>
                            <option value="berat">Berat</option>
                        </select>
                    </div>
                    <div class="flex-1">
                        <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                            <i class="fas fa-tasks text-gray-500"></i>
                            Status
                        </label>
                        <select id="statusFilter" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-200 bg-white/50">
                            <option value="">Semua Status</option>
                            <option value="pending">Menunggu</option>
                            <option value="progress">Dalam Proses</option>
                            <option value="completed">Selesai</option>
                        </select>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="resetFilters()" class="px-4 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-xl flex items-center gap-2 transition-all duration-200 font-medium">
                            <i class="fas fa-redo"></i> Reset
                        </button>
                        <button onclick="refreshData()" class="px-4 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-xl flex items-center gap-2 transition-all duration-200 font-medium">
                            <i class="fas fa-sync-alt"></i> Refresh
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Student Punishment List -->
        <section class="animate-slide-up">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-3">
                    <i class="fas fa-list-ul text-red-500"></i>
                    Daftar Siswa dengan Hukuman Absensi
                </h2>
                <div class="text-sm text-gray-600 bg-white/50 backdrop-blur-sm px-3 py-2 rounded-lg border">
                    Menampilkan <span id="displayCount" class="font-bold text-blue-600">0</span> dari <span id="totalCount" class="font-bold text-gray-800">0</span> data
                </div>
            </div>
            
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden border border-gray-200">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-red-50 to-orange-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-700 cursor-pointer hover:bg-red-100 transition-colors duration-200" onclick="sortTable('name')">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-user text-red-500"></i>
                                        Siswa 
                                        <i class="fas fa-sort text-gray-400 hover:text-gray-600"></i>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-700 cursor-pointer hover:bg-red-100 transition-colors duration-200" onclick="sortTable('absentCount')">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-calendar-times text-red-500"></i>
                                        Pelanggaran 
                                        <i class="fas fa-sort text-gray-400 hover:text-gray-600"></i>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-700 cursor-pointer hover:bg-red-100 transition-colors duration-200" onclick="sortTable('punishmentLevel')">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-gavel text-red-500"></i>
                                        Hukuman 
                                        <i class="fas fa-sort text-gray-400 hover:text-gray-600"></i>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-700 cursor-pointer hover:bg-red-100 transition-colors duration-200" onclick="sortTable('status')">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-flag text-red-500"></i>
                                        Status 
                                        <i class="fas fa-sort text-gray-400 hover:text-gray-600"></i>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-700">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-cogs text-red-500"></i>
                                        Aksi
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="studentsList" class="divide-y divide-gray-200">
                            <!-- Loading state -->
                            <tr id="loadingRow">
                                <td colspan="5" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-red-500 mb-4"></div>
                                        <p class="text-gray-500 font-medium">Memuat data...</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Improved Pagination -->
                <div class="bg-gradient-to-r from-gray-50 to-gray-100 px-6 py-4 border-t border-gray-200 flex flex-col md:flex-row items-center justify-between">
                    <div class="text-sm text-gray-600 mb-4 md:mb-0 flex items-center gap-2">
                        <i class="fas fa-info-circle text-blue-500"></i>
                        Menampilkan <span id="startItem" class="font-bold text-blue-600">0</span>-<span id="endItem" class="font-bold text-blue-600">0</span> dari <span id="totalItems" class="font-bold text-gray-800">0</span> data
                    </div>
                    <div class="flex items-center gap-2">
                        <button id="prevPage" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100 disabled:opacity-50 disabled:cursor-not-allowed transition-all duration-200 flex items-center gap-2" disabled>
                            <i class="fas fa-chevron-left"></i> Sebelumnya
                        </button>
                        <div class="flex gap-1" id="pageNumbers"></div>
                        <button id="nextPage" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100 disabled:opacity-50 disabled:cursor-not-allowed transition-all duration-200 flex items-center gap-2" disabled>
                            Selanjutnya <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Enhanced Add New Punishment Modal -->
    <div id="addPunishmentModal" class="fixed inset-0 bg-black/60 hidden z-50 backdrop-blur-sm">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full p-8 transform scale-95 opacity-0 transition-all duration-300" id="modalContent">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-800 flex items-center gap-3">
                        <i class="fas fa-plus-circle text-red-500"></i>
                        Tambah Hukuman Baru
                    </h3>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition-colors p-2 rounded-lg hover:bg-gray-100">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                
                <form id="punishmentForm">
                    <div class="space-y-5">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                                <i class="fas fa-user text-red-500"></i>
                                Nama Siswa *
                            </label>
                            <input type="text" id="studentName" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-200"
                                   placeholder="Masukkan nama lengkap siswa">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                                    <i class="fas fa-id-card text-red-500"></i>
                                    NIS *
                                </label>
                                <input type="text" id="studentNIS" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-200"
                                       placeholder="Nomor induk siswa">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                                    <i class="fas fa-graduation-cap text-red-500"></i>
                                    Kelas *
                                </label>
                                <select id="studentClass" required 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-200">
                                    <option value="">Pilih Kelas</option>
                                    <option value="X-1">X-1</option>
                                    <option value="X-2">X-2</option>
                                    <option value="XI-1">XI-1</option>
                                    <option value="XI-2">XI-2</option>
                                    <option value="XII-1">XII-1</option>
                                    <option value="XII-2">XII-2</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                                <i class="fas fa-calendar-times text-red-500"></i>
                                Jumlah Hari Tidak Hadir *
                            </label>
                            <input type="number" id="absentCount" min="1" max="30" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-200"
                                   placeholder="Masukkan jumlah hari">
                            <p class="text-xs text-gray-500 mt-2 flex items-center gap-1">
                                <i class="fas fa-info-circle text-blue-500"></i>
                                Tingkat hukuman akan ditentukan otomatis berdasarkan jumlah hari
                            </p>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                                <i class="fas fa-sticky-note text-red-500"></i>
                                Catatan Tambahan
                            </label>
                            <textarea id="additionalNotes" rows="3" 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-200 resize-none"
                                      placeholder="Catatan khusus tentang pelanggaran (opsional)"></textarea>
                        </div>
                        <div class="bg-gradient-to-r from-yellow-50 to-orange-50 p-4 rounded-xl border border-yellow-200 hidden" id="punishmentPreview">
                            <h4 class="text-sm font-bold text-yellow-800 mb-2 flex items-center gap-2">
                                <i class="fas fa-eye text-yellow-600"></i>
                                Pratinjau Hukuman:
                            </h4>
                            <div class="space-y-2">
                                <p class="text-sm text-yellow-700" id="punishmentPreviewText"></p>
                                <div