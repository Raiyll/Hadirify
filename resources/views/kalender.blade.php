<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Sekolah - Hadirify</title>
    <link rel="icon" href="/hadirify-logo.jpg" type="image/jpeg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales/id.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Outfit', sans-serif;
        }
        
        .fc-event {
            cursor: pointer;
            border-radius: 6px;
            font-size: 0.875rem;
            padding: 2px 4px;
            border: none !important;
        }
        
        .fc-daygrid-event {
            margin: 1px 2px;
        }
        
        .holiday {
            background-color: #fef2f2;
        }
        
        .fc-daygrid-day.fc-day-today {
            background-color: #f0f9ff !important;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        /* Custom Event Colors */
        .fc-event-national {
            background-color: #ef4444 !important;
        }
        .fc-event-school-holiday {
            background-color: #3b82f6 !important;
        }
        .fc-event-exam {
            background-color: #10b981 !important;
        }
        .fc-event-school-event {
            background-color: #8b5cf6 !important;
        }
        
        /* Search Highlight */
        .search-highlight {
            background-color: #FEF08A !important;
            animation: pulse 1.5s infinite;
            font-weight: 600;
        }
        @keyframes pulse {
            0% { opacity: 0.8; }
            50% { opacity: 1; }
            100% { opacity: 0.8; }
        }
        .search-results-container {
            position: absolute;
            z-index: 100;
            width: 100%;
            max-height: 300px;
            overflow-y: auto;
            background: white;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            display: none;
        }
        .search-result-item {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #eee;
        }
        .search-result-item:hover {
            background-color: #f5f5f5;
        }
        .search-result-type {
            font-size: 0.75rem;
            color: white;
            padding: 2px 6px;
            border-radius: 10px;
            margin-right: 8px;
        }
        .national { background-color: #ef4444; }
        .holiday { background-color: #3b82f6; }
        .exam { background-color: #10b981; }
        .event { background-color: #8b5cf6; }
        
        /* Enhanced Event Styling */
        .fc-event {
            font-weight: 500;
            border-left: 4px solid !important;
            padding: 3px 6px !important;
        }
        
        /* Color Matching Legend */
        .fc-event-national {
            background-color: #ef4444 !important;
            border-color: #ef4444 !important;
            color: #b91c1c !important;
        }
        .fc-event-school-holiday {
            background-color: #2196F3 !important;
            border-color: #2196F3 !important;
            color: #f0f9ff !important;
        }
        .fc-event-exam {
            background-color:#10b981 !important;
            border-color: #10b981 !important;
            color: #047857 !important;
        }
        .fc-event-school-event {
            background-color: #8b5cf6 !important;
            border-color: #8b5cf6 !important;
            color: #6d28d9 !important;
        }

        /* Month/Year Header */
        .fc-toolbar-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
        }

        /* Event Modal */
        .event-modal {
            display: none;
            position: fixed;
            z-index: 50;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }
        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 24px;
            border-radius: 12px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }
        .close-modal {
            color: #6b7280;
            float: right;
            font-size: 24px;
            cursor: pointer;
        }
        
        /* Date Highlight */
        .date-highlight {
            background-color: rgba(254, 240, 138, 0.5);
            border: 2px solid #F59E0B;
        }
    </style>
</head>
<body class="text-gray-800">
    <div class="flex min-h-screen">
        <!-- Sidebar Navigation -->
        <div class="nav-gradient text-white w-64 flex flex-col shadow-lg transform transition-all duration-500 ease-in-out z-20">
            <!-- Your existing sidebar code -->
        </div>

        <!-- Main Content Area -->
        <div class="flex-grow overflow-y-auto custom-scroll">
            <!-- Search Header -->
            <div class="sticky top-0 z-10 glass-card shadow-sm backdrop-blur-lg">
                <div class="flex justify-between items-center p-4">
                    <div class="relative w-64">
                        <input type="text" id="searchInput" placeholder="Cari liburan, ujian, acara..." class="w-full py-2 pl-10 pr-4 rounded-xl bg-white/80 border-0 focus:ring-2 focus:ring-indigo-400 text-sm transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                        <div id="searchResults" class="search-results-container"></div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <!-- Your existing header buttons -->
                    </div>
                </div>
            </div>

            <!-- Calendar Content -->
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold">Kalender SMKN 4 TANGERANG 2024/2025</h1>
                    <div class="flex space-x-2">
                        <button id="prevMonth" class="p-2 rounded-lg bg-white hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button id="nextMonth" class="p-2 rounded-lg bg-white hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button id="todayBtn" class="px-3 py-2 text-sm rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">Hari Ini</button>
                        <button id="clearSearchBtn" class="px-3 py-2 text-sm rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 hidden">Bersihkan Pencarian</button>
                    </div>
                </div>

                <!-- Calendar Container -->
                <div class="glass-card rounded-xl p-4 shadow-sm">
                    <div id="calendar"></div>
                </div>

                <!-- Jenis warna event -->
                <div class="mt-4 flex flex-wrap gap-4">
                    <div class="flex items-center">
                        <div class="w-4 h-4 rounded-full bg-red-500 mr-2"></div>
                        <span class="text-sm">Libur Nasional</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-4 h-4 rounded-full bg-blue-500 mr-2"></div>
                        <span class="text-sm">Libur Sekolah</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-4 h-4 rounded-full bg-green-500 mr-2"></div>
                        <span class="text-sm">Ujian</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-4 h-4 rounded-full bg-purple-500 mr-2"></div>
                        <span class="text-sm">Acara Sekolah</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deskripsi Event -->
    <div id="eventModal" class="event-modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h3 id="modalTitle" class="text-xl font-bold mb-2"></h3>
            <div class="flex items-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span id="modalDate" class="text-gray-600"></span>
            </div>
            <p id="modalDesc" class="text-gray-700"></p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const modal = document.getElementById('eventModal');
            const closeBtn = document.querySelector('.close-modal');
            const searchInput = document.getElementById('searchInput');
            const searchResults = document.getElementById('searchResults');
            const clearSearchBtn = document.getElementById('clearSearchBtn');
            let calendar;
            let allEvents = [];

            // Close modal handlers
            closeBtn.onclick = () => modal.style.display = "none";
            window.onclick = (e) => e.target == modal ? modal.style.display = "none" : null;

            // Initialize calendar
            function initCalendar() {
                calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'id',
                    headerToolbar: {
                        start: '',
                        center: 'title',
                        end: ''
                    },
                    height: 'auto',
                    dayMaxEvents: 3,
                    events: getCalendarEvents(),
                    
                    eventContent: function(arg) {
                        return {
                            html: `<div class="fc-event-title">${arg.event.title}</div>`
                        };
                    },

                    eventClick: function(info) {
                        const startDate = info.event.start ? 
                            info.event.start.toLocaleDateString('id-ID', { 
                                weekday: 'long', 
                                year: 'numeric', 
                                month: 'long', 
                                day: 'numeric' 
                            }) : 'Tanggal tidak tersedia';
                        
                        let endDate = '';
                        if (info.event.end) {
                            const adjustedEnd = new Date(info.event.end);
                            adjustedEnd.setDate(adjustedEnd.getDate() - 1);
                            endDate = adjustedEnd.toLocaleDateString('id-ID', { 
                                weekday: 'long', 
                                year: 'numeric', 
                                month: 'long', 
                                day: 'numeric' 
                            });
                        }

                        const dateText = endDate ? 
                            `${startDate} - ${endDate}` : 
                            startDate;

                        document.getElementById('modalTitle').textContent = info.event.title;
                        document.getElementById('modalDate').textContent = dateText;
                        document.getElementById('modalDesc').textContent = 
                            `${info.event.extendedProps.description || 'Tidak ada deskripsi tambahan'}\n\nJenis: ${info.event.extendedProps.type}`;
                        
                        modal.style.display = "block";
                    },

                    datesSet: function(arg) {
                        const monthYear = arg.view.title;
                        document.querySelector('.fc-toolbar-title').innerHTML = `
                            <span class="text-gray-800">${monthYear}</span>
                        `;
                    }
                });

                calendar.render();
                allEvents = calendar.getEvents();
            }

            // Get calendar events
            function getCalendarEvents() {
                return [
                    // ===== Libur Nasional (Red) =====
                    {
                        title: 'Tahun Baru 2024',
                        start: '2024-01-01',
                        className: 'fc-event-national',
                        description: 'Libur nasional menyambut tahun baru 2024',
                        type: 'Libur Nasional'
                    },
                    {
                        title: 'Hari Raya Nyepi',
                        start: '2024-03-11',
                        className: 'fc-event-national',
                        description: 'Tahun Baru Saka 1945',
                        type: 'Libur Nasional'
                    },
                    {
                        title: 'Wafat Isa Almasih',
                        start: '2024-03-29',
                        className: 'fc-event-national',
                        description: 'Memperingati wafatnya Yesus Kristus',
                        type: 'Libur Nasional'
                    },
                    {
                        title: 'Hari Buruh Internasional',
                        start: '2024-05-01',
                        className: 'fc-event-national',
                        description: 'Memperingati perjuangan hak-hak buruh',
                        type: 'Libur Nasional'
                    },
                    {
                        title: 'Kenaikan Isa Almasih',
                        start: '2024-05-09',
                        className: 'fc-event-national',
                        description: 'Memperingati kenaikan Yesus Kristus ke surga',
                        type: 'Libur Nasional'
                    },
                    {
                        title: 'Hari Raya Waisak',
                        start: '2024-05-23',
                        className: 'fc-event-national',
                        description: 'Memperingati kelahiran, pencerahan, dan kematian Buddha',
                        type: 'Libur Nasional'
                    },
                    {
                        title: 'Hari Lahir Pancasila',
                        start: '2024-06-01',
                        className: 'fc-event-national',
                        description: 'Memperingati lahirnya ideologi dasar negara Indonesia',
                        type: 'Libur Nasional'
                    },
                    {
                        title: 'Hari Kemerdekaan RI',
                        start: '2025-08-17',
                        className: 'fc-event-national',
                        description: 'Memperingati kemerdekaan Republik Indonesia',
                        type: 'Libur Nasional'
                    },
                    {
                        title: 'Maulid Nabi Muhammad',
                        start: '2024-09-15',
                        className: 'fc-event-national',
                        description: 'Memperingati kelahiran Nabi Muhammad SAW',
                        type: 'Libur Nasional'
                    },
                    {
                        title: 'Natal',
                        start: '2024-12-25',
                        className: 'fc-event-national',
                        description: 'Memperingati kelahiran Yesus Kristus',
                        type: 'Libur Nasional'
                    },

                    // ===== Libur Sekolah (Blue) =====
                    {
                        title: 'Libur Semester Genap',
                        start: '2024-06-17',
                        end: '2024-07-15',
                        className: 'fc-event-school-holiday',
                        display: 'background',
                        description: 'Libur panjang antara semester genap dan ganjil',
                        type: 'Libur Sekolah'
                    },
                    {
                        title: 'Libur Semester Ganjil',
                        start: '2024-12-23',
                        end: '2025-01-06',
                        className: 'fc-event-school-holiday',
                        display: 'background',
                        description: 'Libur panjang antara semester ganjil dan genap',
                        type: 'Libur Sekolah'
                    },
                    {
                        title: 'Libur Tengah Semester',
                        start: '2024-10-21',
                        end: '2024-10-23',
                        className: 'fc-event-school-holiday',
                        description: 'Libur tengah semester untuk refreshing',
                        type: 'Libur Sekolah'
                    },

                    // ===== Ujian (Green) =====
                    {
                        title: 'UTS Semester Genap',
                        start: '2024-03-04',
                        end: '2024-03-09',
                        className: 'fc-event-exam',
                        description: 'Ujian Tengah Semester untuk semua kelas',
                        type: 'Ujian'
                    },
                    {
                        title: 'UAS Semester Genap',
                        start: '2024-05-27',
                        end: '2024-06-07',
                        className: 'fc-event-exam',
                        description: 'Ujian Akhir Semester untuk semua kelas',
                        type: 'Ujian'
                    },
                    {
                        title: 'UTS Semester Ganjil',
                        start: '2024-09-16',
                        end: '2024-09-21',
                        className: 'fc-event-exam',
                        description: 'Ujian Tengah Semester untuk semua kelas',
                        type: 'Ujian'
                    },
                    {
                        title: 'UAS Semester Ganjil',
                        start: '2024-12-01',
                        end: '2024-12-12',
                        className: 'fc-event-exam',
                        description: 'Ujian Akhir Semester untuk semua kelas',
                        type: 'Ujian'
                    },
                    {
                        title: 'Ujian Praktek Kelas 12',
                        start: '2025-02-10',
                        end: '2025-02-14',
                        className: 'fc-event-exam',
                        description: 'Ujian praktek untuk siswa kelas 12',
                        type: 'Ujian'
                    },

                    // ===== Acara Sekolah (Purple) =====
                    {
                        title: 'Porseni Sekolah',
                        start: '2024-10-14',
                        end: '2024-10-16',
                        className: 'fc-event-school-event',
                        description: 'Pekan Olahraga dan Seni antar kelas dengan berbagai lomba',
                        type: 'Acara Sekolah'
                    },
                    {
                        title: 'Class Meeting',
                        start: '2024-06-10',
                        end: '2024-06-12',
                        className: 'fc-event-school-event',
                        description: 'Berbagai perlombaan antar kelas setelah ujian',
                        type: 'Acara Sekolah'
                    },
                    {
                        title: 'Penerimaan Siswa Baru',
                        start: '2024-07-01',
                        end: '2024-07-03',
                        className: 'fc-event-school-event',
                        description: 'Proses pendaftaran dan seleksi siswa baru',
                        type: 'Acara Sekolah'
                    },
                    {
                        title: 'Masa Pengenalan Lingkungan Sekolah',
                        start: '2024-07-15',
                        end: '2024-07-17',
                        className: 'fc-event-school-event',
                        description: 'Masa orientasi untuk siswa baru',
                        type: 'Acara Sekolah'
                    },
                    {
                        title: 'Peringatan Hari Pendidikan Nasional',
                        start: '2024-05-02',
                        className: 'fc-event-school-event',
                        description: 'Upacara dan berbagai lomba memperingati Hardiknas',
                        type: 'Acara Sekolah'
                    }
                ];
            }

            // Search functionality
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.trim().toLowerCase();
                searchResults.innerHTML = '';
                
                if (searchTerm.length < 2) {
                    searchResults.style.display = 'none';
                    return;
                }
                
                const filteredEvents = allEvents.filter(event => {
                    return event.title.toLowerCase().includes(searchTerm) || 
                           (event.extendedProps.description && event.extendedProps.description.toLowerCase().includes(searchTerm)) ||
                           event.extendedProps.type.toLowerCase().includes(searchTerm);
                });
                
                if (filteredEvents.length > 0) {
                    filteredEvents.forEach(event => {
                        const eventElement = document.createElement('div');
                        eventElement.className = 'search-result-item';
                        
                        const startDate = event.start ? 
                            event.start.toLocaleDateString('id-ID', { 
                                weekday: 'short', 
                                day: 'numeric', 
                                month: 'short' 
                            }) : '';
                        
                        let dateText = startDate;
                        if (event.end) {
                            const adjustedEnd = new Date(event.end);
                            adjustedEnd.setDate(adjustedEnd.getDate() - 1);
                            const endDate = adjustedEnd.toLocaleDateString('id-ID', { 
                                weekday: 'short', 
                                day: 'numeric', 
                                month: 'short' 
                            });
                            dateText = `${startDate} - ${endDate}`;
                        }
                        
                        const typeClass = event.extendedProps.type === 'Libur Nasional' ? 'national' : 
                                         event.extendedProps.type === 'Libur Sekolah' ? 'holiday' : 
                                         event.extendedProps.type === 'Ujian' ? 'exam' : 'event';
                        
                        eventElement.innerHTML = `
                            <div class="flex items-center">
                                <span class="search-result-type ${typeClass}">${event.extendedProps.type}</span>
                                <strong>${event.title}</strong>
                            </div>
                            <div class="text-sm text-gray-500 mt-1">${dateText}</div>
                            <div class="text-xs text-gray-400 truncate">${event.extendedProps.description || ''}</div>
                        `;
                        
                        eventElement.addEventListener('click', function() {
                            // Remove previous highlights
                            document.querySelectorAll('.search-highlight').forEach(el => {
                                el.classList.remove('search-highlight');
                            });
                            document.querySelectorAll('.date-highlight').forEach(el => {
                                el.classList.remove('date-highlight');
                            });
                            
                            // Highlight the event
                            const eventEls = document.querySelectorAll(`[data-event-id="${event.id}"]`);
                            eventEls.forEach(el => {
                                el.classList.add('search-highlight');
                            });
                            
                            // Highlight the dates
                            if (event.start) {
                                const startStr = event.start.toISOString().split('T')[0];
                                const startDayEl = document.querySelector(`[data-date="${startStr}"]`);
                                if (startDayEl) startDayEl.classList.add('date-highlight');
                                
                                if (event.end) {
                                    const endDate = new Date(event.end);
                                    endDate.setDate(endDate.getDate() - 1);
                                    const endStr = endDate.toISOString().split('T')[0];
                                    const endDayEl = document.querySelector(`[data-date="${endStr}"]`);
                                    if (endDayEl) endDayEl.classList.add('date-highlight');
                                    
                                    // Highlight all days in between
                                    let currentDate = new Date(event.start);
                                    currentDate.setDate(currentDate.getDate() + 1);
                                    
                                    while (currentDate < endDate) {
                                        const currentStr = currentDate.toISOString().split('T')[0];
                                        const currentDayEl = document.querySelector(`[data-date="${currentStr}"]`);
                                        if (currentDayEl) currentDayEl.classList.add('date-highlight');
                                        currentDate.setDate(currentDate.getDate() + 1);
                                    }
                                }
                            }
                            
                            // Navigate to the event's date
                            if (event.start) {
                                calendar.gotoDate(event.start);
                            }
                            
                            // Close search results
                            searchResults.style.display = 'none';
                            searchInput.value = event.title;
                            clearSearchBtn.classList.remove('hidden');
                        });
                        
                        searchResults.appendChild(eventElement);
                    });
                    
                    searchResults.style.display = 'block';
                } else {
                    searchResults.innerHTML = '<div class="search-result-item text-gray-500">Tidak ditemukan hasil pencarian</div>';
                    searchResults.style.display = 'block';
                }
            });
            
            // Clear search highlights
            clearSearchBtn.addEventListener('click', function() {
                document.querySelectorAll('.search-highlight').forEach(el => {
                    el.classList.remove('search-highlight');
                });
                document.querySelectorAll('.date-highlight').forEach(el => {
                    el.classList.remove('date-highlight');
                });
                searchInput.value = '';
                searchResults.style.display = 'none';
                this.classList.add('hidden');
            });
            
            // Close search results when clicking outside
            document.addEventListener('click', function(e) {
                if (!searchInput.contains(e.target)) {
                    searchResults.style.display = 'none';
                }
            });
            
            // Navigation buttons
            document.getElementById('prevMonth').addEventListener('click', () => calendar.prev());
            document.getElementById('nextMonth').addEventListener('click', () => calendar.next());
            document.getElementById('todayBtn').addEventListener('click', () => {
                calendar.today();
                // Clear search when going to today
                clearSearchBtn.click();
            });
            
            // Initialize the calendar
            initCalendar();
        });
    </script>
</body>
</html>