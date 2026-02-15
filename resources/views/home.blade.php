<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UndangKuy - Buat Undangan Digital Premium Anda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; }
        h1, h2 { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-stone-50 text-stone-900">
    <nav class="flex items-center justify-between p-6 max-w-7xl mx-auto">
        <div class="text-2xl font-bold text-stone-800 italic">UndangKuy</div>
        <div class="space-x-4">
            @auth
                <a href="{{ route('dashboard') }}" class="text-stone-600 hover:text-stone-900">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-stone-600 hover:text-stone-900">Masuk</a>
                <a href="{{ route('register') }}" class="bg-stone-800 text-white px-6 py-2 rounded-full hover:bg-stone-700">Daftar Sekarang</a>
            @endauth
        </div>
    </nav>

    <header class="py-24 text-center max-w-4xl mx-auto px-6">
        <h1 class="text-5xl md:text-7xl mb-8 leading-tight">Abadikan Momen Bahagia Anda dengan Undangan Digital Premium</h1>
        <p class="text-xl text-stone-600 mb-12">Buat undangan pernikahan yang elegan, responsif, dan mudah dibagikan hanya dalam hitungan menit.</p>
        <div class="flex flex-col md:flex-row items-center justify-center gap-4">
            <a href="{{ route('register') }}" class="w-full md:w-auto bg-stone-800 text-white px-10 py-4 rounded-full text-lg font-semibold hover:bg-stone-700 transition">Mulai Buat Gratis</a>
            <a href="#features" class="w-full md:w-auto border border-stone-300 px-10 py-4 rounded-full text-lg font-semibold hover:bg-stone-100 transition">Lihat Fitur</a>
        </div>
    </header>

    <section id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <div>
                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png" class="w-16 mx-auto mb-6" alt="Elegant">
                <h3 class="text-2xl mb-4">Desain Elegant</h3>
                <p class="text-stone-600">Berbagai pilihan tema premium yang dirancang khusus untuk pernikahan Anda.</p>
            </div>
            <div>
                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077041.png" class="w-16 mx-auto mb-6" alt="RSVP">
                <h3 class="text-2xl mb-4">Fitur RSVP</h3>
                <p class="text-stone-600">Kelola kehadiran tamu dengan mudah melalui dashboard interaktif.</p>
            </div>
            <div>
                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077053.png" class="w-16 mx-auto mb-6" alt="Photos">
                <h3 class="text-2xl mb-4">Galeri Foto & Musik</h3>
                <p class="text-stone-600">Tampilkan foto pre-wedding dan iringi undangan dengan musik pilihan.</p>
            </div>
        </div>
    </section>

    <footer class="py-12 border-t border-stone-200 text-center text-stone-500">
        <p>© 2026 UndangKuy. All rights reserved.</p>
    </footer>
</body>
</html>
