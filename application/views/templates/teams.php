<div class="testimonial_area section_gap">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="main_title">
          <h2 class="mb-3">Kabinet 2023-2024</h2>
          <p>
            Berekspresi dengan berbagai macam kegiatan yang menarik dan menantang untuk mengembangkan diri dan kemampuan mahasiswa HIMSI Universitas BSI Tegal dalam bidang IT.
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="testi_slider owl-carousel">

        <!-- Tampilkan Data Anggota -->
        <?php foreach ($anggota as $a) : ?>
          <div class="testi_item">
            <div class="row">
              <div class="col-lg-4">
                <div class="testi_img">
                  <?php if ($a->foto == null) : ?>
                    <img class="fluid rounded" src="<?= base_url('assets/images/default.jpg') ?>" alt="Foto" width="50">
                  <?php else : ?>
                    <img class="fluid rounded" src="<?= base_url('upload/anggota/' . $a->foto) ?>" alt="Foto" width="50">
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="testi_text">
                  <h4><?= $a->nama_lengkap; ?></h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <span class="badge my-2 badge-primary"><?= $a->nama_divisi; ?></span>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</div>