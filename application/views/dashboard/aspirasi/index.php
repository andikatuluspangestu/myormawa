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
            Halaman untuk menampilkan Data aspirasi pada Organisasi Himpunan Mahasiswa Sistem Informasi
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
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="anggota">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Aspirasi</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <!-- Menampilkan data dari database -->
                <?php
                $no = 1;
                foreach ($aspirasi as $data) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data->nama ?></td>
                    <td><?= $data->email ?></td>
                    <td><?= $data->isi ?></td>
                    <td><?= $data->tanggal ?></td>
                    <td><?= $data->status ?></td>
                    <td>
                      <!-- Jika status == selesai tampilkan tombol batal -->
                      <?php if ($data->status == 'diterima') : ?>
                        <a href="<?= base_url('admin/aspirasi/updateStatus/' . $data->id) ?>" class="btn btn-danger">
                          <i class="bi bi-x-circle"></i>
                        </a>
                        <!-- Else -->
                      <?php else : ?>
                        <a href="<?= base_url('admin/aspirasi/updateStatus/' . $data->id) ?>" class="btn btn-success">
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
      } else if (document.title == 'Events') {
        document.getElementById('events').classList.add('active');
        document.getElementById('anggota').classList.remove('active');
        document.getElementById('dashboard').classList.remove('active');
      } else if (document.title == 'Aspirasi') {
        document.getElementById('aspirasi').classList.add('active');
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