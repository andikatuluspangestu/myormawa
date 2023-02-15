<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - MyHIMSI</title>
  <link rel="stylesheet" href="<?= base_url('/') ?>assets/css/main/app.css" />
  <link rel="stylesheet" href="<?= base_url('/') ?>assets/css/pages/auth.css" />
  <link rel="shortcut icon" href="<?= base_url('/') ?>assets/images/logo/favicon.svg" type="image/x-icon" />
  <link rel="shortcut icon" href="<?= base_url('/') ?>assets/images/logo/favicon.png" type="image/png" />
</head>

<body>
  <div id="auth">
    <div class="row h-100">
      <div class="col-lg-5 col-12">
        <div id="auth-left">
          <h3>Daftar Akun</h3>

          <?php if (form_error('password1') || form_error('password2')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Password tidak cocok!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>

          <form action="<?= base_url('auth/register'); ?>" method="POST">
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="text" class="form-control form-control-xl" placeholder="Nama lengkap" name="name" />
              <div class="form-control-icon">
                <i class="bi bi-person"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="text" class="form-control form-control-xl" placeholder="Username" name="username" />
              <div class="form-control-icon">
                <i class="bi bi-at"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="text" class="form-control form-control-xl" placeholder="Email" name="email" />
              <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="password" class="form-control form-control-xl" placeholder="Password" name="password1" />
              <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="password" class="form-control form-control-xl" placeholder="Confirm Password" name="password2" />
              <div class="form-control-icon">
                <i class="bi bi-shield-lock-fill"></i>
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-1">
              Submit
            </button>
          </form>

        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
        </div>
      </div>
    </div>
  </div>

  <script src="<?= base_url('/') ?>assets/js/bootstrap.js"></script>
  <script src="<?= base_url('/') ?>assets/js/app.js"></script>
  <script src="<?= base_url('/') ?>assets/extensions/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url('/') ?>assets/js/pages/dashboard.js"></script>

  <script>
    const form = document.querySelector('form');
    form.addEventListener('submit', (e) => {
      const name = document.querySelector('input[name="name"]');
      const username = document.querySelector('input[name="username"]');
      const email = document.querySelector('input[name="email"]');
      const password1 = document.querySelector('input[name="password1"]');
      const password2 = document.querySelector('input[name="password2"]');

      if (name.value == '' || username.value == '' || email.value == '' || password1.value == '' || password2.value == '') {
        e.preventDefault();
        alert('Form tidak boleh kosong!');
      }
    });
  </script>

</body>

</html>