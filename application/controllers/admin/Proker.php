<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proker extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Divisi_model');
    $this->load->model('Anggota_model');
    $this->load->library('form_validation');
    $this->load->helper('url');
  }

  function index()
  {
    // Judul halaman
    $data['judul'] = 'Program Kerja';

    // Load current user
    $this->load->model('auth_model');
    $data['current_user'] = $this->auth_model->current_user();

    // Menampilkan semua data program kerja
    $data['proker'] = $this->Divisi_model->getProker()->result();

    // Menampilkan Data pada halaman anggota
    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/anggota/program_kerja/index', $data);
    $this->load->view('dashboard/partials/footer');
  }

  // Insert data Program Kerja
  function insert()
  {
    $kegiatan = $this->input->post('kegiatan');
    $detail = $this->input->post('detail');
    $periode = $this->input->post('periode');
    $lokasi = $this->input->post('lokasi');

    if ($this->input->method() === 'post') {

      $data = array(
        'kegiatan' => $kegiatan,
        'detail' => $detail,
        'periode' => $periode,
        'lokasi' => $lokasi
      );

      $this->Divisi_model->insertProker($data, 'proker');
      redirect('admin/proker');
    }
  }

  // Update status program kerja menjadi selesai
  // halaman anggota
  function updateStatus($id)
  {
    // Ambil data program kerja berdasarkan id
    $where = ['id' => $id];

    // Jika status sebelumnya adalah selesai, maka ubah ke belumselesai
    if ($this->Divisi_model->getProkerById($id)->row()->status == 'selesai') {
      $data = ['status' => 'belumselesai'];
      $this->Divisi_model->updateStatus($where, $data);
      redirect('admin/proker');
    } else {
      // Jika status sebelumnya adalah belumselesai, maka ubah ke selesai
      $data = ['status' => 'selesai'];
      $this->Divisi_model->updateStatus($where, $data);
      redirect('admin/proker');
    }

  }

  // Hapus data program kerja
  function delete($id)
  {
    $where = ['id' => $id];
    $this->Divisi_model->deleteProker($where);
    redirect('admin/proker');
  }
}
