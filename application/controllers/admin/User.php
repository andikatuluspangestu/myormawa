<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    // Load user model
    $this->load->model('user_model');
    $this->load->model('auth_model');

  }

  public function index()
  {
    // Judul
    $data['judul'] = 'Pengguna';

    // Load current user
    $data['current_user'] = $this->auth_model->current_user();
    $data['user'] = $this->user_model->getAllUser()->result();

    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/users/index', $data);
    $this->load->view('dashboard/partials/footer');
  }

  public function add()
  {
    // Judul
    $data['judul'] = 'Tambah Pengguna';

    // Load current user
    $data['current_user'] = $this->auth_model->current_user();

    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/users/tambah', $data);
    $this->load->view('dashboard/partials/footer');
  }

  public function insert()
  {
    // Load form validation library
    $this->load->library('form_validation');

    // Set validation rules
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('role', 'Role', 'required');

    if ($this->form_validation->run() == FALSE) {
      // Jika validasi gagal, kembalikan ke halaman tambah pengguna
      $this->add();
    } else {
      // Jika validasi berhasil, simpan data ke database
      $data = array(
        'name'      => $this->input->post('name'),
        'email'     => $this->input->post('email'),
        'username'  => $this->input->post('username'),
        'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'role'      => $this->input->post('role')
      );

      $this->user_model->insert($data);

      // Set pesan data berhasil disimpan
      $this->session->set_flashdata('message', 'Data berhasil disimpan');

      // Kembalikan ke halaman pengguna
      redirect('dashboard/anggota');
    }
  }

  public function edit($id)
  {
    // Judul
    $data['judul'] = 'Edit Pengguna';

    // Load current user
    $data['current_user'] = $this->auth_model->current_user();

    // Ambil data pengguna berdasarkan id
    $data['user'] = $this->user_model->getUserById($id);

    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/users/edit', $data);
    $this->load->view('dashboard/partials/footer');
  }

  public function update()
  {
    // Load form validation library
    $this->load->library('form_validation');

    // Set validation rules
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('role', 'Role', 'required');

    if ($this->form_validation->run() == FALSE) {
      // Jika validasi gagal, kembalikan ke halaman edit pengguna
      $this->edit($this->input->post('id'));
    } else {
      // Jika validasi berhasil, simpan data ke database
      $data = array(
        'name'      => $this->input->post('name'),
        'username'  => $this->input->post('username'),
        'email'     => $this->input->post('email'),
        'role'      => $this->input->post('role')
      );

      $this->user_model->update($this->input->post('id'), $data);

      // Set pesan data berhasil disimpan
      $this->session->set_flashdata('message', 'Data berhasil disimpan');

      // Kembalikan ke halaman pengguna
      redirect('dashboard/user');
    }
  }

  public function delete($id)
  {
    // Hapus data pengguna berdasarkan id
    $this->user_model->delete($id);

    // Set pesan data berhasil dihapus
    $this->session->set_flashdata('message', 'Data berhasil dihapus');

    // Kembalikan ke halaman pengguna
    redirect('dashboard/user');
  }

}
