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
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahProker">
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
                  <th>Kegiatan</th>
                  <th>Periode</th>
                  <th>Status</th>
                  <th>Detail Kegiatan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($proker as $data) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data->kegiatan ?></td>
                    <td><?= $data->periode ?></td>
                    <td>
                      <?php if ($data->status == 'batal') : ?>
                        <span class="badge bg-danger">Batal</span>
                      <?php elseif ($data->status == 'selesai') : ?>
                        <span class="badge bg-success">Selesai</span>
                      <?php else : ?>
                        <span class="badge bg-secondary">Belum Selesai</span>
                      <?php endif; ?>
                    <td>

                      <!-- Tombol Hapus -->
                      <a href="<?= base_url('admin/proker/delete/' . $data->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                        <i class="bi bi-trash"></i>
                      </a>

                      <!-- Tombol Download Proposal -->
                      <a href="<?= $data->detail ?>" class="btn btn-primary">
                        <i class="bi bi-download"></i>
                      </a>

                      <!-- Jika status == selesai tampilkan tombol batal -->
                      <?php if ($data->status == 'selesai') : ?>
                        <a href="<?= base_url('admin/proker/updateStatus/' . $data->id) ?>" class="btn btn-danger">
                          <i class="bi bi-x-circle"></i>
                        </a>
                        <!-- Else -->
                      <?php else : ?>
                        <a href="<?= base_url('admin/proker/updateStatus/' . $data->id) ?>" class="btn btn-success">
                          <i class="bi bi-check"></i>
                        </a>
                      <?php endif; ?>

                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Modal Tambah -->
      <div class="modal fade text-left" id="tambahProker" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h5 class="modal-title white" id="myModalLabel1">
                Tambah Data Program Kerja
              </h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <i data-feather="x"></i>
              </button>
            </div>
            <div class="modal-body p-3">
              <form action="<?= base_url('admin/proker/insert') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                  <label for="kegiatan">Kegiatan</label>
                  <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Masukkan Nama Kegiatan" required>
                </div>
                <div class="form-group mb-3">
                  <label for="periode">Periode</label>
                  <input type="text" class="form-control" id="periode" name="periode" placeholder="Masukkan Periode" required>
                </div>
                <div class="form-group mb-3">
                  <label for="lokasi">Lokasi</label>
                  <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Masukkan Lokasi" required>
                </div>
                <div class="form-group mb-3">
                  <label for="detail">Detail Kegiatan</label>
                  <textarea class="form-control" id="detail" name="detail" rows="3" placeholder="Silahkan masukkan link Drive dari Proposal Kegiatan" required></textarea>
                </div>

                <!-- Tombol SUBMIT -->
                <button type="submit" class="btn btn-primary">
                  Simpan
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <footer>
    <script src="<?= base_url('/') ?>assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="<?= base_url('/') ?>assets/js/pages/simple-datatables.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap.min.js"></script>
    <script>
      // Jika judul halaman adalah Anggota, maka tambahkan class active pada class submenu-item dengan id list_anggota

      document.title = '<?= $judul ?>';

      if (document.title === 'Anggota') {
        document.getElementById('list_anggota').classList.add('active');
        document.getElementById('anggota').classList.add('active');
        document.getElementById('dashboard').classList.remove('active');
      } else if (document.title == 'Divisi') {
        document.getElementById('divisi_anggota').classList.add('active');
        document.getElementById('anggota').classList.add('active');
        document.getElementById('dashboard').classList.remove('active');
      } else if (document.title == 'Program Kerja') {
        document.getElementById('program_kerja').classList.add('active');
        document.getElementById('anggota').classList.add('active');
        document.getElementById('dashboard').classList.remove('active');
      }
    </script>
    <script>
      $(document).ready(function() {
        var table = $('#anggota').DataTable({
          responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);
      });
    </script>
  </footer>
</div>