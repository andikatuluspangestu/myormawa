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
              <li class="nav-item">
                <!-- Program Kerja Page -->
                <a class="nav-link" href="<?php echo base_url('home/program_kerja'); ?>">Program Kerja</a>
              </li>
              <li class="nav-item active">
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
              <h2>Aspirasi</h2>
              <div class="page_link">
                Sampaikan aspirasi anda kepada kami, agar kami dapat menjadi lebih baik lagi dalam mengembangkan HIMSI.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!-- Start Sample Area -->
  <section class="sample-text-area">
    <div class="container">
      <h3 class="text-heading title_color">Aspirasi</h3>
      <p class="sample-text text-justify">
        Ruang Aspirasi HIMSI merupakan salah satu wadah yang dapat digunakan oleh seluruh mahasiswa/i Sistem Informasi untuk menyampaikan aspirasi, kritik, dan saran yang dapat membantu pengembangan HIMSI. Aspirasi yang disampaikan akan kami pertimbangkan dan akan kami sampaikan kepada Kabinet yang sedang berjalan.
      </p>
    </div>
  </section>
  <!-- End Sample Area -->

  <!-- About -->
  <section class="about_area">
    <div class="container">
      <!-- Form Input Aspirasi -->
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title text-center">
            <h2 class="mb-3">Form Aspirasi</h2>
            <p>
              Silahkan isi form aspirasi dibawah ini.
            </p>

            <!-- Form -->
            <form action="<?php echo base_url('admin/aspirasi/insert'); ?>" method="post">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda" required>
              </div>
              <!-- hidden current tanggal -->
              <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
              <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email anda" required>
              </div>
              <div class="form-group mt-3">
                <label for="aspirasi">Aspirasi</label>
                <textarea class="form-control" id="aspirasi" name="isi" rows="3" placeholder="Masukkan aspirasi anda" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Kirim</button>
            </form>
          </div>
        </div>
    </div>
  </section>

  <!-- Anggota -->
  <section class="feature_area section_gap_top title-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="mb-3 text-white">Peran Anggota</h2>
            <p>
              Setiap anggota kami memiliki peran yang berbeda-beda, namun tetap saling terkait satu sama lain.
            </p>
          </div>
        </div>
      </div>
      <div class="row">

        <!-- Items - Ketua -->
        <div class="col-lg-4 col-md-6">
          <div class="single_feature rounded">
            <div class="desc">
              <h4 class="mt-2 mb-2">Ketua</h4>
              <p>
                Mengelola dan menyusun anggaran organisasi, memimpin rapat-rapat organisasi, mengembangkan visi dan misi organisasi, menjalin hubungan dengan pihak-pihak terkait, memimpin kegiatan-kegiatan organisasi, dan menjadi perwakilan organisasi di forum-forum yang diikuti.
              </p>
            </div>
          </div>
        </div>

        <!-- Items - Wakil Ketua -->
        <div class="col-lg-4 col-md-6">
          <div class="single_feature rounded">
            <div class="desc">
              <h4 class="mt-2 mb-2">Wakil Ketua</h4>
              <p>
                Membantu ketua HIMSI dalam mengelola dan menyusun anggaran organisasi, memimpin rapat-rapat organisasi, mengembangkan visi dan misi organisasi, menjalin hubungan dengan pihak-pihak terkait, dan memimpin kegiatan-kegiatan organisasi
              </p>
            </div>
          </div>
        </div>

        <!-- Items - SekBen -->
        <div class="col-lg-4 col-md-6">
          <div class="single_feature rounded">
            <div class="desc">
              <h4 class="mt-2 mb-2">Sekretaris & Bendahara</h4>
              <p>
                Melakukan pendataan dan administrasi, mengelola keuangan organisasi, menyusun anggaran organisasi, dan mengelola dokumen-dokumen keuangan organisasi. Selain itu, bendahara HIMSI juga bertanggung jawab atas pengelolaan sponsor dan donatur organisasi.
            </div>
          </div>
        </div>

        <!-- Items - Humas -->
        <div class="col-lg-4 col-md-6">
          <div class="single_feature rounded">
            <div class="desc">
              <h4 class="mt-2 mb-2">Humas</h4>
              <p>
                Menjalin hubungan dengan mahasiswa jurusan sistem informasi di luar organisasi, serta mengembangkan program-program yang bermanfaat bagi mahasiswa. Juga bertanggung jawab atas pengelolaan kegiatan-kegiatan yang diadakan di luar organisasi
            </div>
          </div>
        </div>

        <!-- Items - Litbang -->
        <div class="col-lg-4 col-md-6">
          <div class="single_feature rounded">
            <div class="desc">
              <h4 class="mt-2 mb-2">Litbang</h4>
              <p>
                Mengembangkan dan mengelola program-program penelitian dan pengabdian kepada masyarakat yang diadakan oleh organisasi. Selain itu,juga bertanggung jawab atas pengelolaan publikasi-publikasi ilmiah yang dihasilkan oleh anggota organisasi
            </div>
          </div>
        </div>

        <!-- Items - Dokumentasi -->
        <div class="col-lg-4 col-md-6">
          <div class="single_feature rounded">
            <div class="desc">
              <h4 class="mt-2 mb-2">Dokumentasi</h4>
              <p>
                Mengelola dan menyimpan dokumen-dokumen organisasi, serta mengembangkan dan mengelola website dan media sosial organisasi. Selain itu,juga bertanggung jawab atas pengelolaan publikasi-publikasi organisasi, seperti buletin atau newsletter.
            </div>
          </div>
        </div>

        <!-- Items - Sarpras -->
        <div class="col-lg-4 col-md-6">
          <div class="single_feature rounded">
            <div class="desc">
              <h4 class="mt-2 mb-2">Sarana & Prasarana</h4>
              <p>
                Mengelola dan menyusun rencana pengelolaan sarana dan prasarana yang diperlukan oleh organisasi. Selain itu, Juga bertanggung jawab atas pengelolaan keuangan yang berkaitan dengan pengadaan sarana dan prasarana yang diperlukan oleh organisasi.
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php $this->load->view('templates/footer'); ?>

</body>

</html>