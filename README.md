# 📌 Laravel Laundry Web — Laundry Sakinah

**Laravel Laundry Web** adalah aplikasi sistem informasi berbasis web yang dibangun menggunakan framework **Laravel 12**. Aplikasi ini dirancang khusus untuk membantu pengelolaan layanan laundry di **Laundry Sakinah**, Parak Karambia, Balai Gadang, Kota Padang.

Aplikasi ini menyediakan fitur pemesanan laundry online, manajemen layanan, pengaturan harga, laporan transaksi, serta sistem role-based access untuk **Admin** dan **User**.

---

## 📖 Fitur Utama

- ✅ User Registration & Login (Laravel Breeze)
- ✅ Role-based Dashboard: **Admin & User**
- ✅ CRUD layanan laundry (Admin)
- ✅ Manajemen pesanan laundry (Admin)
- ✅ Pemesanan laundry online (User)
- ✅ Riwayat pesanan & status laundry
- ✅ Perhitungan harga otomatis berdasarkan berat cucian & layanan
- ✅ Laporan transaksi
- ✅ Desain modern & responsif menggunakan Tailwind CSS
- ✅ Local development environment via Laragon

---

## 📂 Teknologi

- **PHP 8.3**
- **Laravel 12**
- **MySQL 8**
- **Laravel Breeze**
- **Tailwind CSS**
- **PHPMyAdmin**
- **Laragon**

---

## 📖 Cara Install & Menjalankan Project

### 📌 Persyaratan:
- PHP 8.3+
- Composer
- MySQL (via Laragon / XAMPP)
- Node.js & NPM

### 📌 Langkah Instalasi:

1. **Clone Repository**
   ```bash
   git clone https://github.com/[username]/laravel-laundry-web.git
   cd laravel-laundry-web

2. **Install Composer Dependencies**
   ```bash
   composer install

3. **Install NPM Dependencies**
   ```bash
   npm install
   npm run dev

4. **Copy file .env**
   ```bash
   cp .env.example .env

5. **Atur database di file .env**
   ```bash
   DB_DATABASE=laundry_db
   DB_USERNAME=root
   DB_PASSWORD=

6. **Generate App Key**
   ```bash
   php artisan key:generate

7. **Jalankan migrasi database**
   ```bash
   php artisan migrate

8. **Jalankan server**
   ```bash
   php artisan serve

9. **Akses aplikasi via browser**
   ```bash
   http://localhost:8000
   ```
---
## 📧 Akun Default

| Role  | Email                                         | Password |
| :---- | :-------------------------------------------- | :------- |
| Admin | [admin@example.com](mailto:admin@example.com) | admin123 |
| User  | Daftar sendiri via halaman Register           |          |
---
## 📊 Struktur Database

- users: id, name, email, password, role

- services: id, nama_layanan, harga

- orders: id, user_id, service_id, berat, total_harga, status, created_at

---
## 📊 Hak Akses

## Admin:

- Mengelola layanan laundry (tambah/edit/hapus)

- Mengelola pesanan pelanggan

- Melihat laporan transaksi

- Mengatur akun user

## User:

- Melakukan pemesanan laundry

- Melihat status pesanan

- Melihat daftar layanan & harga

- Melihat riwayat transaksi pribadi

---
## 📜 Lisensi

Aplikasi ini didistribusikan secara open-source di bawah MIT License.
Bebas digunakan, dimodifikasi, dikembangkan, dan didistribusikan ulang.

MIT License

Copyright (c) 2025 Rizal

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
of the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE
FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

---
## 👨‍💻 Developer

- Nama : Rizal Adinata Pangestu

- Email : rizalanjani02@email.com

- GitHub: github.com/radinatap

- Project: Laravel Laundry Web untuk Laundry Sakinah

---
## 📌 Catatan

- Project ini dibuat sebagai tugas proyek akhir matakuliah Pemrograman Web Lanjut.

- Dijalankan di environment Laragon atau XAMPP dengan PHP 8.3.

- Tampilan responsif, clean, dan modern menggunakan Tailwind CSS.

- Gratis dipakai, dikembangkan, dan dimodifikasi.

---
## 🎉 Terima Kasih!

Silakan gunakan, modifikasi, dan kembangkan sesuai kebutuhanmu.
Jangan lupa beri ⭐️ di repository ini kalau project ini bermanfaat untukmu!

---
=======
# 📌 Laravel Laundry Web — Laundry Sakinah