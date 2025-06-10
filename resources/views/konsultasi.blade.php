<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi dengan Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto max-w-6xl p-4">
        
        <header class="bg-blue-600 text-white rounded-t-lg shadow-md">
            <div class="flex items-center justify-between p-4">
                <div class="flex items-center space-x-4">
                    <a href="/pilihanguru" class="text-white hover:text-blue-200">
                        <i class="fas fa-arrow-left text-xl"></i>
                    </a>
                    <div>
                        <h1 class="text-xl font-bold">Konsultasi dengan Guru</h1>
                        <p class="text-sm text-blue-100">Komariah S.Kom - Pemrograman dasar</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="p-2 rounded-full hover:bg-blue-500">
                        <i class="fas fa-phone-alt"></i>
                    </button>
                    <button class="p-2 rounded-full hover:bg-blue-500">
                        <i class="fas fa-video"></i>
                    </button>
                    <button class="p-2 rounded-full hover:bg-blue-500">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </div>
            </div>
        </header>

        <div class="bg-white shadow-md rounded-b-lg overflow-hidden">
        
            <div class="border-b border-gray-200 p-4 bg-gray-50 flex items-center">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Guru" class="w-10 h-10 rounded-full mr-3">
                <div>
                    <h2 class="font-semibold">Bu Kokom</h2>
                    <p class="text-xs text-gray-500">Guru Pemrograman Dasar - Online</p>
                </div>
            </div>

            <div class="h-96 overflow-y-auto p-4 space-y-4" id="chat-messages">
             
                <div class="flex items-start">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Guru" class="w-8 h-8 rounded-full mr-3">
                    <div>
                        <div class="bg-gray-100 rounded-lg py-2 px-4 max-w-xs lg:max-w-md">
                            <p class="text-gray-800">Halo, ada yang bisa saya bantu?</p>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">10:15</p>
                    </div>
                </div>

              
                <div class="flex items-start justify-end">
                    <div class="text-right">
                        <div class="bg-blue-500 text-white rounded-lg py-2 px-4 max-w-xs lg:max-w-md inline-block">
                            <p>Selamat siang Bu, saya ingin bertanya tentang tugas pemrograman minggu lalu</p>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">10:16</p>
                    </div>
                    <img src="/img/gw.jpg" alt="Murid" class="w-8 h-8 rounded-full ml-3">
                </div>

               
                <div class="flex items-start">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Guru" class="w-8 h-8 rounded-full mr-3">
                    <div>
                        <div class="bg-gray-100 rounded-lg py-2 px-4 max-w-xs lg:max-w-md">
                            <p class="text-gray-800">Tentu, bagian mana yang ingin kamu tanyakan?</p>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">10:17</p>
                    </div>
                </div>

              
                <div class="flex items-start justify-end">
                    <div class="text-right">
                        <div class="bg-blue-500 text-white rounded-lg py-2 px-4 max-w-xs lg:max-w-md inline-block">
                            <p>Saya bingung dengan implementasi fungsi rekursif untuk menghitung faktorial</p>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">10:18</p>
                    </div>
                    <img src="/img/gw.jpg" alt="Murid" class="w-8 h-8 rounded-full ml-3">
                </div>

              
                <div class="flex items-start">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Guru" class="w-8 h-8 rounded-full mr-3">
                    <div>
                        <div class="bg-gray-100 rounded-lg py-2 px-4 max-w-xs lg:max-w-md">
                            <p class="text-gray-800 mb-2">Berikut contoh sederhananya:</p>
                            <div class="bg-gray-800 text-green-400 p-3 rounded-md text-sm font-mono overflow-x-auto">
                                <pre><code>function factorial(n) {
    if (n === 0) return 1;
    return n * factorial(n - 1);
}</code></pre>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">10:20</p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 p-4 bg-gray-50">
                <div class="flex items-center">
                    <button class="p-2 text-gray-500 hover:text-blue-500">
                        <i class="fas fa-paperclip"></i>
                    </button>
                    <input type="text" placeholder="Ketik pesan..." class="flex-1 border border-gray-300 rounded-full py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent mx-2">
                    <button class="p-2 bg-blue-500 text-white rounded-full hover:bg-blue-600" id="send-button">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
                <div class="flex justify-between mt-2 text-xs text-gray-500">
                    <div>
                        <button class="hover:text-blue-500 mr-3"><i class="far fa-smile"></i> Emoji</button>
                        <button class="hover:text-blue-500"><i class="fas fa-code"></i> Kode</button>
                    </div>
                    <div>
                        <span id="character-count">0/500</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white p-4 rounded-lg shadow-sm text-center hover:bg-blue-50 cursor-pointer transition">
                <div class="text-blue-500 mb-2"><i class="fas fa-file-alt text-2xl"></i></div>
                <p class="text-sm font-medium">Lampirkan Tugas</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm text-center hover:bg-blue-50 cursor-pointer transition">
                <div class="text-blue-500 mb-2"><i class="fas fa-calendar-check text-2xl"></i></div>
                <p class="text-sm font-medium">Jadwal Konsultasi</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm text-center hover:bg-blue-50 cursor-pointer transition">
                <div class="text-blue-500 mb-2"><i class="fas fa-history text-2xl"></i></div>
                <p class="text-sm font-medium">Riwayat Chat</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm text-center hover:bg-blue-50 cursor-pointer transition">
            <a href="/pilihanguru"><div class="text-blue-500 mb-2"><i class="fas fa-chalkboard-teacher text-2xl"></i></div>
                <p class="text-sm font-medium">Guru Lain</p>
            </div>
        </div>
    </div>

    <script>

        const chatMessages = document.getElementById('chat-messages');
        chatMessages.scrollTop = chatMessages.scrollHeight;

       
        const messageInput = document.querySelector('input[type="text"]');
        const characterCount = document.getElementById('character-count');

        messageInput.addEventListener('input', () => {
            characterCount.textContent = `${messageInput.value.length}/500`;
        });

       
        const sendButton = document.getElementById('send-button');
        
        sendButton.addEventListener('click', () => {
            if (messageInput.value.trim() !== '') {
                const newMessage = document.createElement('div');
                newMessage.className = 'flex items-start justify-end';
                newMessage.innerHTML = `
                    <div class="text-right">
                        <div class="bg-blue-500 text-white rounded-lg py-2 px-4 max-w-xs lg:max-w-md inline-block">
                            <p>${messageInput.value}</p>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">${new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})}</p>
                    </div>
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Murid" class="w-8 h-8 rounded-full ml-3">
                `;
                
         
                chatMessages.appendChild(newMessage);
                
            
                messageInput.value = '';
                characterCount.textContent = '0/500';
                
             
                chatMessages.scrollTop = chatMessages.scrollHeight;
                
             
                setTimeout(() => {
                    const replies = [
                        "Ohio",
                        "Rizzzz",
                        "Nigga",
                        "Horee.",
                    ];
                    const randomReply = replies[Math.floor(Math.random() * replies.length)];
                    
                    const replyMessage = document.createElement('div');
                    replyMessage.className = 'flex items-start';
                    replyMessage.innerHTML = `
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Guru" class="w-8 h-8 rounded-full mr-3">
                        <div>
                            <div class="bg-gray-100 rounded-lg py-2 px-4 max-w-xs lg:max-w-md">
                                <p class="text-gray-800">${randomReply}</p>
                            </div>
                            <p class="text-xs text-gray-500 mt-1">${new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})}</p>
                        </div>
                    `;
                    
                    chatMessages.appendChild(replyMessage);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }, 1000 + Math.random() * 2000);
            }
        });

        messageInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendButton.click();
            }
        });
    </script>
</body>
</html>