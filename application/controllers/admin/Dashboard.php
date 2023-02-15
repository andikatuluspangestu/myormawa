<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('auth_model');
    $this->load->model('aspirasi_model');

    if (!$this->auth_model->current_user()) {
      redirect('auth/login');
    }

    // Cek apakah user sudah login
    if (!$this->session->userdata('username')) {
      // Redirect ke halaman login
      redirect('auth/login');
    }
  }

  function index()
  {

    $this->load->model('auth_model');
    $data['current_user'] = $this->auth_model->current_user();

    $data = [
      "current_user" => $this->auth_model->current_user(),
      "total_anggota" => $this->db->get('anggota')->num_rows(),
      "total_acara" => $this->db->get('acara')->num_rows(),
      "total_program" => $this->db->get('program_kerja')->num_rows(),
      "total_aspirasi_belumdibaca" => $this->aspirasi_model->jumlahAspirasiBelumDibaca()->num_rows(),

      // Tampilkan data aspirasi yang belum dibaca
      "aspirasi" => $this->aspirasi_model->getAspirasiBelumDibaca()->result(),

      // Tampilkan data program yang periode dalam waktu kurang dari 2 bulan
      "program" => $this->db->query("SELECT * FROM program_kerja WHERE periode <= 2")->result(),
    ];

    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/index', $data);
    $this->load->view('dashboard/partials/footer');
  }

}