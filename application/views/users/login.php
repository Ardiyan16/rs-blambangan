<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>RSUD Blambangan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/logo2.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/logo2.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>assets/js/sweetalert2-all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Squadfree - v4.1.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo-rssa">
                <a href="<?= base_url() ?>">
                    <img src="<?= base_url() ?>assets/img/logo2.png" alt="" class="img-fluid" style="width:100px;height:100px;">
                    <h5 style="color:white;">RS Blambangan</h5>
                </a>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>



        </div>
    </header><!-- End Header -->


    <main id="main">

        <section id="pricing" class="pricing">
            <div class="container">

                <div class="row" style="margin-left: 35%;">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center" style="margin-bottom: 50px; font-family: poppins; font-weight: bold;">Login - Daftar Online</h4>
                                <form class="form" action="<?= base_url('Login/login') ?>" method="post">
                                    <div class="input-group justify-content-center">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="text" class="form-control col-sm-12" name="nik">
                                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group justify-content-center">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 45%;">Login</button>
                                    <br>
                                    <a class="justify-content-center" href="<?= base_url('Login/registrasi_user') ?>" style="margin-left: 20%;">Anda belum memiliki akun ?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        <?php if ($this->session->flashdata('berhasil_register')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Anda berhasil registrasi!',
                text: 'silahkan lanjutkan untuk login',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('belumkonfirmasi')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Maaf akun anda tidak aktif!',
                text: 'akun anda belum mendapatkan konfirmasi dari admin',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('passwordsalah')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Password anda masukkan salah!',
                text: 'silahkan coba lagi',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('niksalah')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'NIK yang anda masukkan salah!',
                text: 'silahkan coba lagi',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('logout')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Anda berhasil logout',
                text: 'silahkan login untuk masuk kembali',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('gantipass')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Anda berhasil ganti password!',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('gagal')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Maaf anda gagal mengganti password!',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php endif ?>
    </script>

</body>

</html>
