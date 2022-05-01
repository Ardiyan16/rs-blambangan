<?php $this->load->view('admin/header.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Konfirmasi User</h1>
        <a href="<?= base_url('Dashboard/user_terkonfirmasi') ?>" class="btn btn-primary">Data Terkonfirmasi</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($users as $u) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $u->nik ?></td>
                                <td><?= $u->nama ?></td>
                                <td><?= $u->jenis_kelamin ?></td>
                                <td><?= date('d-m-Y', strtotime($u->tgl_lahir)) ?></td>
                                <td>
                                    <a href="<?= base_url('Dashboard/konfirmasi/' . $u->nik) ?>" onclick="return confirm('konfirmasi user ini ?')" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Konfirmasi</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php $this->load->view('admin/footer.php') ?>