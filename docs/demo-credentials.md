# Demo Credentials PPDB Al Azhar

Dokumen ini memuat informasi mengenai *credential login* yang bersifat *hardcoded* (statis) untuk kebutuhan demontrasi purwarupa (prototype) sistem PPDB Al Azhar Syifa Budi Parahyangan.

Karena sistem masih bersifat purwarupa, login tidak terhubung ke tabel basis data sesungguhnya melainkan memanfaatkan _dummy session_.

## 1. Login sebagai Orang Tua / Calon Siswa

Digunakan untuk masuk ke portal pendaftar (orang tua / calon siswa).

* **Role yang dipilih di halaman login:** `Orang Tua / Calon Siswa`
* **Identifier (pilih salah satu):**
  * `orangtua`
  * `siswa`
  * `calon`
  * `081122334455`
  * `1234567890`
* **Password:** `password`
* **Redirect setelah login:** `/dashboard`

## 2. Login sebagai Admin / Panitia

Digunakan untuk masuk ke dashboard pengelola (admin / panitia PPDB).

* **Role yang dipilih di halaman login:** `Admin / Panitia`
* **Identifier (pilih salah satu):**
  * `admin`
  * `panitia`
* **Password:** `admin`
* **Redirect setelah login:** `/admin/dashboard`

## 3. Logout (Keluar)

Untuk mengakhiri sesi dan membersihkan *cache dummy auth*, akses URL berikut:

* **URL Logout:** `/keluar`
* **Keterangan:** Logout akan membersihkan session demo dan secara otomatis mengembalikan _user_ ke halaman form login dengan pesan sukses.

## 4. Guard / Proteksi Akses

Akses URL dikendalikan melalui sesi secara ketat. Berikut panduan perilakunya:

* **Akses Tanpa Login:**
  Jika belum login dan membuka rute `/dashboard` atau `/admin/dashboard`, _user_ akan diarahkan otomatis ke halaman `/login`.
* **Akses Lintas Peran (Cross-Role):**
  * Jika sedang login sebagai **Parent** lalu mencoba membuka rute `/admin/dashboard`, _user_ tidak diizinkan masuk dan akan dikembalikan ke `/dashboard`.
  * Jika sedang login sebagai **Admin** lalu mencoba membuka rute `/dashboard`, _user_ tidak diizinkan masuk dan akan dikembalikan ke `/admin/dashboard`.
* **Akses Ulang ke Halaman Login:**
  Apabila _user_ sudah memiliki sesi masuk aktif namun memaksa membuka `/login` atau `/`, mereka akan otomatis dialihkan sesuai dengan halaman dasbor peran masing-masing.
