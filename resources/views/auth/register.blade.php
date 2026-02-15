<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - UndangKuy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-50 h-screen flex items-center justify-center">
    <div class="bg-white p-10 rounded-3xl shadow-xl w-full max-w-md border border-stone-100">
        <h2 class="text-3xl font-bold mb-8 text-center text-stone-800">Buat Akun Anda</h2>
        
        @if ($errors->any())
            <div class="bg-red-50 text-red-500 p-4 rounded-xl mb-6 text-sm">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Nama Lengkap</label>
                <input type="text" name="name" required value="{{ old('name') }}" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Email</label>
                <input type="email" name="email" required value="{{ old('email') }}" class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-600">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required class="w-full px-4 py-3 rounded-xl border border-stone-200 focus:outline-none focus:border-stone-800 transition">
            </div>
            <button type="submit" class="w-full bg-stone-800 text-white py-4 rounded-xl font-bold hover:bg-stone-700 transition shadow-lg">Daftar</button>
        </form>
        
        <p class="mt-8 text-center text-stone-500 text-sm">
            Sudah punya akun? <a href="{{ route('login') }}" class="text-stone-800 font-bold hover:underline">Masuk</a>
        </p>
    </div>
</body>
</html>
