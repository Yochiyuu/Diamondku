<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up {{ $category->name }} - DiamondKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-[#020202] text-white antialiased">

    <nav class="p-6 border-b border-white/5 mb-8">
        <div class="container mx-auto max-w-5xl">
            <a href="/" class="text-emerald-400 font-bold hover:text-emerald-300 transition-colors">
                ⬅ Kembali ke Beranda
            </a>
        </div>
    </nav>

    <main class="container mx-auto px-6 max-w-5xl">
        <div class="flex items-center gap-6 mb-10 glass-card p-6 rounded-2xl border border-white/5">
            <img src="{{ asset('images/' . $category->image_url) }}" alt="{{ $category->name }}"
                class="w-24 h-24 rounded-xl object-cover">
            <div>
                <h1 class="text-3xl font-bold mb-1">{{ $category->name }}</h1>
                <p class="text-gray-400 text-sm">Pilih nominal top up dan masukkan data akun Anda.</p>
            </div>
        </div>

        <h2 class="text-xl font-bold mb-4 flex items-center gap-2">
            <span
                class="bg-emerald-500 text-black w-8 h-8 flex items-center justify-center rounded-full text-sm">1</span>
            Pilih Nominal
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-10">
            @forelse($category->products as $product)
                <div
                    class="border border-white/10 rounded-xl p-4 hover:border-emerald-500 cursor-pointer transition-all bg-[#0a0a0a] hover:bg-emerald-900/10">
                    <h3 class="font-bold text-lg text-white mb-1">{{ $product->name }}</h3>
                    <p class="text-emerald-400 font-semibold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                </div>
            @empty
                <div
                    class="col-span-full p-4 border border-dashed border-white/20 rounded-xl text-center text-gray-500">
                    Belum ada pilihan diamond untuk game ini.
                </div>
            @endforelse
        </div>

    </main>
</body>

</html>
