# Tugas Praktikum 9 DPBO 2025 C1  
Raffi Adzril Alfaiz - Ilmu Komputer UPI  
---

## Janji
Saya, **Raffi Adzril Alfaiz** dengan **NIM 2308355**, mengerjakan Tugas Praktikum 9 dalam mata kuliah **Desain dan Pemrograman Berorientasi Objek** untuk keberkahan-Nya. Maka saya **tidak akan melakukan kecurangan** seperti yang telah dispesifikasikan. Aamiin.  
---

# Website OOP CRUD Management System (MVP)

## Deskripsi Singkat
Website ini adalah implementasi konsep **Object-Oriented Programming (OOP)** menggunakan pola desain **Model-View-Presenter (MVP)** dengan bahasa pemrograman **PHP**. Aplikasi ini mendukung pengelolaan data mahasiswa dengan fitur **CRUD (Create, Read, Update, Delete)** menggunakan **database MySQL**.

---

## Fitur Utama
- CRUD untuk entitas Mahasiswa:
  - Tambah data mahasiswa.
  - Lihat data mahasiswa.
  - Edit data mahasiswa.
  - Hapus data mahasiswa.
- Pemisahan kode berdasarkan pola desain MVP.
- Desain responsif menggunakan **Bootstrap**.
- Dokumentasi video untuk menjalankan aplikasi.

---

## Alur Pemrograman (MVP)
1. **Model**:
   - Berisi logika untuk mengakses dan memanipulasi data dari database.
   - Contoh: `TabelMahasiswa.class.php` digunakan untuk operasi CRUD pada tabel `mahasiswa`.

2. **View**:
   - Bertanggung jawab untuk menampilkan data kepada pengguna.
   - Contoh: `TampilMahasiswa.php` menampilkan data mahasiswa dalam bentuk tabel.

3. **Presenter**:
   - Menghubungkan antara model dan view.
   - Contoh: `ProsesMahasiswa.php` mengatur alur data antara `TabelMahasiswa` dan `TampilMahasiswa`.

---

## Fungsi CRUD yang Ditambahkan
### Model (`TabelMahasiswa.class.php`):
- **`getMahasiswaById($id)`**: Mengambil data mahasiswa berdasarkan ID.
  - **Gunanya**: Untuk menampilkan data spesifik mahasiswa saat proses edit.
- **`deleteMahasiswa($id)`**: Menghapus data mahasiswa berdasarkan ID.
  - **Gunanya**: Untuk menghapus data mahasiswa dari database.

### Presenter (`ProsesMahasiswa.php`):
- **`prosesTambahMahasiswa($data)`**: Memproses data untuk menambah mahasiswa baru.
  - **Gunanya**: Menghubungkan data dari form tambah ke model untuk disimpan ke database.
- **`prosesEditMahasiswa($id, $data)`**: Memproses data untuk mengedit mahasiswa.
  - **Gunanya**: Menghubungkan data dari form edit ke model untuk diperbarui di database.
- **`prosesHapusMahasiswa($id)`**: Memproses penghapusan data mahasiswa.
  - **Gunanya**: Menghubungkan aksi hapus dari view ke model untuk menghapus data di database.

---

## Dokumentasi Video
Berikut adalah dokumentasi video untuk menjalankan aplikasi:

https://github.com/user-attachments/assets/ccaa0f5e-db5a-434b-8a79-2f26c2befd03

**[Tonton di Lokal](Dokumentasi_Run_Program/record.mp4)**

---

## Struktur Folder
Berikut adalah struktur folder dari project ini:

```
PROJECT/
├── delete.php
├── edit.php
├── index.php
├── model/
│   ├── DB.class.php
│   ├── Mahasiswa.class.php
│   ├── TabelMahasiswa.class.php
│   ├── Template.class.php
├── presenter/
│   ├── KontrakPresenter.php
│   ├── ProsesMahasiswa.php
├── templates/
│   ├── skin_edit.html
│   ├── skin.html
├── view/
│   ├── KontrakView.php
│   ├── TampilMahasiswa.php
├── Dokumentasi_Run_Program/
│   ├── record.mp4
```

---

## Teknologi yang Digunakan
- PHP 8+
- MySQL
- HTML + CSS
- Bootstrap
- XAMPP / Apache sebagai web server lokal

---

## Author
- Nama: **Raffi Adzril Alfaiz**
- NIM: **2308355**
- Kelas: **C1 - Ilmu Komputer**
- Universitas Pendidikan Indonesia
