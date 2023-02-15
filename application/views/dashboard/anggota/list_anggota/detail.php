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
            Detail <?php echo $judul; ?>
          </h3>
          <p class="text-subtitle text-muted">
            Menampilkan detail data anggota organisasi Himpunan Mahasiswa Sistem Informasi Universitas BSI Kampus Kota Tegal
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
          <h3><?= $anggota->nama_lengkap ?></h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              <img src="<?= base_url('upload/anggota/') . $anggota->foto ?>" alt="Foto Anggota" class="img-fluid img-thumbnail rounded" width="320px">
            </div>
            <div class="col-md-9">
              <table class="table">
                <tr>
                  <th>Nama Lengkap</th>
                  <td><?= $anggota->nama_lengkap ?></td>
                </tr>
                <tr>
                  <th>NIM</th>
                  <td><?= $anggota->nim ?></td>
                </tr>
                <tr>
                  <th>Kelas</th>
                  <td><?= $anggota->kelas ?></td>
                </tr>
                <tr>
                  <th>Divisi</th>
                  <td><?= $divisi->nama_divisi ?></td>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <td><?= $anggota->alamat ?></td>
                </tr>
                <tr>
                  <th>Jenis Kelamin</th>
                  <td><?= $anggota->jenis_kelamin ?></td>
                </tr>
                <tr>
                  <th>No. HP</th>
                  <td><?= $anggota->no_telepon ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?= $anggota->email ?></td>
                </tr>
                </tr>
              </table>
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