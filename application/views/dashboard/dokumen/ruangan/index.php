<div id="main">
  <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
      <i class="bi bi-justify fs-3"></i>
    </a>
  </header>

  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>
            <!-- Ambil judul halaman dari PHP -->
            <?php echo $judul; ?>
          </h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                DataTable
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">

      <!-- Pesan -->
      <?php if ($this->session->flashdata('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= $this->session->flashdata('message') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <div class="card">
        <div class="card-body">
          <div class="container mt-4">
            <div class="row">
              <div class="col-lg-4">
                <form action="<?= base_url('/admin/ruangan/tambah') ?>" method="POST">
                  <!-- Ruangan -->
                  <div class="form-group">
                    <label for="ruangan">Ruangan</label>
                    <input class="form-control" type="text" name="ruangan" id="ruangan">
                  </div>
                  <!-- Kegiatan -->
                  <div class="form-group">
                    <label for="kegiatan">Kegiatan</label>
                    <input class="form-control" type="text" name="kegiatan" id="kegiatan">
                  </div>
                  <!-- TGl mulai -->
                  <div class="form-group">
                    <label for="tgl_mulai">Tanggal Mulai</label>
                    <input class="form-control" type="datetime-local" name="tgl_mulai" id="tgl_mulai">
                  </div>
                  <!-- Tgl selesai -->
                  <div class="form-group">
                    <label for="tgl_selesai">Tanggal Mulai</label>
                    <input class="form-control" type="datetime-local" name="tgl_selesai" id="tgl_selesai">
                  </div>
                  <!-- Submit -->
                  <input class="btn btn-sm btn-primary" type="submit" value="Submit">
                </form>
              </div>
              <div class="col-lg-8">
                <div id="calendar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>