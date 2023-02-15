<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumen extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dokumen_model');
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

  function proposal()
  {
    $data['judul'] = 'Proposal';
    $data['current_user'] = $this->Auth_model->current_user();
    $data['proposal'] = $this->Dokumen_model->getAllproposal();

    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/dokumen/proposal/index', $data);
    $this->load->view('dashboard/partials/footer');
  }

  function pengajuanProposal()
  {
    $data['judul'] = 'Pengajuan Proposal';
    $data['current_user'] = $this->Auth_model->current_user();

    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/dokumen/proposal/add', $data);
    $this->load->view('dashboard/partials/footer');
  }

  function insertProposal()
  {
    // Ambil Data dari Form
    $judul          = $this->input->post('judul');
    $ketua_panitia  = $this->input->post('ketua_panitia');
    $tanggal_mulai_kegiatan   = $this->input->post('tanggal_mulai_kegiatan');
    $tanggal_selesai_kegiatan = $this->input->post('tanggal_selesai_kegiatan');
    $deskripsi_kegiatan       = $this->input->post('deskripsi_kegiatan');
    $file_proposal            = $_FILES['file_proposal']['name'];

    // Cek apakah ada file yang diupload
    if ($file_proposal) {
      $config['allowed_types'] = 'pdf';
      $config['max_size']      = '2048';
      $config['upload_path']   = './upload/proposal/';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('file_proposal')) {
        $file_proposal = $this->upload->data('file_name');
      } else {
        $message = $this->upload->display_errors();
        $this->session->set_flashdata('message', $message);
      }
    }

    // Insert Data ke Database
    $data = [
      'judul'                 => $judul,
      'ketua_panitia'         => $ketua_panitia,
      'tanggal_mulai_kegiatan'  => $tanggal_mulai_kegiatan,
      'tanggal_selesai_kegiatan' => $tanggal_selesai_kegiatan,
      'deskripsi_kegiatan'       => $deskripsi_kegiatan,
      'file_proposal'            => $file_proposal
    ];

    $this->Dokumen_model->insertProposal($data);

    $this->session->set_flashdata('message', 'Proposal berhasil diajukan!');

    redirect('admin/dokumen/proposal');

  }

  // Hapus Data Proposal
  function deleteProposal($id)
  {

    $proposal = $this->Dokumen_model->getproposalById($id);
    $filename = $proposal['file_proposal'];
    unlink(FCPATH . 'upload/proposal/' . $filename);

    $this->Dokumen_model->deleteProposal($id);
    $this->session->set_flashdata('message', 'Proposal berhasil dihapus!');

    redirect('admin/dokumen/proposal');
  }

}
