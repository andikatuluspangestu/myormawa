<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Divisi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Divisi_model');
    $this->load->model('Anggota_model');
    $this->load->model('auth_model');
    $this->load->helper('url');

  }

  function index()
  {
    // Judul halaman
    $data['judul'] = 'Divisi';

    // Load current user
    $data['current_user'] = $this->auth_model->current_user();

    // Menampilkan data Divisi
    $data['divisi'] = $this->Divisi_model->getDivisi()->result();

    // Menampilkan jumlah anggota per divisi
    $data['jumlah_anggota'] = $this->Divisi_model->getJumlahAnggota()->result();

    // Menampilkan Data pada halaman anggota
    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/anggota/divisi/index', $data);
    $this->load->view('dashboard/partials/footer');
  }

  // Insert Data Divisi
  function tambah()
  {
    $nama_divisi = $this->input->post('nama_divisi');
    $proker = $this->input->post('proker');

    $data = array(
      'nama_divisi' => $nama_divisi,
      'proker' => $proker
    );

    $this->Divisi_model->insertDivisi($data, 'divisi');
    redirect('admin/divisi');
  }

  // Hapus Data Divisi
  function hapus($id)
  {
    $where = array('id' => $id);
    $this->Divisi_model->hapusDivisi($where, 'divisi');
    redirect('admin/divisi');
  }

  // Insert Data baru yang telah diedit
  function edit($id)
  {
    $id = $this->uri->segment(4);
    $nama_divisi = $this->input->post('nama_divisi');
    $proker = $this->input->post('proker');

    $data = array(
      'id' => $id,
      'nama_divisi' => $nama_divisi,
      'proker' => $proker
    );

    $where = array(
      'id' => $id
    );

    $this->Divisi_model->editDivisi($where, $data, 'divisi');
    redirect('admin/divisi');
  }


}
