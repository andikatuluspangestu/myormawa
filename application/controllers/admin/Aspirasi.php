<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load-> model('Aspirasi_model');
    $this->load->model('auth_model');
    $this->load->helper('url');
  }

  function index()
  {
    // Judul halaman
    $data['judul'] = 'Aspirasi';

    // Load current user
    $data['current_user'] = $this->auth_model->current_user();

    // Menampilkan semua data aspirasi
    $data['aspirasi'] = $this->Aspirasi_model->getAspirasi()->result();

    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/aspirasi/index', $data);
    $this->load->view('dashboard/partials/footer');
  }

  // Ambil semua data aspirasi
  function getAspirasi()
  {
    // Menampilkan semua data aspirasi
    $data = $this->Aspirasi_model->jumlahAspirasiBelumDibaca()->result();
    echo json_encode($data);
  }

  // Insert aspirasi
  function insert()
  {
    // Ambil data dari form
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $tanggal = date('Y-m-d');
    $isi = $this->input->post('isi');

    // Insert data ke database
    $data = array(
      'nama' => $nama,
      'email' => $email,
      'tanggal' => $tanggal,
      'isi' => $isi,
      'status' => 'diterima'
    );

    $this->Aspirasi_model->insertAspirasi($data);

    // Redirect ke halaman aspirasi
    redirect('home/aspirasi');
  }


  // Update status aspirasi
  function updateStatus($id)
  {
    // Menampilkan data aspirasi berdasarkan id
    $data = $this->Aspirasi_model->getAspirasiById($id)->row();

    // Jika status == diterima
    if ($data->status == 'diterima') {
      // Update status menjadi ditolak
      $this->db->set('status', 'ditolak');
      $this->db->where('id', $id);
      $this->db->update('aspirasi');
      // Redirect ke halaman aspirasi
      redirect('admin/aspirasi');
    } else {
      // Update status menjadi diterima
      $this->db->set('status', 'diterima');
      $this->db->where('id', $id);
      $this->db->update('aspirasi');
      // Redirect ke halaman aspirasi
      redirect('admin/aspirasi');
    }
  }

}