<!DOCTYPE html>
<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Tracer Study Login</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
  <link rel="stylesheet" href="{{asset('assets/vendor/izitoast/css/iziToast.min.css')}}">
  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-text demo text-body fw-bolder" style="margin-left: -12px;">Tracer Study</span>
              </a>
            </div>
            <!-- <h4 class="mb-2">Welcome to Tracer Study🎓️</h4> -->
            <!-- <p class="mb-4">Please sign-in </p> -->
            <form id="formAuthentication" class="mb-3" action="/postlogin" method="POST">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus />
              </div>
              <div class="mb-3 position-relative">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" />
                  <span class="input-group-text" style="cursor: pointer;" onclick="togglePasswordVisibility()">
                    <i id="togglePasswordIcon" class="bx bx-hide"></i> <!-- Ikon mata dari Boxicons -->
                  </span>
                </div>
              </div>
              <button class="btn btn-primary d-grid w-100">Sign in</button>
            </form>
            <p class="text-center">
              <span>Belum Memiliki Akun?</span>
              <a href="/register">
                <span>Buat Akun Baru</span>
              </a>
            </p>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{asset('assets/vendor/izitoast/js/iziToast.min.js')}}"></script>
  @if(session('sukses'))
  <script>
    iziToast.success({
      title: 'Berhasil',
      message: '{{session('sukses')}}',
      position: 'topRight'
    });
  </script>
  @elseif(session('gagal'))
  <script>
    iziToast.error({
      title: 'Gagal',
      message: '{{session('gagal')}}',
      position: 'topRight'
    });
  </script>
  @elseif(session('warning'))
  <script>
    iziToast.warning({
      title: 'Warning',
      message: '{{session('warning ')}}',
      position: 'topRight'
    });
  </script>
  @endif

  <!-- Script untuk toggle password visibility -->
  <script>
    function togglePasswordVisibility() {
      const passwordInput = document.getElementById('password');
      const toggleIcon = document.getElementById('togglePasswordIcon');

      if (passwordInput.type === 'password') {
        passwordInput.type = 'text'; // Ubah ke text untuk menampilkan password
        toggleIcon.classList.remove('bx-hide');
        toggleIcon.classList.add('bx-show'); // Ganti ikon menjadi mata terbuka
      } else {
        passwordInput.type = 'password'; // Ubah ke password untuk menyembunyikan password
        toggleIcon.classList.remove('bx-show');
        toggleIcon.classList.add('bx-hide'); // Ganti ikon menjadi mata tertutup
      }
    }
  </script>
</body>

</html>