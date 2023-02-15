<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pengaturan_model');
    $this->load->model('auth_model');
  }

  function index()
  {

    // Judul Halaman
    $data['judul'] = 'Pengaturan';

    // Load current user
    $data['current_user'] = $this->auth_model->current_user();

    // Menampilkan data dari tabel tentang dengan objek
    $data['tentang'] = $this->Pengaturan_model->getTentang();

    // Menampilkan Halaman Pengaturan
    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/settings/index', $data);
    $this->load->view('dashboard/partials/footer');

  }

  function update()
  {
    // Mengambil data dari form
    $id             = 1;
    $title_website  = $this->input->post('title_website');
    $deskripsi      = $this->input->post('deskripsi');
    $sejarah        = $this->input->post('sejarah');
    $email          = $this->input->post('email');
    $instagram      = $this->input->post('instagram');
    $tiktok         = $this->input->post('tiktok');
    $twitter        = $this->input->post('twitter');

    // Masukkan ke dalam array
    $data = [
      'title_website' => $title_website,
      'deskripsi'     => $deskripsi,
      'sejarah'       => $sejarah,
      'email'         => $email,
      'instagram'     => $instagram,
      'tiktok'        => $tiktok,
      'twitter'       => $twitter
    ];

    // Update data pada tabel tentang
    $this->Pengaturan_model->update($id, $data);

    // Mengembalikan ke halaman pengaturan
    redirect('admin/pengaturan');
  }

}