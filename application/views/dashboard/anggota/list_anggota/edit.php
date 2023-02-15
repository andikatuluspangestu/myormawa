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
            Edit Data <?php echo $judul; ?>
          </h3>
          <p class="text-subtitle text-muted">
            Silahkan edit data anggota organisasi Himpunan Mahasiswa Sistem Informasi Universitas BSI Kampus Kota Tegal
          </p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php echo $judul; ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            <!-- Ambil judul halaman dari PHP -->
            Data dari <span class="text-primary">
              <?php echo $anggota['nama_lengkap']; ?>
            </span>
          </h4>
        </div>

        <div class="card-body">
          <!-- Form Edit Data -->
          <form action="<?= base_url('admin/anggota/update/' . $anggota['id']) ?>" method="POST" enctype="multipart/form-data">

            <!-- Id anggota -->
            <input type="hidden" name="id" value="<?= $anggota['id'] ?>">

            <!-- Nama Lengkap -->
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama_lengkap" placeholder="Masukkan nama" value="<?= $anggota['nama_lengkap'] ?>">
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-laki" <?= $anggota['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                <option value="Perempuan" <?= $anggota['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
              </select>
            </div>

            <!-- NIM -->
            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" value="<?= $anggota['nim'] ?>">
            </div>

            <!-- Kelas -->
            <div class="form-group">
              <label for="kelas">Kelas</label>
              <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan kelas" value="<?= $anggota['kelas'] ?>">
            </div>

            <!-- Alamat -->
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $anggota['alamat'] ?></textarea>
            </div>

            <!-- No. Telepon -->
            <div class="form-group">
              <label for="no_telepon">No. Telepon</label>
              <input type="text" class="form-control" id="no_telp" name="no_telepon" placeholder="Masukkan no.telepon" value="<?= $anggota['no_telepon'] ?>">
            </div>

            <!-- Email -->
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" value="<?= $anggota['email'] ?>">
            </div>

            <!-- Tampilkan Foto Lama -->
            <div class="form-group">
              <label for="foto">Foto Lama</label>
              <br>
              <?php if ($anggota['foto'] == null) : ?>
                <img class="fluid rounded img-thumbnail" id="preview" src="<?= base_url('assets/images/default.jpg') ?>" alt="Foto" width="100">
              <?php else : ?>
                <img class="fluid rounded img-thumbnail" id="preview" src="<?= base_url('upload/anggota/' . $anggota['foto']) ?>" alt="Foto" width="100">
              <?php endif; ?>
            </div>

            <!-- Foto -->
            <div class="form-group">
              <label for="foto">Foto</label>
              <input class="form-control" type="file" id="foto" name="foto">
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="btn btn-primary">Simpan</button>

          </form>
        </div>
      </div>
    </section>
  </div>
</div>