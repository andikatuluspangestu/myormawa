<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Divisi_model');
    $this->load->model('Anggota_model');
    $this->load->model('Event_model');
  }

  function index()
  {
    // Ambil semua data anggota
    $data['anggota'] = $this->Anggota_model->getAllAnggotaWithDivisi()->result();

    // Tampilkan ke halaman index
    $this->load->view('index', $data);
  }

  // Method for view about page
  function about()
  {
    $this->load->view('pages/about');
  }

  // Method for view program-kerja page
  function program_kerja()
  {

    // Menampilkan semua data program kerja
    $data['proker'] = $this->Divisi_model->getProker()->result();

    $this->load->view('pages/program-kerja', $data);
  }

  // Method for view Events page
  function events()
  {

    // Menampilkan semua data acara
    $data['acara'] = $this->Event_model->getAcara()->result();

    $this->load->view('pages/list-events', $data);
  }

  // Method for view aspirasi
  function aspirasi()
  {
    $this->load->view('pages/aspirasi');
  }

}