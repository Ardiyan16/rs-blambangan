<?php $this->load->view('header_view') ?>

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
							Berdiri sejak tahun 1930 sebagai Pusat Kesehatan Sederhana jaman Belanda, yang hanya melayani Pelayanan Kesehatan Dasar dan Penyakit Menular hingga sekarang berkembang menjadi Rumah Sakit Kelas B Pemerintah dan lulus Akreditasi PARIPURNA KARS 2012
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
                  <p>Menjadi Rumah Sakit Andalan dan Pusat Rujukan Spesialistik di Kabupaten Banyuwangi</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-chevrons-down"></i>
                  <h4>Motto</h4>
                  <p>Kepuasan dan Keselamatan Pasien adalah Tujuan Kami</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-chevrons-down"></i>
                  <h4>Misi</h4>
                  <p>1.	Menyelenggarakan Pelayanan Kesehatan yang Bermutu dan Profesional</p>
                  <p>2.	Mewujudkan Kinerja Keuangan yang Sehat dan Akuntabel</p>
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

        <div class="row justify-content-md-center" >
          <div class="col-md-6 col-lg-2  align-items-stretch">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-receipt"></i></div>
              <h4 class="title"><a href="<?= base_url('Utama/rawat_jalan') ?>">Instalasi Rawat Jalan</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-2  align-items-stretch">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-shield"></i></div>
              <h4 class="title"><a href="<?= base_url('Utama/rawat_inap') ?>">Instalasi Rawat Inap</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-2  align-items-stretch">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="<?= base_url('Utama/instalasi_penunjang') ?>">Instalasi Penunjang</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-2  align-items-stretch">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-cube-alt"></i></div>
              <h4 class="title"><a href="<?= base_url('Utama/medhical_check_up') ?>">Medhical Check - Up</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-2  align-items-stretch">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="<?= base_url('Utama/emergency') ?>"> 24 Jam Emergency</a></h4>
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
              <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="9" class="purecounter"></span>
              <p><strong>Penunjang Medis</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="3" class="purecounter"></span>
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
          <p> Berisi informasi apa saja yang ada pada RSUD Blambangan untuk memberikan pelayanan kepada pasien secara terpadu, peningkatan kesehatan lingkungan, peningkatan mutu, pelayanan pendidikan dan penelitian, dan peningkatan kompetensi petugas. Pengembangan ini bertujuan untuk menuju Rumah Sakit Kelas Terbaik di Banyuwangi. .</p>
          <a class="cta-btn" href="<?= base_url('Utama/info') ?>">Informasi Publik</a>
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
              <!-- <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-foto">Foto</li>
                <li data-filter=".filter-Video">Video</li>
              </ul> -->
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/gambar1.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/gambar2.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/gambar3.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-4 col-6 portfolio-item filter-card">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/ZFp6eN9gxQc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-4 col-6 portfolio-item filter-card">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/PYtEz1nBi8Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>


          </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= News Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>ARTIKEL</h3>
          <p> Berisi informasi kesehatan yang sedang mendapatkan perhatian khusus pada saat ini. Serta untuk mendapatkan edukasi kepada para pasien agar dapat selalu menjaga kesehatan.</p>
					<a class="cta-btn" href="<?= base_url('Utama/artikel') ?>">Lihat Artikel</a>
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
                <a href="https://twitter.com/rsudblambangan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/RSUD-BLAMBANGAN-BANYUWANGI-JAWA-TIMUR-203675609828041/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/rsudblambangan/?hl=id#:~:text=RSUD%20Blambangan%20(%40rsudblambangan)%20•%20Instagram%20photos%20and%20videos" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>KATEGORI</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Utama/waktu_layanan') ?>">Waktu Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Utama/dokter') ?>">Dokter</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Utama/info') ?>">Informasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portofolio">Galeri</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Utama/artikel') ?>">Artikel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Login/login_user') ?>">Daftar Online</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>login">Admin</a></li>
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
        <a href="">KELOMPOK 6 GOLONGAN D</a>
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
