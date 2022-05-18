<?php $this->load->view('users/header.php') ?>

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <!-- <h2>Home</h2>
                <ol>
                    <li><a href="<?= base_url('Users') ?>">Home</a></li>
                </ol> -->
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section id="about" class="about">
        <div class="container">

           
			<div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>PROFIL RUMAH SAKIT</h3>
              <p>
							Berdiri sejak tahun 1930 sebagai Pusat Kesehatan Sederhana jaman Belanda, yang hanya melayani Pelayanan Kesehatan Dasar dan Penyakit Menular hingga sekarang berkembang menjadi Rumah Sakit Kelas B Pemerintah dan lulus Akreditasi PARIPURNA KARS 2012
              </p>
			  <a href="<?= base_url('Users/pilih_klinik') ?>" class="about-btn">Pendaftaran Pasien Online <i class="bx bx-chevron-right"></i></a>
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

</main><!-- End #main -->

<?php $this->load->view('users/footer.php') ?>
