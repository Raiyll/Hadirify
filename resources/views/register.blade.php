<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - Hadirify | Sistem Absensi Modern</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.11.4/dist/gsap.min.js"></script>
  <style>
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    .floating {
      animation: float 6s ease-in-out infinite;
    }
    .floating-delay-1 {
      animation: float 6s ease-in-out infinite 1s;
    }
    .floating-delay-2 {
      animation: float 6s ease-in-out infinite 2s;
    }
    .pulse-hover:hover {
      animation: pulse 1.5s infinite;
    }
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }
    .bg-gradient-animate {
      background-size: 200% 200%;
      animation: gradient 8s ease infinite;
    }
    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .transition-all-300 {
      transition: all 0.3s ease;
    }
    .rotate-on-hover:hover {
      transform: rotate(5deg);
    }
    .wiggle {
      animation: wiggle 2s ease infinite;
    }
    @keyframes wiggle {
      0%, 100% { transform: rotate(0deg); }
      25% { transform: rotate(2deg); }
      75% { transform: rotate(-2deg); }
    }
    .password-strength {
      height: 4px;
      transition: all 0.3s ease;
    }
    .strength-0 {
      width: 0%;
      background-color: #ef4444;
    }
    .strength-1 {
      width: 25%;
      background-color: #ef4444;
    }
    .strength-2 {
      width: 50%;
      background-color: #f59e0b;
    }
    .strength-3 {
      width: 75%;
      background-color: #3b82f6;
    }
    .strength-4 {
      width: 100%;
      background-color: #10b981;
    }
  </style>
</head>
<body class="min-h-screen bg-gray-50 font-sans antialiased" style="font-family: 'Inter', sans-serif;">
  <div class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 py-12 bg-gradient-to-br from-purple-50 to-indigo-50">
  
    <div class="fixed top-20 left-10 w-16 h-16 rounded-full bg-purple-200 opacity-20 floating"></div>
    <div class="fixed bottom-1/4 right-20 w-24 h-24 rounded-full bg-indigo-200 opacity-20 floating-delay-1"></div>
    <div class="fixed top-1/3 right-1/4 w-20 h-20 rounded-full bg-blue-200 opacity-20 floating-delay-2"></div>
    
  
    <div class="w-full max-w-6xl bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row transform transition-all duration-500 hover:shadow-2xl">
      
     
      <div class="md:w-5/12 bg-gradient-to-br from-purple-600 via-indigo-600 to-blue-500 p-8 text-white flex flex-col justify-between relative overflow-hidden bg-gradient-animate">
        
        <div class="absolute -bottom-32 -right-32 h-64 w-64 rounded-full bg-indigo-500 bg-opacity-20 floating"></div>
        <div class="absolute -bottom-40 -right-40 h-80 w-80 rounded-full bg-purple-500 bg-opacity-20 floating-delay-1"></div>
        <div class="absolute top-1/4 -left-20 h-40 w-40 rounded-full bg-blue-400 bg-opacity-15 floating-delay-2"></div>
        
       
        <div class="relative z-10 animate__animated animate__fadeIn">
          <div class="flex items-center space-x-2 transform hover:scale-105 transition-transform duration-300">
            <div class="p-2 bg-white bg-opacity-20 rounded-lg rotate-on-hover">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
              </svg>
            </div>
            <h1 class="text-3xl font-bold tracking-tight">Hadirify</h1>
          </div>
          
          <p class="text-lg text-indigo-100 mt-6 max-w-xs leading-relaxed animate__animated animate__fadeIn animate__delay-1s">
            Bergabunglah dengan sistem absensi digital modern kami
          </p>
        </div>
        
   
        <div class="mt-12 space-y-6">
          <div class="flex items-start space-x-4 group animate__animated animate__fadeInUp animate__delay-1s">
            <div class="flex-shrink-0 mt-1 group-hover:bg-white group-hover:bg-opacity-20 transition-all duration-300 p-2 rounded-lg">
              <i data-feather="user-plus" class="h-5 w-5 group-hover:scale-110 transition-transform"></i>
            </div>
            <div class="group-hover:translate-x-1 transition-transform">
              <h3 class="font-medium text-lg">Daftar dengan Mudah</h3>
              <p class="mt-1 text-indigo-100 text-sm">Proses pendaftaran cepat dan sederhana</p>
            </div>
          </div>
          
          <div class="flex items-start space-x-4 group animate__animated animate__fadeInUp animate__delay-2s">
            <div class="flex-shrink-0 mt-1 group-hover:bg-white group-hover:bg-opacity-20 transition-all duration-300 p-2 rounded-lg">
              <i data-feather="shield" class="h-5 w-5 group-hover:scale-110 transition-transform"></i>
            </div>
            <div class="group-hover:translate-x-1 transition-transform">
              <h3 class="font-medium text-lg">Keamanan Terjamin</h3>
              <p class="mt-1 text-indigo-100 text-sm">Data Anda dilindungi dengan enkripsi terbaik</p>
            </div>
          </div>
          
          <div class="flex items-start space-x-4 group animate__animated animate__fadeInUp animate__delay-3s">
            <div class="flex-shrink-0 mt-1 group-hover:bg-white group-hover:bg-opacity-20 transition-all duration-300 p-2 rounded-lg">
              <i data-feather="zap" class="h-5 w-5 group-hover:scale-110 transition-transform"></i>
            </div>
            <div class="group-hover:translate-x-1 transition-transform">
              <h3 class="font-medium text-lg">Akses Cepat</h3>
              <p class="mt-1 text-indigo-100 text-sm">Mulai gunakan sistem segera setelah mendaftar</p>
            </div>
          </div>
        </div>
        
       
        <div class="mt-auto pt-16 relative z-10 animate__animated animate__fadeIn animate__delay-2s">
          <p class="text-sm text-indigo-200">Sudah punya akun? 
            <a href="login.html" class="font-medium text-white hover:underline transition-all">Masuk disini</a>
          </p>
          <p class="text-sm text-indigo-200 mt-1">&copy; 2025 Hadirify. Semua hak dilindungi.</p>
        </div>
      </div>
      
  
      <div class="md:w-7/12 p-4 sm:p-8 animate__animated animate__fadeInRight">
        <div class="max-w-md mx-auto py-4 md:py-8">
          <div class="text-center md:text-left transform hover:scale-[1.01] transition-transform duration-300">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">Buat Akun Baru</h2>
            <p class="mt-2 text-gray-600">Isi formulir berikut untuk mendaftar</p>
          </div>
          
          <div class="mt-8 space-y-6">
            
            <div class="animate__animated animate__fadeIn animate__delay-1s">
              <label class="block text-sm font-medium text-gray-700 mb-2">Daftar sebagai</label>
              <div class="grid grid-cols-3 gap-3">
                <div id="role-siswa" 
                     class="flex flex-col items-center justify-center py-3 px-4 border-2 border-purple-500 bg-purple-50 rounded-xl cursor-pointer transition-all duration-300 hover:shadow-md hover:bg-purple-100 hover:border-purple-600"
                     onclick="selectRole('siswa')">
                  <span class="text-2xl mb-1 hover:animate-bounce">👨‍🎓</span>
                  <span class="font-medium text-sm">Siswa</span>
                </div>
                
                <div id="role-guru" 
                     class="flex flex-col items-center justify-center py-3 px-4 border-2 border-gray-200 rounded-xl cursor-pointer transition-all duration-300 hover:shadow-md hover:bg-gray-50 hover:border-gray-300"
                     onclick="selectRole('guru')">
                  <span class="text-2xl mb-1 hover:animate-bounce">👩‍🏫</span>
                  <span class="font-medium text-sm">Guru</span>
                </div>
                
                <div id="role-admin" 
                     class="flex flex-col items-center justify-center py-3 px-4 border-2 border-gray-200 rounded-xl cursor-pointer transition-all duration-300 hover:shadow-md hover:bg-gray-50 hover:border-gray-300"
                     onclick="selectRole('admin')">
                  <span class="text-2xl mb-1 hover:animate-bounce">⚙️</span>
                  <span class="font-medium text-sm">Guru Umum</span>
                </div>
              </div>
              <input type="hidden" id="role" name="role" value="siswa">
            </div>
            
        
            <form class="space-y-4 mt-8 animate__animated animate__fadeIn animate__delay-2s">
              
              <div class="transform transition-all hover:scale-[1.01]">
                <label for="fullname" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <div class="relative rounded-md shadow-sm">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i data-feather="user" class="h-5 w-5 text-gray-400 hover:text-indigo-500 transition-colors"></i>
                  </div>
                  <input type="text" id="fullname" name="fullname" 
                         class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all duration-300 hover:border-indigo-300" 
                         placeholder="Masukkan nama lengkap Anda">
                </div>
              </div>
              
              
              <div class="transform transition-all hover:scale-[1.01]">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <div class="relative rounded-md shadow-sm">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i data-feather="mail" class="h-5 w-5 text-gray-400 hover:text-indigo-500 transition-colors"></i>
                  </div>
                  <input type="email" id="email" name="email" 
                         class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all duration-300 hover:border-indigo-300" 
                         placeholder="Masukkan alamat email Anda">
                </div>
              </div>
              
          
              <div id="nis-container" class="transform transition-all hover:scale-[1.01]">
                <label for="nis" class="block text-sm font-medium text-gray-700 mb-1">NIS</label>
                <div class="relative rounded-md shadow-sm">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i data-feather="id" class="h-5 w-5 text-gray-400 hover:text-indigo-500 transition-colors"></i>
                  </div>
                  <input type="text" id="nis" name="nis" 
                         class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all duration-300 hover:border-indigo-300" 
                         placeholder="Masukkan NIS Anda">
                </div>
              </div>
              
          
              <div id="jurusan-container" class="transform transition-all hover:scale-[1.01]">
                <label for="jurusan" class="block text-sm font-medium text-gray-700 mb-1">Jurusan</label>
                <div class="relative rounded-md shadow-sm">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i data-feather="book-open" class="h-5 w-5 text-gray-400 hover:text-indigo-500 transition-colors"></i>
                  </div>
                  <select id="jurusan" name="jurusan" 
                          class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm appearance-none transition-all duration-300 hover:border-indigo-300" 
                          onchange="updateKelas()">
                    <option value="">Pilih Jurusan</option>
                    <option value="RPL">💻 Rekayasa Perangkat Lunak (RPL)</option>
                    <option value="DPIB">🏗️ Desain Pemodelan & Informasi Bangunan (DPIB)</option>
                    <option value="TOI">⚙️ Teknik Otomasi Industri (TOI)</option>
                    <option value="TPG">🔧 Teknik Pemesinan Gerinda (TPG)</option>
                    <option value="TITL">🔌 Teknik Instalasi Tenaga Listrik (TITL)</option>
                  </select>
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <i data-feather="chevron-down" class="h-5 w-5 text-gray-400"></i>
                  </div>
                </div>
              </div>
              
            
              <div id="kelas-container" class="transform transition-all hover:scale-[1.01]">
                <label for="kelas" class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
                <div class="relative rounded-md shadow-sm">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i data-feather="users" class="h-5 w-5 text-gray-400 hover:text-indigo-500 transition-colors"></i>
                  </div>
                  <select id="kelas" name="kelas" 
                          class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm appearance-none transition-all duration-300 hover:border-indigo-300">
                    <option value="">Pilih Kelas</option>
                  </select>
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <i data-feather="chevron-down" class="h-5 w-5 text-gray-400"></i>
                  </div>
                </div>
              </div>
              
              
              <div class="transform transition-all hover:scale-[1.01]">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="relative rounded-md shadow-sm">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i data-feather="lock" class="h-5 w-5 text-gray-400 hover:text-indigo-500 transition-colors"></i>
                  </div>
                  <input type="password" id="password" name="password" 
                         class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all duration-300 hover:border-indigo-300" 
                         placeholder="Buat password yang kuat"
                         oninput="checkPasswordStrength(this.value)">
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                    <button type="button" onclick="togglePassword()" class="focus:outline-none hover:scale-110 transition-transform">
                      <i id="eye-icon" data-feather="eye" class="h-5 w-5 text-gray-400 hover:text-indigo-600"></i>
                    </button>
                  </div>
                </div>
               
                <div class="mt-1 flex space-x-1">
                  <div id="strength-1" class="password-strength strength-0 rounded-full"></div>
                  <div id="strength-2" class="password-strength strength-0 rounded-full"></div>
                  <div id="strength-3" class="password-strength strength-0 rounded-full"></div>
                  <div id="strength-4" class="password-strength strength-0 rounded-full"></div>
                </div>
                <p id="password-feedback" class="mt-1 text-xs text-gray-500"></p>
              </div>
              
              
              <div class="transform transition-all hover:scale-[1.01]">
                <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
                <div class="relative rounded-md shadow-sm">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i data-feather="lock" class="h-5 w-5 text-gray-400 hover:text-indigo-500 transition-colors"></i>
                  </div>
                  <input type="password" id="confirm-password" name="confirm-password" 
                         class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all duration-300 hover:border-indigo-300" 
                         placeholder="Ketik ulang password Anda">
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                    <button type="button" onclick="toggleConfirmPassword()" class="focus:outline-none hover:scale-110 transition-transform">
                      <i id="confirm-eye-icon" data-feather="eye" class="h-5 w-5 text-gray-400 hover:text-indigo-600"></i>
                    </button>
                  </div>
                </div>
                <p id="confirm-feedback" class="mt-1 text-xs text-gray-500"></p>
              </div>
              
             
              <div class="flex items-start animate__animated animate__fadeIn animate__delay-3s">
                <div class="flex items-center h-5">
                  <input id="terms" name="terms" type="checkbox" 
                         class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded transition-all hover:scale-110">
                </div>
                <div class="ml-3 text-sm">
                  <label for="terms" class="font-medium text-gray-700 hover:text-gray-900 transition-colors">
                    Saya menyetujui <a href="#" class="text-indigo-600 hover:text-indigo-500 hover:underline">Syarat & Ketentuan</a> dan <a href="#" class="text-indigo-600 hover:text-indigo-500 hover:underline">Kebijakan Privasi</a>
                  </label>
                </div>
              </div>
              
            
              <div class="animate__animated animate__fadeIn animate__delay-4s">
                <button type="submit" 
                        class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-300 hover:shadow-lg pulse-hover">
                  <i data-feather="user-plus" class="h-5 w-5 mr-2"></i>
                  Daftar Sekarang
                </button>
              </div>
            </form>
            
       
            <div class="mt-6 text-center animate__animated animate__fadeIn animate__delay-5s">
              <p class="text-sm text-gray-600">
                Sudah punya akun? 
                <a href="login.html" class="font-medium text-indigo-600 hover:text-indigo-500 transition-colors hover:underline">
                  Masuk disini
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    feather.replace();
    
   
    document.addEventListener('DOMContentLoaded', function() {

      gsap.from(".animate__animated", {
        duration: 0.8,
        opacity: 0,
        y: 20,
        stagger: 0.2,
        ease: "power2.out"
      });
      
    
      const inputs = document.querySelectorAll('input, select');
      inputs.forEach(input => {
        input.addEventListener('focus', () => {
          input.parentElement.classList.add('ring-2', 'ring-indigo-200');
        });
        input.addEventListener('blur', () => {
          input.parentElement.classList.remove('ring-2', 'ring-indigo-200');
        });
      });
    });

    const kelasOptions = {
      RPL: [
        "X RPL 1", "X RPL 2", "X RPL 3",
        "XI RPL 1", "XI RPL 2", "XI RPL 3", 
        "XII RPL 1", "XII RPL 2", "XII RPL 3"
      ],
      DPIB: [
        "X DPIB 1", "X DPIB 2", "X DPIB 3",
        "XI DPIB 1", "XI DPIB 2", "XI DPIB 3",
        "XII DPIB 1", "XII DPIB 2", "XII DPIB 3"
      ],
      TOI: [
        "X TOI 1", "X TOI 2", "X TOI 3",
        "XI TOI 1", "XI TOI 2", "XI TOI 3",
        "XII TOI 1", "XII TOI 2", "XII TOI 3"
      ],
      TPG: [
        "X TPG 1", "X TPG 2", "X TPG 3",
        "XI TPG 1", "XI TPG 2", "XI TPG 3",
        "XII TPG 1", "XII TPG 2", "XII TPG 3"
      ],
      TITL: [
        "X TITL 1", "X TITL 2", "X TITL 3",
        "XI TITL 1", "XI TITL 2", "XI TITL 3",
        "XII TITL 1", "XII TITL 2", "XII TITL 3"
      ]
    };

    function updateKelas() {
      const jurusan = document.getElementById("jurusan").value;
      const kelasSelect = document.getElementById("kelas");

     
      gsap.to(kelasSelect, {
        duration: 0.2,
        opacity: 0,
        y: -5,
        onComplete: function() {
          kelasSelect.innerHTML = '<option value="">Pilih Kelas</option>';
          
          if (kelasOptions[jurusan]) {
            kelasOptions[jurusan].forEach(kelas => {
              const option = document.createElement("option");
              option.value = kelas;
              option.textContent = kelas;
              kelasSelect.appendChild(option);
            });
          }
          
          gsap.to(kelasSelect, {
            duration: 0.3,
            opacity: 1,
            y: 0
          });
        }
      });
    }

    function selectRole(role) {
      document.getElementById('role').value = role;
      
     
      document.querySelectorAll('#role-siswa, #role-guru, #role-admin').forEach(el => {
        gsap.to(el, {
          duration: 0.3,
          borderColor: '#e5e7eb',
          backgroundColor: 'transparent',
          ease: "power2.out"
        });
      });
      
      const selectedElement = document.getElementById('role-' + role);
      gsap.to(selectedElement, {
        duration: 0.3,
        borderColor: '#8b5cf6',
        backgroundColor: '#f5f3ff',
        ease: "power2.out"
      });
    
      const jurusanContainer = document.getElementById('jurusan-container');
      const kelasContainer = document.getElementById('kelas-container');
      const nisContainer = document.getElementById('nis-container');
      
      if (role === 'siswa') {
        gsap.to([jurusanContainer, kelasContainer, nisContainer], {
          duration: 0.4,
          display: 'block',
          opacity: 1,
          height: 'auto',
          ease: "power2.out"
        });
        document.querySelector('label[for="nis"]').textContent = 'NIS';
        document.getElementById('nis').placeholder = 'Masukkan NIS Anda';
      } else if (role === 'guru') {
        gsap.to([jurusanContainer, nisContainer], {
          duration: 0.4,
          display: 'block',
          opacity: 1,
          height: 'auto',
          ease: "power2.out"
        });
        gsap.to(kelasContainer, {
          duration: 0.3,
          display: 'none',
          opacity: 0,
          height: 0,
          ease: "power2.out"
        });
        document.querySelector('label[for="nis"]').textContent = 'NIP';
        document.getElementById('nis').placeholder = 'Masukkan NIP Anda';
      } else if (role === 'admin') {
        gsap.to([jurusanContainer, kelasContainer, nisContainer], {
          duration: 0.3,
          display: 'none',
          opacity: 0,
          height: 0,
          ease: "power2.out"
        });
      }
    }

    function togglePassword() {
      const passwordInput = document.getElementById('password');
      const eyeIcon = document.getElementById('eye-icon');
      
 
      gsap.to(eyeIcon, {
        duration: 0.2,
        scale: 0.8,
        onComplete: function() {
          if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.setAttribute('data-feather', 'eye-off');
          } else {
            passwordInput.type = 'password';
            eyeIcon.setAttribute('data-feather', 'eye');
          }
          feather.replace();
          
          gsap.to(eyeIcon, {
            duration: 0.2,
            scale: 1.1
          });
          
          gsap.to(eyeIcon, {
            duration: 0.1,
            scale: 1,
            delay: 0.1
          });
        }
      });
    }

    function toggleConfirmPassword() {
      const confirmInput = document.getElementById('confirm-password');
      const eyeIcon = document.getElementById('confirm-eye-icon');
      
   
      gsap.to(eyeIcon, {
        duration: 0.2,
        scale: 0.8,
        onComplete: function() {
          if (confirmInput.type === 'password') {
            confirmInput.type = 'text';
            eyeIcon.setAttribute('data-feather', 'eye-off');
          } else {
            confirmInput.type = 'password';
            eyeIcon.setAttribute('data-feather', 'eye');
          }
          feather.replace();
          
          gsap.to(eyeIcon, {
            duration: 0.2,
            scale: 1.1
          });
          
          gsap.to(eyeIcon, {
            duration: 0.1,
            scale: 1,
            delay: 0.1
          });
        }
      });
    }

    function checkPasswordStrength(password) {
      let strength = 0;
      const feedback = document.getElementById('password-feedback');
      
      if (password.length >= 8) strength++;
      if (password.length >= 12) strength++;
      
      if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
      
      if (/\d/.test(password)) strength++;
      
      if (/[^A-Za-z0-9]/.test(password)) strength++;
      
      strength = Math.min(strength, 4);
      
      for (let i = 1; i <= 4; i++) {
        const bar = document.getElementById(`strength-${i}`);
        if (i <= strength) {
          bar.classList.remove('strength-0');
          if (strength <= 2) {
            bar.classList.add('strength-1');
          } else if (strength === 3) {
            bar.classList.add('strength-2');
          } else {
            bar.classList.add('strength-3');
          }
        } else {
          bar.classList.remove('strength-1', 'strength-2', 'strength-3');
          bar.classList.add('strength-0');
        }
      }
      
      if (password.length === 0) {
        feedback.textContent = '';
      } else if (strength <= 1) {
        feedback.textContent = 'Password terlalu lemah';
        feedback.className = 'mt-1 text-xs text-red-500';
      } else if (strength <= 2) {
        feedback.textContent = 'Password cukup';
        feedback.className = 'mt-1 text-xs text-yellow-500';
      } else if (strength <= 3) {
        feedback.textContent = 'Password kuat';
        feedback.className = 'mt-1 text-xs text-blue-500';
      } else {
        feedback.textContent = 'Password sangat kuat!';
        feedback.className = 'mt-1 text-xs text-green-500';
      }
      
     
      const confirmPassword = document.getElementById('confirm-password').value;
      if (confirmPassword.length > 0) {
        checkPasswordMatch(password, confirmPassword);
      }
    }

    function checkPasswordMatch(password, confirmPassword) {
      const feedback = document.getElementById('confirm-feedback');
      
      if (confirmPassword.length === 0) {
        feedback.textContent = '';
      } else if (password !== confirmPassword) {
        feedback.textContent = 'Password tidak cocok';
        feedback.className = 'mt-1 text-xs text-red-500';
      } else {
        feedback.textContent = 'Password cocok';
        feedback.className = 'mt-1 text-xs text-green-500';
      }
    }
    selectRole('siswa');
    
    
    document.getElementById('confirm-password').addEventListener('input', function() {
      const password = document.getElementById('password').value;
      checkPasswordMatch(password, this.value);
    });
    
    
    document.querySelector('form').addEventListener('submit', function(e) {
      e.preventDefault();
      const button = this.querySelector('button[type="submit"]');
      gsap.to(button, {
        duration: 0.3,
        scale: 0.95,
        backgroundColor: '#4338ca',
        ease: "power2.out"
      });
  
      setTimeout(() => {
        alert('Pendaftaran berhasil! Silakan cek email Anda untuk verifikasi.');
      }, 1000);
    });
  </script>
</body>
</html>