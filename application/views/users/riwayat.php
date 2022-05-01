<?php $this->load->view('users/header.php') ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

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
                <h2>Riwayat Pengobatan Anda</h2>
            </div>

            <div class="row">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Poli</th>
                            <th>Tanggal</th>
                            <th>No Antrian</th>
                            <!-- <th></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($riwayat as $rw) { ?>
                            <tr>
                                <td><?= $rw->poli ?></td>
                                <td><?= $rw->tgl_pendaftaran ?></td>
                                <td><?= $rw->no_antrian ?></td>
                                <!-- <td>
                                    <a href="<?= base_url('Users/detail_riwayat/'. $rw->id) ?>" class="btn btn-primary btn-small"> Show Detail</a>
                                </td> -->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<?php $this->load->view('users/footer.php') ?>