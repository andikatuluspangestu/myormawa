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
              <h2>Tentang HIMSI</h2>
              <div class="page_link">
                Temukan lebih banyak tentang latar belakang, filosofi, dan struktur organisasi kami
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
      <h3 class="text-heading title_color">Sejarah</h3>
      <p class="sample-text text-justify">
        HIMSI adalah sebagai salah satu wadah organisasi yang sangat dibutuhkan oleh seluruh
        mahasiswa Sistem Informasi Universitas Bina Sarana Informatika untuk mencurahkan
        ide-ide brilian dan mengembangkan kemampuan mereka dalam menguasai materi-materi
        informatika, dan mengembangkan kreativitas yang tidak hanya bersifat teoritis, sehingga
        mereka menjadi akademisi yang profesional dan patut diteladani. Pada tanggal 31 januari
        HIMSI UBSI Secara resmi berdiri menurut SK No.601/1.02/UBSI/I/2019 oleh REKTOR
        UBSI.
        <br><br>
        Kami merupakan organisasi kemahasiswaan yang terdiri dari mahasiswa jurusan sistem informasi di Universitas BSI Kampus Kota Tegal. Tujuan dari organisasi ini adalah untuk menjadi wadah bagi mahasiswa sistem informasi untuk belajar, berkembang, dan berkontribusi di bidang sistem informasi.
        Melalui berbagai kegiatan yang diadakan, mahasiswa dapat meningkatkan kemampuan dan pengetahuan mereka, serta memperluas jaringan dengan teman sejurusan dan industri. Selain itu, organisasi ini juga bertujuan untuk memperkuat solidaritas dan kebersamaan antar mahasiswa sistem informasi serta menjadi wadah pengembangan diri bagi anggotanya.
      </p>
    </div>
  </section>
  <!-- End Sample Area -->

  <!-- About -->
  <section class="about_area">
    <div class="container">
      <div class="row h_blog_item">
        <div class="col-lg-6">
          <div class="h_blog_img">
            <img class="img-fluid" src="https://www.rightclickit.com.au/wp-content/uploads/2018/09/Image-Coming-Soon-ECC.png" alt="" />
          </div>
        </div>
        <div class="col-lg-6">
          <div class="h_blog_text">
            <div class="h_blog_text_inner left right">
              <h4>Struktur Organisasi <br> Kabinet 2023-2024</h4>
              <p>
                <strong>Visi</strong>
              <ol>
                <li>
                  Visi kami menjadikan Himpunan Mahasiswa Sistem Informasi sebagai wadah untuk menuntun
                  mahasiswa/i untuk saling belajar mengajar bersama secara inovatif, memperluas
                  relasi, dan menciptakan prestasi, serta bermanfaat untuk masyarakat sekitar.
                </li>
              </ol>

              <strong>Misi</strong>
              <ol>
                <li>Meningkatkan kontribusi organisasi kepada lingkungan kampus dan masyarakat</li>
                <li>Memberikan ruang serta kesempatan kepada semua mahasiswa untuk menunjukan
                  ide, kreativitas, dan peran aktif mahasiswa</li>
                <li>Menjalin hubungan baik dan kerjasama dengan organisasi mahasiswa lainnya serta
                  menjaga nama baik Himpunan</li>
                <li>Menciptakan ikatan yang kuat dan rasa memiliki terhadap Himpunan serta
                  menjadikan HIMSI sebagai salah satu keluarga.</li>
                <li>Menanamkan sikap dan perilaku yang baik serta mengembangkan potensi diri
                  mahasiswa/i HIMSI</li>
              </ol>
              </p>
            </div>
          </div>
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