#  DiamondKu - Top Up Game & Voucher Store

DiamondKu adalah platform web penyedia layanan *top up* kredit game dan *membership* digital yang dirancang dengan antarmuka *Dark Glassmorphism* yang modern, responsif, dan elegan. Sistem ini dilengkapi dengan integrasi *payment gateway* otomatis untuk memastikan transaksi yang cepat dan aman.

##  Fitur Utama

* **Antarmuka Responsif & Modern:** Desain antarmuka *mobile-first* menggunakan Tailwind CSS dengan efek *glassmorphism* dan animasi *slider* yang dinamis.
* **Katalog Produk Terkategori:** Pengelompokan produk secara otomatis (Game Mobile, PC, dan Membership/Streaming).
* **Integrasi Payment Gateway (Xendit):** Mendukung pembayaran otomatis dan instan melalui berbagai saluran seperti QRIS, DANA, OVO, ShopeePay, LinkAja, dan Virtual Account Bank.
* **Pelacakan Pesanan Real-time (Track Order):** Pengguna dapat memeriksa status transaksi mereka (Pending, Success, Failed) hanya dengan memasukkan *Order ID*.
* **Sistem Autentikasi:** Fitur pendaftaran (Register) dan masuk (Login) pengguna yang aman untuk menyimpan riwayat dan memudahkan transaksi.

##  Teknologi yang Digunakan

* **Backend:** Laravel (PHP)
* **Frontend:** Blade Templating, Tailwind CSS, Vanilla JavaScript
* **Database:** MySQL
* **Payment Gateway:** Xendit API

##  Persyaratan Sistem

Sebelum menjalankan proyek ini, pastikan sistem Anda memiliki:
* PHP >= 8.2
* Composer
* Node.js & NPM
* MySQL (atau MariaDB)
* Akun Xendit (untuk API Key pengujian/produksi)

##  Panduan Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek DiamondKu di lingkungan lokal Anda:

1.  **Kloning Repositori**
    ```bash
    git clone [https://github.com/Yochiyuu/diamondku.git]
    ```

2.  **Instalasi Dependensi PHP (Composer)**
    ```bash
    composer install
    ```

3.  **Instalasi Dependensi Frontend (NPM)**
    ```bash
    npm install
    npm run build
    ```

4.  **Konfigurasi Environment**
    Salin file konfigurasi *environment* bawaan dan sesuaikan dengan pengaturan database lokal Anda.
    ```bash
    cp .env.example .env
    ```
    Buka file `.env` dan atur koneksi database:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=diamondku_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5.  **Konfigurasi API Xendit**
    Tambahkan Secret API Key dari dashboard Xendit Anda ke dalam file `.env`:
    ```env
    XENDIT_SECRET_KEY=xnd_development_... (masukkan key Anda di sini)
    ```

6.  **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

7.  **Migrasi Database dan Seeding**
    Jalankan migrasi untuk membuat tabel beserta data awal (kategori, produk, dan admin default) jika tersedia.
    ```bash
    php artisan migrate --seed
    ```

8.  **Tautkan Storage (Opsional, untuk gambar lokal)**
    ```bash
    php artisan storage:link
    ```

9.  **Jalankan Server Development**
    ```bash
    php artisan serve
    ```
    Aplikasi kini dapat diakses melalui browser di alamat: `http://localhost:8000`

## 🗂️ Struktur Direktori Utama Terkait Fitur

* `app/Http/Controllers/AuthController.php` - Menangani logika login dan pendaftaran pengguna.
* `app/Http/Controllers/TransactionController.php` - Menangani logika pembuatan *invoice* (Xendit) dan pelacakan *Order ID*.
* `resources/views/home.blade.php` - Halaman utama dengan *slider banner* dan katalog produk berdesain *glassmorphism*.
* `resources/views/track-order.blade.php` - Halaman khusus untuk mencari status resi/pesanan.
* `routes/web.php` - Konfigurasi rute URL aplikasi.

## 📄 Lisensi

Proyek ini bersifat *open-source* dan tersedia di bawah [Lisensi MIT](https://opensource.org/licenses/MIT).
