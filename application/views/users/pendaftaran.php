<?php $this->load->view('users/header.php') ?>

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container" data-aos="fade-up">

            <div class="d-flex justify-content-between align-items-center">
                <!-- <h2>Home</h2>
                <ol>
                    <li><a href="<?= base_url('Users') ?>">Home</a></li>
                </ol> -->
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pendaftaran Pasien</h2>
            </div>

            <!-- <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>contact@example.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>

            </div> -->

            <div class="row">

                <!-- <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div> -->

                <div class="col-lg-12">
                    <form action="<?= base_url('Users/save_pendaftaran') ?>" method="post" role="form">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" value="<?= $this->session->userdata('nama') ?>" id="subject" readonly placeholder="Subject">
                            <input type="hidden" class="form-control" value="<?= $this->session->userdata('nik') ?>" name="nik_users" id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" readonly value="<?= $this->session->userdata('tgl_lahir') ?>" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="date" class="form-control" value="<?= date('Y-m-d') ?>" name="tgl_pendaftaran" id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group mt-3">
                            <select name="id_poli" class="form-control">
                                <option>--Pilih Poli--</option>
                                <?php foreach ($poli as $p) { ?>
                                    <option value="<?= $p->id ?>"><?= $p->poli ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <input type="hidden" class="form-control" name="no_antrian" id="antrian" placeholder="Subject">
                        <!-- <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> -->
                        <div class="text-center" style="margin-top: 20px;"><button type="submit" class="btn btn-primary">Daftar</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->
<script>
    let dataBarang;

    $(document).ready(function() {
        // console.log('here');
        // getAmbilAntrian();
        //detail_barang();
        $('html, body').animate({
            scrollTop: 0
        }, 0);
        $.ajax({
            url: "<?php echo base_url() . 'Users/max_pendaftaran'; ?>",
            dataType: 'json',
            method: 'POST',
            success: function(json) {
                var d = "<?php echo date('d') ?>";
                var m = "<?php echo date('m') ?>";
                var y = "<?php echo date('Y') ?>";

                console.log('maxxx', json.maxs);
                if (json.maxs == null) {
                    max = '0';
                } else {
                    max = json.maxs;
                }

                var ambil_tanggal = max.substring(8, 10);
                console.log('max', max);
                max++;
                var antrian = sprintf("%s", max);

                console.log('invoice', antrian);
                $('#antrian').val(antrian);
            }
        });
    });
</script>
<?php $this->load->view('users/footer.php') ?>