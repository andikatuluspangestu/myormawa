<!DOCTYPE html>
<html lang="en">

<body>

  <div id="app">

    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>

      <div class="page-heading">
        <h3>
          <?php echo $judul = "Dashboard" ?>
        </h3>
      </div>

      <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-12">
            <div class="row">
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-4 py-4-5">
                    <div class="row">
                      <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon purple mb-2">
                          <i class="iconly-boldDocument"></i>
                        </div>
                      </div>
                      <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="font-extrabold my-1">NaN</h6>
                        <h6 class="text-muted font-semibold">
                          Proposal Diajukan
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-4 py-4-5">
                    <div class="row">
                      <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon blue mb-2">
                          <i class="iconly-boldWork"></i>
                        </div>
                      </div>
                      <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="font-extrabold my-1">
                          <?php echo $total_anggota; ?>
                        </h6>
                        <h6 class="text-muted font-semibold">Laporan Kegiatan</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-4 py-4-5">
                    <div class="row">
                      <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon green mb-2">
                          <i class="iconly-boldAdd-User"></i>
                        </div>
                      </div>
                      <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="font-extrabold my-1">
                          <?php echo $total_program; ?>
                        </h6>
                        <h6 class="text-muted font-semibold">Program</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-4 py-4-5">
                    <div class="row">
                      <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon red mb-2">
                          <i class="iconly-boldHome"></i>
                        </div>
                      </div>
                      <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="font-extrabold my-1">
                          <?php echo $total_acara; ?>
                        </h6>
                        <h6 class="text-muted font-semibold">Peminjaman Ruangan</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Chart -->
            <div class="row">
              <div class="col-12">
                <section class="section">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Pengajuan Proposal</h4>
                        </div>
                        <div class="card-body">
                          <canvas id="bar"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Laporan Kegiatan</h4>
                        </div>
                        <div class="card-body">
                          <canvas id="line"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </section>
      </div>

      <footer>

      </footer>
    </div>
  </div>


</body>

</html>