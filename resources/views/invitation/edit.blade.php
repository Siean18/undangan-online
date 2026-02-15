<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Undangan - UndangKuy</title>
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
        <h1 class="text-4xl font-bold text-stone-800 mb-8 text-center">Edit Undangan</h1>

        <form action="{{ route('invitations.update', $invitation->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-10 rounded-3xl shadow-xl border border-stone-100 space-y-8">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Nama Mempelai Wanita</label>
                    <input type="text" name="bride_name" value="{{ $invitation->bride_name }}" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                    
                    <label class="block text-sm font-semibold mt-4 mb-2 text-stone-600">Foto Mempelai Wanita</label>
                    @if($invitation->bride_photo_path)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $invitation->bride_photo_path) }}" class="w-24 h-24 object-cover rounded-lg border border-stone-200">
                        </div>
                    @endif
                    <input type="file" name="bride_photo" class="w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-100 file:text-stone-700 hover:file:bg-stone-200 cursor-pointer">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Nama Mempelai Pria</label>
                    <input type="text" name="groom_name" value="{{ $invitation->groom_name }}" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                    
                    <label class="block text-sm font-semibold mt-4 mb-2 text-stone-600">Foto Mempelai Pria</label>
                    @if($invitation->groom_photo_path)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $invitation->groom_photo_path) }}" class="w-24 h-24 object-cover rounded-lg border border-stone-200">
                        </div>
                    @endif
                    <input type="file" name="groom_photo" class="w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-100 file:text-stone-700 hover:file:bg-stone-200 cursor-pointer">
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Slug / Link Undangan</label>
                <div class="flex items-center">
                    <span class="bg-stone-100 px-4 py-3 rounded-l-xl border border-r-0 border-stone-200 text-stone-500 text-sm">undang-kuy.id/v/</span>
                    <input type="text" name="slug" value="{{ $invitation->slug }}" required class="w-full px-4 py-3 rounded-r-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Tanggal Pernikahan</label>
                    <input type="date" name="event_date" value="{{ $invitation->event_date->format('Y-m-d') }}" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Waktu Akad</label>
                    <input type="text" name="akad_time" value="{{ $invitation->akad_time }}" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Waktu Resepsi</label>
                    <input type="text" name="resepsi_time" value="{{ $invitation->resepsi_time }}" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Nama Lokasi</label>
                <input type="text" name="location_name" value="{{ $invitation->location_name }}" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Alamat Lengkap</label>
                <textarea name="address" rows="3" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">{{ $invitation->address }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Link Google Maps</label>
                <input type="url" name="google_maps_link" value="{{ $invitation->google_maps_link }}" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Foto Background Utama</label>
                    @if($invitation->mainBackground)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $invitation->mainBackground->photo_path) }}" class="w-24 h-24 object-cover rounded-lg border border-stone-200">
                        </div>
                    @endif
                    <input type="file" name="main_bg" class="w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-100 file:text-stone-700 hover:file:bg-stone-200 cursor-pointer">
                    <p class="text-xs text-stone-400 mt-1">Foto ini akan tampil di bagian paling atas (Hero).</p>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2 text-stone-600">Lagu Background (MP3)</label>
                    @if($invitation->bg_music_path)
                        <p class="text-xs text-stone-500 mb-2">Lagu saat ini: {{ basename($invitation->bg_music_path) }}</p>
                    @endif
                    <input type="file" name="bg_music" accept="audio/mp3,audio/wav" class="w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-100 file:text-stone-700 hover:file:bg-stone-200 cursor-pointer">
                </div>
            </div>

            <!-- Template Selection -->
            <div>
                <label class="block text-sm font-semibold mb-4 text-stone-600">Pilih Template Undangan</label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="relative cursor-pointer">
                        <input type="radio" name="template" value="classic" {{ ($invitation->template ?? 'classic') == 'classic' ? 'checked' : '' }} class="peer sr-only">
                        <div class="p-4 rounded-xl border-2 border-stone-100 peer-checked:border-stone-800 peer-checked:bg-stone-50 transition">
                            <span class="block font-bold text-stone-800">Classic Gold</span>
                            <span class="text-xs text-stone-500">Desain elegan dengan sentuhan emas.</span>
                        </div>
                    </label>
                    <label class="relative cursor-pointer">
                        <input type="radio" name="template" value="modern" {{ ($invitation->template ?? '') == 'modern' ? 'checked' : '' }} class="peer sr-only">
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
                        <input type="text" name="social_links[instagram]" value="{{ $invitation->social_links['instagram'] ?? '' }}" placeholder="misal: anaani_wedding" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
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
                    @if($invitation->bank_accounts && count($invitation->bank_accounts) > 0)
                        @foreach($invitation->bank_accounts as $index => $account)
                        <div class="bank-account-item grid grid-cols-1 md:grid-cols-3 gap-4 p-4 bg-stone-50 rounded-2xl relative">
                            <input type="text" name="bank_accounts[{{ $index }}][bank_name]" value="{{ $account['bank_name'] }}" placeholder="Nama Bank" class="w-full px-4 py-2 rounded-lg border border-stone-200 text-sm">
                            <input type="text" name="bank_accounts[{{ $index }}][account_number]" value="{{ $account['account_number'] }}" placeholder="Nomor Rekening" class="w-full px-4 py-2 rounded-lg border border-stone-200 text-sm">
                            <input type="text" name="bank_accounts[{{ $index }}][account_name]" value="{{ $account['account_name'] }}" placeholder="Atas Nama" class="w-full px-4 py-2 rounded-lg border border-stone-200 text-sm">
                            @if($index > 0)
                                <button type="button" onclick="this.parentElement.remove()" class="absolute -top-2 -right-2 bg-red-500 text-white w-6 h-6 rounded-full text-xs">×</button>
                            @endif
                        </div>
                        @endforeach
                    @else
                        <div class="bank-account-item grid grid-cols-1 md:grid-cols-3 gap-4 p-4 bg-stone-50 rounded-2xl relative">
                            <input type="text" name="bank_accounts[0][bank_name]" placeholder="Nama Bank" class="w-full px-4 py-2 rounded-lg border border-stone-200 text-sm">
                            <input type="text" name="bank_accounts[0][account_number]" placeholder="Nomor Rekening" class="w-full px-4 py-2 rounded-lg border border-stone-200 text-sm">
                            <input type="text" name="bank_accounts[0][account_name]" placeholder="Atas Nama" class="w-full px-4 py-2 rounded-lg border border-stone-200 text-sm">
                        </div>
                    @endif
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Tambah Galeri Pre-Wedding (Bisa Pilih Banyak)</label>
                <div class="grid grid-cols-4 md:grid-cols-6 gap-2 mb-4">
                    @foreach($invitation->preweddingPhotos as $photo)
                        <div class="relative group">
                            <img src="{{ asset('storage/' . $photo->photo_path) }}" class="w-full aspect-square object-cover rounded-lg">
                        </div>
                    @endforeach
                </div>
                <input type="file" name="photos[]" multiple class="w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-stone-100 file:text-stone-700 hover:file:bg-stone-200 cursor-pointer">
            </div>

            <script>
                let bankAccountCount = {{ $invitation->bank_accounts ? count($invitation->bank_accounts) : 1 }};
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

            <button type="submit" class="w-full bg-stone-800 text-white py-4 rounded-xl font-bold hover:bg-stone-700 transition shadow-lg text-lg">Simpan Perubahan</button>
        </form>
    </main>
</body>
</html>
