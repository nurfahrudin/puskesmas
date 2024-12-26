# Sistem Informasi Klinik

## Deskripsi

Sistem Informasi Klinik adalah aplikasi berbasis web yang dibangun dengan PHP Native, AdminLTE, Javascript, dan Bootstrap. Aplikasi ini dirancang untuk membantu pengelolaan data klinik seperti pasien, paramedik, pemeriksaan, kelurahan, dan unit kerja.

## Fitur

- **Home**: Halaman utama yang memberikan informasi umum tentang klinik.
- **Login**: Halaman untuk autentikasi pengguna sebelum mengakses sistem.

## Admin Dashboard

Menu pada dashboard admin meliputi:

1. **Pasien**: Mengelola data pasien yang terdaftar di klinik.
2. **Paramedik**: Mengelola data paramedik yang bekerja di klinik.
3. **Periksa**: Mengelola data pemeriksaan pasien.
4. **Kelurahan**: Mengelola data kelurahan yang terkait dengan pasien dan paramedik.
5. **Unit Kerja**: Mengelola data unit kerja di klinik.

## Teknologi yang Digunakan

- **PHP Native**: Backend server-side scripting untuk menangani logika aplikasi.
- **AdminLTE**: Template dashboard berbasis Bootstrap untuk tampilan antarmuka yang responsif dan modern.
- **Javascript**: Menambahkan interaktivitas dan dinamisasi pada halaman web.
- **Bootstrap**: Framework CSS untuk desain responsif dan mobile-first.

## Cara Menginstalasi

1. Buat database baru di MySQL dan impor file SQL yang ada di folder `database` ke database tersebut.
2. Sesuaikan konfigurasi database pada file `koneksi.php`.
3. Jalankan server lokal Anda (XAMPP, WAMP, atau lainnya) dan akses aplikasi melalui browser.

## Cara Menggunakan

1. Buka aplikasi melalui browser.
2. Login dengan kredensial yang valid.
3. Navigasikan melalui menu pada dashboard admin untuk mengelola data klinik.