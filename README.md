<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Tentang Perpustakaan Sederhana

Sistem Informasi Manajemen Perpustakaan Sederhana ini adalah sebuah sistem sederhana yang mengelola perpustakaan, mulai dari manajemen pustakawan, anggota, buku, hingga peminjaman. Dibuat dengan pendekatan yang sederhana untuk memastikan kemudahan penggunaan.


## Fitur Perpustakaan Sederhana

| Status | Role          | Modul                     | Keterangan |
| :----: | ------------- | ------------------------- | :--------: |
|   ✅   | _Semua_       | Login                     |     👍     |
|   ❌   | _Semua_       | Login dengan Gmail        |     ✨     |
|   ✅   | Administrator | Manajemen Pustakawan      |    👍📬    |
|   ✅   | Pustakawan    | Manajemen Anggota         |    👍📬    |
|   ✅   | Pustakawan    | Manajemen Buku            |     👍     |
|   ❌   | Pustakawan    | Manajemen Kategori Buku   |     👍     |
|   ✅   | Pustakawan    | Manajemen Peminjaman Buku |  👍║▌💰📬  |
|   ❌   | Pustakawan    | Cetak Kartu Angota        |   ✨💰📬   |
|   ❌   | Anggota       | Histori Peminjaman Buku   |     👍     |
|   ✅   | _Semua_       | Ubah Profil               |     👍     |
|   ✅   | _Semua_       | Ubah Password             |     👍     |

Keterangan:

✅ = Sudah ada dan mungkin butuh modifikasi lebih baik  
🔧 = Sudah ada dan butuh perbaikan segera
❌ = Belum ada  
⏲️ = Dalam pengerjaan  
📬 = Butuh SMTP  
║▌ = Butuh barcode scanner (atau logikanya)  
💰 = Butuh perhitungan uang  
👍 = Wajib ada  
✨ = _Nice to have_

## Bahasa yang didukung:
<p align="left" style="display: none;">
    <a href="#"><img src="https://flagicons.lipis.dev/flags/4x3/us.svg" title="English" width="24"></a>
    <a href="#"><img src="https://flagicons.lipis.dev/flags/4x3/id.svg" title="Indonesia" width="24"></a>
</p>

> **Administrator juga memiliki akses terhadap seluruh aksi yang dapat dilakukan oleh Pustakawan.**

## Persyaratan

- Laragon 6.0.0
- PHP >= 8.1.10
- MySQL >= 5.7.39
- Composer >= 2.6.3

## langkah-langkah instalasi dan penggunaan proyek Laravel:

1. Kloning repositori:
    ```bash
    git clone https://github.com/AdiSatriaSejati/Laravel-Library-Management-System.git
    ```
2. Masuk ke direktori proyek:
    ```bash
    cd Laravel-Library-Management-System
    ```
3. Instal dependencies menggunakan Composer:
    ```bash
    composer install
    ```
4. Salin file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```
5. Buat kunci aplikasi:
    ```bash
    php artisan key:generate
    ```
6. Menjalankan Migrasi Database dan Seeding:
    ```bash
    php artisan migrate:fresh --seed
    ```
7. Membuat Link Storage:
    ```bash
    php artisan storage:link
    ```
8. Menjalankan Server:
    ```bash
    php artisan serve
    ```
9. Buka Browser Link:
   ```bash
    http://127.0.0.1:8000
   ```
10. Akun:
    - Administrator
      ```bash
      12221455@bsi.ac.id
      ```
      ```bash
      password
      ```
    - Pustakawan
      ```bash
      12220510@bsi.ac.id
      ```
      ```bash
      password
      ```
    - Anggota
      ```bash
      12221446@bsi.ac.id
      ```
      ```bash
      12220035@bsi.ac.id
      ```
      ```bash
      12220098@bsi.ac.id
      ```
      ```bash
      password
      ```
## Screenshots
![AdiSatriaSejati](https://ik.imagekit.io/AdiSatriaSejati/1.png?updatedAt=1700995212061)
![AdiSatriaSejati](https://ik.imagekit.io/AdiSatriaSejati/2.png?updatedAt=1700997386303)
![AdiSatriaSejati](https://ik.imagekit.io/AdiSatriaSejati/3.png?updatedAt=1700997568697)
![AdiSatriaSejati](https://ik.imagekit.io/AdiSatriaSejati/4.png?updatedAt=1700997657588)
![AdiSatriaSejati](https://ik.imagekit.io/AdiSatriaSejati/5.png?updatedAt=1700997721061)
![AdiSatriaSejati](https://ik.imagekit.io/AdiSatriaSejati/6.png?updatedAt=1700997791163)

## Alur Bisnis

### Login

-   Seluruh pengguna dapat login setelah melakukan verifikasi email.

### Manajemen Pustakawan

-   Admin menambahkan pengguna pustakawan dari panel (minimal nama dan email).
-   Pustakawan menerima email verifikasi berisi link untuk mengatur password.
-   Pustakawan tidak dapat login sebelum melakukan verifikasi di atas.
-   Pustakawan tidak dapat melakukan transaksi peminjaman buku sebelum melengkapi seluruh data diri.

### Manajemen Anggota

-   Pustakawan menambahkan pengguna anggota dari panel (minimal nama dan email).
-   Anggota menerima email verifikasi berisi link untuk mengatur password.
-   Anggota tidak dapat login sebelum melakukan verifikasi di atas.
-   Anggota tidak dapat meminjam buku sebelum melengkapi seluruh data diri.

### Peminjaman Buku

-   Pustakawan memindai kartu anggota atau memasukkan nomor anggota terlebih dahulu.
-   Selanjutnya, memindai barcode ISBN pada buku.
-   Secara _default_, batas waktu peminjaman adalah tiga (3) hari. Biaya keterlambatan adalah Rp 500 per hari.
-   Nominal denda diatur di file .env dengan _key_ **DENDA_RUPIAH**.

## Kontribusi

Terima kasih atas keinginan Anda untuk berkontribusi pada Sistem Informasi Manajemen Perpustakaan Sederhana ini.

Silakan ajukan _Pull Request_ untuk penambahan, pengurangan, atau perbaikan fitur, serta ajukan _Issue_ jika menemukan kekurangan dalam sistem yang ada, terutama yang terkait dengan demo yang disediakan.


## License

Sistem Informasi Manajemen Perpustakaan Sederhana ini dilisensikan dengan [MIT license](https://opensource.org/licenses/MIT).
