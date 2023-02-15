<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Ruangan_model');
    $this->load->model('Auth_model');

    // Form Validation
    $this->load->library('form_validation');
    $this->load->library('session');

    // Cek apakah session sudah ada
    if (!$this->session->has_userdata('username')) {
      redirect('auth');
    } else {
      if (!$this->Auth_model->is_logged_in()) {
        redirect('auth');
      }
    }
  }

  function index()
  {
    $data['judul'] = 'Peminjaman Ruangan';
    $data['current_user'] = $this->Auth_model->current_user();

    // Ambil data ruangan
    $data['ruangan'] = $this->Ruangan_model->get_all();

    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/dokumen/ruangan/index', $data);
    $this->load->view('dashboard/partials/footer');
  }

  function tambah()
  {
    $ruangan     = $this->input->post('ruangan');
    $kegiatan    = $this->input->post('kegiatan');
    $tgl_mulai   = $this->input->post('tgl_mulai');
    $tgl_selesai = $this->input->post('tgl_selesai');

    $data = array(
      'ruangan'     => $ruangan,
      'kegiatan'    => $kegiatan,
      'tgl_mulai'   => $tgl_mulai,
      'tgl_selesai' => $tgl_selesai
    );

    $this->Ruangan_model->insert($data);

    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
    } else {
      $this->session->set_flashdata('error', 'Data gagal ditambahkan');
    }

    redirect('admin/ruangan');

  }

}