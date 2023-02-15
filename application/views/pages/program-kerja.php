<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('templates/head'); ?>

<body>

  <!-- Header -->
  <header class="header_area white-header">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h rounded-lg" href="index.html"><img src="<?php echo base_url('assets/img/HIMSI_LOGO.jpg'); ?>" width="50px" style="border-radius: 7px !important;" alt="" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
              <li class="nav-item">
                <!-- Home Page -->
                <a class="nav-link" href="<?php echo base_url('home'); ?>">Beranda</a>
              </li>
              <li class="nav-item active">
                <!-- Program Kerja Page -->
                <a class="nav-link" href="<?php echo base_url('home/program_kerja'); ?>">Program Kerja</a>
              </li>
              <li class="nav-item">
                <!-- About Page -->
                <a class="nav-link" href="<?php echo base_url('home/about'); ?>">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <!-- Events Page -->
                <a class="nav-link" href="<?php echo base_url('home/events'); ?>">Events</a>
              </li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kontak Kami</a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Email</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">WhatsApp</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- About Title -->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="banner_content text-center">
              <h2>Program Kerja</h2>
              <div class="page_link">
                Temukan informasi mengenai tujuan, deskripsi kegiatan, tanggal pelaksanaan, dan lokasi kegiatan di halaman ini.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Sample Area -->
  <section class="sample-text-area">
    <div class="container">
      <h3 class="text-heading title_color">Program Kerja</h3>
      <p class="sample-text text-justify">
        Program kerja Himpunan Mahasiswa Sistem Informasi Universitas BSI Kampus Kota Tegal merupakan serangkaian kegiatan yang diadakan oleh organisasi untuk memenuhi tujuan dan misi organisasi. Kegiatan-kegiatan yang diadakan oleh organisasi ini bervariasi, mulai dari kegiatan akademik seperti seminar dan workshop, hingga kegiatan sosial seperti kunjungan industri dan donasi kepada masyarakat. Program kerja organisasi ini bertujuan untuk meningkatkan kemampuan dan pengetahuan anggota organisasi, serta memperkuat solidaritas dan kebersamaan antar anggota. Selain itu, program kerja ini juga bertujuan untuk memberikan manfaat bagi masyarakat di sekitar universitas.
      </p>

      <!-- Unduh Proker -->
      <div class="row">
        <div class="col-12 mt-4">

          <h5>Unduh dokumen program kerja per-divisi : </h5>

          <!-- Buat tombol sesuai jumlah divisi yang ada di database -->
          <?php

          // Ambil data divisi dari database
          $divisi = $this->db->get('divisi')->result_array();

          // Buat tombol sesuai jumlah divisi yang ada di database
          foreach ($divisi as $data) : ?>
            <a href="<?= $data['proker']; ?>" class="btn btn-sm btn-primary" style="margin-bottom: 10px;"><?php echo $data['nama_divisi']; ?></a>
          <?php endforeach;

          ?>

        </div>
      </div>
    </div>

  </section>
  <!-- End Sample Area -->

  <!-- About -->
  <section class="about_area section_gap_bottom">
    <div class="container">
      <div class="row h_blog_item">
        <table class="table">
          <thead style="background-color: #002347; color:antiquewhite;">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Kegiatan</th>
              <th scope="col">Periode</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($proker as $data) : ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->kegiatan ?></td>
                <td><?= $data->periode ?></td>
                <td><?= $data->lokasi ?></td>
                <!-- Jika status == selesai, maka tampilkan badge selesai -->
                <?php if ($data->status == 'selesai') : ?>
                  <td><span class="badge badge-success">Selesai</span></td>
                  <!-- Jika status == belum, maka tampilkan badge belum -->
                <?php else : ?>
                  <td><span class="badge badge-danger">Belum Selesai</span></td>
                <?php endif; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Anggota -->
  <section class="feature_area section_gap_top title-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="main_title">
          <h2 class="mb-5 text-white">Motto Kerja</h2>
          <p>
            Motto kerja Himpunan Mahasiswa Sistem Informasi Universitas BSI Kampus Kota Tegal adalah "Berkarya, Berbagi, dan Berkembang". Motto ini menjadi pedoman bagi setiap anggota organisasi dalam menjalankan kegiatan-kegiatan yang diadakan oleh organisasi. Motto ini mengingatkan kita untuk selalu bekerja dengan sungguh-sungguh, berbagi ilmu dan pengalaman dengan sesama, serta terus belajar dan berkembang sebagai individu yang lebih baik. Dengan demikian, kita dapat memberikan manfaat yang lebih besar bagi organisasi dan masyarakat di sekitar kita.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php $this->load->view('templates/footer'); ?>

</body>

</html>