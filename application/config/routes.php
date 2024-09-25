<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'user_login';
$route['404_override'] = 'pagenotfound';
$route['translate_uri_dashes'] = FALSE;

// Akses login dan register
$route['form/pendaftaran']='user_login/index';
$route['form/login']='user_login/login';
$route['form/login/masuk']='user_login/aksi_login';

// Akses untuk logout
$route['pengguna/session/this/logout']='user_login/aksi_logout';

// Akses untuk Admin
$route['pengguna/admin']='user_admin/index';
$route['pengguna/admin/statistik']='user_admin/index';
$route['pengguna/admin/tabel/pesanan']='user_admin/tabel_pesanan';

// Akses untuk Admin - edit
$route['pengguna/admin/tabel/pesanan/edit']='user_admin/edit_pesanan';
$route['pengguna/admin/tabel/pesanan/status/simpan']='user_admin/edit_status_psn';
$route['pengguna/admin/tabel/pesanan/insert']='user_admin/tambah_pesanan';

$route['pengguna/admin/tabel/pesanan/edit/insup']='user_admin/insup_pesanan';


// 
$route['pengguna/admin/tabel/belum/pesanan']='user_admin/psn_blm_selesai';
$route['pengguna/admin/tabel/selesai/pesanan']='user_admin/psn_selesai';

// export data to pdf
$route['pengguna/admin/tabel/pesanan/export/selesai/data/pdf']='user_admin/pesanan_export';

// Tabel nama bahan
$route['pengguna/admin/tabel/bahan/nama']='user_admin/tb_bahan_nama';
$route['pengguna/admin/tabel/bahan/nama/tambah']='user_admin/tb_bahan_nama_add';
$route['pengguna/admin/tabel/bahan/nama/edit']='user_admin/tb_bahan_nama_edit';
$route['pengguna/admin/tabel/bahan/nama/insup']='user_admin/tb_bahan_nama_insup';
// tabel jenis bahan
$route['pengguna/admin/tabel/bahan/jenis']='user_admin/tb_bahan_jenis';
$route['pengguna/admin/tabel/bahan/jenis/tambah']='user_admin/tb_bahan_jenis_add';
$route['pengguna/admin/tabel/bahan/jenis/edit']='user_admin/tb_bahan_jenis_edit';
$route['pengguna/admin/tabel/bahan/jenis/insup']='user_admin/tb_bahan_jenis_insup';
// tabel warna bahan
$route['pengguna/admin/tabel/bahan/warna']='user_admin/tb_bahan_warna';
$route['pengguna/admin/tabel/bahan/warna/tambah']='user_admin/tb_bahan_warna_add';
$route['pengguna/admin/tabel/bahan/warna/edit']='user_admin/tb_bahan_warna_edit';
$route['pengguna/admin/tabel/bahan/warna/insup']='user_admin/tb_bahan_warna_insup';

// Tabel Bahan
$route['pengguna/admin/tabel/bahan/tabel']='user_admin/tb_bahan_tabel';
$route['pengguna/admin/tabel/bahan/tabel/tambah']='user_admin/tb_bahan_tabel_add';
$route['pengguna/admin/tabel/bahan/tabel/edit']='user_admin/tb_bahan_tabel_edit';
$route['pengguna/admin/tabel/bahan/tabel/insup']='user_admin/tb_bahan_tabel_insup';

// produksi
$route['pengguna/admin/produksi/produk']='user_admin/produksi_produk';
$route['pengguna/admin/produksi/produk/insert']='user_admin/produksi_produk_insert';
$route['pengguna/admin/produksi/produk/edit']='user_admin/produksi_produk_edit';
$route['pengguna/admin/produksi/produk/insup']='user_admin/produksi_produk_insup';

// pemgaturan
$route['pengguna/admin/setting/akun']='user_admin/pengaturan_akun';
$route['pengguna/admin/setting/akun/edit']='user_admin/pengaturan_akun_edit';
$route['pengguna/admin/setting/akun/tambah']='user_admin/pengaturan_akun_add';
$route['pengguna/admin/setting/akun/profil']='user_admin/pengaturan_profil_akun';
$route['pengguna/admin/setting/akun/profil/edit']='user_admin/pengaturan_profil_akun_edit';
$route['ambildatadari/database/berupapassuntukmengatur/ulang/']='user_admin/pengaturan_profil_akun_ambil_dataPass';

// Manager
// Akses Manager
// Akses untuk Manager
$route['pengguna/manager']='user_manager/index';
$route['pengguna/manager/statistik']='user_manager/index';
$route['pengguna/manager/tabel/pesanan']='user_manager/tabel_pesanan';

$route['pengguna/manager/tabel/selesai/pesanan']='user_manager/psn_selesai';

// export data to pdf
$route['pengguna/manager/tabel/pesanan/export/selesai/data/pdf']='user_manager/pesanan_export';

// Tabel Bahan
$route['pengguna/manager/tabel/bahan/tabel']='user_manager/tb_bahan_tabel';

// produksi
$route['pengguna/manager/produksi/produk']='user_manager/produksi_produk';

// pemgaturan
$route['pengguna/manager/setting/akun']='user_manager/pengaturan_akun';
$route['pengguna/manager/setting/akun/edit']='user_manager/pengaturan_akun_edit';
$route['pengguna/manager/setting/akun/tambah']='user_manager/pengaturan_akun_add';
$route['pengguna/manager/setting/akun/profil']='user_manager/pengaturan_profil_akun';
$route['pengguna/manager/setting/akun/profil/edit']='user_manager/pengaturan_profil_akun_edit';
$route['ambildatadari/database/berupapassuntukmengatur/ulang/']='user_manager/pengaturan_profil_akun_ambil_dataPass';



// Akses untuk pengguna
$route['pengguna/user']='user_pengguna/index';

//fungsi variable agar bisa digunakan untuk controller
// $route['(:any)'] = 'halaman/view/$1';
