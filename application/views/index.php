<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('templates/head'); ?>

<body>

  <!-- Header -->
  <?php $this->load->view('templates/header'); ?>

  <!-- Hero Section -->
  <section class="home_banner_area">
    <div class="banner_inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_content text-center">

              <h2 class="banner-title text-uppercase mt-4 mb-5">
                HIMSI Universitas BSI Tegal
              </h2>
              <div>
                <!-- Cari Tau to About Page -->
                <a href="<?php echo base_url('home/about'); ?>" class="primary-btn2 ml-sm-3 ml-0">Cari Tau</a>

                <a href="#" class="primary-btn ml-sm-3 ml-0">Gabung</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pilar & Visi Misi -->
  <?php $this->load->view('templates/visimisi'); ?>

  <!-- Anggota -->
  <?php $this->load->view('templates/teams'); ?>

  <!-- Events -->
  <?php $this->load->view('templates/events'); ?>

  <!-- Footer -->
  <?php $this->load->view('templates/footer'); ?>

</body>

</html>