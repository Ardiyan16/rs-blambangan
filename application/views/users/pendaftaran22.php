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
                <h2>Pendaftaran Pasien Klinik VCT</h2>
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
                    <form action="<?= base_url('Users/save_pendaftaran22') ?>" method="post" role="form">
                        <div class="form-group mt-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" value="<?= $this->session->userdata('nama') ?>" id="subject" readonly placeholder="Subject">
                            <input type="hidden" class="form-control" value="<?= $this->session->userdata('nik') ?>" name="nik_users" id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group mt-3">
                            <label>Tanggal Lahir</label>
                            <input type="text" class="form-control" readonly value="<?= $this->session->userdata('tgl_lahir') ?>" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Tanggal Pendaftaran</label>
                            <input type="date" class="form-control" readonly value="<?= date('Y-m-d') ?>" name="tgl_pendaftaran" id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group mt-3">
                            <input type="hidden" class="form-control" readonly name="id_poli" value="22" id="subject" placeholder="Subject">
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
    // $(".pilihPoli").change(function() {
    //     var thisVal = $(this).val();
    //     var other = $(this).data('other');
    //     var otherVal = $(other).val();
    //     console.log(other);

    //     if (thisVal != '') {
    //         var dataPost;
    //         if (thisVal == '#id_poli') {
    //             dataPost = {
    //                 id_poli: thisVal
    //             }
    //         } else {
    //             dataPost = {
    //                 id_poli: thisVal
    //             }
    //         }
    //         console.log(dataPost);
    //         $.ajax({
    //             type: 'post',
    //             data: dataPost,
    //             url: "<?php base_url() ?>max_pendaftaran",
    //             // success: function(data) {
    //             //     $("#antrian").html(data.max_pendaftaran)
    //             //     $("#potonganPenjualan").html(rupiah(parseInt(data.potongan_penjualan)))
    //             //     // $("#return").html(rupiah(parseInt(data.return_penjualan)))
    //             //     $("#totalPenjualan").html(rupiah(parseInt(data.total_penjualan)))
    //             //     //$("#dataPokok").html(rupiah(parseInt(data.da)))
    //             //     $("#labakotor").html(rupiah(parseInt(data.total_penjualan)))
    //             //     $("#labaRugi").html(rupiah(parseInt(data.laba_rugi)))
    //             //     $("#gaji").html(rupiah(parseInt(data.gaji)))
    //             //     $("#listrik").html(rupiah(parseInt(data.listrik)))
    //             //     $("#pajak").html(rupiah(parseInt(data.pajak)))
    //             //     $("#kebersihan").html(rupiah(parseInt(data.kebersihan)))
    //             //     $("#perawatan").html(rupiah(parseInt(data.perawatan)))
    //             //     $("#barcode").html(rupiah(parseInt(data.barcode)))
    //             //     $("#lainlain").html(rupiah(parseInt(data.lainlain)))
    //             //     $("#totalbeban").html(rupiah(parseInt(data.totalbeban)))
    //             //     $("#lababersih").html(rupiah(data.laba_bersih))
    //             //     $("#pendapatanlain").html(rupiah(parseInt(data.pendapatan_lain)))
    //             //     $("#kulaan").html(rupiah(parseInt(data.kulaan)))
    //             //     $("#totalnon").html(rupiah(parseInt(data.total_non)))
    //             // $("#total").val(parseInt(data.kas))
    //             // $("#lababersih").val(data.laba_bersih)

    //             //}
    //         })
    //     }

    //     // hitung_labarugi();
    // })


    let dataBarang;

    $(document).ready(function() {
        // console.log('here');
        // getAmbilAntrian();
        //detail_barang();
        $('html, body').animate({
            scrollTop: 0
        }, 0);
        $.ajax({
            url: "<?php echo base_url() . 'Users/max_klinik_vct'; ?>",
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
<script>
    <?php if ($this->session->flashdata('sudahdaftar')) : ?>
        Swal.fire({
            icon: 'warning',
            title: 'Anda sudah mendaftar sebelumnya!',
            text: 'Silahkan tunggu anda selesai pengobatan',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('statusklinik')) : ?>
        Swal.fire({
            icon: 'warning',
            title: 'Mohon maaf klink sedang tutup!',
            text: 'silahkan mendaftar ketika sudah buka',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php endif ?>
</script>
<?php $this->load->view('users/footer.php') ?>