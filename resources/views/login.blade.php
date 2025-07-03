<x-layouts.app>

    <x-slot:title>Login</x-slot:title>

    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
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
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .bg-gradient-animate {
            background-size: 200% 200%;
            animation: gradient 8s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
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

            0%,
            100% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(2deg);
            }

            75% {
                transform: rotate(-2deg);
            }
        }
    </style>

    <body class="min-h-screen bg-gray-50 font-sans antialiased" style="font-family: 'Inter', sans-serif;">
        <div
            class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 py-12 bg-gradient-to-br from-purple-50 to-indigo-50">

            <div class="fixed top-20 left-10 w-16 h-16 rounded-full bg-purple-200 opacity-20 floating"></div>
            <div class="fixed bottom-1/4 right-20 w-24 h-24 rounded-full bg-indigo-200 opacity-20 floating-delay-1">
            </div>
            <div class="fixed top-1/3 right-1/4 w-20 h-20 rounded-full bg-blue-200 opacity-20 floating-delay-2"></div>


            <div
                class="w-full max-w-6xl bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row transform transition-all duration-500 hover:shadow-2xl">


                <div
                    class="md:w-5/12 bg-gradient-to-br from-indigo-800 via-indigo-800 to-blue-500 p-8 text-white flex flex-col justify-between relative overflow-hidden bg-gradient-animate">
                    <!-- Animated background elements -->
                    <div
                        class="absolute -bottom-32 -right-32 h-64 w-64 rounded-full bg-indigo-800 bg-opacity-20 floating">
                    </div>
                    <div
                        class="absolute -bottom-40 -right-40 h-80 w-80 rounded-full bg-purple-500 bg-opacity-20 floating-delay-1">
                    </div>
                    <div
                        class="absolute top-1/4 -left-20 h-40 w-40 rounded-full bg-blue-500 bg-opacity-15 floating-delay-2">
                    </div>


                    <div class="relative z-10 animate__animated animate__fadeIn">
                        <div
                            class="flex items-center space-x-2 transform hover:scale-105 transition-transform duration-300">
                            <div class="p-2 bg-white bg-opacity-20 rounded-lg rotate-on-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                </svg>
                            </div>
                            <h1 class="text-3xl font-bold tracking-tight">Hadirify</h1>
                        </div>

                        <p
                            class="text-lg text-indigo-100 mt-6 max-w-xs leading-relaxed animate__animated animate__fadeIn animate__delay-1s">
                            Sistem absensi digital modern untuk institusi pendidikan yang efisien
                        </p>
                    </div>


                    <div class="mt-12 space-y-6">
                        <div
                            class="flex items-start space-x-4 group animate__animated animate__fadeInUp animate__delay-1s">
                            <div
                                class="flex-shrink-0 mt-1 group-hover:bg-white group-hover:bg-opacity-20 transition-all duration-300 p-2 rounded-lg">
                                <i data-feather="clock" class="h-5 w-5 group-hover:scale-110 transition-transform"></i>
                            </div>
                            <div class="group-hover:translate-x-1 transition-transform">
                                <h3 class="font-medium text-lg">Absensi Cepat</h3>
                                <p class="mt-1 text-indigo-100 text-sm">Proses kehadiran dalam hitungan detik dengan
                                    scan QR</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 group animate__animated animate__fadeInUp animate__delay-2s">
                            <div
                                class="flex-shrink-0 mt-1 group-hover:bg-white group-hover:bg-opacity-20 transition-all duration-300 p-2 rounded-lg">
                                <i data-feather="bar-chart-2"
                                    class="h-5 w-5 group-hover:scale-110 transition-transform"></i>
                            </div>
                            <div class="group-hover:translate-x-1 transition-transform">
                                <h3 class="font-medium text-lg">Analitik Lengkap</h3>
                                <p class="mt-1 text-indigo-100 text-sm">Pantau statistik kehadiran dengan dashboard
                                    real-time</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 group animate__animated animate__fadeInUp animate__delay-3s">
                            <div
                                class="flex-shrink-0 mt-1 group-hover:bg-white group-hover:bg-opacity-20 transition-all duration-300 p-2 rounded-lg">
                                <i data-feather="smartphone"
                                    class="h-5 w-5 group-hover:scale-110 transition-transform"></i>
                            </div>
                            <div class="group-hover:translate-x-1 transition-transform">
                                <h3 class="font-medium text-lg">Dimanapun, Kapanpun</h3>
                                <p class="mt-1 text-indigo-100 text-sm">Akses sistem dari perangkat apapun dengan
                                    responsive design</p>
                            </div>
                        </div>
                    </div>


                    <div class="mt-auto pt-16 relative z-10 animate__animated animate__fadeIn animate__delay-2s">
                        <p class="text-sm text-indigo-200">&copy; 2025 Hadirify. Semua hak dilindungi.</p>
                    </div>
                </div>


                <div class="md:w-7/12 p-4 sm:p-8 animate__animated animate__fadeInRight">
                    <div class="max-w-md mx-auto py-4 md:py-8">
                        <div
                            class="text-center md:text-left transform hover:scale-[1.01] transition-transform duration-300">
                            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">Selamat Datang Kembali</h2>
                            <p class="mt-2 text-gray-600">Silahkan masuk ke akun Anda untuk melanjutkan</p>
                        </div>

                        <div class="mt-8 space-y-6">

                            <div class="animate__animated animate__fadeIn animate__delay-1s">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Masuk sebagai</label>
                                <div class="grid grid-cols-3 gap-3" x-data="{ role: 'siswa' }">
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

                            <form action="{{ route('post.login') }}" method="POST"
                                class="space-y-4 mt-8 animate__animated animate__fadeIn animate__delay-2s">
                                @csrf
                                <div class="transform transition-all hover:scale-[1.01]">
                                    <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Nama
                                        Lengkap</label>
                                    <div class="relative rounded-md shadow-sm">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i data-feather="user"
                                                class="h-5 w-5 text-gray-400 hover:text-indigo-500 transition-colors"></i>
                                        </div>
                                        <input type="text" id="username" name="name"
                                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all duration-300 hover:border-indigo-300"
                                            placeholder="Masukkan nama lengkap Anda">
                                    </div>
                                </div>


                                <div id="jurusan-container" class="transform transition-all hover:scale-[1.01]">
                                    <label for="jurusan"
                                        class="block text-sm font-medium text-gray-700 mb-1">Jurusan</label>
                                    <div class="relative rounded-md shadow-sm">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i data-feather="book-open"
                                                class="h-5 w-5 text-gray-400 hover:text-indigo-500 transition-colors"></i>
                                        </div>
                                        <select id="jurusan" name="jurusan"
                                            class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm appearance-none transition-all duration-300 hover:border-indigo-300"
                                            onchange="updateKelas()">
                                            <option value="">Pilih Jurusan</option>
                                            <option value="RPL">💻 Rekayasa Perangkat Lunak (RPL)</option>
                                            <option value="DPIB">🏗️ Desain Pemodelan & Informasi Bangunan (DPIB)
                                            </option>
                                            <option value="TOI">⚙️ Teknik Otomasi Industri (TOI)</option>
                                            <option value="TPG">🔧 Teknik Pemesinan Gerinda (TPG)</option>
                                            <option value="TITL">🔌 Teknik Instalasi Tenaga Listrik (TITL)</option>
                                        </select>
                                        <div
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <i data-feather="chevron-down" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>

                                <div id="kelas-container" class="transform transition-all hover:scale-[1.01]">
                                    <label for="kelas"
                                        class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
                                    <div class="relative rounded-md shadow-sm">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i data-feather="users"
                                                class="h-5 w-5 text-gray-400 hover:text-indigo-500 transition-colors"></i>
                                        </div>
                                        <select id="kelas" name="kelas"
                                            class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm appearance-none transition-all duration-300 hover:border-indigo-300">
                                            <option value="">Pilih Kelas</option>
                                        </select>
                                        <div
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <i data-feather="chevron-down" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="transform transition-all hover:scale-[1.01]">
                                    <label for="password"
                                        class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                                    <div class="relative rounded-md shadow-sm">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i data-feather="lock"
                                                class="h-5 w-5 text-gray-400 hover:text-indigo-500 transition-colors"></i>
                                        </div>
                                        <input type="password" id="password" name="password"
                                            class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all duration-300 hover:border-indigo-300"
                                            placeholder="Masukkan password Anda">
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                            <button type="button" onclick="togglePassword()"
                                                class="focus:outline-none hover:scale-110 transition-transform">
                                                <i id="eye-icon" data-feather="eye"
                                                    class="h-5 w-5 text-gray-400 hover:text-indigo-600"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center justify-between animate__animated animate__fadeIn animate__delay-3s">
                                    <div class="flex items-center">
                                        <input id="remember-me" name="remember-me" type="checkbox"
                                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded transition-all hover:scale-110">
                                        <label for="remember-me"
                                            class="ml-2 block text-sm text-gray-700 hover:text-gray-900 transition-colors">
                                            Ingat saya
                                        </label>
                                    </div>
                                    <div class="text-sm">
                                        <a href="#"
                                            class="font-medium text-indigo-600 hover:text-indigo-500 transition-colors hover:underline">
                                            Lupa password?
                                        </a>
                                    </div>
                                </div>


                                <div class="animate__animated animate__fadeIn animate__delay-4s">
                                    <button type="submit"
                                        class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-300 hover:shadow-lg pulse-hover">
                                        <i data-feather="log-in" class="h-5 w-5 mr-2"></i>
                                        Masuk Sekarang
                                    </button>
                                </div>
                            </form>

                            <div class="animate__animated animate__fadeIn animate__delay-4s">
                                <button type="submit"
                                    class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-300 hover:shadow-lg pulse-hover">
                                    <i data-feather="log-in" class="h-5 w-5 mr-2" href="dasboard.blade.php"></i>
                                    Register
                                </button>
                            </div>

                            <div
                                class="mt-10 pt-6 border-t border-gray-200 animate__animated animate__fadeIn animate__delay-5s">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                                    <p class="text-xs text-gray-500 hover:text-gray-700 transition-colors">
                                        Dengan masuk, Anda menyetujui Ketentuan Layanan dan Kebijakan Privasi kami.
                                    </p>
                                    <div class="mt-3 sm:mt-0 flex space-x-4">
                                        <a href="#"
                                            class="text-gray-400 hover:text-indigo-600 transition-colors hover:animate-pulse">
                                            <i data-feather="help-circle" class="h-5 w-5"></i>
                                        </a>
                                        <a href="#"
                                            class="text-gray-400 hover:text-indigo-600 transition-colors hover:animate-pulse">
                                            <i data-feather="info" class="h-5 w-5"></i>
                                        </a>
                                    </div>
                                </div>
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

                if (role === 'siswa') {
                    gsap.to([jurusanContainer, kelasContainer], {
                        duration: 0.4,
                        display: 'block',
                        opacity: 1,
                        height: 'auto',
                        ease: "power2.out"
                    });
                } else if (role === 'guru') {
                    gsap.to(jurusanContainer, {
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
                } else if (role === 'admin') {
                    gsap.to([jurusanContainer, kelasContainer], {
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


            selectRole('siswa');

            document.querySelector('form').addEventListener('submit', function(e) {
                const button = this.querySelector('button[type="submit"]');
                gsap.to(button, {
                    duration: 0.3,
                    scale: 0.95,
                    backgroundColor: '#4338ca',
                    ease: "power2.out"
                });
            });
        </script>
    </body>

</x-layouts.app>
