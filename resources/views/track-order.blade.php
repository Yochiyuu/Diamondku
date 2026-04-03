<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Order - DiamondKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body
    class="antialiased selection:bg-emerald-500 selection:text-black flex flex-col items-center min-h-screen relative overflow-hidden py-20 px-6">

    <div class="blob bg-emerald-600 w-96 h-96 rounded-full top-10 left-10 absolute"></div>
    <div class="blob bg-teal-900 w-[500px] h-[500px] rounded-full bottom-0 right-10 opacity-20 absolute"></div>

    <div class="w-full max-w-2xl z-10">
        <div class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-3">Track <span
                    class="text-emerald-400">Order</span></h1>
            <p class="text-gray-400">Pantau status transaksi top up Anda secara real-time</p>
        </div>

        <div class="glass-card rounded-3xl p-6 md:p-8 border border-white/5 shadow-[0_0_30px_rgba(0,0,0,0.4)] mb-8">
            <form method="POST" action="{{ route('track.find') }}" class="flex flex-col md:flex-row gap-4">
                @csrf
                <div class="flex-1 relative">
                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">🔍</span>
                    <input type="text" name="order_id" value="{{ old('order_id', request('order_id')) }}"
                        class="w-full bg-[#0a0a0a] border border-white/10 rounded-xl pl-12 pr-4 py-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-all placeholder:text-gray-600 font-medium"
                        placeholder="Masukkan Order ID (cth: TRX-123...)" required autofocus>
                </div>
                <button type="submit"
                    class="bg-emerald-500 hover:bg-emerald-400 text-black font-bold py-4 px-8 rounded-xl transition-all transform hover:scale-[1.02] shadow-[0_0_15px_rgba(52,211,153,0.3)] whitespace-nowrap">
                    Cari Pesanan
                </button>
            </form>
        </div>

        @if (isset($transaction))
            @if ($transaction)
                <div
                    class="glass-card rounded-3xl p-8 border border-white/5 border-t-4 border-t-emerald-500 shadow-[0_0_30px_rgba(0,0,0,0.4)] relative overflow-hidden">
                    <h3 class="text-xl font-bold mb-6 pb-4 border-b border-white/10 flex justify-between items-center">
                        Detail Pesanan
                        <span class="text-emerald-400 text-sm">#{{ $transaction->order_id }}</span>
                    </h3>

                    <div class="space-y-5">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-1">
                            <span class="text-gray-400 text-sm font-medium">Status Pembayaran</span>
                            @php
                                $status = strtolower($transaction->status);
                                $isSuccess = in_array($status, ['success', 'paid', 'settled']);
                                $isPending = in_array($status, ['pending', 'unpaid']);
                            @endphp
                            <span
                                class="px-3 py-1 text-xs font-bold rounded-full uppercase tracking-wider w-max
                                {{ $isSuccess ? 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/30' : '' }}
                                {{ $isPending ? 'bg-yellow-500/10 text-yellow-400 border border-yellow-500/30' : '' }}
                                {{ !$isSuccess && !$isPending ? 'bg-red-500/10 text-red-400 border border-red-500/30' : '' }}
                            ">
                                {{ $transaction->status }}
                            </span>
                        </div>

                        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-1">
                            <span class="text-gray-400 text-sm font-medium">Target ID (User / Zone)</span>
                            <span class="text-white font-semibold">{{ $transaction->target_id }}</span>
                        </div>

                        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-1">
                            <span class="text-gray-400 text-sm font-medium">Email Pemesan</span>
                            <span class="text-white font-semibold">{{ $transaction->email }}</span>
                        </div>

                        <div
                            class="flex flex-col md:flex-row md:justify-between md:items-center gap-1 pt-4 border-t border-white/5 mt-4">
                            <span class="text-gray-400 text-sm font-medium">Total Pembayaran</span>
                            <span class="text-emerald-400 font-extrabold text-2xl">
                                Rp {{ number_format($transaction->amount, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                </div>
            @else
                <div
                    class="bg-red-500/10 border border-red-500/30 rounded-2xl p-6 text-center text-red-400 flex items-center justify-center gap-3">
                    <span class="text-xl">⚠️</span>
                    <p class="font-medium">Pesanan dengan Order ID tersebut tidak ditemukan. Silakan periksa kembali
                        ketikan Anda.</p>
                </div>
            @endif
        @endif

        <div class="mt-10 text-center">
            <a href="{{ url('/') }}"
                class="text-gray-400 hover:text-emerald-400 text-sm font-medium transition-colors inline-flex items-center gap-2">
                <span>❮</span> Kembali ke Beranda
            </a>
        </div>
    </div>
</body>

</html>
