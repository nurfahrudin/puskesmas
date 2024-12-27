# Sistem Informasi PUSKESMAS KEDUNGWARU

## Deskripsi

Sistem Informasi puskesmas adalah aplikasi berbasis web yang dibangun dengan PHP Native, ChartJS, JavaScript, dan Bootstrap. Aplikasi ini dirancang untuk membantu pengelolaan data puskesmas seperti antrian pasien, jadwal dokter, konsultasi via whtasapp, dan pengelolaan informasi.

## Fitur

- **Home**: Halaman utama yang memberikan informasi umum tentang puskesmas.
- **Login**: Halaman untuk autentikasi pengguna sebelum mengakses sistem.
- **Cookies**: Login sistem menggunakan cookies.
- **Antrian**: Halaman untuk pendaftaran pasien secara online.
- **Chart**: Halaman dashboard sistem yang menampilkan grafik jumlah antrian.
- **Konsultasi Whatsapp**: Halaman konsultasi online melalui Whatsapp.

## Admin Dashboard

Menu pada dashboard admin meliputi:
1. **Dashboard**: Melihat data antrian pasien yang terdaftar di puskesmas.
2. **Kelola Antrian**: Mengelola data antrian pasien di puskesmas.
3. **Kelola Berita**: Mengelola data berita atau informasi di puskesmas.
4. **Kelola Jadwal**: Mengelola data jadwal dokter yang ada di puskesmas.

## Teknologi yang Digunakan

- **PHP Native**: Backend server-side scripting untuk menangani logika aplikasi.
- **Admin Dashboard**: Template dashboard berbasis Bootstrap untuk tampilan antarmuka yang responsif dan modern.
- **Javascript**: Menambahkan interaktivitas dan dinamisasi pada halaman web.
- **Bootstrap**: Framework CSS untuk desain responsif dan mobile-first.

## Cara Menginstalasi

1. Buat database baru di MySQL dengan nama `puskesmas` dan impor file SQL yang ada ke dalam database tersebut.
2. Sesuaikan konfigurasi database pada file `koneksi.php`.
3. Jalankan server lokal Anda (XAMPP, WAMP, atau lainnya) dan akses aplikasi melalui browser.

## Cara Menggunakan

1. Buka aplikasi melalui browser.
2. Login dengan kredensial yang valid.
3. Navigasikan melalui menu pada dashboard admin untuk mengelola data puskesmas.