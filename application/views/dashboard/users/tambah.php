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
            A sortable, searchable, paginated table without dependencies
            thanks to simple-datatables.
          </p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <!-- Tombol Kembali -->
            <a href="<?= base_url('admin/user') ?>" class="btn btn-primary">
              <i class="bi bi-arrow-left"></i> Kembali
            </a>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tambah Data Pengguna</h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url('/admin/user/insert') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <select class="form-select" id="role" name="role" required>
                <option value="">Pilih role</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </section>
  </div>
</div>