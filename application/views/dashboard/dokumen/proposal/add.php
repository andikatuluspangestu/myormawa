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
          <small class="text-secondary"> *Proposal yang telah diajukan tidak bisa diedit </small>
          <p class="text-subtitle text-muted">
            <?php if ($this->session->flashdata('message')) : ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('message') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>
        </p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <!-- Tombol Kembali -->
            <a href="<?= base_url('dashboard/proposal') ?>" class="btn btn-primary">
              <i class="bi bi-arrow-left"></i> Kembali
            </a>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="card">
        <div class="card-body">
          <form action="<?= base_url('/admin/dokumen/insertProposal') ?>" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <label for="judul_kegiatan">Nama Kegiatan</label>
              <input type="text" class="form-control" id="judul_kegiatan" name="judul" placeholder="Masukkan Nama Kegiatan">
            </div>

            <!-- Ketua Panitia -->
            <div class="form-group">
              <label for="ketua">Ketua Panitia</label>
              <input type="text" class="form-control" id="ketua" name="ketua_panitia" placeholder="Masukkan Nama Ketua Panitia">
            </div>

            <div class="row form-group">
              <div class="col-6">
              <label for="start_date">Mulai Kegiatan</label>
              <input type="date" class="form-control" id="start_date" name="tanggal_mulai_kegiatan">
              </div>
              <div class="col-6">
              <label for="start_date">Selesai</label>
              <input type="date" class="form-control" id="end_date" name="tanggal_selesai_kegiatan">
              </div>
            </div>

            <!-- Deskripsi Kegiatan -->
            <div class="form-group">
              <label for="deskripsi_kegiatan">Deskripsi Kegiatan</label>
              <textarea class="form-control" id="deskripsi" name="deskripsi_kegiatan" rows="3"></textarea>
            </div>

            <!-- File Proposal -->
            <div class="form-group">
              <label for="file_proposal">File Proposal </label>
              <input type="file" class="form-control" id="file_proposal" name="file_proposal">
              <small class="text-secondary">*File PDF dan maksimal 10 MB</small>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
          </form>
        </div>
      </div>
    </section>
  </div>
</div>


<script>
  // ketika form input NIM diisi, maka akan otomatis mengisi form input email berisi NIM yang diinput sebelumnya ditambahkan dengan @student.uns.ac.id
  $(document).ready(function() {
    $('#nim').keyup(function() {
      var nim = $('#nim').val();
      $('#email').val(nim + '@student.uns.ac.id');
    });
  });
</script>