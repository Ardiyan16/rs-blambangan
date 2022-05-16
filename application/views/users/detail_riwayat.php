<?php $this->load->view('users/header.php') ?>
<script src="<?= base_url() ?>assets/js/sweetalert2-all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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
            <h5>Konfirmasi Pendaftaran</h5>

            <div class="row no-gutters">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p>Pasien atas nama :</p>
                        <p class="card-text">Nama : <?= $detail->nama ?>.</p>
                        <p class="card-text">No Rekam Medis : <?= $detail->no_rm ?>.</p>
                        <p class="card-text">Tanggal Lahir : <?= $detail->tgl_lahir ?>.</p>
                    </div>
                    <div class="card-footer">
                        <p>Nomor Antrian Anda</p>
                        <h1 style="font-size: 150px;"><?= $detail->no_antrian ?></h1>
                    </div>
                    <hr>
                    <p><?= $namapoli->poli ?></p>
                    <p> <?php
                                                            // $time_sekarang = time();
                                                            // date_default_timezone_set('Asia/Jakarta');
                                                            if($detail->status == 1) {
                                                                echo 'pengobatan anda diperkirakan pada pukul ', date("H:i",strtotime("$sisanya minutes", $detail->jam));
                                                            } else {
                                                                echo 'anda selesai berobat';
                                                            }
                                                            
                                                            ?></p>
                    <p>Sisa Antrian = <?= $sisa ?></p>
                    <!-- <a href="<?= base_url('Users/coba_wa') ?>" class="btn btn-success">coba whatsapp</a> -->

                </div>
            </div>
        </div>
    </section>
</main>
<script>
    <?php if ($this->session->flashdata('insert')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Anda berhasil mendaftar!',
            text: 'silahkan lihat nomor antrian anda',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php endif ?>
</script>
<?php $this->load->view('users/footer.php') ?>