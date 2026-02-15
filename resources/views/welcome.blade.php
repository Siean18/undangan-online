<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan - Nama Mempelai</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- AOS (Animate on Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #fdfaf5;
            color: #4a4a4a;
        }
        h1, h2, h3, .heading-serif {
            font-family: 'Playfair Display', serif;
        }
        .text-gold {
            color: #C5A059;
        }
        .bg-gold {
            background-color: #C5A059;
        }
        .border-gold {
            border-color: #C5A059;
        }
        .btn-gold {
            background-color: #C5A059;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-gold:hover {
            background-color: #A68045;
            transform: translateY(-2px);
        }
        .glass {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .section-padding {
            padding: 80px 20px;
        }
        /* Custom timeline styles */
        .left-timeline { border-left: 2px solid #C5A059; }
        @media (min-width: 768px) {
            .left-timeline { border-left: none; }
        }
    </style>
</head>
<body class="overflow-x-hidden">

    <!-- Hero Section -->
    <section class="h-screen flex items-center justify-center relative overflow-hidden bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=2070&auto=format&fit=crop');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center text-white px-4" data-aos="zoom-in" data-aos-duration="1500">
            <p class="text-xl uppercase tracking-[0.3em] mb-4">The Wedding of</p>
            <h1 class="text-6xl md:text-8xl mb-6">Romeo & Juliet</h1>
            <p class="text-2xl italic mb-8">15 . 08 . 2026</p>
            <a href="#opening" class="btn-gold px-8 py-3 rounded-full text-lg uppercase tracking-widest animate-bounce inline-block">Buka Undangan</a>
        </div>
    </section>

    <!-- Opening Section -->
    <section id="opening" class="section-padding text-center max-w-4xl mx-auto" data-aos="fade-up">
        <div class="mb-12">
            <img src="https://cdn-icons-png.flaticon.com/512/836/836934.png" alt="Flower Decor" class="w-16 mx-auto mb-6 opacity-40">
            <h2 class="text-3xl text-gold mb-6 uppercase tracking-widest">Salam Pembuka</h2>
            <p class="text-lg leading-relaxed italic px-4">
                "Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang."
            </p>
            <p class="mt-4 font-semibold">- Ar-Rum: 21 -</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-16 px-4">
            <div data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1976&auto=format&fit=crop" class="w-48 h-48 rounded-full object-cover mx-auto mb-6 border-4 border-gold shadow-xl">
                <h3 class="text-3xl text-gold mb-2">Romeo Montague</h3>
                <p class="text-sm uppercase tracking-widest mb-2 font-bold">Putra Dari:</p>
                <p>Bapak Montague & Ibu Montague</p>
            </div>
            <div data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1554151228-14d9def656e4?q=80&w=1972&auto=format&fit=crop" class="w-48 h-48 rounded-full object-cover mx-auto mb-6 border-4 border-gold shadow-xl">
                <h3 class="text-3xl text-gold mb-2">Juliet Capulet</h3>
                <p class="text-sm uppercase tracking-widest mb-2 font-bold">Putri Dari:</p>
                <p>Bapak Capulet & Ibu Capulet</p>
            </div>
        </div>
    </section>

    <!-- Event Detail Section -->
    <section class="section-padding bg-stone-100">
        <div class="max-w-6xl mx-auto text-center px-4">
            <h2 class="text-4xl text-gold mb-12 uppercase tracking-[0.2em]" data-aos="fade-down">Detail Acara</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Akad Nikah -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border border-gold/20" data-aos="flip-left">
                    <h3 class="text-3xl text-gold mb-6">Akad Nikah</h3>
                    <div class="space-y-4 text-lg">
                        <p class="font-bold uppercase tracking-widest">Sabtu, 15 Agustus 2026</p>
                        <p>Pukul 08:00 - 10:00 WIB</p>
                        <p class="border-t border-gold/20 pt-4">Masjid Raya Al-Azhar</p>
                        <p class="text-sm mb-6">Jl. Sisingamangaraja No.1, Jakarta Selatan</p>
                        <a href="https://maps.app.goo.gl/tB3H5pX9X6J2" target="_blank" class="btn-gold px-6 py-2 rounded-lg text-sm uppercase tracking-widest inline-block">Google Maps</a>
                    </div>
                </div>
                <!-- Resepsi -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border border-gold/20" data-aos="flip-right">
                    <h3 class="text-3xl text-gold mb-6">Resepsi</h3>
                    <div class="space-y-4 text-lg">
                        <p class="font-bold uppercase tracking-widest">Sabtu, 15 Agustus 2026</p>
                        <p>Pukul 11:00 - selesai</p>
                        <p class="border-t border-gold/20 pt-4">Ballroom Hotel Mulia</p>
                        <p class="text-sm mb-6">Jl. Asia Afrika, Senayan, Jakarta Pusat</p>
                        <a href="https://maps.app.goo.gl/tB3H5pX9X6J2" target="_blank" class="btn-gold px-6 py-2 rounded-lg text-sm uppercase tracking-widest inline-block">Google Maps</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Love Story Section -->
    <section class="section-padding max-w-5xl mx-auto px-4">
        <h2 class="text-4xl text-center text-gold mb-16 uppercase tracking-widest" data-aos="fade-up">Kisah Cinta Kami</h2>
        <div class="relative wrap overflow-hidden p-4 md:p-10 h-full">
            <div class="border-2-2 absolute border-opacity-20 border-gold h-full border hidden md:block" style="left: 50%"></div>
            
            <!-- Item 1 -->
            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-1 w-5/12 hidden md:block"></div>
                <div class="z-20 flex items-center order-1 bg-gold shadow-xl w-8 h-8 rounded-full hidden md:flex">
                    <h1 class="mx-auto font-semibold text-lg text-white font-serif">1</h1>
                </div>
                <div class="order-1 bg-white rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4" data-aos="fade-right">
                    <h3 class="mb-3 font-bold text-gold text-xl">Pertama Bertemu</h3>
                    <p class="text-sm leading-snug tracking-wide text-gray-600">Tak disengaja, pertemuan pertama di sebuah perpustakaan mengawali segalanya. Berawal dari meminjam buku yang sama.</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="mb-8 flex justify-between md:flex-row-reverse items-center w-full left-timeline">
                <div class="order-1 w-5/12 hidden md:block"></div>
                <div class="z-20 flex items-center order-1 bg-gold shadow-xl w-8 h-8 rounded-full hidden md:flex">
                    <h1 class="mx-auto font-semibold text-lg text-white font-serif">2</h1>
                </div>
                <div class="order-1 bg-white rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4" data-aos="fade-left">
                    <h3 class="mb-3 font-bold text-gold text-xl">Menjalin Hubungan</h3>
                    <p class="text-sm leading-snug tracking-wide text-gray-600">Setelah satu tahun mengenal, kami memutuskan untuk melangkah bersama dengan komitmen yang lebih serius.</p>
                </div>
            </div>
            
            <!-- Item 3 -->
            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-1 w-5/12 hidden md:block"></div>
                <div class="z-20 flex items-center order-1 bg-gold shadow-xl w-8 h-8 rounded-full hidden md:flex">
                    <h1 class="mx-auto font-semibold text-lg text-white font-serif">3</h1>
                </div>
                <div class="order-1 bg-white rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4" data-aos="fade-right">
                    <h3 class="mb-3 font-bold text-gold text-xl">Lamaran</h3>
                    <p class="text-sm leading-snug tracking-wide text-gray-600">Di bawah cahaya senja, janji suci diucapkan. Sebuah langkah besar untuk mengabadikan cinta kami dalam pernikahan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="section-padding bg-stone-100">
        <h2 class="text-4xl text-center text-gold mb-12 uppercase tracking-widest" data-aos="fade-down">Galeri Pre-Wedding</h2>
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square bg-gray-200 overflow-hidden rounded-lg" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80&w=2069&auto=format&fit=crop" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                </div>
                <div class="aspect-square bg-gray-200 overflow-hidden rounded-lg" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1546190255-451a91afc548?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                </div>
                <div class="aspect-square bg-gray-200 overflow-hidden rounded-lg" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1549417229-aa67d3263c09?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                </div>
                <div class="aspect-square bg-gray-200 overflow-hidden rounded-lg" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1510076857177-7470076d4098?q=80&w=1972&auto=format&fit=crop" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                </div>
            </div>
        </div>
    </section>

    <!-- RSVP Section -->
    <section id="rsvp" class="section-padding max-w-3xl mx-auto px-4">
        <div class="bg-white p-8 md:p-12 rounded-3xl shadow-2xl border border-gold/10" data-aos="fade-up">
            <h2 class="text-4xl text-center text-gold mb-8 uppercase tracking-widest">Konfirmasi Kehadiran</h2>
            
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 text-center">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('rsvp.store') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-sm font-bold uppercase tracking-widest mb-2">Nama Lengkap</label>
                    <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:border-gold">
                </div>
                <div>
                    <label class="block text-sm font-bold uppercase tracking-widest mb-2">Jumlah Tamu</label>
                    <select name="guests" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:border-gold">
                        <option value="1">1 Orang</option>
                        <option value="2">2 Orang</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-bold uppercase tracking-widest mb-2">Status Kehadiran</label>
                    <div class="flex space-x-4 mt-2">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="status" value="attending" checked class="accent-gold w-4 h-4">
                            <span>Hadir</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="status" value="not_attending" class="accent-gold w-4 h-4">
                            <span>Tidak Hadir</span>
                        </label>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold uppercase tracking-widest mb-2">Pesan/Ucapan</label>
                    <textarea name="message" rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:border-gold" placeholder="Tuliskan ucapan manis untuk mempelai..."></textarea>
                </div>
                <button type="submit" class="w-full btn-gold py-4 rounded-xl text-lg uppercase tracking-[0.2em] font-bold">Kirim Konfirmasi</button>
            </form>
        </div>
    </section>

    <!-- Dress Code & Special Notes -->
    <section class="section-padding bg-stone-100 italic text-center px-4">
        <div class="max-w-2xl mx-auto" data-aos="fade-up">
            <h2 class="text-3xl text-gold mb-6 uppercase tracking-widest not-italic">Informasi Tambahan</h2>
            <div class="space-y-6">
                <div>
                    <h3 class="text-xl font-bold not-italic mb-2">Dress Code</h3>
                    <p>Utamakan pakaian Formal / Tradisional dengan nuansa Putih atau Pastel.</p>
                </div>
                <div class="pt-6 border-t border-gold/20">
                    <h3 class="text-xl font-bold not-italic mb-2">Protokol Kesehatan</h3>
                    <p>Harap mematuhi protokol kesehatan demi keamanan dan kenyamanan bersama.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Closing Section -->
    <section class="section-padding text-center max-w-4xl mx-auto px-4" data-aos="fade-up">
        <h2 class="text-3xl text-gold mb-8 uppercase tracking-widest">Doa & Penutup</h2>
        <p class="text-xl italic leading-relaxed mb-12">
            "Atas kehadiran dan doa restu Bapak/Ibu/Saudara/i kami ucapkan terima kasih yang sebesar-besarnya. Semoga menjadi amal ibadah kita bersama."
        </p>
        <div class="flex justify-center space-x-6">
            <a href="#" class="text-gold hover:text-gray-600 transition-colors">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.058-1.281.072-1.689.072-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.058-1.69-.072-4.949-.072zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.209-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            </a>
            <a href="#" class="text-gold hover:text-gray-600 transition-colors">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
            </a>
        </div>
        <p class="mt-12 text-sm text-gray-400">© 2026 Crafted with ❤️ for Romeo & Juliet</p>
    </section>

    <!-- Music Player (Floating) -->
    <div class="fixed bottom-6 right-6 z-50">
        <button onclick="toggleMusic()" id="musicBtn" class="bg-gold text-white p-4 rounded-full shadow-2xl transition hover:scale-110 active:scale-95">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
        </button>
        <audio id="bgMusic" loop>
            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
        </audio>
    </div>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });

        let playing = false;
        const music = document.getElementById('bgMusic');
        const btn = document.getElementById('musicBtn');
        
        function toggleMusic() {
            if(playing) {
                music.pause();
                btn.classList.remove('animate-spin');
            } else {
                music.play();
                btn.classList.add('animate-spin');
            }
            playing = !playing;
        }

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>
