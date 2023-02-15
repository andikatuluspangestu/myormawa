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
            <a href="<?= base_url('dashboard/anggota') ?>" class="btn btn-primary">
              <i class="bi bi-arrow-left"></i> Kembali
            </a>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tambah Data Anggota</h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url('/dashboard/anggota/insert') ?>" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama_lengkap" placeholder="Masukkan nama">
            </div>

            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
            </div>

            <div class="form-group">
              <label for="nama">Kelas</label>
              <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan nama">
            </div>

            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
            </div>

            <div class="form-group">
              <label for="no_telepon">No Telepon</label>
              <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="Masukkan no telepon">
            </div>

            <!-- <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div> -->

            <div class="form-group">
              <label for="divisi">Divisi</label>
              <select class="form-select" id="divisi" name="divisi">
                <option selected>Pilih Divisi</option>
                <?php foreach ($divisi as $d) : ?>
                  <option value="<?= $d['id'] ?>"><?= $d['nama_divisi'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label for="foto">Upload Foto</label>
              <input class="form-control" type="file" id="foto" name="foto">
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