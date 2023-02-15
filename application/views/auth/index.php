<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - MyHIMSI</title>
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

          <!-- Alert -->
          <?php if ($this->session->flashdata('message')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?= $this->session->flashdata('message'); ?>
              <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>

          <h1 class="auth-title">Log in.</h1>

          <!-- PHP Form Action -->
          <form action="" method="POST">
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="text" name="username" class="form-control form-control-xl" placeholder="Username" />
              <div class="form-control-icon">
                <i class="bi bi-person"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input name="password" placeholder="Password" type="password" class="form-control form-control-xl" />
              <div class="form-control-icon float-right" id="password">
                <i class="bi bi-eye"></i>
              </div>
            </div>
            <div class="form-check form-check-lg d-flex align-items-end">
              <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
              <label class="form-check-label text-gray-600" for="flexCheckDefault">
                Keep me logged in
              </label>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
              Log in
            </button>

          </form>

        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
          <!-- Feature Card -->

        </div>
      </div>
    </div>
  </div>

  <footer>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script>
      const checkbox = document.querySelector('#flexCheckDefault');
      const username = document.querySelector('input[name="username"]');
      const password = document.querySelector('input[name="password"]');
      const form = document.querySelector('form');

      checkbox.addEventListener('click', () => {
        if (checkbox.checked) {
          localStorage.setItem('username', username ? username.value : '');
          localStorage.setItem('password', password ? password.value : '');
        } else {
          localStorage.removeItem('username');
          localStorage.removeItem('password');
        }
      });

      if (localStorage.getItem('username')) {
        username.value = localStorage.getItem('username');
        password.value = localStorage.getItem('password');
        checkbox.checked = true;
      }

      form.addEventListener('submit', () => {
        if (!checkbox.checked) {
          localStorage.removeItem('username');
          localStorage.removeItem('password');
        }
      });

      const passwordIcon = document.querySelector('#password');
      const passwordInput = document.querySelector('input[name="password"]');
      passwordIcon.addEventListener('click', () => {
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          passwordIcon.innerHTML = '<i class="bi bi-eye-slash"></i>';
        } else {
          passwordInput.type = 'password';
          passwordIcon.innerHTML = '<i class="bi bi-eye"></i>';
        }
      });
    </script>
  </footer>

</body>

</html>