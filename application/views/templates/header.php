<header class="header_area">
  <div class="main_menu">
    <div class="search_input" id="search_input_box">
      <div class="container">
      </div>
    </div>

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
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Beranda</a>
            </li>
            <li class="nav-item">
              <!-- Program Kerja -->
              <a class="nav-link" href="<?php echo base_url('home/program_kerja'); ?>">Program Kerja</a>
            </li>
            <li class="nav-item">
              <!-- About Page -->
              <a class="nav-link" href="<?php echo base_url('home/about'); ?>">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <!-- Events -->
              <a class="nav-link" href="<?php echo base_url('home/events'); ?>">Event</a>
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
                <!-- Aspirasi -->
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('home/aspirasi'); ?>">Aspirasi</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>