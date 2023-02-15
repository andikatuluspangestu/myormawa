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
            Halaman untuk menampilkan data Divisi yang terdaftar pada Organisasi Himpunan Mahasiswa Sistem Informasi
          </p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <!-- Tombol Kembali -->
            <a href="<?= base_url('admin/anggota') ?>" class="btn btn-primary">
              <i class="bi bi-arrow-left"></i>
              Kembali
            </a>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">

      <!-- Pesan -->
      <?php if ($this->session->flashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= $this->session->flashdata('pesan') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <div class="card">
        <div class="card-header">
          <!-- Tombol Tambah dengan Modal-->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDivisi">
            <i class="bi bi-plus"></i>
            Tambah Data
          </button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="anggota">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Divisi</th>
                  <th>Anggota</th>
                  <th>Program Kerja</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($divisi as $data) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data->nama_divisi ?></td>
                    <td>
                      <?php
                      foreach ($jumlah_anggota as $jumlah) {
                        if ($jumlah->nama_divisi == $data->nama_divisi) {
                          echo $jumlah->jumlah_anggota . ' Mahasiswa';
                          break;
                        }
                      }
                      ?>
                    </td>
                    <td>
                      <!-- Lihat Proker -->
                      <a href="<?= $data->proker ?>" class="btn btn-sm btn-primary">
                        <i class="bi bi-eye"></i>
                        Lihat
                      </a>
                      <!-- Tombol Hapus -->
                      <a href="<?= base_url('admin/divisi/hapus/' . $data->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data divisi <?= $data->nama_divisi ?>?')">
                        <i class="bi bi-trash"></i>
                        Hapus
                      </a>
                      <!-- Tombol Edit dengan Modal -->
                      <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editDivisi<?= $data->id ?>">
                        <i class="bi bi-pencil"></i>
                        Edit
                      </button>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal Edit -->
    <?php foreach ($divisi as $data) : ?>
      <div class="modal fade text-left" id="editDivisi<?= $data->id ?>" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title white" id="myModalLabel1">
                Edit Data Divisi
              </h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <i data-feather="x"></i>
              </button>
            </div>
            <div class="modal-body p-3">
              <form action="<?= base_url('admin/divisi/edit/'.$data->id) ?>" method="post" enctype="multipart/form-data">
                <!-- Hidden id -->
                <input type="hidden" name="id" value="<?= $data->id ?>">
                <div class="form-group mb-3">
                  <label for="nama_divisi">Nama Divisi</label>
                  <input type="text" class="form-control" id="nama_divisi" name="nama_divisi" value="<?= $data->nama_divisi ?>" required>
                </div>
                <div class="form-group mb-3">
                  <label for="proker">Program Kerja</label>
                  <input type="text" class="form-control" id="proker" name="proker" value="<?= $data->proker ?>" required>
                </div>
                <button type="submit" class="btn btn-warning">Edit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    <!-- Modal Tambah -->
    <div class="modal fade text-left" id="tambahDivisi" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title white" id="myModalLabel1">
              Tambah Data Divisi
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <i data-feather="x"></i>
            </button>
          </div>
          <div class="modal-body p-3">
            <form action="<?= base_url('admin/divisi/tambah') ?>" method="POST">
              <div class="form-group mb-3">
                <label for="nama_divisi">Nama Divisi</label>
                <input type="text" class="form-control" id="nama_divisi" name="nama_divisi" placeholder="Masukkan nama divisi" required>
              </div>
              <div class="form-group mb-3">
                <label for="deskripsi_proker_divisi">Link Berkas Proker Divisi</label>
                <textarea class="form-control" id="deskripsi_proker_divisi" name="proker" rows="3" placeholder="Masukkan Link Dokumen" required></textarea>
              </div>
              <!-- Tombol Submit -->
              <button type="submit" class="btn btn-sm btn-success">
                Simpan
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>