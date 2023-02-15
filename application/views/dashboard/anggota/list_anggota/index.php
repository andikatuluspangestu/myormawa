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
            Halaman untuk menampilkan data anggota yang terdaftar pada Organisasi Himpunan Mahasiswa Sistem Informasi
          </p>
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
        <div class="card-header">
          <a href="<?= base_url('dashboard/anggota/tambah') ?>" class="btn btn-primary">
            <i class="bi bi-plus"></i>
            Tambah Anggota
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($anggota as $biodata) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td>
                      <!-- Jika foto tidak ada -->
                      <?php if ($biodata->foto == null) : ?>
                        <img class="fluid rounded" src="<?= base_url('assets/images/default.jpg') ?>" alt="Foto" width="50">
                      <?php else : ?>
                        <img class="fluid rounded" src="<?= base_url('upload/anggota/' . $biodata->foto) ?>" alt="Foto" width="50">
                      <?php endif; ?>
                    </td>
                    <td><?= $biodata->nama_lengkap ?></td>
                    <td><?= $biodata->nim ?></td>
                    <td><?= $biodata->kelas ?></td>
                    <td>
                      <a href="<?= base_url('dashboard/anggota/detail/' . $biodata->id) ?>" class="btn btn-primary btn-sm">Detail</a>
                      <a href="<?= base_url('dashboard/anggota/edit/' . $biodata->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                      <a href="<?= base_url('dashboard/anggota/delete/' . $biodata->id) ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

