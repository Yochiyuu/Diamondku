<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DiamondKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body
    class="antialiased selection:bg-emerald-500 selection:text-black flex items-center justify-center min-h-screen relative overflow-hidden">

    <div class="blob bg-emerald-600 w-96 h-96 rounded-full top-0 left-0 absolute"></div>
    <div class="blob bg-teal-900 w-[500px] h-[500px] rounded-full bottom-0 right-0 opacity-20 absolute"></div>

    <div class="w-full max-w-md z-10 px-6">
        <div class="text-center mb-8">
            <a href="/" class="text-3xl font-extrabold tracking-tighter inline-flex items-center gap-2">
                Diamond<span class="text-emerald-400 inline -ml-1">Ku</span>
            </a>
            <p class="text-gray-400 mt-2 text-sm">Masuk untuk melanjutkan transaksi</p>
        </div>

        <div class="glass-card rounded-3xl p-8 border border-white/5 shadow-[0_0_30px_rgba(0,0,0,0.4)]">
            @if ($errors->any())
                <div
                    class="bg-red-500/10 border border-red-500/50 text-red-400 text-sm px-4 py-3 rounded-xl mb-6 text-center">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-400 mb-2">Email Address</label>
                    <input type="email" name="email"
                        class="w-full bg-[#0a0a0a] border border-white/10 rounded-xl px-4 py-3.5 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-all placeholder:text-gray-600"
                        placeholder="Masukkan email..." required autofocus>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-400 mb-2">Password</label>
                    <input type="password" name="password"
                        class="w-full bg-[#0a0a0a] border border-white/10 rounded-xl px-4 py-3.5 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-all placeholder:text-gray-600"
                        placeholder="Masukkan password..." required>
                </div>
                <button type="submit"
                    class="w-full bg-emerald-500 hover:bg-emerald-400 text-black font-bold py-3.5 rounded-xl transition-all transform hover:scale-[1.02] shadow-[0_0_15px_rgba(52,211,153,0.3)]">
                    Login Sekarang
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-400">Belum punya akun? <a href="{{ route('register') }}"
                        class="text-emerald-400 hover:text-emerald-300 font-bold transition-colors">Daftar di sini</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
