<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>DiamondKu - Top Up Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="antialiased selection:bg-emerald-500 selection:text-black overflow-x-hidden relative">

    <div class="blob bg-emerald-600 w-72 h-72 md:w-96 md:h-96 rounded-full top-0 left-[-50px] md:left-0 absolute -z-10">
    </div>
    <div
        class="blob bg-teal-900 w-[300px] h-[300px] md:w-[500px] md:h-[500px] rounded-full top-40 right-[-50px] md:right-0 opacity-20 absolute -z-10">
    </div>

    <nav class="fixed w-full top-0 z-50 glass-nav py-4">
        <div class="container mx-auto px-4 md:px-6 max-w-7xl flex justify-between items-center">
            <a href="/"
                class="text-xl md:text-2xl font-extrabold tracking-tighter flex items-center gap-1 md:gap-2">
                Diamond<span class="text-emerald-400 inline -ml-1">Ku</span>
            </a>

            <div class="hidden md:flex space-x-8 text-sm font-medium text-gray-400">
                <a href="/" class="text-white hover:text-emerald-400 transition-colors">Beranda</a>
                <a href="#games" class="hover:text-emerald-400 transition-colors">Games</a>
                <a href="/track-order" class="hover:text-emerald-400 transition-colors">Track Order</a>
            </div>

            <div class="flex items-center gap-3 md:gap-5">
                <a href="/login" class="text-xs md:text-sm font-medium text-gray-400 hover:text-white transition">Sign
                    In</a>
                <a href="/register"
                    class="text-xs md:text-sm font-semibold bg-white text-black px-4 py-2 md:px-6 md:py-2.5 rounded-full hover:bg-emerald-400 hover:shadow-[0_0_20px_rgba(52,211,153,0.4)] transition-all duration-300 transform hover:-translate-y-0.5">Daftar</a>
            </div>
        </div>
    </nav>

    <main class="relative z-10 pt-24 md:pt-28 pb-10 md:pb-16 px-4 md:px-6">
        <div class="container mx-auto max-w-7xl">

            <section class="mb-12 md:mb-16 relative">
                <div
                    class="relative w-full rounded-2xl md:rounded-3xl overflow-hidden glass-card border border-white/5 shadow-[0_0_30px_rgba(0,0,0,0.4)] group">

                    <div id="slider-track"
                        class="flex transition-transform duration-700 ease-in-out w-[300%] h-[300px] sm:h-[350px] md:h-[450px]">

                        <div class="w-1/3 h-full relative overflow-hidden group">
                            <img src="{{ asset('images/mobile_legends_banner.jpg') }}" alt="Banner Promo"
                                class="absolute inset-0 w-full h-full object-cover object-top transition-transform duration-1000 group-hover:scale-105">

                            <div
                                class="absolute inset-0 bg-gradient-to-r from-[#050505] via-[#050505]/80 to-transparent">
                            </div>

                            <div
                                class="relative z-10 h-full flex flex-col justify-center p-6 sm:p-10 md:p-16 w-full md:w-2/3">
                                <h1
                                    class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight leading-tight mb-2 md:mb-4 drop-shadow-lg">
                                    Mobile Legends <br />
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-300">Diskon
                                        20% Hari Ini.</span>
                                </h1>
                                <a href="#games"
                                    class="inline-flex items-center gap-2 px-6 py-3 md:px-8 md:py-3.5 bg-emerald-500 hover:bg-emerald-400 text-black font-bold rounded-full transition-all transform hover:scale-105 shadow-[0_0_15px_rgba(52,211,153,0.3)] text-xs md:text-sm w-max mt-3 md:mt-4">
                                    Top Up Sekarang ➔
                                </a>
                            </div>
                        </div>

                        <div class="w-1/3 h-full relative overflow-hidden group">
                            <img src="{{ asset('images/valorant_banner.jpg') }}" alt="Banner Promo"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-[#050505] via-[#050505]/80 to-transparent">
                            </div>

                            <div
                                class="relative z-10 h-full flex flex-col justify-center p-6 sm:p-10 md:p-16 w-full md:w-2/3">
                                <h1
                                    class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight leading-tight mb-2 md:mb-4 drop-shadow-lg">
                                    Valorant Points <br />
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-cyan-300">Bonus
                                        VP Tiap Pembelian.</span>
                                </h1>
                                <a href="#games"
                                    class="inline-flex items-center gap-2 px-6 py-3 md:px-8 md:py-3.5 bg-teal-500 hover:bg-teal-400 text-black font-bold rounded-full transition-all transform hover:scale-105 shadow-[0_0_15px_rgba(20,184,166,0.3)] text-xs md:text-sm w-max mt-3 md:mt-4">
                                    Klaim Bonus ➔
                                </a>
                            </div>
                        </div>

                        <div class="w-1/3 h-full relative overflow-hidden group">
                            <img src="{{ asset('images/free_fire.jpg') }}" alt="Banner Promo"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-[#050505] via-[#050505]/80 to-transparent">
                            </div>

                            <div
                                class="relative z-10 h-full flex flex-col justify-center p-6 sm:p-10 md:p-16 w-full md:w-2/3">
                                <h1
                                    class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight leading-tight mb-2 md:mb-4 drop-shadow-lg">
                                    Free Fire <br />
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-emerald-300">Ekstra
                                        Diamond 50%.</span>
                                </h1>
                                <a href="#games"
                                    class="inline-flex items-center gap-2 px-6 py-3 md:px-8 md:py-3.5 bg-green-500 hover:bg-green-400 text-black font-bold rounded-full transition-all transform hover:scale-105 shadow-[0_0_15px_rgba(34,197,94,0.3)] text-xs md:text-sm w-max mt-3 md:mt-4">
                                    Borong Sekarang ➔
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="absolute bottom-4 md:bottom-6 left-1/2 transform -translate-x-1/2 flex gap-2 z-20">
                        <button
                            class="slider-dot w-6 h-1.5 md:w-8 md:h-2 rounded-full bg-emerald-500 shadow-[0_0_10px_#10b981] transition-all duration-300"
                            data-index="0"></button>
                        <button
                            class="slider-dot w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-white/30 hover:bg-white/50 transition-all duration-300"
                            data-index="1"></button>
                        <button
                            class="slider-dot w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-white/30 hover:bg-white/50 transition-all duration-300"
                            data-index="2"></button>
                    </div>

                </div>
            </section>

            <section id="games" class="mb-12 md:mb-16">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-6 md:mb-8 gap-4">
                    <div>
                        <h2 class="text-2xl md:text-4xl font-bold tracking-tight mb-1 md:mb-2">Pilih Game Favoritmu</h2>
                        <p class="text-gray-500 text-sm md:text-lg">Jelajahi judul game populer dan temukan penawaran
                            terbaik.</p>
                    </div>

                    <div class="flex items-center gap-4 w-full md:w-auto justify-between md:justify-end">
                        <div
                            class="glass-card px-4 md:px-5 py-2 md:py-2.5 rounded-full flex gap-2 md:gap-3 items-center w-full md:w-auto border border-white/5 shadow-[0_0_10px_rgba(0,0,0,0.3)]">
                            <span class="text-gray-600 text-sm">🔍</span>
                            <input type="text" placeholder="Cari game..."
                                class="bg-transparent text-xs md:text-sm text-gray-400 outline-none w-full md:w-56 placeholder:text-gray-600">
                        </div>
                    </div>
                </div>

                @php
                    $games = $categories
                        ->filter(function ($item) {
                            return strtolower(trim($item->type)) !== 'membership';
                        })
                        ->values();

                    $half = ceil($games->count() > 0 ? $games->count() / 2 : 0);
                    $gamesRow1 = $games->take($half);
                    $gamesRow2 = $games->skip($half);
                @endphp

                <div class="relative group mb-4 md:mb-6">
                    <button id="slide-left-1"
                        class="absolute -left-2 md:-left-5 top-[45%] -translate-y-1/2 z-20 bg-[#0a0a0a]/80 backdrop-blur-sm border border-white/10 hover:border-emerald-500 hover:bg-emerald-900/40 text-white w-8 h-8 md:w-12 md:h-12 rounded-full flex items-center justify-center transition-all shadow-[0_0_15px_rgba(0,0,0,0.8)] opacity-100 md:opacity-0 group-hover:opacity-100">
                        ❮
                    </button>

                    <div id="game-slider-1"
                        class="grid grid-rows-1 grid-flow-col gap-4 md:gap-6 overflow-x-auto snap-x snap-mandatory pb-4 auto-cols-[140px] md:auto-cols-[220px] scroll-smooth [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">

                        @forelse ($gamesRow1 as $category)
                            <a href="/product/{{ $category->slug }}"
                                class="glass-card snap-start rounded-2xl p-3 md:p-4 group/card cursor-pointer hover:-translate-y-2 hover:border-emerald-500/50 hover:bg-emerald-900/10 transition-all duration-300 relative overflow-hidden flex flex-col h-full border border-white/5 shadow-[0_0_10px_rgba(0,0,0,0.3)]">
                                <div
                                    class="aspect-[4/5] rounded-xl bg-[#0a0a0a] mb-3 md:mb-5 overflow-hidden relative border border-white/5">
                                    <img src="{{ asset('images/' . $category->image_url) }}" alt="{{ $category->name }}"
                                        class="w-full h-full object-cover object-top group-hover/card:scale-110 transition-transform duration-500">
                                </div>
                                <div class="mt-auto">
                                    <h3
                                        class="font-bold text-sm md:text-lg text-white group-hover/card:text-emerald-400 transition-colors leading-tight mb-1 md:mb-2 tracking-tight line-clamp-1">
                                        {{ $category->name }}</h3>
                                    <div class="flex items-center justify-between mt-1 md:mt-2">
                                        <p
                                            class="text-[10px] md:text-xs text-gray-500 flex items-center gap-1 md:gap-1.5 font-medium">
                                            <span
                                                class="w-1.5 h-1.5 rounded-full bg-emerald-500 status-glow shadow-[0_0_5px_#10b981]"></span>
                                            Active
                                        </p>
                                        <span
                                            class="text-[10px] md:text-xs text-emerald-400 opacity-0 group-hover/card:opacity-100 transition-opacity font-bold tracking-wider">TOP
                                            UP ➔</span>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div
                                class="col-span-full glass-card rounded-3xl p-10 md:p-16 text-center border border-dashed border-white/10 mt-6 md:mt-10 w-full min-w-[250px] md:min-w-[300px]">
                                <div class="text-4xl md:text-5xl mb-4 md:mb-6 opacity-30">🕹️</div>
                                <h3 class="text-xl md:text-2xl font-bold mb-2 text-gray-300">Belum ada data game</h3>
                                <p class="text-xs md:text-sm text-gray-500">Jalankan database seeder untuk menampilkan
                                    katalog produk.</p>
                            </div>
                        @endforelse
                    </div>

                    <button id="slide-right-1"
                        class="absolute -right-2 md:-right-5 top-[45%] -translate-y-1/2 z-20 bg-[#0a0a0a]/80 backdrop-blur-sm border border-white/10 hover:border-emerald-500 hover:bg-emerald-900/40 text-white w-8 h-8 md:w-12 md:h-12 rounded-full flex items-center justify-center transition-all shadow-[0_0_15px_rgba(0,0,0,0.8)] opacity-100 md:opacity-0 group-hover:opacity-100">
                        ❯
                    </button>
                </div>

                @if ($gamesRow2->count() > 0)
                    <div class="relative group">
                        <button id="slide-left-2"
                            class="absolute -left-2 md:-left-5 top-[45%] -translate-y-1/2 z-20 bg-[#0a0a0a]/80 backdrop-blur-sm border border-white/10 hover:border-emerald-500 hover:bg-emerald-900/40 text-white w-8 h-8 md:w-12 md:h-12 rounded-full flex items-center justify-center transition-all shadow-[0_0_15px_rgba(0,0,0,0.8)] opacity-100 md:opacity-0 group-hover:opacity-100">
                            ❮
                        </button>

                        <div id="game-slider-2"
                            class="grid grid-rows-1 grid-flow-col gap-4 md:gap-6 overflow-x-auto snap-x snap-mandatory pb-4 auto-cols-[140px] md:auto-cols-[220px] scroll-smooth [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">

                            @foreach ($gamesRow2 as $category)
                                <a href="/product/{{ $category->slug }}"
                                    class="glass-card snap-start rounded-2xl p-3 md:p-4 group/card cursor-pointer hover:-translate-y-2 hover:border-emerald-500/50 hover:bg-emerald-900/10 transition-all duration-300 relative overflow-hidden flex flex-col h-full border border-white/5 shadow-[0_0_10px_rgba(0,0,0,0.3)]">
                                    <div
                                        class="aspect-[4/5] rounded-xl bg-[#0a0a0a] mb-3 md:mb-5 overflow-hidden relative border border-white/5">
                                        <img src="{{ asset('images/' . $category->image_url) }}"
                                            alt="{{ $category->name }}"
                                            class="w-full h-full object-cover object-top group-hover/card:scale-110 transition-transform duration-500">
                                    </div>
                                    <div class="mt-auto">
                                        <h3
                                            class="font-bold text-sm md:text-lg text-white group-hover/card:text-emerald-400 transition-colors leading-tight mb-1 md:mb-2 tracking-tight line-clamp-1">
                                            {{ $category->name }}</h3>
                                        <div class="flex items-center justify-between mt-1 md:mt-2">
                                            <p
                                                class="text-[10px] md:text-xs text-gray-500 flex items-center gap-1 md:gap-1.5 font-medium">
                                                <span
                                                    class="w-1.5 h-1.5 rounded-full bg-emerald-500 status-glow shadow-[0_0_5px_#10b981]"></span>
                                                Active
                                            </p>
                                            <span
                                                class="text-[10px] md:text-xs text-emerald-400 opacity-0 group-hover/card:opacity-100 transition-opacity font-bold tracking-wider">TOP
                                                UP ➔</span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                        <button id="slide-right-2"
                            class="absolute -right-2 md:-right-5 top-[45%] -translate-y-1/2 z-20 bg-[#0a0a0a]/80 backdrop-blur-sm border border-white/10 hover:border-emerald-500 hover:bg-emerald-900/40 text-white w-8 h-8 md:w-12 md:h-12 rounded-full flex items-center justify-center transition-all shadow-[0_0_15px_rgba(0,0,0,0.8)] opacity-100 md:opacity-0 group-hover:opacity-100">
                            ❯
                        </button>
                    </div>
                @endif
            </section>

            <section id="memberships" class="mb-12 md:mb-16">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-6 md:mb-10 gap-4">
                    <div>
                        <h2 class="text-2xl md:text-4xl font-bold tracking-tight mb-1 md:mb-2">Streaming & Membership
                        </h2>
                        <p class="text-gray-500 text-sm md:text-lg">Berlangganan aplikasi hiburan favoritmu dengan
                            harga terbaik.</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 md:gap-6">
                    @php
                        $memberships = $categories->filter(function ($item) {
                            return strtolower(trim($item->type)) === 'membership';
                        });
                    @endphp

                    @forelse ($memberships as $category)
                        <a href="/product/{{ $category->slug }}"
                            class="glass-card rounded-2xl p-3 md:p-4 group cursor-pointer hover:-translate-y-2 hover:border-emerald-500/50 hover:bg-emerald-900/10 transition-all duration-300 relative overflow-hidden flex flex-col h-full border border-white/5 shadow-[0_0_10px_rgba(0,0,0,0.3)]">
                            <div
                                class="aspect-square rounded-xl bg-[#0a0a0a] mb-3 md:mb-5 overflow-hidden relative border border-white/5">
                                <img src="{{ asset('images/' . $category->image_url) }}" alt="{{ $category->name }}"
                                    class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="mt-auto">
                                <h3
                                    class="font-bold text-sm md:text-lg text-white group-hover:text-emerald-400 transition-colors leading-tight mb-1 md:mb-2 tracking-tight line-clamp-1">
                                    {{ $category->name }}</h3>
                                <div class="flex items-center justify-between mt-1 md:mt-2">
                                    <p
                                        class="text-[10px] md:text-xs text-gray-500 flex items-center gap-1 md:gap-1.5 font-medium">
                                        <span
                                            class="w-1.5 h-1.5 rounded-full bg-emerald-500 status-glow shadow-[0_0_5px_#10b981]"></span>
                                        Active
                                    </p>
                                    <span
                                        class="text-[10px] md:text-xs text-emerald-400 opacity-0 group-hover:opacity-100 transition-opacity font-bold tracking-wider">BELI
                                        ➔</span>
                                </div>
                            </div>
                        </a>
                    @empty
                        <div
                            class="col-span-full glass-card rounded-3xl p-10 md:p-16 text-center border border-dashed border-white/10 mt-6 md:mt-10">
                            <div class="text-4xl md:text-5xl mb-4 md:mb-6 opacity-30">🎟️</div>
                            <h3 class="text-xl md:text-2xl font-bold mb-2 text-gray-300">Belum ada data membership</h3>
                            <p class="text-xs md:text-sm text-gray-500">Jalankan database seeder untuk menampilkan
                                katalog produk.</p>
                        </div>
                    @endforelse
                </div>
            </section>

        </div>
    </main>

    <footer
        class="border-t border-white/5 pt-12 md:pt-20 pb-8 md:pb-10 px-4 md:px-6 mt-12 md:mt-20 relative z-10 bg-[#020202]">
        <div class="container mx-auto max-w-7xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 md:gap-8 mb-12 md:mb-16">

                <div class="col-span-1 sm:col-span-2 md:col-span-2">
                    <a href="/" class="flex items-center gap-2 mb-4 md:mb-6 w-max">
                        <span
                            class="w-7 h-7 md:w-8 md:h-8 rounded-lg bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-black text-xs md:text-sm font-bold shadow-[0_0_15px_rgba(52,211,153,0.3)]">✦</span>
                        <span class="font-extrabold tracking-tighter text-xl md:text-2xl text-white">Diamond<span
                                class="text-emerald-400">Ku</span></span>
                    </a>
                    <p class="text-gray-400 text-xs md:text-sm leading-relaxed max-w-sm mb-6 font-light">
                        Platform penyedia layanan top up game dan voucher digital termurah, tercepat, dan terpercaya di
                        Indonesia. Sistem otomatis 24 jam untuk kepuasan gaming Anda.
                    </p>
                    <div class="flex gap-3">
                        <a href="#"
                            class="w-9 h-9 md:w-10 md:h-10 rounded-full glass-card flex items-center justify-center text-gray-400 hover:text-emerald-400 hover:border-emerald-500/50 hover:shadow-[0_0_15px_rgba(52,211,153,0.2)] transition-all text-sm">IG</a>
                        <a href="#"
                            class="w-9 h-9 md:w-10 md:h-10 rounded-full glass-card flex items-center justify-center text-gray-400 hover:text-emerald-400 hover:border-emerald-500/50 hover:shadow-[0_0_15px_rgba(52,211,153,0.2)] transition-all text-sm">FB</a>
                        <a href="#"
                            class="w-9 h-9 md:w-10 md:h-10 rounded-full glass-card flex items-center justify-center text-gray-400 hover:text-emerald-400 hover:border-emerald-500/50 hover:shadow-[0_0_15px_rgba(52,211,153,0.2)] transition-all text-sm">TT</a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-4 md:mb-6 tracking-wide uppercase text-xs md:text-sm">Pintasan
                    </h4>
                    <ul class="space-y-3 md:space-y-4 text-xs md:text-sm text-gray-400 font-medium">
                        <li><a href="/"
                                class="hover:text-emerald-400 hover:translate-x-1 transition-all inline-block">Beranda</a>
                        </li>
                        <li><a href="#games"
                                class="hover:text-emerald-400 hover:translate-x-1 transition-all inline-block">Daftar
                                Game</a></li>
                        <li><a href="/track-order"
                                class="hover:text-emerald-400 hover:translate-x-1 transition-all inline-block">Lacak
                                Pesanan</a></li>
                        <li><a href="/login"
                                class="hover:text-emerald-400 hover:translate-x-1 transition-all inline-block">Masuk /
                                Daftar</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-4 md:mb-6 tracking-wide uppercase text-xs md:text-sm">Bantuan &
                        Legal</h4>
                    <ul class="space-y-3 md:space-y-4 text-xs md:text-sm text-gray-400 font-medium">
                        <li><a href="#"
                                class="hover:text-emerald-400 hover:translate-x-1 transition-all inline-block">Syarat &
                                Ketentuan</a></li>
                        <li><a href="#"
                                class="hover:text-emerald-400 hover:translate-x-1 transition-all inline-block">Kebijakan
                                Privasi</a></li>
                        <li><a href="#"
                                class="hover:text-emerald-400 hover:translate-x-1 transition-all inline-block">Hubungi
                                Kami</a></li>
                        <li><a href="#"
                                class="hover:text-emerald-400 hover:translate-x-1 transition-all inline-block">FAQ</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div
                class="border-t border-white/5 pt-6 md:pt-8 flex flex-col-reverse md:flex-row justify-between items-center gap-6">
                <p class="text-gray-500 text-xs md:text-sm font-medium">© 2026 DiamondKu Corp. All Rights Reserved.</p>
                <div
                    class="flex flex-wrap justify-center gap-2 md:gap-3 opacity-50 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                    <div
                        class="h-7 w-10 md:h-8 md:w-12 bg-white/10 rounded border border-white/5 flex items-center justify-center text-[8px] md:text-[10px] font-bold">
                        QRIS</div>
                    <div
                        class="h-7 w-10 md:h-8 md:w-12 bg-white/10 rounded border border-white/5 flex items-center justify-center text-[8px] md:text-[10px] font-bold">
                        DANA</div>
                    <div
                        class="h-7 w-10 md:h-8 md:w-12 bg-white/10 rounded border border-white/5 flex items-center justify-center text-[8px] md:text-[10px] font-bold">
                        OVO</div>
                    <div
                        class="h-7 w-10 md:h-8 md:w-12 bg-white/10 rounded border border-white/5 flex items-center justify-center text-[8px] md:text-[10px] font-bold">
                        BANK</div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- 1. HERO BANNER SLIDER ---
            const track = document.getElementById('slider-track');
            const dots = document.querySelectorAll('.slider-dot');
            let currentIndex = 0;
            const totalSlides = 3;
            let slideInterval;

            function updateSlider() {
                track.style.transform = `translateX(-${(currentIndex * 100) / totalSlides}%)`;

                dots.forEach((dot, index) => {
                    if (index === currentIndex) {
                        dot.classList.remove('w-1.5', 'md:w-2', 'bg-white/30');
                        dot.classList.add('w-6', 'md:w-8', 'bg-emerald-500', 'shadow-[0_0_10px_#10b981]');
                    } else {
                        dot.classList.remove('w-6', 'md:w-8', 'bg-emerald-500',
                            'shadow-[0_0_10px_#10b981]');
                        dot.classList.add('w-1.5', 'md:w-2', 'bg-white/30');
                    }
                });
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateSlider();
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateSlider();
            }

            function startSlide() {
                slideInterval = setInterval(nextSlide, 5000);
            }

            function stopSlide() {
                clearInterval(slideInterval);
            }

            startSlide();

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentIndex = index;
                    updateSlider();
                    stopSlide();
                    startSlide();
                });
            });

            // Touch Swipe untuk Banner (di mode HP)
            let startX = 0;
            let currentX = 0;
            let isDraggingHero = false;

            track.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
                isDraggingHero = true;
                stopSlide();
            }, {
                passive: true
            });

            track.addEventListener('touchmove', (e) => {
                if (!isDraggingHero) return;
                currentX = e.touches[0].clientX;
            }, {
                passive: true
            });

            track.addEventListener('touchend', () => {
                if (!isDraggingHero) return;
                let diffX = startX - currentX;

                if (Math.abs(diffX) > 50 && currentX !== 0) {
                    if (diffX > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                }

                isDraggingHero = false;
                currentX = 0;
                startSlide();
            });

            // --- 2. GAME SLIDER (Scroll & Drag) ---
            function setupSlider(sliderId, leftBtnId, rightBtnId) {
                const slider = document.getElementById(sliderId);
                const leftBtn = document.getElementById(leftBtnId);
                const rightBtn = document.getElementById(rightBtnId);

                if (!slider) return;

                if (leftBtn && rightBtn) {
                    leftBtn.addEventListener('click', () => {
                        slider.scrollBy({
                            left: -200,
                            behavior: 'smooth'
                        }); // Geser lebih kecil agar cocok untuk mobile & desktop
                    });
                    rightBtn.addEventListener('click', () => {
                        slider.scrollBy({
                            left: 200,
                            behavior: 'smooth'
                        });
                    });
                }

                let isDown = false;
                let startXDrag;
                let scrollLeft;

                slider.addEventListener('mousedown', (e) => {
                    isDown = true;
                    slider.classList.add('cursor-grabbing');
                    startXDrag = e.pageX - slider.offsetLeft;
                    scrollLeft = slider.scrollLeft;
                });

                slider.addEventListener('mouseleave', () => {
                    isDown = false;
                    slider.classList.remove('cursor-grabbing');
                });

                slider.addEventListener('mouseup', () => {
                    isDown = false;
                    slider.classList.remove('cursor-grabbing');
                });

                slider.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - slider.offsetLeft;
                    const walk = (x - startXDrag) * 2;
                    slider.scrollLeft = scrollLeft - walk;
                });
            }

            setupSlider('game-slider-1', 'slide-left-1', 'slide-right-1');
            setupSlider('game-slider-2', 'slide-left-2', 'slide-right-2');
        });
    </script>
</body>

</html>
