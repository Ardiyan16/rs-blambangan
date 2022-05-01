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
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= base_url() ?>/assets/img/user.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $this->session->userdata('nik') ?></h5>
                        <p class="card-text">Nama : <?= $this->session->userdata('nama') ?>.</p>
                        <p class="card-text">No Rekam Medis : <?= $this->session->userdata('no_rm') ?>.</p>
                        <p class="card-text">Tanggal Lahir : <?= date('d-m-Y', strtotime($this->session->userdata('tgl_lahir')))?>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->load->view('users/footer.php') ?>