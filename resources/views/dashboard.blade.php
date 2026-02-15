<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - UndangKuy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-50 min-h-screen">
    <nav class="bg-white border-b border-stone-200 p-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold italic text-stone-800">UndangKuy</div>
            <div class="flex items-center space-x-6">
                <span class="text-stone-600 font-semibold">{{ auth()->user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-red-500 text-sm font-bold hover:underline">Keluar</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-12 px-6">
        <div class="flex justify-between items-center mb-12">
            <h1 class="text-4xl font-bold text-stone-800">Undangan Saya</h1>
            <a href="{{ route('invitations.create') }}" class="bg-stone-800 text-white px-8 py-3 rounded-full font-bold hover:bg-stone-700 shadow-lg transition">Buat Undangan Baru</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-200 text-green-700 px-6 py-4 rounded-2xl mb-8">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($invitations as $invitation)
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-stone-100 hover:shadow-xl transition flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-stone-800 mb-2">{{ $invitation->bride_name }} & {{ $invitation->groom_name }}</h3>
                        <p class="text-stone-500 text-sm mb-4">{{ $invitation->event_date->format('d M Y') }}</p>
                        <div class="bg-stone-50 p-3 rounded-xl mb-6 truncate text-sm text-stone-600 font-mono">
                            {{ route('invitation.show', $invitation->slug) }}
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <a href="{{ route('invitation.show', $invitation->slug) }}" target="_blank" class="flex-1 text-center bg-stone-100 text-stone-800 py-3 rounded-xl font-bold hover:bg-stone-200 transition">Lihat</a>
                        <a href="{{ route('invitations.edit', $invitation->id) }}" class="flex-1 text-center border border-stone-200 text-stone-600 py-3 rounded-xl font-bold hover:bg-stone-50 transition">Edit</a>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-24 text-center text-stone-400">
                    <img src="https://cdn-icons-png.flaticon.com/512/7486/7486744.png" class="w-24 mx-auto mb-6 opacity-20" alt="Empty">
                    <p class="text-xl">Belum ada undangan yang dibuat.</p>
                </div>
            @endforelse
        </div>
    </main>
</body>
</html>
