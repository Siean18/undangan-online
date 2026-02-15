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
    <!-- Lightbox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #ffffff;
            color: #1a1a1a;
        }
        h1, h2, h3, .serif {
            font-family: 'Playfair Display', serif;
        }
        .text-accent {
            color: {{ $invitation->theme_color }};
        }
        .bg-accent {
            background-color: {{ $invitation->theme_color }};
        }
        .border-accent {
            border-color: {{ $invitation->theme_color }};
        }
        .btn-accent {
            background-color: #1a1a1a;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-accent:hover {
            background-color: {{ $invitation->theme_color }};
            transform: translateY(-2px);
        }
        .section-padding {
            padding: 100px 20px;
        }
        .prewedding-grid {
            column-count: 2;
            column-gap: 1rem;
        }
        @media (min-width: 768px) {
            .prewedding-grid {
                column-count: 3;
            }
        }
        .prewedding-item {
            break-inside: avoid;
            margin-bottom: 1rem;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 2px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #d1d1d1;
        }
    </style>
</head>
<body class="overflow-x-hidden">

    <!-- Hero Section -->
    <section class="h-screen flex items-center justify-center relative overflow-hidden bg-cover bg-center" style="background-image: url('{{ $invitation->mainBackground ? asset('storage/' . $invitation->mainBackground->photo_path) : ($invitation->photos->first() ? asset('storage/' . $invitation->photos->first()->photo_path) : 'https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=2070&auto=format&fit=crop') }}');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center text-white px-4" data-aos="zoom-in" data-aos-duration="1500">
            <h2 class="text-xl uppercase tracking-[0.5em] mb-4">Wedding Of</h2>
            <h1 class="text-7xl md:text-9xl mb-8 serif">{{ $invitation->bride_name }} & {{ $invitation->groom_name }}</h1>
            <p class="text-3xl font-light mb-12">{{ $invitation->event_date->format('d . m . Y') }}</p>
            <a href="#opening" class="btn-accent px-10 py-4 rounded-full text-sm uppercase tracking-widest inline-block border border-white/20 backdrop-blur-sm">Open Invitation</a>
        </div>
    </section>

    <!-- Opening Section -->
    <section id="opening" class="section-padding text-center max-w-5xl mx-auto" data-aos="fade-up">
        <div class="mb-20">
            <h2 class="text-xs uppercase tracking-[0.5em] text-gray-400 mb-8 border-b border-gray-100 pb-4 inline-block">The Union</h2>
            <p class="text-2xl md:text-3xl leading-relaxed italic px-4 font-light text-gray-600">
                “Two souls but with a single thought, two hearts that beat as one.”
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 px-4 mt-20">
            <div data-aos="fade-up">
                <div class="aspect-[3/4] bg-gray-100 mx-auto mb-10 overflow-hidden grayscale hover:grayscale-0 transition duration-1000">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($invitation->groom_name) }}&background=1a1a1a&color=fff&size=500" class="w-full h-full object-cover">
                </div>
                <h3 class="text-4xl mb-4 serif">{{ $invitation->groom_name }}</h3>
                <p class="text-xs uppercase tracking-widest text-gray-400 mb-4 font-bold">The Groom</p>
                <div class="h-px w-12 bg-accent mx-auto mb-4"></div>
                <p class="text-sm text-gray-500">Son of Mr. & Mrs. {{ $invitation->groom_name }}</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="aspect-[3/4] bg-gray-100 mx-auto mb-10 overflow-hidden grayscale hover:grayscale-0 transition duration-1000">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($invitation->bride_name) }}&background=1a1a1a&color=fff&size=500" class="w-full h-full object-cover">
                </div>
                <h3 class="text-4xl mb-4 serif">{{ $invitation->bride_name }}</h3>
                <p class="text-xs uppercase tracking-widest text-gray-400 mb-4 font-bold">The Bride</p>
                <div class="h-px w-12 bg-accent mx-auto mb-4"></div>
                <p class="text-sm text-gray-500">Daughter of Mr. & Mrs. {{ $invitation->bride_name }}</p>
            </div>
        </div>
    </section>

    <!-- Event Detail Section -->
    <section class="section-padding bg-zinc-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-20">
                <h2 class="text-xs uppercase tracking-[0.5em] text-gray-400 mb-4">Information</h2>
                <h3 class="text-5xl serif">The Celebration</h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-px bg-gray-200 border border-gray-200">
                <div class="bg-white p-16 text-center" data-aos="fade-up">
                    <h3 class="text-2xl uppercase tracking-widest mb-10 text-gray-400">Holy Matrimony</h3>
                    <div class="space-y-6">
                        <p class="text-xl serif">{{ $invitation->event_date->translatedFormat('l, d F Y') }}</p>
                        <p class="text-lg font-light tracking-tighter">Starts at {{ $invitation->akad_time }}</p>
                        <div class="py-10">
                            <h4 class="font-bold text-gray-800 mb-2 uppercase text-xs tracking-widest">{{ $invitation->location_name }}</h4>
                            <p class="text-gray-500 text-sm leading-relaxed max-w-xs mx-auto">{{ $invitation->address }}</p>
                        </div>
                        @if($invitation->google_maps_link)
                            <a href="{{ $invitation->google_maps_link }}" target="_blank" class="btn-accent px-8 py-3 rounded-full text-xs uppercase tracking-widest inline-block">Maps Location</a>
                        @endif
                    </div>
                </div>
                <div class="bg-white p-16 text-center" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-2xl uppercase tracking-widest mb-10 text-gray-400">Wedding Reception</h3>
                    <div class="space-y-6">
                        <p class="text-xl serif">{{ $invitation->event_date->translatedFormat('l, d F Y') }}</p>
                        <p class="text-lg font-light tracking-tighter">Starts at {{ $invitation->resepsi_time }}</p>
                        <div class="py-10">
                            <h4 class="font-bold text-gray-800 mb-2 uppercase text-xs tracking-widest">{{ $invitation->location_name }}</h4>
                            <p class="text-gray-500 text-sm leading-relaxed max-w-xs mx-auto">{{ $invitation->address }}</p>
                        </div>
                        @if($invitation->google_maps_link)
                            <a href="{{ $invitation->google_maps_link }}" target="_blank" class="btn-accent px-8 py-3 rounded-full text-xs uppercase tracking-widest inline-block">Maps Location</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    @if($invitation->preweddingPhotos->count() > 0)
    <section class="section-padding">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-20">
                <h2 class="text-xs uppercase tracking-[0.5em] text-gray-400 mb-4">Gallery</h2>
                <h3 class="text-5xl serif">Pre-Wedding Moments</h3>
            </div>
            <div class="prewedding-grid">
                @foreach($invitation->preweddingPhotos as $photo)
                    <div class="prewedding-item" data-aos="fade-up">
                        <a href="{{ asset('storage/' . $photo->photo_path) }}" class="glightbox block overflow-hidden" data-gallery="prewedding">
                            <img src="{{ asset('storage/' . $photo->photo_path) }}" class="w-full grayscale hover:grayscale-0 transition duration-700">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Gift Section -->
    @if($invitation->bank_accounts && count($invitation->bank_accounts) > 0)
    <section id="gift" class="section-padding bg-zinc-900 text-white">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h2 class="text-xs uppercase tracking-[0.5em] text-zinc-500 mb-8">Wedding Gift</h2>
            <h3 class="text-5xl serif mb-10">Share The Love</h3>
            <p class="mb-20 font-light text-zinc-400">Your presence is our greatest gift, but if you wish to honor us with a gift, a contribution to our future together would be sincerely appreciated.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                @foreach($invitation->bank_accounts as $account)
                <div class="border border-zinc-800 p-12 hover:border-zinc-500 transition duration-500" data-aos="fade-up">
                    <p class="text-xs uppercase tracking-[0.3em] text-zinc-500 mb-6">{{ $account['bank_name'] }}</p>
                    <p class="text-3xl tracking-tighter mb-4 font-light">{{ $account['account_number'] }}</p>
                    <p class="text-zinc-500 italic mb-10">an. {{ $account['account_name'] }}</p>
                    <button onclick="copyToClipboard('{{ $account['account_number'] }}')" class="text-[10px] uppercase tracking-widest border border-zinc-700 px-6 py-2 hover:bg-white hover:text-black transition">Copy Account Number</button>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- RSVP Section -->
    <section id="rsvp" class="section-padding max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
            <!-- Form RSVP -->
            <div data-aos="fade-up">
                <h2 class="text-xs uppercase tracking-[0.5em] text-gray-400 mb-4">Reservation</h2>
                <h3 class="text-5xl serif mb-10">Will You Attend?</h3>
                
                @if(session('success'))
                    <div class="bg-zinc-900 text-white px-6 py-4 rounded mb-10 text-sm tracking-widest uppercase">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('rsvp.store', $invitation->id) }}" method="POST" class="space-y-8">
                    @csrf
                    <div class="border-b border-gray-200">
                        <label class="block text-[10px] uppercase tracking-widest text-gray-400 mb-2">FullName</label>
                        <input type="text" name="name" required class="w-full py-4 bg-transparent focus:outline-none text-xl font-light">
                    </div>
                    <div class="border-b border-gray-200">
                        <label class="block text-[10px] uppercase tracking-widest text-gray-400 mb-2">Guests Number</label>
                        <select name="guests" class="w-full py-4 bg-transparent focus:outline-none text-xl font-light appearance-none">
                            <option value="1">1 Person</option>
                            <option value="2">2 Persons</option>
                        </select>
                    </div>
                    <div class="py-4">
                        <label class="block text-[10px] uppercase tracking-widest text-gray-400 mb-6">Attendance Status</label>
                        <div class="flex space-x-10">
                            <label class="flex items-center space-x-3 cursor-pointer group">
                                <input type="radio" name="status" value="attending" checked class="accent-black w-4 h-4">
                                <span class="text-sm uppercase tracking-widest group-hover:text-accent transition">I'm Attending</span>
                            </label>
                            <label class="flex items-center space-x-3 cursor-pointer group">
                                <input type="radio" name="status" value="not_attending" class="accent-black w-4 h-4">
                                <span class="text-sm uppercase tracking-widest group-hover:text-accent transition">Regretfully Decline</span>
                            </label>
                        </div>
                    </div>
                    <div class="border-b border-gray-200">
                        <label class="block text-[10px] uppercase tracking-widest text-gray-400 mb-2">Wishes</label>
                        <textarea name="message" rows="1" class="w-full py-4 bg-transparent focus:outline-none text-xl font-light resize-none" placeholder="Leave a message..."></textarea>
                    </div>
                    <button type="submit" class="w-full btn-accent py-5 text-xs uppercase tracking-[0.3em] font-bold">Confirm Presence</button>
                </form>
            </div>

            <!-- List Pesan -->
            <div data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-xs uppercase tracking-[0.5em] text-gray-400 mb-4">Wishes</h2>
                <h3 class="text-5xl serif mb-10">Kind Words</h3>
                <div class="space-y-10 max-h-[600px] overflow-y-auto pr-6 custom-scrollbar">
                    @foreach($rsvps as $rsvp)
                        <div class="border-b border-gray-100 pb-10">
                            <div class="flex justify-between items-end mb-4">
                                <h4 class="text-xs uppercase tracking-widest font-bold">{{ $rsvp->name }}</h4>
                                <span class="text-[9px] uppercase tracking-widest text-gray-300">{{ $rsvp->created_at->format('M d, Y') }}</span>
                            </div>
                            <p class="text-xl font-light text-gray-600 leading-relaxed italic">"{{ $rsvp->message ?? 'Congratulations on your wedding!' }}"</p>
                        </div>
                    @endforeach

                    @if($rsvps->isEmpty())
                        <div class="text-center py-20 text-gray-300">
                            <p class="text-xs uppercase tracking-[0.3em]">Be the first to leave a wish</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="section-padding text-center" data-aos="fade-up">
        <div class="max-w-2xl mx-auto px-4">
            <h2 class="text-6xl serif mb-10">Thank You</h2>
            <p class="text-lg font-light text-gray-400 leading-relaxed mb-20 italic">
                "We are truly grateful for your Presence and Prayers. We cannot wait to see you on our Big Day."
            </p>

            @if($invitation->social_links)
            <div class="flex justify-center space-x-10 mb-20">
                @if(isset($invitation->social_links['instagram']))
                    <a href="https://instagram.com/{{ $invitation->social_links['instagram'] }}" target="_blank" class="text-gray-300 hover:text-black transition duration-500">
                        <span class="text-xs uppercase tracking-[0.3em]">Instagram</span>
                    </a>
                @endif
            </div>
            @endif

            <div class="h-px w-20 bg-gray-100 mx-auto mb-10"></div>
            <p class="text-[9px] uppercase tracking-[0.5em] text-gray-300">© 2026 Crafted with ❤️ using UndangKuy Studio</p>
        </div>
    </footer>

    <!-- Music Player (Floating) -->
    @if($invitation->bg_music_path)
    <div class="fixed bottom-6 right-6 z-50">
        <button onclick="toggleMusic()" id="musicBtn" class="bg-black text-white p-4 rounded-full shadow-2xl transition hover:scale-110 active:scale-95 border border-white/10">
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
                alert('Account number copied!');
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
