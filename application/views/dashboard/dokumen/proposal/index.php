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
          <a href="<?= base_url('dashboard/proposal/pengajuan') ?>" class="btn btn-primary">
            <i class="bi bi-plus"></i>
            Tambah Pengajuan
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($proposal as $data) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['judul'] ?></td>
                    <td><?= $data['tanggal_mulai_kegiatan'] ?></td>
                    <td><?= $data['tanggal_selesai_kegiatan'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td>
                      <!-- Buka File Proposal -->
                      <a href="<?= base_url('upload/proposal/' . $data['file_proposal']) ?>" target="_blank" class="btn btn-sm btn-primary">
                        <i class="bi bi-eye"></i> Lihat
                      </a>
                      <a href="<?= base_url('admin/dokumen/deleteProposal/' . $data['id']) ?>" class="btn btn-sm btn-danger">
                        <i class="bi bi-trash"></i> Hapus
                      </a>
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

