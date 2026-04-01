<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up {{ $category->name }} - DiamondKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
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

        <form id="topup-form">
            @csrf
            <h2 class="text-xl font-bold mb-4 flex items-center gap-2">
                <span
                    class="bg-emerald-500 text-black w-8 h-8 flex items-center justify-center rounded-full text-sm">1</span>
                Masukkan Data Akun
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
                <div>
                    <label class="block text-gray-400 text-sm mb-2">ID Game / Target ID <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="target_id" name="target_id" placeholder="Masukkan ID Game Anda" required
                        class="w-full bg-[#0a0a0a] border border-white/10 rounded-xl p-4 text-white focus:outline-none focus:border-emerald-500 transition-colors">
                </div>
                <div>
                    <label class="block text-gray-400 text-sm mb-2">Alamat Email <span
                            class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" placeholder="email@contoh.com" required
                        class="w-full bg-[#0a0a0a] border border-white/10 rounded-xl p-4 text-white focus:outline-none focus:border-emerald-500 transition-colors">
                </div>
                <div>
                    <label class="block text-gray-400 text-sm mb-2">Nomor WhatsApp <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="phone" name="phone" placeholder="08123456789" required
                        class="w-full bg-[#0a0a0a] border border-white/10 rounded-xl p-4 text-white focus:outline-none focus:border-emerald-500 transition-colors">
                </div>
                <div>
                    <label class="block text-gray-400 text-sm mb-2">Kode Referral (Opsional)</label>
                    <input type="text" id="referral_code" name="referral_code" placeholder="Masukkan jika ada"
                        class="w-full bg-[#0a0a0a] border border-white/10 rounded-xl p-4 text-white focus:outline-none focus:border-emerald-500 transition-colors">
                </div>
            </div>

            <h2 class="text-xl font-bold mb-4 flex items-center gap-2">
                <span
                    class="bg-emerald-500 text-black w-8 h-8 flex items-center justify-center rounded-full text-sm">2</span>
                Pilih Nominal <span class="text-red-500 text-sm ml-1">*</span>
            </h2>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-10">
                @forelse($category->products as $product)
                    <label class="cursor-pointer">
                        <input type="radio" name="product_id" value="{{ $product->id }}" class="peer sr-only"
                            required>
                        <div
                            class="border border-white/10 rounded-xl p-4 peer-checked:border-emerald-500 peer-checked:bg-emerald-900/20 transition-all bg-[#0a0a0a] hover:bg-emerald-900/10">
                            <h3 class="font-bold text-lg text-white mb-1">{{ $product->name }}</h3>
                            <p class="text-emerald-400 font-semibold">Rp
                                {{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                    </label>
                @empty
                    <div
                        class="col-span-full p-4 border border-dashed border-white/20 rounded-xl text-center text-gray-500">
                        Belum ada pilihan diamond untuk game ini.
                    </div>
                @endforelse
            </div>

            <h2 class="text-xl font-bold mb-4 flex items-center gap-2">
                <span
                    class="bg-emerald-500 text-black w-8 h-8 flex items-center justify-center rounded-full text-sm">3</span>
                Metode Pembayaran
            </h2>
            <div class="mb-10 p-5 border border-white/10 bg-[#0a0a0a] rounded-xl">
                <p class="text-gray-300 text-sm mb-4">Pembayaran diproses secara aman oleh <strong>Midtrans</strong>.
                </p>

                <div class="flex flex-wrap gap-3 mb-3">
                    <div
                        class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center w-20 h-12">
                        <img src="{{ asset('images/qris.png') }}" alt="QRIS"
                            class="max-h-full max-w-full object-contain"
                            onerror="this.outerHTML='<span class=\'text-black text-xs font-bold\'>QRIS</span>'">
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center w-20 h-12">
                        <img src="{{ asset('images/dana.png') }}" alt="DANA"
                            class="max-h-full max-w-full object-contain"
                            onerror="this.outerHTML='<span class=\'text-black text-xs font-bold\'>DANA</span>'">
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center w-20 h-12">
                        <img src="{{ asset('images/ovo.png') }}" alt="OVO"
                            class="max-h-full max-w-full object-contain"
                            onerror="this.outerHTML='<span class=\'text-black text-xs font-bold\'>OVO</span>'">
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center w-20 h-12">
                        <img src="{{ asset('images/gopay.png') }}" alt="GoPay"
                            class="max-h-full max-w-full object-contain"
                            onerror="this.outerHTML='<span class=\'text-black text-xs font-bold\'>GoPay</span>'">
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center w-20 h-12">
                        <img src="{{ asset('images/bca_va.png') }}" alt="BCA VA"
                            class="max-h-full max-w-full object-contain"
                            onerror="this.outerHTML='<span class=\'text-black text-xs font-bold\'>VA</span>'">
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-lg p-2 flex items-center justify-center w-20 h-12">
                        <img src="{{ asset('images/alfamart.png') }}" alt="Alfamart"
                            class="max-h-full max-w-full object-contain"
                            onerror="this.outerHTML='<span class=\'text-black text-xs font-bold\'>Alfamart</span>'">
                    </div>
                </div>
                <p class="text-emerald-500 text-xs italic">* Pilihan metode pembayaran akan muncul di halaman pop-up
                    setelah Anda klik Beli Sekarang.</p>
            </div>

            <button type="button" id="pay-button" disabled
                class="w-full bg-emerald-500 text-black font-bold py-4 rounded-xl transition-colors opacity-50 cursor-not-allowed">
                Isi Data Terlebih Dahulu
            </button>
        </form>
    </main>

    <script>
        const form = document.getElementById('topup-form');
        const payButton = document.getElementById('pay-button');
        const inputs = form.querySelectorAll('input[required]');

        // Fungsi untuk mengecek apakah semua form wajib sudah diisi
        function checkFormValidity() {
            if (form.checkValidity()) {
                payButton.disabled = false;
                payButton.classList.remove('opacity-50', 'cursor-not-allowed');
                payButton.classList.add('hover:bg-emerald-600');
                payButton.innerText = 'Beli Sekarang';
            } else {
                payButton.disabled = true;
                payButton.classList.add('opacity-50', 'cursor-not-allowed');
                payButton.classList.remove('hover:bg-emerald-600');
                payButton.innerText = 'Isi Data Terlebih Dahulu';
            }
        }

        // Pantau setiap perubahan pada input text dan radio button
        inputs.forEach(input => {
            input.addEventListener('input', checkFormValidity);
            input.addEventListener('change', checkFormValidity);
        });

        document.getElementById('pay-button').onclick = async function() {
            // Validasi akhir jaga-jaga
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            const formData = new FormData(form);
            const originalText = payButton.innerText;
            payButton.innerText = 'Memproses...';
            payButton.disabled = true;

            try {
                const response = await fetch('/transaction/store', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });

                const data = await response.json();

                if (data.snap_token) {
                    snap.pay(data.snap_token, {
                        onClose: function() {
                            payButton.innerText = originalText;
                            payButton.disabled = false;
                        }
                    });
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat memproses pembayaran.');
                payButton.innerText = originalText;
                payButton.disabled = false;
            }
        };
    </script>
</body>

</html>
