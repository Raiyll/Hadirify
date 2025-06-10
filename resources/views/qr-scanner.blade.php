<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi QR Code</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="max-w-md mx-auto p-4">
    
        <header class="bg-indigo-800 text-white p-5 rounded-t-lg mb-6 shadow-md">
            <h1 class="text-2xl font-bold">Selamat Pagi, Rai</h1>
            <p class="text-sm opacity-90">Minggu, 4 Mei 2025 | 1:40 WIB</p>
        </header>

        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <h2 class="text-xl font-semibold text-center text-gray-800 mb-4">Presensi dengan QR Code</h2>
            
            <p class="text-gray-600 text-center mb-4">Silakan pindai QR Code di bawah ini untuk melakukan presensi.</p>
            <div class="border-2 border-dashed border-indigo-800 rounded-lg p-4 max-w-xs mx-auto my-6">
                <div class="w-64 h-64 bg-gray-100 flex items-center justify-center mx-auto text-gray-500">
                    <div class="text-center">
                        <i class="fas fa-qrcode text-6xl mb-2"></i>
                        <p class="text-sm">Area Scanner QR Code</p>
                    </div>
                </div>
            </div>
            
            <p class="text-gray-600 text-center mb-6">Arahkan kamera Anda ke QR Code yang tersedia di lokasi presensi</p>
            
            <button id="startScanner" class="w-full bg-indigo-800 hover:bg-indigo-800 text-white font-medium py-3 px-4 rounded-lg transition duration-200 flex items-center justify-center">
                <i class="fas fa-camera mr-2"></i> Aktifkan Kamera
            </button>
            
        
            <div class="mt-8 bg-gray-50 p-4 rounded-lg">
                <h3 class="font-semibold text-gray-700 mb-3">Status Presensi Hari Ini</h3>
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Absen Masuk:</span>
                        <span>06:15 WIB <span class="text-green-600">(Tepat waktu)</span></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Kelas Pertama:</span>
                        <span>Matematika - 08:00 WIB</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Status:</span>
                        <span class="font-semibold text-green-600">Hadir</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <h3 class="font-semibold text-gray-800 mb-3">Aktivitas Terbaru</h3>
            <ul class="space-y-3">
                <li class="flex items-start">
                    <div class="bg-green-100 p-2 rounded-full mr-3">
                        <i class="fas fa-sign-in-alt text-green-600"></i>
                    </div>
                    <div>
                        <p class="font-medium">Absen Masuk</p>
                        <p class="text-sm text-gray-500">Hari ini, 06:15 WIB</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <div class="bg-blue-100 p-2 rounded-full mr-3">
                        <i class="fas fa-book text-indigo-800"></i>
                    </div>
                    <div>
                        <p class="font-medium">Kelas Pemrograman Dasar</p>
                        <p class="text-sm text-gray-500">Hari ini, 08:00 WIB</p>
                    </div>
                </li>
            </ul>
        </div>

        <footer class="text-center text-gray-500 text-sm mt-8">
            Hadirify © 2025
        </footer>
    </div>

    <script>
        document.getElementById('startScanner').addEventListener('click', function() {
           
            alert('Fitur kamera akan diaktifkan untuk memindai QR Code. Pastikan Anda memberikan izin akses kamera.');
        
        });
    </script>
   