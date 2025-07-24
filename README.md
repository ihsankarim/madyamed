# 🏥 MadyaMed — Hospital Management System

**MadyaMed** adalah sistem manajemen rumah sakit modern berbasis Laravel + Livewire, terinspirasi dari filosofi Jawa *"madya"*, yang berarti seimbang, stabil, dan matang. Sistem ini dirancang untuk membantu digitalisasi proses rumah sakit dari pendaftaran pasien hingga pengelolaan rekam medis dan tagihan — semua dalam satu platform terintegrasi.

---

## 🚀 Live Demo
> Coming Soon – (Host di Render/Railway/VPS)

---

## 📌 Fitur Utama

### 👥 Role-Based Access
- **Admin**: Mengelola seluruh data sistem
- **Dokter**: Lihat jadwal, tambah rekam medis
- **Perawat**: Bantu entri data medis
- **Pasien**: Booking dan riwayat pengobatan

### 🩺 Manajemen Pasien
- Tambah/Edit pasien
- Lihat riwayat pemeriksaan
- Hubungkan dengan jadwal & billing

### 📅 Booking & Jadwal Dokter
- Kalender interaktif dengan Livewire
- Validasi bentrok jadwal
- Reminder (opsional)

### 📄 Rekam Medis Elektronik
- Diagnosis, tindakan, resep
- Riwayat rekam medis by pasien
- PDF export untuk keperluan cetak

### 💳 Tagihan & Pembayaran
- Otomatisasi tagihan dari tindakan medis
- Invoice PDF
- Status pembayaran (Lunas / Belum)

---

## ⚙️ Teknologi yang Digunakan

| Layer        | Teknologi                    |
|--------------|------------------------------|
| Framework    | Laravel 11.x                 |
| Komponen UI  | Laravel Livewire + Blade     |
| Styling      | TailwindCSS                  |
| Database     | MySQL / PostgreSQL           |
| PDF Export   | DomPDF / Laravel Snappy      |
| Auth         | Laravel Breeze + Policies    |

---

## 🧠 Skill & Konsep yang Ditunjukkan

- 🔄 Livewire interaktivitas tanpa JavaScript
- 🔐 Role & Permission Laravel
- 🔗 Relasi antar entitas kompleks
- 🧾 PDF invoice generation
- 💬 Komponen Livewire dinamis & komunikasi antar state
- 📈 Filter, pencarian, dan pagination dinamis
  
---

## 🔧 Instalasi

### Persyaratan
- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL/PostgreSQL

### Langkah Setup

```bash
# 1. Clone
git clone https://github.com/yourusername/madyamed.git
cd madyamed

# 2. Install dependency
composer install
npm install && npm run dev

# 3. Setup .env
cp .env.example .env
php artisan key:generate

# 4. Migrasi DB
php artisan migrate --seed

# 5. Jalankan server
php artisan server
```

---

## 👥 Role-Based Login Sample

| Role     | Email                  | Password  |
|----------|------------------------|-----------|
| Admin    | admin@madyamed.test    | password  |
| Dokter   | doctor@madyamed.test   | password  |
| Perawat  | nurse@madyamed.test    | password  |
| Pasien   | patient@madyamed.test  | password  |

---

## 📦 Livewire Components

Berikut adalah daftar komponen Livewire utama yang digunakan untuk membangun antarmuka dinamis di MadyaMed:

- `Patients\ListPatients`  
  Menampilkan dan mengelola daftar pasien secara real-time, dengan pencarian dan filter.

- `Appointments\DoctorSchedule`  
  Kalender interaktif untuk penjadwalan dan pengelolaan booking dokter.

- `Records\MedicalRecordForm`  
  Formulir dinamis untuk input rekam medis, diagnosis, dan resep dokter.

- `Billing\InvoiceTable`  
  Tabel tagihan pasien dengan status pembayaran dan opsi cetak PDF.

---

## 🖼 Branding

- 🧠 **Nama**: `MadyaMed`
- 🔣 **Filosofi**: “*Madya*” = keseimbangan dan kedewasaan dalam pelayanan medis, mencerminkan sistem yang stabil dan terpercaya.
- 🎯 **Tagline**: *"Smart Health System, Balanced by Design"*
