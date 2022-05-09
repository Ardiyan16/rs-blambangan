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
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="<?= base_url() ?>assets/js/sweetalert2-all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
          <img src="assets/img/logo2.png" alt="" class="img-fluid" style="width:200px;height:100px;"></a>
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
          <li><a class="nav-link scrollto" href="<?= base_url('Utama/artikel') ?>">Artikel</a></li>
          <!-- <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li> -->
          <li>
            <?php if ($this->session->userdata('no_rm') == null) { ?>
              <a href="<?= base_url('Login/login_user') ?>" class="nav-link scrollto">Login - Daftar Online</a>
            <?php } else { ?>
              <a href="<?= base_url('Users') ?>" class="nav-link scrollto">Silahkan Daftar Poli</a>
            <?php } ?>
          </li>

          <?php if ($this->session->userdata('no_rm') == null) { ?>
            <li><a class="getstarted scrollto" href="<?= base_url(); ?>login">Admin</a></li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <!-- <div class="hero-container" data-aos="fade-up">
      <h1>RSUD Blambangan</h1>
      <h5>RUMAH SAKIT KELAS DUNIA PILIHAN MASYARAKAT</h5>
		
    </div> -->
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>PROFIL RUMAH SAKIT</h3>
              <p>
                Rumah Sakit Umum Daerah Blambangan Banyuwangi telah menginjak usia yang ke-41 tahun pada tahun 2020. Selama jangka waktu tersebut, tentu tidak sedikit prestasi yang telah dicapai. Awal berdirinya RSSA hanyalah rumah sakit militer milik KNIL (Koninklijke Nederlandsch-Indische Leger), dan sekarang menjadi Rumah Sakit Pendidikan Utama Tipe A milik Pemerintah Provinsi Jawa Timur.
              </p>
              <a href="#" class="about-btn">Tentang Kami <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-chevrons-down"></i>
                  <h4>Visi</h4>
                  <p>Menjadi Rumah Sakit Berstandar Kelas Dunia Pilihan Masyarakat</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-chevrons-down"></i>
                  <h4>Motto</h4>
                  <p>Kepuasan dan Keselamatan Pasien adalah Tujuan Kami</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-chevrons-down"></i>
                  <h4>Misi</h4>
                  <p>Terwujudnya Pelayanan Kesehatan dan Pendidikan Berstandar Internasional Dengan Mengutamakan Keselamatan Pasien dan Berfokus Pada Kepuasan Pelanggan</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-chevrons-down"></i>
                  <h4>Nilai Dasar</h4>
                  <p>R : Respect</p>
                  <p>S : Safety</p>
                  <p>S : Sinergy</p>
                  <p>A : Accountable</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>LAYANAN</h2>
        </div>

        <div class="row" style="width:1000px;height:500px" ;>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-receipt"></i></div>
              <h4 class="title"><a href="">Instalasi Rawat Jalan</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-shield"></i></div>
              <h4 class="title"><a href="">Instalasi Rawat Inap</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Instalasi Gawat Darurat</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Instalasi Covid-19 dan Infeksikus Terpadu</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-cube-alt"></i></div>
              <h4 class="title"><a href="">Instalasi Pelayanan Jantung Terpadu</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Instalasi Terapi Intensif</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bxs-quote-alt-left"></i></div>
              <h4 class="title"><a href="">Pelayanan Informasi Obat</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-link"></i></div>
              <h4 class="title"><a href="">Unit Tranfusi Darah</a></h4>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Support Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>PENUNJANG</h2>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class=""></i>
              <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="0" class="purecounter"></span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="11" class="purecounter"></span>
              <p><strong>Penunjang Medis</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="5" class="purecounter"></span>
              <p><strong>Penunjang Non-Medis</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class=""></i>
              <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="0" class="purecounter"></span>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Support Section -->

    <!-- ======= Information Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>INFORMASI PUBLIK</h3>
          <p> Arah pengembangan pelayanan RSSA memang memprioritaskan pelayanan kepada pasien secara terpadu, peningkatan kesehatan lingkungan, peningkatan mutu, pelayanan pendidikan dan penelitian, dan peningkatan kompetensi petugas. Pengembangan ini bertujuan untuk menuju Rumah Sakit Kelas Dunia (World Class Hospital) sesuai dengan visi RSSA. Perkembangan RSSA yang telah dicapai selama ini adalah hasil kerja keras dari semua pihak, khususnya tenaga medis, paramedis, tenaga non medis, serta masyarakat dan pemerintah pada umumnya.</p>
          <a class="cta-btn" href="#">Informasi Publik</a>
        </div>

      </div>
    </section><!-- End Information Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>GALERI</h2>

          <div class="row" data-aos="fade-in">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-foto">Foto</li>
                <li data-filter=".filter-Video">Video</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= News Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>ARTIKEL</h3>
          <p> Arah pengembangan pelayanan RSSA memang memprioritaskan pelayanan kepada pasien secara terpadu, peningkatan kesehatan lingkungan, peningkatan mutu, pelayanan pendidikan dan penelitian, dan peningkatan kompetensi petugas. Pengembangan ini bertujuan untuk menuju Rumah Sakit Kelas Dunia (World Class Hospital) sesuai dengan visi RSSA. Perkembangan RSSA yang telah dicapai selama ini adalah hasil kerja keras dari semua pihak, khususnya tenaga medis, paramedis, tenaga non medis, serta masyarakat dan pemerintah pada umumnya.</p>
        </div>

      </div>
    </section><!-- End News Section -->

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
              <p>Jl. Jaksa Agung Suprapto No. 2 - Banyuwangi, Jawa Timur</p>
              <p>Kode Pos : 65111</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>rsudblambangan@jatimprov.go.id</p>
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
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.944211661212!2d114.36380401523583!3d-8.208365394092711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1453bb065f8e7%3A0xad5ff16b895a4de6!2sRSUD%20Blambangan!5e0!3m2!1sid!2sid!4v1652070478541!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
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
                <strong>Email :</strong> rsudblambangan@gmail.com<br>
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
        <strong><span>RSUD Blambangan Banyuwangi</span></strong>
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
    <?php if ($this->session->flashdata('logout')) : ?>
      Swal.fire({
        icon: 'success',
        title: 'Anda berhasil logout!',
        text: 'silahkan login untuk masuk kembali',
        showConfirmButton: true,
        // timer: 1500
      })
    <?php endif ?>
  </script>

</body>

</html>
