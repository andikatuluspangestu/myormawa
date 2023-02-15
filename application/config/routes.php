<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Membuat Router untuk halaman admin
$route['dashboard']                 = 'admin/dashboard';
$route['dashboard/event']           = 'admin/event';
$route['dashboard/proker']          = 'admin/proker';
$route['dashboard/anggota']         = 'admin/anggota';
$route['dashboard/divisi']          = 'admin/divisi';
$route['dashboard/proposal']        = 'admin/dokumen/proposal';
$route['dashboard/ruangan']         = 'admin/dokumen/ruangan';
$route['dashboard/pengguna']        = 'admin/user';
$route['dashboard/aspirasi']        = 'admin/aspirasi';
$route['dashboard/pengaturan']      = 'admin/pengaturan';

// Router untuk halaman Anggota
$route['dashboard/anggota']         = 'admin/anggota';
$route['dashboard/anggota/tambah']  = 'admin/anggota/add';
$route['dashboard/anggota/insert']  = 'admin/anggota/insert';
$route['dashboard/anggota/detail/(:any)']  = 'admin/anggota/detail/$1';
$route['dashboard/anggota/edit/(:any)']  = 'admin/anggota/edit/$1';
$route['dashboard/anggota/hapus/(:any)'] = 'admin/anggota/hapus/$1';

// Router untuk halaman Dokumen
$route['dashboard/proposal']            = 'admin/dokumen/proposal';
$route['dashboard/proposal/pengajuan']  = 'admin/dokumen/pengajuanProposal';

// Router untuk halaman Peminjaman Ruangan
$route['dashboard/ruangan']         = 'admin/ruangan';

# Disable Controller access without routing
// $route['(.*)'] = "error404";