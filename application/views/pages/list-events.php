<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('templates/head'); ?>
<style>
  #event-invitation {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: lightblue;
    padding: 20px;
    border-radius: 5px;
    transition: transform 0.2s ease-in-out;
  }

  #event-invitation:hover {
    transform: scale(1.1);
  }

  #event-invitation h1 {
    font-size: 24px;
    margin-bottom: 10px;
    color: white;
  }

  #event-invitation p {
    font-size: 16px;
    margin-bottom: 20px;
    color: white;
  }

  #event-invitation button {
    background-color: darkblue;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }

  #event-invitation button:hover {
    background-color: blue;
  }
</style>

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
              <li class="nav-item">
                <!-- About Page -->
                <a class="nav-link" href="<?php echo base_url('home/about'); ?>">Tentang Kami</a>
              </li>
              <li class="nav-item active">
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
          <div class="col-lg-6 mt-5">
            <div class="banner_content text-center">
              <h2>Events</h2>
              <div class="page_link">
                Jangan lewatkan kesempatan untuk ikut serta dalam kegiatan-kegiatan yang kami adakan. Ayo ikuti kegiatan-kegiatan yang kami adakan dan dapatkan manfaatnya!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Event list -->
  <div class="popular_courses section_gap_top">
    <div class="container">
      <h3 class="text-heading title_color">Events atau Acara yang Akan Datang</h3>
      <p>
        Berikut adalah daftar acara atau event yang akan datang, jangan lewatkan kesempatan untuk ikut serta dalam kegiatan-kegiatan yang kami adakan. <br> Ayo ikuti kegiatan-kegiatan yang kami adakan dan dapatkan manfaatnya. ( Klik pada judul event untuk mendaftar event )
        <br>
      </p>
      <div class="row pt-4">
        <div class="col-4">
          <?php foreach ($acara as $data) : ?>
            <div class="single_course shadow rounded">
              <div class="course_head">
                <!-- Random Images or Photos from Unsplash -->
                <img class="img-fluid rounded " src="https://source.unsplash.com/500x300/?programmer" alt="" />
              </div>
              <div class="course_content">
                <span class="price">20k</span>
                <span class="tag mb-4 d-inline-block">Coding</span>
                <h4 class="mb-3">
                  <a href="#"><?= $data->acara; ?></a>
                </h4>
                <p>
                  <?= $data->deskripsi; ?>
                </p>
                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                  <div class="mt-lg-0 mt-3">
                    <span class="meta_info mr-4">
                      <!-- Location Info -->
                      <a href="#">
                        <i class="ti-location-pin mr-2"></i>
                        <?= $data->lokasi; ?>
                      </a>
                    </span>
                    <br>
                    <span class="meta_info mr-4">
                      <a href="#"> <i class="ti-user mr-2"></i>20 Orang </a>
                    </span>
                    <span class="meta_info"><a href="#"><strong>RSVP</strong> </a></span>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Paginations -->
      <div class="row mt-5">
        <div class="col-lg-12">
          <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination pagination-lg">
              <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                  <span aria-hidden="true">
                    <span class="ti-angle-left"></span>
                  </span>
                </a>
              </li>
              <li class="page-item active rounded">
                <a href="#" class="page-link">1</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link">2</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                  <span aria-hidden="true">
                    <span class="ti-angle-right"></span>
                  </span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php $this->load->view('templates/footer'); ?>

</body>

</html>