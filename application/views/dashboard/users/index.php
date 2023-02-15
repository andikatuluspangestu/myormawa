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
            Halaman untuk menampilkan data pengguna aplikasi <br> Himpunan Mahasiswa Sistem Informasi UBSI Kota Tegal
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
      <?php if ($this->session->flashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= $this->session->flashdata('pesan') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <div class="card">
        <div class="card-header">
          <a href="<?= base_url('admin/user/add') ?>" class="btn btn-primary">
            <i class="bi bi-plus"></i>
            Tambah Pengguna
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($user as $user) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $user->name ?></td>
                    <td><?= $user->username ?></td>
                    <td><?= $user->email ?></td>
                    <td>
                      <a href="<?= base_url('admin/user/detail/' . $user->id) ?>" class="btn btn-primary btn-sm">Detail</a>
                      <a href="<?= base_url('admin/user/delete/' . $user->id) ?>" class="btn btn-danger btn-sm">Hapus</a>
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

<script>
  // datatables
  $(document).ready(function() {
    $('#table1').DataTable({
      "scrollX": true,
      "scrollY": 200,
      "scrollCollapse": true,
      "paging": false,
      "searching": false,
      "info": false,
      "ordering": false,
      "fixedHeader": true,
      "responsive": true,
      "language": {
        "emptyTable": "Tidak ada data yang tersedia pada tabel ini",
        "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
        "infoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
        "infoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Menampilkan _MENU_ entri",
        "loadingRecords": "Memuat...",
        "processing": "Memproses...",
        "search": "Cari:",
        "zeroRecords": "Tidak ditemukan data yang sesuai",
        "paginate": {
          "first": "Pertama",
          "last": "Terakhir",
          "next": "Selanjutnya",
          "previous": "Sebelumnya"
        },
      }
    });
  });
</script>