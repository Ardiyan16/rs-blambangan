<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RSUD Dr. Saiful Anwar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>/assets/img/logo-rssa.png" rel="icon">
  <link href="<?= base_url() ?>/assets/img/logo-rssa.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v4.1.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo-rssa">
        <a href="index.html">
          <img src="<?= base_url() ?>/assets/img/logo-rssa.png" alt="" class="img-fluid" style="width:100px;height:100px;"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <li><a class="nav-link scrollto" href="#counts">Penunjang</a></li>
          <li><a class="nav-link scrollto" href="#cta">Informasi Publik</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#news">Artikel</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
          <li><a class="getstarted scrollto" href="<?= base_url();?>login">LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>RSUD Dr. SAIFUL ANWAR MALANG</h1>
      <h5>RUMAH SAKIT KELAS DUNIA PILIHAN MASYARAKAT</h5>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

	  <div class="row">

<div class="col-lg-12 entries">
<?php foreach($detail as $row) { ?>
	<article class="entry entry-single" data-aos="fade-up">

		<h2 class="entry-title">
		  <a href="blog-single.html"><?= $row->judul ?></a>
		</h2>
<div class="entry-img">
  <center><img src="<?= base_url('assets/img/'.$row->gambar) ?>" alt="" class="img-fluid"></center>
</div>


<div class="entry-meta">
  <ul>
	<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?= $row->penulis ?>,  <?= $row->tanggal ?></a></li>
  </ul>
</div>

<div class="entry-content">
  <p>
	<?= $row->isi ?>
  </p>
</div>



</article><!-- End blog entry -->
<?php } ?>
</div><!-- End blog entries list -->



</div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
   

    <!-- ======= Support Section ======= -->
 

    <!-- ======= Information Section ======= -->
 

    <!-- ======= Portfolio Section ======= -->


    <!-- ======= News Section ======= -->
  

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>KONTAK KAMI</h2>
        </div>

        <div class="row">
          <div class="col-lg-5">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Jl. Jaksa Agung Suprapto No. 2 - Malang, Jawa Timur</p>
              <p>Kode Pos : 65111</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>staf-rsu-drsaifulanwar@jatimprov.go.id</p>
              <br>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="info-box mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>No. Telp</h3>
              <p>Telp : 0341- 362101</p>
              <p>Fax : 0341-369384</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19560.06829231791!2d112.63018016458119!3d-7.974962024359986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6283b265dc00d%3A0x65690e1bdea8e9e4!2sRSUD%20Saiful%20Anwar!5e0!3m2!1sen!2sid!4v1620596523494!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3><strong>Pelayanan Pengaduan Masyarakat</strong></h3>
              <p class="pb-3">(Complain Centre lt. 1)</p>
              <p><br>SMS PENGADUAN : 081555606668<br>
                <br>
                <strong>Email :</strong> ppid.rssa@gmail.com<br>
                <strong>No. Telp :</strong> 0341 362101 ext 1100<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>KATEGORI</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Penunjang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Informasi Publik</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Galeri</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Artikel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">LOGIN</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong><span>RSUD DR. SAIFUL ANWAR MALANG</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        <a href="">KELOMPOK 4 GOLONGAN C</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/assets/js/main.js"></script>

</body>

</html>
