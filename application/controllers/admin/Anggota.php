<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    // Load Model
    $this->load->model('Anggota_model');
    $this->load->model('Auth_model');
    $this->load->model('Divisi_model');

    // Form Validation
    $this->load->library('form_validation');
    $this->load->library('session');

    // Cek apakah session sudah ada
    if (!$this->session->has_userdata('username')) {
      redirect('auth');
    } else {
      // Cek apakah user sudah login
      if (!$this->Auth_model->is_logged_in()) {
        redirect('auth');
      }
    }

  }

  function index()
  {
    // Judul Halaman
    $data['judul'] = 'Anggota';

    // Mengambil data dari database
    $data['anggota']  = $this->Anggota_model->getAnggota()->result();

    $this->load->model('auth_model');
    $data['current_user'] = $this->auth_model->current_user();

    // Menampilkan Data pada halaman anggota
    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/anggota/list_anggota/index', $data);
    $this->load->view('dashboard/partials/footer');

  }

  function add()
  {

    // Load Library Form Validation dan Session
    $this->load->library('form_validation');
    $this->load->library('session');

    // Judul Halaman
    $data['judul']  = 'Tambah Anggota';

    // Mengambil data dari database
    $data['divisi'] = $this->Divisi_model->getDivisi()->result_array();

    $this->load->model('auth_model');
    $data['current_user'] = $this->auth_model->current_user();

    // Menampilkan Data pada halaman anggota
    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/anggota/list_anggota/add', $data);
    $this->load->view('dashboard/partials/footer');
  }

  function insert()
  {
    // Ambil data dari form
    $nama           = $this->input->post('nama_lengkap');
    $kelas          = $this->input->post('kelas');
    $nim            = $this->input->post('nim');
    $jenis_kelamin  = $this->input->post('jenis_kelamin');
    $alamat         = $this->input->post('alamat');
    $no_telepon     = $this->input->post('no_telepon');
    $divisi         = $this->input->post('divisi');
    $foto           = $this->input->post('foto');

    // Validasi Form NIM, Email, dan No Telepon
    $this->form_validation->set_rules('nim', 'NIM', 'required|is_unique[anggota.nim]');

    // Run Validasi
    if ( $this->form_validation->run() == FALSE ){
      $this->session->set_flashdata('message', validation_errors());
      redirect('admin/anggota/add');
    } else {

      // Konfigurasi Upload Foto
      $config['upload_path']          = FCPATH . '/upload/anggota/';
      $config['allowed_types']        = 'gif|jpg|jpeg|png';
      $config['file_name']            = $nim;
      $config['overwrite']            = true;
      $config['max_size']             = 2040; // 2MB

      // Load Library Upload
      $this->load->library('upload', $config);

      // Run Upload
      if ( !$this->upload->do_upload('foto') ){
        $this->session->set_flashdata('message', $this->upload->display_errors());
        redirect('admin/anggota/add');
      } else {

        // Ambil data dari form
        $nama           = $this->input->post('nama_lengkap');
        $kelas          = $this->input->post('kelas');
        $nim            = $this->input->post('nim');
        $jenis_kelamin  = $this->input->post('jenis_kelamin');
        $alamat         = $this->input->post('alamat');
        $no_telepon     = $this->input->post('no_telepon');
        $divisi         = $this->input->post('divisi');
        $foto           = $this->upload->data('file_name');

        // Data yang akan di insert
        $data = array(
          'nama_lengkap'  => $nama,
          'kelas'         => $kelas,
          'nim'           => $nim,
          'jenis_kelamin' => $jenis_kelamin,
          'alamat'        => $alamat,
          'no_telepon'    => $no_telepon,
          'divisi'        => $divisi,
          'email'         => $nim . '@bsi.ac.id',
          'foto'          => $foto
        );

        // Insert data ke database
        $this->Anggota_model->insert($data);

        // Set flashdata
        $this->session->set_flashdata('message', 'Data berhasil ditambahkan');

        // Redirect ke halaman anggota
        redirect('admin/anggota');

      }

    }

  }

  function edit($id)
  {

    // Judul halaman
    $data['judul'] = 'Anggota';

    // Ambil data anggota berdasarkan id
    $data['anggota'] = $this->Anggota_model->getAnggotaById($id)->row_array();

    $this->load->model('auth_model');
    $data['current_user'] = $this->auth_model->current_user();

    // Tampilkan halaman edit anggota
    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar', $data);
    $this->load->view('dashboard/anggota/list_anggota/edit', $data);
    $this->load->view('dashboard/partials/footer');
  }

  function update($id)
  {

    $nama           = $this->input->post('nama_lengkap');
    $kelas          = $this->input->post('kelas');
    $nim            = $this->input->post('nim');
    $jenis_kelamin  = $this->input->post('jenis_kelamin');
    $alamat         = $this->input->post('alamat');
    $no_telepon     = $this->input->post('no_telepon');
    $foto           = $_FILES['foto']['name'];

    if ($this->input->method() === 'post') {

      $file_name = $foto;
      $config['upload_path']    = FCPATH . '/upload/anggota/';
      $config['allowed_types']  = 'gif|jpg|jpeg|png';
      $config['file_name']      = $file_name;
      $config['overwrite']      = true;
      $config['max_size']       = 2024; // 2MB

      // Load Library Upload
      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('foto')) {

        // Jika tidak ada Foto Baru yang diupload, maka gunakan foto lama
        $new_data = [
          'nama_lengkap'  => $nama,
          'kelas'         => $kelas,
          'nim'           => $nim,
          'jenis_kelamin' => $jenis_kelamin,
          'alamat'        => $alamat,
          'no_telepon'    => $no_telepon,
          'email'         => $nim . '@bsi.ac.id',
        ];

        // Update Data ke Model
        $this->Anggota_model->update($id, $new_data);

        // Redirect ke halaman anggota
        redirect('admin/anggota');
      } else {
        $uploaded_data = $this->upload->data();

        // Resize image
        $config['image_library']  = 'gd2';
        $config['source_image']   = $uploaded_data['full_path'];
        $config['maintain_ratio'] = TRUE;
        $config['width']          = 240;
        $config['height']         = 320;

        $new_data = [
          'foto'          => $uploaded_data['file_name'],
          'nama_lengkap'  => $nama,
          'kelas'         => $kelas,
          'nim'           => $nim,
          'jenis_kelamin' => $jenis_kelamin,
          'alamat'        => $alamat,
          'no_telepon'    => $no_telepon,
          'email'         => $nim . '@bsi.ac.id',
        ];

        // Update Data ke Model
        $this->Anggota_model->update($id, $new_data);

        // Set flashdata
        $this->session->set_flashdata('message', 'Data berhasil diupdate');

        // Redirect ke halaman anggota
        redirect('admin/anggota');
      }
    }
  }

  function detail($id)
  {
    // Judul halaman
    $data['judul']    = 'Anggota';

    $this->load->model('auth_model');
    $data['current_user'] = $this->auth_model->current_user();

    // Ambil data anggota berdasarkan id
    $data['anggota']  = $this->Anggota_model->getAnggotaById($id)->row();

    // Ambil data divisi berdasarkan id divisi yang dipilih
    $data['divisi']   = $this->Divisi_model->getDivisiById($data['anggota']->divisi)->row();

    if ($data['divisi'] !== null) {
      $nama_divisi = $data['divisi']->nama_divisi;
    } else {
      $nama_divisi = 'Tidak ada data divisi';
    }

    $data['nama_divisi'] = $nama_divisi;

    // Tampilkan halaman detail anggota
    $this->load->view('dashboard/partials/header');
    $this->load->view('dashboard/partials/sidebar');
    $this->load->view('dashboard/anggota/list_anggota/detail', $data);
    $this->load->view('dashboard/partials/footer');
  }

  function delete($id)
  {
    $anggota = $this->Anggota_model->getAnggotaById($id)->row();
    $foto = $anggota->foto;

    if ($foto !== null) {
      $path = FCPATH . '/upload/anggota/' . $foto;
      unlink($path);
    }

    $this->Anggota_model->delete($id);
    redirect('admin/anggota');
  }

}