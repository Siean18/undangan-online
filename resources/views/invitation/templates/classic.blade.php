<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan - {{ $invitation->bride_name }} & {{ $invitation->groom_name }}</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- AOS (Animate on Scroll) -->
    <!-- Lightbox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
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
            color: {{ $invitation->theme_color }};
        }
        .bg-gold {
            background-color: {{ $invitation->theme_color }};
        }
        .border-gold {
            border-color: {{ $invitation->theme_color }};
        }
        .btn-gold {
            background-color: {{ $invitation->theme_color }};
            color: white;
            transition: all 0.3s ease;
        }
        .btn-gold:hover {
            opacity: 0.9;
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
        .left-timeline { border-left: 2px solid {{ $invitation->theme_color }}; }
        @media (min-width: 768px) {
            .left-timeline { border-left: none; }
        }
    </style>
</head>
<body class="overflow-x-hidden">

    <!-- Hero Section -->
    <section class="h-screen flex items-center justify-center relative overflow-hidden bg-cover bg-center" style="background-image: url('{{ $invitation->mainBackground ? asset('storage/' . $invitation->mainBackground->photo_path) : ($invitation->photos->first() ? asset('storage/' . $invitation->photos->first()->photo_path) : 'https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=2070&auto=format&fit=crop') }}');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center text-white px-4" data-aos="zoom-in" data-aos-duration="1500">
            <p class="text-xl uppercase tracking-[0.3em] mb-4">The Wedding of</p>
            <h1 class="text-6xl md:text-8xl mb-6">{{ $invitation->bride_name }} & {{ $invitation->groom_name }}</h1>
            <p class="text-2xl italic mb-8">{{ $invitation->event_date->format('d . m . Y') }}</p>
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
                <div class="w-48 h-48 rounded-full bg-stone-200 mx-auto mb-6 border-4 border-gold shadow-xl flex items-center justify-center overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($invitation->groom_name) }}&background=C5A059&color=fff" class="w-full">
                </div>
                <h3 class="text-3xl text-gold mb-2">{{ $invitation->groom_name }}</h3>
                <p class="text-sm uppercase tracking-widest mb-2 font-bold">Putra Dari:</p>
                <p>Keluarga Bapak & Ibu {{ $invitation->groom_name }}</p>
            </div>
            <div data-aos="fade-left">
                <div class="w-48 h-48 rounded-full bg-stone-200 mx-auto mb-6 border-4 border-gold shadow-xl flex items-center justify-center overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($invitation->bride_name) }}&background=C5A059&color=fff" class="w-full">
                </div>
                <h3 class="text-3xl text-gold mb-2">{{ $invitation->bride_name }}</h3>
                <p class="text-sm uppercase tracking-widest mb-2 font-bold">Putri Dari:</p>
                <p>Keluarga Bapak & Ibu {{ $invitation->bride_name }}</p>
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
                        <p class="font-bold uppercase tracking-widest">{{ $invitation->event_date->translatedFormat('l, d F Y') }}</p>
                        <p>Pukul {{ $invitation->akad_time }}</p>
                        <p class="border-t border-gold/20 pt-4">{{ $invitation->location_name }}</p>
                        <p class="text-sm mb-6">{{ $invitation->address }}</p>
                        @if($invitation->google_maps_link)
                            <a href="{{ $invitation->google_maps_link }}" target="_blank" class="btn-gold px-6 py-2 rounded-lg text-sm uppercase tracking-widest inline-block">Google Maps</a>
                        @endif
                    </div>
                </div>
                <!-- Resepsi -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border border-gold/20" data-aos="flip-right">
                    <h3 class="text-3xl text-gold mb-6">Resepsi</h3>
                    <div class="space-y-4 text-lg">
                        <p class="font-bold uppercase tracking-widest">{{ $invitation->event_date->translatedFormat('l, d F Y') }}</p>
                        <p>Pukul {{ $invitation->resepsi_time }}</p>
                        <p class="border-t border-gold/20 pt-4">{{ $invitation->location_name }}</p>
                        <p class="text-sm mb-6">{{ $invitation->address }}</p>
                        @if($invitation->google_maps_link)
                            <a href="{{ $invitation->google_maps_link }}" target="_blank" class="btn-gold px-6 py-2 rounded-lg text-sm uppercase tracking-widest inline-block">Google Maps</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    @if($invitation->preweddingPhotos->count() > 0)
    <section class="section-padding bg-white">
        <h2 class="text-4xl text-center text-gold mb-12 uppercase tracking-widest" data-aos="fade-down">Galeri Pre-Wedding</h2>
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($invitation->preweddingPhotos as $photo)
                    <a href="{{ asset('storage/' . $photo->photo_path) }}" class="glightbox aspect-square bg-gray-200 overflow-hidden rounded-lg block" data-aos="zoom-in" data-gallery="prewedding">
                        <img src="{{ asset('storage/' . $photo->photo_path) }}" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Gift Section -->
    @if($invitation->bank_accounts && count($invitation->bank_accounts) > 0)
    <section id="gift" class="section-padding bg-stone-100">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h2 class="text-3xl text-gold mb-12 uppercase tracking-widest" data-aos="fade-up">Wedding Gift</h2>
            <p class="mb-12 italic" data-aos="fade-up">Bagi bapak/ibu yang ingin mengirimkan hadiah digital sebagai tanda kasih, dapat melalui rekening berikut:</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($invitation->bank_accounts as $account)
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gold/10" data-aos="flip-up">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($account['bank_name']) }}&background=C5A059&color=fff&size=100" alt="Bank Logo" class="w-16 h-16 mx-auto mb-4 rounded-full">
                    <h3 class="text-xl font-bold text-stone-800">{{ $account['bank_name'] }}</h3>
                    <p class="text-2xl font-mono my-4">{{ $account['account_number'] }}</p>
                    <p class="text-stone-500">a.n {{ $account['account_name'] }}</p>
                    <button onclick="copyToClipboard('{{ $account['account_number'] }}')" class="mt-4 text-gold border border-gold px-4 py-1 rounded-full text-xs hover:bg-gold hover:text-white transition uppercase tracking-widest font-bold">Salin No. Rekening</button>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- RSVP Section -->
    <section id="rsvp" class="section-padding max-w-4xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Form RSVP -->
            <div class="bg-white p-8 md:p-10 rounded-3xl shadow-2xl border border-gold/10" data-aos="fade-right">
                <h2 class="text-3xl text-center text-gold mb-8 uppercase tracking-widest">Konfirmasi Kehadiran</h2>
                
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('rsvp.store', $invitation->id) }}" method="POST" class="space-y-6">
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

            <!-- List Pesan -->
            <div data-aos="fade-left">
                <h2 class="text-3xl text-gold mb-8 uppercase tracking-widest">Pesan & Doa</h2>
                <div class="space-y-4 max-h-[600px] overflow-y-auto pr-2 custom-scrollbar">
                    @foreach($rsvps as $rsvp)
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gold/5">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-bold text-stone-800">{{ $rsvp->name }}</h4>
                                <span class="text-xs text-stone-400">{{ $rsvp->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-stone-600 italic">"{{ $rsvp->message ?? 'Selamat berbahagia!' }}"</p>
                            @if($rsvp->status == 'attending')
                                <span class="inline-block mt-3 px-3 py-1 bg-green-50 text-green-600 text-[10px] rounded-full uppercase tracking-tighter font-bold">Akan Hadir</span>
                            @endif
                        </div>
                    @endforeach

                    @if($rsvps->isEmpty())
                        <div class="text-center py-12 text-stone-400">
                            <p>Belum ada pesan. Jadilah yang pertama memberikan ucapan!</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Closing Section -->
    <footer class="section-padding text-center max-w-4xl mx-auto px-4" data-aos="fade-up">
        <h2 class="text-3xl text-gold mb-8 uppercase tracking-widest">Doa & Penutup</h2>
        <p class="text-xl italic leading-relaxed mb-12">
            "Atas kehadiran dan doa restu Bapak/Ibu/Saudara/i kami ucapkan terima kasih yang sebesar-besarnya. Semoga menjadi amal ibadah kita bersama."
        </p>

        @if($invitation->social_links)
        <div class="flex justify-center space-x-6 mb-12">
            @if(isset($invitation->social_links['instagram']))
                <a href="{{ $invitation->social_links['instagram'] }}" target="_blank" class="text-stone-400 hover:text-gold transition">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c.796 0 1.441.645 1.441 1.44s-.645 1.44-1.441 1.44c-.795 0-1.439-.645-1.439-1.44s.644-1.44 1.439-1.44z"/></svg>
                </a>
            @endif
        </div>
        @endif

        <p class="mt-12 text-sm text-gray-400">© 2026 Crafted with ❤️ using UndangKuy</p>
    </footer>

    <!-- Music Player (Floating) -->
    @if($invitation->bg_music_path)
    <div class="fixed bottom-6 right-6 z-50">
        <button onclick="toggleMusic()" id="musicBtn" class="bg-gold text-white p-4 rounded-full shadow-2xl transition hover:scale-110 active:scale-95">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
        </button>
        <audio id="bgMusic" loop>
            <source src="{{ asset('storage/' . $invitation->bg_music_path) }}" type="audio/mpeg">
        </audio>
    </div>
    @endif

    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });

        const lightbox = GLightbox({
            selector: '.glightbox'
        });

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(() => {
                alert('No. Rekening berhasil disalin!');
            });
        }

        let playing = false;
        const music = document.getElementById('bgMusic');
        const btn = document.getElementById('musicBtn');
        
        function toggleMusic() {
            if(!music) return;
            if(playing) {
                music.pause();
                btn.classList.remove('animate-spin');
            } else {
                music.play();
                btn.classList.add('animate-spin');
            }
            playing = !playing;
        }

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
