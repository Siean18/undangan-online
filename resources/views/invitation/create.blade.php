<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Undangan - UndangKuy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-50 min-h-screen">
    <nav class="bg-white border-b border-stone-200 p-6">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-stone-600 hover:text-stone-900 font-semibold">← Kembali</a>
            <div class="text-xl font-bold italic text-stone-800">UndangKuy</div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto py-12 px-6">
        <h1 class="text-4xl font-bold text-stone-800 mb-8 text-center">Detail Undangan Pernikahan</h1>

        <form action="{{ route('invitations.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-10 rounded-3xl shadow-xl border border-stone-100 space-y-8">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Nama Mempelai Wanita</label>
                    <input type="text" name="bride_name" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                    <label class="block text-sm font-semibold mt-4 mb-2 text-stone-600">Foto Mempelai Wanita</label>
                    <input type="file" name="bride_photo" class="w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-100 file:text-stone-700 hover:file:bg-stone-200 cursor-pointer">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Nama Mempelai Pria</label>
                    <input type="text" name="groom_name" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                    <label class="block text-sm font-semibold mt-4 mb-2 text-stone-600">Foto Mempelai Pria</label>
                    <input type="file" name="groom_photo" class="w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-100 file:text-stone-700 hover:file:bg-stone-200 cursor-pointer">
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Slug / Link Undangan (Link Pernikahan)</label>
                <div class="flex items-center">
                    <span class="bg-stone-100 px-4 py-3 rounded-l-xl border border-r-0 border-stone-200 text-stone-500 text-sm">undang-kuy.id/v/</span>
                    <input type="text" name="slug" required placeholder="misal: romeo-juliet" class="w-full px-4 py-3 rounded-r-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                </div>
                <p class="text-xs text-stone-400 mt-2">Gunakan huruf kecil, angka, dan tanda hubung saja.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Tanggal Pernikahan</label>
                    <input type="date" name="event_date" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Waktu Akad</label>
                    <input type="text" name="akad_time" placeholder="misal: 08:00 - selesai" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Waktu Resepsi</label>
                    <input type="text" name="resepsi_time" placeholder="misal: 11:00 - selesai" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Nama Lokasi</label>
                <input type="text" name="location_name" placeholder="misal: Hotel Mulia" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Alamat Lengkap</label>
                <textarea name="address" rows="3" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition"></textarea>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Link Google Maps</label>
                <input type="url" name="google_maps_link" placeholder="https://maps.app.goo.gl/..." class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Foto Background Utama</label>
                    <input type="file" name="main_bg" class="w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-100 file:text-stone-700 hover:file:bg-stone-200 cursor-pointer">
                    <p class="text-xs text-stone-400 mt-1">Foto ini akan tampil di bagian paling atas (Hero).</p>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Lagu Background (MP3)</label>
                    <input type="file" name="bg_music" accept="audio/mp3,audio/wav" class="w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-100 file:text-stone-700 hover:file:bg-stone-200 cursor-pointer">
                </div>
            </div>

            <!-- Template Selection -->
            <div>
                <label class="block text-sm font-semibold mb-4 text-stone-600">Pilih Template Undangan</label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="relative cursor-pointer">
                        <input type="radio" name="template" value="classic" checked class="peer sr-only">
                        <div class="p-4 rounded-xl border-2 border-stone-100 peer-checked:border-stone-800 peer-checked:bg-stone-50 transition">
                            <span class="block font-bold text-stone-800">Classic Gold</span>
                            <span class="text-xs text-stone-500">Desain elegan dengan sentuhan emas.</span>
                        </div>
                    </label>
                    <label class="relative cursor-pointer">
                        <input type="radio" name="template" value="modern" class="peer sr-only">
                        <div class="p-4 rounded-xl border-2 border-stone-100 peer-checked:border-stone-800 peer-checked:bg-stone-50 transition">
                            <span class="block font-bold text-stone-800">Modern Minimalist</span>
                            <span class="text-xs text-stone-500">Bersih, modern, dan fokus pada konten.</span>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Social Media -->
            <div class="space-y-4">
                <h3 class="font-bold text-stone-800">Media Sosial</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-sm font-semibold mb-2 text-stone-600">Username Instagram (tanpa @)</label>
                        <input type="text" name="social_links[instagram]" placeholder="misal: anaani_wedding" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                    </div>
                </div>
            </div>

            <!-- Bank Accounts (Repeater) -->
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <h3 class="font-bold text-stone-800">Rekening Bank (Kado Digital)</h3>
                    <button type="button" onclick="addBankAccount()" class="text-xs bg-stone-100 px-3 py-1 rounded-full text-stone-600 hover:bg-stone-200">+ Tambah Rekening</button>
                </div>
                <div id="bank-accounts-container" class="space-y-4">
                    <div class="bank-account-item grid grid-cols-1 md:grid-cols-3 gap-4 p-4 bg-stone-50 rounded-2xl relative">
                        <input type="text" name="bank_accounts[0][bank_name]" placeholder="Nama Bank (misal: BCA)" class="w-full px-4 py-2 rounded-lg border border-stone-200 text-sm">
                        <input type="text" name="bank_accounts[0][account_number]" placeholder="Nomor Rekening" class="w-full px-4 py-2 rounded-lg border border-stone-200 text-sm">
                        <input type="text" name="bank_accounts[0][account_name]" placeholder="Atas Nama" class="w-full px-4 py-2 rounded-lg border border-stone-200 text-sm">
                    </div>
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Galeri Pre-Wedding (Bisa Pilih Banyak)</label>
                <input type="file" name="photos[]" multiple class="w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-100 file:text-stone-700 hover:file:bg-stone-200 cursor-pointer">
            </div>

            <script>
                let bankAccountCount = 1;
                function addBankAccount() {
                    const container = document.getElementById('bank-accounts-container');
                    const div = document.createElement('div');
                    div.className = 'bank-account-item grid grid-cols-1 md:grid-cols-3 gap-4 p-4 bg-stone-50 rounded-2xl relative';
                    div.innerHTML = `
                        <input type="text" name="bank_accounts[${bankAccountCount}][bank_name]" placeholder="Nama Bank" class="w-full px-4 py-2 rounded-lg border border-stone-200 text-sm">
                        <input type="text" name="bank_accounts[${bankAccountCount}][account_number]" placeholder="Nomor Rekening" class="w-full px-4 py-2 rounded-lg border border-stone-200 text-sm">
                        <input type="text" name="bank_accounts[${bankAccountCount}][account_name]" placeholder="Atas Nama" class="w-full px-4 py-2 rounded-lg border border-stone-200 text-sm">
                        <button type="button" onclick="this.parentElement.remove()" class="absolute -top-2 -right-2 bg-red-500 text-white w-6 h-6 rounded-full text-xs">×</button>
                    `;
                    container.appendChild(div);
                    bankAccountCount++;
                }
            </script>

            <button type="submit" class="w-full bg-stone-800 text-white py-4 rounded-xl font-bold hover:bg-stone-700 transition shadow-lg text-lg">Buat Undangan Sekarang</button>
        </form>
    </main>
</body>
</html>
