# 🌟 Website Rencana Tabungan (Tabungan Santuy)

Proyek ini dibuat sebagai bagian dari tes masuk di **BARA TEKNOVASI**.

## 🔧 Fitur Utama
- ✅ **Register**: Pendaftaran sederhana menggunakan Nama, Email unik, dan password terenkripsi
- ✅ **CRUD Rencana Tabungan**: Tambah, lihat, edit, dan hapus tabungan
- ✅ **Form Tabungan**: Judul, foto (opsional), target nominal, target tanggal, dan status tercapai
- ✅ **Home**: Menampilkan semua tabungan dalam bentuk card (berisi foto, nama, target, progress bar, dan status)
- ✅ **Logout**: Menghapus session, membatasi akses ke halaman tertentu melalui middleware `auth`
- ✅ **Database**: Tersedia file `dbrencanatabungan.sql` di folder database untuk import manual

## 📹 Video Penjelasan dan Demo Website
👉 [Tonton di sini](https://drive.google.com/file/d/1RXSawpXWbLCekqKQ779GD3C8-ZLLy617/view?usp=drive_link)

## 📁 Cara Menjalankan
1. Clone repo ini
2. Jalankan perintah `composer install` untuk menginstal semua dependensi
3. Jalankan perintah `php artisan key:generate` untuk mengenerate key aplikasi
4. Jalankan perintah `php artisan migrate` untuk menjalankan migrasi dan seeder database atau kamu bisa Import `dbrencanatabungan.sql` yang berada di folder `database` ke MySQL
5. Jalankan project dengan `php artisan serve` (jika pakai Laravel)
