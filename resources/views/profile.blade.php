<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4361ee',
                        secondary: '#3f37c9',
                        accent: '#4895ef',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
     
        <header class="bg-white shadow-sm">
            <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
                <a href="/dashboard" class="flex items-center text-gray-700 hover:text-primary transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>
                    <span>Kembali</span>
                </a>
                <h1 class="text-xl font-semibold text-gray-800">Pengaturan Profil</h1>
                <div class="w-8"></div> 
            </div>
        </header>

        <main class="max-w-4xl mx-auto px-4 py-6 animate-fade-in">
            <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-6">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-lg font-medium text-gray-800">Informasi Profil</h2>
                    <p class="text-sm text-gray-500 mt-1">Kelola informasi profil Anda</p>
                </div>

                <div class="p-6">
                    <div class="flex items-center mb-8">
                        <div class="relative">
                            <img src="/img/gw.jpg" alt="Profile" class="w-20 h-20 rounded-full object-cover border-2 border-white shadow">
                            <button class="absolute bottom-0 right-0 bg-primary text-white rounded-full p-2 hover:bg-secondary transition-colors">
                                <i class="fas fa-camera text-xs"></i>
                            </button>
                        </div>
                        <div class="ml-4">
                            <button class="text-primary font-medium hover:text-secondary transition-colors mr-4">
                                Unggah Foto
                            </button>
                            <button class="text-gray-500 hover:text-gray-700 transition-colors">
                                Hapus
                            </button>
                        </div>
                    </div>

                    <div class="space-y-5">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" id="name" value="Ahmad Rafi Fadhilah" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" value="ahmadrafifadilah50@gmail.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                            <input type="tel" id="phone" value="+6287774024460" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div>
                            <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Bio</label>
                            <textarea id="bio" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">Siswa X RPL 1</textarea>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 px-6 py-4 flex justify-end">
                    <button class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-secondary transition-colors">
                        Simpan Perubahan
                    </button>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-6">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-lg font-medium text-gray-800">Pengaturan Akun</h2>
                    <p class="text-sm text-gray-500 mt-1">Kelola preferensi akun Anda</p>
                </div>

                <div class="divide-y divide-gray-200">
                    <div class="p-6 flex items-center justify-between">
                        <div>
                            <h3 class="font-medium text-gray-800">Bahasa</h3>
                            <p class="text-sm text-gray-500 mt-1">Pilih bahasa preferensi</p>
                        </div>
                        <select class="bg-gray-100 border-0 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary outline-none">
                            <option>Bahasa Indonesia</option>
                            <option>English</option>
                            <option>Bahasa Melayu</option>
                            <option>Bahasa Arab</option>
                            <option>Bahasa Spanyol</option> 
                            <option>Bahasa Prancis</option>
                        </select>
                    </div>

                    <div class="p-6 flex items-center justify-between">
                        <div>
                            <h3 class="font-medium text-gray-800">Notifikasi</h3>
                            <p class="text-sm text-gray-500 mt-1">Kelola pemberitahuan</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                        </label>
                    </div>

                    <div class="p-6 flex items-center justify-between">
                        <div>
                            <h3 class="font-medium text-gray-800">Mode Gelap</h3>
                            <p class="text-sm text-gray-500 mt-1">Aktifkan tampilan gelap</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-red-100">
                <div class="p-6 border-b border-red-100 bg-red-50">
                    <h2 class="text-lg font-medium text-red-800">Zona Berbahaya</h2>
                    <p class="text-sm text-red-600 mt-1">Tindakan ini tidak dapat dibatalkan</p>
                </div>

                <div class="p-6">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                        <div class="mb-4 sm:mb-0">
                            <h3 class="font-medium text-red-800">Hapus Akun</h3>
                            <p class="text-sm text-red-600 mt-1">Semua data Anda akan dihapus secara permanen</p>
                        </div>
                        <button class="px-4 py-2 border border-red-500 text-red-500 rounded-lg hover:bg-red-50 transition-colors">
                            Hapus Akun Saya
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>