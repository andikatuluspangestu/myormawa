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
            Halaman untuk menampilkan Data Acara yang terdaftar pada Organisasi Himpunan Mahasiswa Sistem Informasi
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
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahAcara">
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
                  <th>Acara</th>
                  <th>Lokasi</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Biaya</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <!-- Menampilkan data dari database -->
                <?php
                $no = 1;
                foreach ($acara as $data) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data->acara ?></td>
                    <td><?= $data->lokasi ?></td>
                    <td><?= $data->tanggal ?></td>
                    <td><?= $data->waktu ?></td>
                    <td>Rp. <?= number_format($data->biaya, 0, ',', '.') ?></td>
                    <td>
                      <!-- Tombol Edit dengan Modal -->
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editAcara<?= $data->id ?>">
                        <i class="bi bi-pencil"></i>
                      </button>
                      <!-- Tombol Hapus dengan Modal -->
                      <a href="<?= base_url('admin/event/hapus/' . $data->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus acara <?= $data->acara ?>?')">
                        <i class="bi bi-trash"></i>
                      </a>
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
    <?php foreach ($acara as $data) : ?>
      <div class="modal fade text-left" id="editAcara<?= $data->id ?>" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title white" id="myModalLabel1">
                Edit Data Acara
              </h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <i data-feather="x"></i>
              </button>
            </div>
            <div class="modal-body p-3">
              <form action="<?= base_url('admin/event/edit/' . $data->id) ?>" method="post" enctype="multipart/form-data">
                <!-- Hidden id -->
                <input type="hidden" name="id" value="<?= $data->id ?>">

                <div class="form-group mb-3">
                  <label for="acara">Acara</label>
                  <input type="text" class="form-control" id="acara" name="acara" value="<?= $data->acara ?>">
                </div>

                <!-- Tanggal -->
                <div class="form-group mb-3">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data->tanggal ?>">
                </div>

                <div class="form-group mb-3">
                  <label for="waktu">Waktu</label>
                  <input type="time" class="form-control" id="waktu" name="waktu" value="<?= $data->waktu ?>">
                </div>

                <div class="form-group mb-3">
                  <label for="lokasi">Lokasi</label>
                  <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $data->lokasi ?>">
                </div>

                <div class="form-group mb-3">
                  <label for="biaya">Biaya</label>
                  <input type="text" class="form-control" id="biaya" name="biaya" value="<?= $data->biaya ?>">
                </div>

                <div class="form-group mb-3">
                  <label for="pendaftaran">Pendaftaran</label>
                  <input type="text" class="form-control" id="pendaftaran" name="pendaftaran" value="<?= $data->pendaftaran ?>">
                </div>

                <div class="form-group mb-3">
                  <label for="deskripsi">Deskripsi</label>
                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $data->deskripsi ?>">
                </div>

                <button type="submit" class="btn btn-warning">Edit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    <!-- Modal Tambah -->
    <div class="modal fade text-left" id="tambahAcara" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title white" id="myModalLabel1">
              Tambah Data Events
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <i data-feather="x"></i>
            </button>
          </div>
          <div class="modal-body p-3">
            <form action="<?= base_url('admin/event/tambah') ?>" method="POST">

              <div class="form-group mb-3">
                <label for="acara">Acara</label>
                <input type="text" class="form-control" id="acara" name="acara">
              </div>

              <div class="form-group mb-3">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
              </div>

              <div class="form-group mb-3">
                <label for="waktu">Waktu</label>
                <input type="time" class="form-control" id="waktu" name="waktu">
              </div>

              <div class="form-group mb-3">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi">
              </div>

              <div class="form-group mb-3">
                <label for="biaya">Biaya</label>
                <input type="text" class="form-control" id="biaya" name="biaya">
              </div>

              <div class="form-group mb-3">
                <label for="pendaftaran">Pendaftaran</label>
                <input type="text" class="form-control" id="pendaftaran" name="pendaftaran">
              </div>

              <div class="form-group mb-3">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi">
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
      } else if (document.title == 'Events') {
        document.getElementById('events').classList.add('active');
        document.getElementById('anggota').classList.remove('active');
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
    <script>
      // Buat Modal Edit Data Acara berdasarkan ID Acara yang di klik pada tombol Edit
      $('.editAcara').on('click', function() {
        const id = $(this).data('id');

        $.ajax({
          url: '<?= base_url('admin/event/getAcara') ?>',
          data: {
            id: id
          },
          method: 'post',
          dataType: 'json',
          success: function(data) {
            $('#acara').val(data.acara);
            $('#waktu').val(data.waktu);
            $('#lokasi').val(data.lokasi);
            $('#biaya').val(data.biaya);
            $('#pendaftaran').val(data.pendaftaran);
            $('#deskripsi').val(data.deskripsi);
            $('#id').val(data.id);
          }
        });
      });
    </script>
  </footer>
</div>