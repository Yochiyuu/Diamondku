<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiamondKu - Top Up Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="antialiased selection:bg-emerald-500 selection:text-black">

    <div class="blob bg-emerald-600 w-96 h-96 rounded-full top-0 left-0"></div>
    <div class="blob bg-teal-900 w-[500px] h-[500px] rounded-full top-40 right-0 opacity-20"></div>

    <nav class="fixed w-full top-0 z-50 glass-nav py-4">
        <div class="container mx-auto px-6 max-w-7xl flex justify-between items-center">
            <a href="/" class="text-2xl font-extrabold tracking-tighter flex items-center gap-2">
                Diamond<span class="text-emerald-400 inline -ml-1">Ku</span>
            </a>

            <div class="hidden md:flex space-x-8 text-sm font-medium text-gray-400">
                <a href="/" class="text-white hover:text-emerald-400 transition-colors">Beranda</a>
                <a href="#games" class="hover:text-emerald-400 transition-colors">Games</a>
                <a href="#" class="hover:text-emerald-400 transition-colors">Track Order</a>
            </div>

            <div class="flex items-center gap-5">
                <a href="#" class="text-sm font-medium text-gray-400 hover:text-white transition">Sign In</a>
                <a href="#"
                    class="text-sm font-semibold bg-white text-black px-6 py-2.5 rounded-full hover:bg-emerald-400 hover:shadow-[0_0_20px_rgba(52,211,153,0.4)] transition-all duration-300 transform hover:-translate-y-0.5">Daftar</a>
            </div>
        </div>
    </nav>

    <main class="relative z-10 pt-28 pb-16 px-6">
        <div class="container mx-auto max-w-7xl">

            <section class="mb-16 relative">
                <div
                    class="relative w-full rounded-3xl overflow-hidden glass-card border border-white/5 shadow-[0_0_30px_rgba(0,0,0,0.4)] group">

                    <div id="slider-track"
                        class="flex transition-transform duration-700 ease-in-out w-[300%] h-[400px] md:h-[450px]">

                        <div class="w-1/3 h-full relative overflow-hidden group">
                            <img src="{{ asset('images/mobile_legends_banner.jpg') }}" alt="Banner Promo"
                                class="absolute inset-0 w-full h-full object-cover object-top transition-transform duration-1000 group-hover:scale-105">

                            <div
                                class="absolute inset-0 bg-gradient-to-r from-[#050505] via-[#050505]/80 to-transparent">
                            </div>

                            <div class="relative z-10 h-full flex flex-col justify-center p-10 md:p-16 w-full md:w-2/3">
                                <h1
                                    class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight mb-4 drop-shadow-lg">
                                    Mobile Legends <br />
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-300">Diskon
                                        20% Hari Ini.</span>
                                </h1>
                                <a href="#games"
                                    class="inline-flex items-center gap-2 px-8 py-3.5 bg-emerald-500 hover:bg-emerald-400 text-black font-bold rounded-full transition-all transform hover:scale-105 shadow-[0_0_15px_rgba(52,211,153,0.3)] text-sm w-max mt-4">
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

                            <div class="relative z-10 h-full flex flex-col justify-center p-10 md:p-16 w-full md:w-2/3">
                                <h1
                                    class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight mb-4 drop-shadow-lg">
                                    Valorant Points <br />
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-cyan-300">Bonus
                                        VP Tiap Pembelian.</span>
                                </h1>
                                <a href="#games"
                                    class="inline-flex items-center gap-2 px-8 py-3.5 bg-teal-500 hover:bg-teal-400 text-black font-bold rounded-full transition-all transform hover:scale-105 shadow-[0_0_15px_rgba(20,184,166,0.3)] text-sm w-max mt-4">
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

                            <div class="relative z-10 h-full flex flex-col justify-center p-10 md:p-16 w-full md:w-2/3">
                                <h1
                                    class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight mb-4 drop-shadow-lg">
                                    Free Fire <br />
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-emerald-300">Ekstra
                                        Diamond 50%.</span>
                                </h1>
                                <a href="#games"
                                    class="inline-flex items-center gap-2 px-8 py-3.5 bg-green-500 hover:bg-green-400 text-black font-bold rounded-full transition-all transform hover:scale-105 shadow-[0_0_15px_rgba(34,197,94,0.3)] text-sm w-max mt-4">
                                    Borong Sekarang ➔
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex gap-2 z-20">
                        <button
                            class="slider-dot w-8 h-2 rounded-full bg-emerald-500 shadow-[0_0_10px_#10b981] transition-all duration-300"
                            data-index="0"></button>
                        <button
                            class="slider-dot w-2 h-2 rounded-full bg-white/30 hover:bg-white/50 transition-all duration-300"
                            data-index="1"></button>
                        <button
                            class="slider-dot w-2 h-2 rounded-full bg-white/30 hover:bg-white/50 transition-all duration-300"
                            data-index="2"></button>
                    </div>

                </div>
            </section>

            <section id="games" class="mb-16">
                <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-2">Pilih Game Favoritmu</h2>
                        <p class="text-gray-500 text-base md:text-lg">Jelajahi judul game populer dan temukan penawaran
                            terbaik.</p>
                    </div>

                    <div class="flex items-center gap-4 w-full md:w-auto justify-between md:justify-end">
                        <div class="flex gap-2">
                            <button id="slide-left"
                                class="bg-[#0a0a0a] border border-white/10 hover:border-emerald-500 hover:bg-emerald-900/20 text-white w-10 h-10 rounded-full flex items-center justify-center transition-all shadow-[0_0_10px_rgba(0,0,0,0.5)]">
                                ❮
                            </button>
                            <button id="slide-right"
                                class="bg-[#0a0a0a] border border-white/10 hover:border-emerald-500 hover:bg-emerald-900/20 text-white w-10 h-10 rounded-full flex items-center justify-center transition-all shadow-[0_0_10px_rgba(0,0,0,0.5)]">
                                ❯
                            </button>
                        </div>

                        <div
                            class="glass-card px-5 py-2.5 rounded-full flex gap-3 items-center w-full md:w-auto border border-white/5 shadow-[0_0_10px_rgba(0,0,0,0.3)]">
                            <span class="text-gray-600">🔍</span>
                            <input type="text" placeholder="Cari game..."
                                class="bg-transparent text-sm text-gray-400 outline-none w-full md:w-56 placeholder:text-gray-600">
                        </div>
                    </div>
                </div>

                <div id="game-slider"
                    class="grid grid-rows-2 grid-flow-col gap-5 md:gap-6 overflow-x-auto snap-x snap-mandatory pb-6 auto-cols-[160px] md:auto-cols-[220px] scroll-smooth [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                    @php
                        $games = $categories->where('type', '!=', 'membership');
                    @endphp

                    @forelse ($games as $category)
                        <a href="/product/{{ $category->slug }}"
                            class="glass-card snap-start rounded-2xl p-4 group cursor-pointer hover:-translate-y-2 hover:border-emerald-500/50 hover:bg-emerald-900/10 transition-all duration-300 relative overflow-hidden flex flex-col h-full border border-white/5 shadow-[0_0_10px_rgba(0,0,0,0.3)]">
                            <div
                                class="aspect-[4/5] rounded-xl bg-[#0a0a0a] mb-5 overflow-hidden relative border border-white/5">
                                <img src="{{ asset('images/' . $category->image_url) }}" alt="{{ $category->name }}"
                                    class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="mt-auto">
                                <h3
                                    class="font-bold text-lg text-white group-hover:text-emerald-400 transition-colors leading-tight mb-2 tracking-tight">
                                    {{ $category->name }}</h3>
                                <div class="flex items-center justify-between mt-2">
                                    <p class="text-xs text-gray-500 flex items-center gap-1.5 font-medium">
                                        <span
                                            class="w-1.5 h-1.5 rounded-full bg-emerald-500 status-glow shadow-[0_0_5px_#10b981]"></span>
                                        Active
                                    </p>
                                    <span
                                        class="text-xs text-emerald-400 opacity-0 group-hover:opacity-100 transition-opacity font-bold tracking-wider">TOP
                                        UP ➔</span>
                                </div>
                            </div>
                        </a>
                    @empty
                        <div
                            class="col-span-full glass-card rounded-3xl p-16 text-center border border-dashed border-white/10 mt-10 w-full min-w-[300px]">
                            <div class="text-5xl mb-6 opacity-30">🕹️</div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-300">Belum ada data game</h3>
                            <p class="text-gray-500">Jalankan database seeder untuk menampilkan katalog produk.</p>
                        </div>
                    @endforelse
                </div>
            </section>

            <section id="memberships" class="mb-16">
                <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-4">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-2">Streaming & Membership</h2>
                        <p class="text-gray-500 text-base md:text-lg">Berlangganan aplikasi hiburan favoritmu dengan
                            harga terbaik.</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-5 md:gap-6">
                    @php
                        // Memfilter hanya kategori membership
                        $memberships = $categories->where('type', 'membership');
                    @endphp

                    @forelse ($memberships as $category)
                        <a href="/product/{{ $category->slug }}"
                            class="glass-card rounded-2xl p-4 group cursor-pointer hover:-translate-y-2 hover:border-emerald-500/50 hover:bg-emerald-900/10 transition-all duration-300 relative overflow-hidden flex flex-col h-full border border-white/5 shadow-[0_0_10px_rgba(0,0,0,0.3)]">
                            <div
                                class="aspect-square rounded-xl bg-[#0a0a0a] mb-5 overflow-hidden relative border border-white/5">
                                <img src="{{ asset('images/' . $category->image_url) }}" alt="{{ $category->name }}"
                                    class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="mt-auto">
                                <h3
                                    class="font-bold text-lg text-white group-hover:text-emerald-400 transition-colors leading-tight mb-2 tracking-tight">
                                    {{ $category->name }}</h3>
                                <div class="flex items-center justify-between mt-2">
                                    <p class="text-xs text-gray-500 flex items-center gap-1.5 font-medium">
                                        <span
                                            class="w-1.5 h-1.5 rounded-full bg-emerald-500 status-glow shadow-[0_0_5px_#10b981]"></span>
                                        Active
                                    </p>
                                    <span
                                        class="text-xs text-emerald-400 opacity-0 group-hover:opacity-100 transition-opacity font-bold tracking-wider">BELI
                                        ➔</span>
                                </div>
                            </div>
                        </a>
                    @empty
                        <div
                            class="col-span-full glass-card rounded-3xl p-16 text-center border border-dashed border-white/10 mt-10">
                            <div class="text-5xl mb-6 opacity-30">🎟️</div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-300">Belum ada data membership</h3>
                            <p class="text-gray-500">Jalankan database seeder untuk menampilkan katalog produk.</p>
                        </div>
                    @endforelse
                </div>
            </section>

        </div>
    </main>

    <footer class="border-t border-white/5 pt-20 pb-10 px-6 mt-20 relative z-10 bg-[#020202]">
        <div class="container mx-auto max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-8 mb-16">

                <div class="col-span-1 md:col-span-2">
                    <a href="/" class="flex items-center gap-2 mb-6 w-max">
                        <span
                            class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-black text-sm font-bold shadow-[0_0_15px_rgba(52,211,153,0.3)]">✦</span>
                        <span class="font-extrabold tracking-tighter text-2xl text-white">Diamond<span
                                class="text-emerald-400">Ku</span></span>
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-sm mb-6 font-light">
                        Platform penyedia layanan top up game dan voucher digital termurah, tercepat, dan terpercaya di
                        Indonesia. Sistem otomatis 24 jam untuk kepuasan gaming Anda.
                    </p>
                    <div class="flex gap-3">
                        <a href="#"
                            class="w-10 h-10 rounded-full glass-card flex items-center justify-center text-gray-400 hover:text-emerald-400 hover:border-emerald-500/50 hover:shadow-[0_0_15px_rgba(52,211,153,0.2)] transition-all">IG</a>
                        <a href="#"
                            class="w-10 h-10 rounded-full glass-card flex items-center justify-center text-gray-400 hover:text-emerald-400 hover:border-emerald-500/50 hover:shadow-[0_0_15px_rgba(52,211,153,0.2)] transition-all">FB</a>
                        <a href="#"
                            class="w-10 h-10 rounded-full glass-card flex items-center justify-center text-gray-400 hover:text-emerald-400 hover:border-emerald-500/50 hover:shadow-[0_0_15px_rgba(52,211,153,0.2)] transition-all">TT</a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 tracking-wide uppercase text-sm">Pintasan</h4>
                    <ul class="space-y-4 text-sm text-gray-400 font-medium">
                        <li><a href="/"
                                class="hover:text-emerald-400 hover:translate-x-1 transition-all inline-block">Beranda</a>
                        </li>
                        <li><a href="#games"
                                class="hover:text-emerald-400 hover:translate-x-1 transition-all inline-block">Daftar
                                Game</a></li>
                        <li><a href="#"
                                class="hover:text-emerald-400 hover:translate-x-1 transition-all inline-block">Lacak
                                Pesanan</a></li>
                        <li><a href="#"
                                class="hover:text-emerald-400 hover:translate-x-1 transition-all inline-block">Masuk /
                                Daftar</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 tracking-wide uppercase text-sm">Bantuan & Legal</h4>
                    <ul class="space-y-4 text-sm text-gray-400 font-medium">
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

            <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-gray-500 text-sm font-medium">© 2026 DiamondKu Corp. All Rights Reserved.</p>
                <div
                    class="flex gap-3 opacity-50 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                    <div
                        class="h-8 w-12 bg-white/10 rounded border border-white/5 flex items-center justify-center text-[10px] font-bold">
                        QRIS</div>
                    <div
                        class="h-8 w-12 bg-white/10 rounded border border-white/5 flex items-center justify-center text-[10px] font-bold">
                        DANA</div>
                    <div
                        class="h-8 w-12 bg-white/10 rounded border border-white/5 flex items-center justify-center text-[10px] font-bold">
                        OVO</div>
                    <div
                        class="h-8 w-12 bg-white/10 rounded border border-white/5 flex items-center justify-center text-[10px] font-bold">
                        BANK</div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const track = document.getElementById('slider-track');
            const dots = document.querySelectorAll('.slider-dot');
            let currentIndex = 0;
            const totalSlides = 3;

            function updateSlider() {
                track.style.transform = `translateX(-${(currentIndex * 100) / totalSlides}%)`;

                dots.forEach((dot, index) => {
                    if (index === currentIndex) {
                        dot.classList.replace('w-2', 'w-8');
                        dot.classList.replace('bg-white/30', 'bg-emerald-500');
                        dot.classList.add('shadow-[0_0_10px_#10b981]');
                    } else {
                        dot.classList.replace('w-8', 'w-2');
                        dot.classList.replace('bg-emerald-500', 'bg-white/30');
                        dot.classList.remove('shadow-[0_0_10px_#10b981]');
                    }
                });
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateSlider();
            }

            let slideInterval = setInterval(nextSlide, 5000);

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentIndex = index;
                    updateSlider();
                    clearInterval(slideInterval);
                    slideInterval = setInterval(nextSlide, 5000);
                });
            });
        });

        // Tambahkan di dalam <script> yang ada di paling bawah halaman

        // Fungsi untuk menggeser Slider Game
        const gameSlider = document.getElementById('game-slider');
        const slideLeft = document.getElementById('slide-left');
        const slideRight = document.getElementById('slide-right');

        if (slideLeft && slideRight && gameSlider) {
            slideLeft.addEventListener('click', () => {
                // Geser ke kiri sejauh 400px
                gameSlider.scrollBy({
                    left: -400,
                    behavior: 'smooth'
                });
            });

            slideRight.addEventListener('click', () => {
                // Geser ke kanan sejauh 400px
                gameSlider.scrollBy({
                    left: 400,
                    behavior: 'smooth'
                });
            });
        }
    </script>
</body>

</html>
