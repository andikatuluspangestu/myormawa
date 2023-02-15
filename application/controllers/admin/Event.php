<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Event_model');
    $this->load->model('Anggota_model');
    $this->load->model('auth_model');
    $this->load->library('form_validation');
    $this->load->helper('url');
  }

  function index()
  {
    // Judul halaman
    $data['judul'] = 'Events';

    // Load current user
    $data['current_user'] = $this->auth_model->current_user();

    // Menampilkan semua data acara
    $data['acara'] = $this->Event_model->getAcara()->result();

    // Menampilkan Data pada halaman anggota
    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/events/index', $data);
    $this->load->view('dashboard/partials/footer');
  }

  // Insert Data Acara
  function tambah(){

    $acara        = $this->input->post('acara');
    $tanggal      = $this->input->post('tanggal');
    $waktu        = $this->input->post('waktu');
    $lokasi       = $this->input->post('lokasi');
    $biaya        = $this->input->post('biaya');
    $deskripsi    = $this->input->post('deskripsi');
    $pendaftaran  = $this->input->post('pendaftaran');

    $data = array(
      'acara'       => $acara,
      'tanggal'     => $tanggal,
      'waktu'       => $waktu,
      'lokasi'      => $lokasi,
      'biaya'       => $biaya,
      'deskripsi'   => $deskripsi,
      'pendaftaran' => $pendaftaran
    );

    $this->Event_model->insertAcara($data, 'acara');
    redirect('admin/event');
  }

  // Edit Data Acara
  function edit($id)
  {
    $id = $this->uri->segment(4);
    $acara        = $this->input->post('acara');
    $tanggal      = $this->input->post('tanggal');
    $waktu        = $this->input->post('waktu');
    $lokasi       = $this->input->post('lokasi');
    $biaya        = $this->input->post('biaya');
    $deskripsi    = $this->input->post('deskripsi');
    $pendaftaran  = $this->input->post('pendaftaran');

    $data = array(
      'id' => $id,
      'acara'       => $acara,
      'tanggal'     => $tanggal,
      'waktu'       => $waktu,
      'lokasi'      => $lokasi,
      'biaya'       => $biaya,
      'deskripsi'   => $deskripsi,
      'pendaftaran' => $pendaftaran
    );

    $where = array(
      'id' => $id
    );

    $this->Event_model->editAcara($where, $data, 'acara');
    redirect('admin/event');

  }

  // Hapus Data Acara
  function hapus($id)
  {
    $id = $this->uri->segment(4);
    $where = array('id' => $id);
    $this->Event_model->hapusAcara($where, 'acara');
    redirect('admin/event');
  }


}
