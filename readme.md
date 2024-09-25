# Sistem Pengelola Data di Perusahaan Konfeksi Berbasis Web Menggunakan CodeIgniter 3

## Deskripsi

> Aplikasi Sistem Pengelola Data di Perusahaan Konfeksi adalah aplikasi berbasis web yang dibangun dengan CodeIgniter 3. Aplikasi ini dirancang untuk memudahkan perusahaan konfeksi dalam mengelola berbagai aspek operasional, seperti stok, pemesanan, produksi, dan distribusi produk. Dengan antarmuka yang sederhana dan fungsional, aplikasi ini menawarkan solusi pengelolaan data yang efektif dan efisien.

> Fitur Utama
>> - Manajemen Produk: Mengelola stok bahan baku dan produk jadi, dengan fitur pemantauan ketersediaan.
>> - Pengelolaan Pesanan: Melacak pesanan pelanggan dan status produksi pesanan.
>> - Manajemen Produksi: Memantau jalannya proses produksi dari awal hingga akhir.
>> - Distribusi Produk: Mengelola informasi pengiriman produk ke pelanggan.
>> - Laporan: Membuat laporan operasional yang terstruktur seperti laporan stok, penjualan, dan produksi.
>> - Teknologi yang Digunakan
>> - Framework: CodeIgniter 3
>> - Bahasa Pemrograman: PHP, HTML, CSS, JavaScript
>> - Database: MySQL
>> - Frontend Framework: Admin LTE
>> - Server Requirements: Apache/Nginx, PHP 5.6 atau lebih tinggi, MySQL 5.5 atau lebih tinggi

## Instalasi

Untuk menginstal aplikasi ini di lingkungan lokal Anda, ikuti langkah-langkah berikut:

Clone repositori ini:


```bash
git clone https://github.com/irwansyah1998/TugasAkhir.git
```

Pindah ke direktori proyek:

``` bash
cd sistem-konfeksi
```

Sesuaikan konfigurasi database di application/config/database.php:

``` bash
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'nama_database',
    'dbdriver' => 'mysqli',
    // konfigurasi lainnya
);
```
Impor database SQL:

Temukan file SQL yang tersedia atau anda bisa mendapakannya di [Patreon][1].
Impor file tersebut ke MySQL Anda melalui phpMyAdmin atau command line:

```bash
mysql -u root -p nama_database < path/to/sql/file.sql
```

Set konfigurasi base URL di application/config/config.php:

```bash
$config['base_url'] = 'http://localhost/sistem-konfeksi/';
```

Jalankan aplikasi di browser: Buka browser Anda dan akses:

```bash
http://localhost/sistem-konfeksi/
```

## Penggunaan
Setelah instalasi berhasil, Anda dapat login ke aplikasi menggunakan akun admin. Dashboard utama akan menampilkan berbagai menu untuk pengelolaan stok, pemesanan, produksi, dan distribusi produk.

[1]: <https://en.wikipedia.org/wiki/Hobbit#Lifestyle> "Indra Gunawan Ardiansyah"