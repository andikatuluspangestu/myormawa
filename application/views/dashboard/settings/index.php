<div id="loading">
  <img src="loading.gif" alt="Loading..." />
</div>
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

          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">General</button>
            </li>
            <!-- <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">SEO</button>
            </li> -->
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Media Sosial</button>
            </li>
          </ul>

          <?php foreach ($tentang as $data) : ?>
            <form action="<?= base_url('admin/pengaturan/update') ?>" method="post">
              <div class="tab-content" id="pills-tabContent">
                <!-- General Seetings -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                  <!-- Title Website -->
                  <div class="form-group mb-3">
                    <div class="mb-3">
                      <label for="title-website" class="form-label">Nama Organisasi</label>
                      <input type="text" class="form-control" id="title-website" name="title-website" placeholder="<?= $data['title_website'] ?>">
                    </div>

                    <!-- Sejarah  -->
                    <div class="mb-3">
                      <label for="description-website" class="form-label">Sejarah Organisasi</label>
                      <textarea class="form-control" id="description-website" rows="3" name="sejarah" placeholder="<?= $data['sejarah'] ?>"></textarea>
                    </div>

                    <!-- visimisi -->
                    <div class="mb-3">
                      <label for="description-website" class="form-label">Visi Misi Organisasi</label>
                      <textarea class="form-control" id="description-website" rows="3" name="visimisi" placeholder="<?= $data['visimisi'] ?>"></textarea>
                    </div>

                    <!-- Input Foto Struktur Organisasi -->
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Foto Struktur Organisasi</label>
                      <input name="struktur" class="form-control" type="file" id="formFile" disabled>
                    </div>
                  </div>

                </div>

                <!-- SEO Settings -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0"></div>

                <!-- Social Media Settings -->
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                  <!-- Email -->
                  <div class="form-group mb-3">
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="<?= $data['email'] ?>">
                    </div>

                    <!-- Instagram -->
                    <div class="mb-3">
                      <label for="instagram" class="form-label">Instagram</label>
                      <input type="text" class="form-control" id="instagram" name="instagram" placeholder="<?= $data['instagram'] ?>">
                    </div>

                    <!-- Tiktok -->
                    <div class="mb-3">
                      <label for="tiktok" class="form-label">Tiktok</label>
                      <input type="text" class="form-control" id="tiktok" name="tiktok" placeholder="<?= $data['tiktok'] ?>">
                    </div>

                    <!-- Twitter -->
                    <div class="mb-3">
                      <label for="twitter" class="form-label">Twitter</label>
                      <input type="text" class="form-control" id="twitter" name="twitter" placeholder="<?= $data['twitter'] ?>">
                    </div>

                  </div>
                </div>

                <!-- Button Submit -->
                <div class="mb-3">
                  <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
              </div>
            </form>
          <?php endforeach; ?>

        </div>
      </div>
    </section>
  </div>
</div>