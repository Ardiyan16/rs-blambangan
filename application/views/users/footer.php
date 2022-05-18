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
							<?php if ($this->session->userdata('no_rm') == null) { ?>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Login/login_user') ?>">Daftar Online</a></li>
							<?php } else { ?>
								<li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Users') ?>">Silahkan Daftar Poli</a></li>
								<?php } ?>
								<?php if ($this->session->userdata('admin') == null) { ?>
									<li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>login">Admin</a></li>
									<?php }else{ ?>
										<li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>admin">Admin</a></li>
										<?php } ?>
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
 <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
 <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>
 <script src="<?= base_url() ?>assets/vendor/purecounter/purecounter.js"></script>
 <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>

 <!-- Template Main JS File -->
 <script src="<?= base_url() ?>assets/js/main.js"></script>

 </body>

 </html>
