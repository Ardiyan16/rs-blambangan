<?php $this->load->view('admin/header.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Terkonfirmasi</h1>
        <a href="<?= base_url('Dashboard/konfirmasi_user') ?>" class="btn btn-primary">Kembali</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>No Rekam Medis</th>
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
                                <td><?= $u->no_rm ?></td>
                                <td><?= $u->nama ?></td>
                                <td><?= $u->jenis_kelamin ?></td>
                                <td><?= date('d-m-Y', strtotime($u->tgl_lahir)) ?></td>
                                <td>
                                    <a href="#tambahnorm<?= $u->nik ?>" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah No rekdis</a>
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
<!-- Modal -->
<?php foreach ($users2 as $us) { ?>
    <div class="modal fade" id="tambahnorm<?= $us->nik ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Dashboard/add_norm') ?>" method="post">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" readonly class="form-control" value="<?= $us->nik ?>" name="nik">
                        </div>
                        <div class="form-group">
                            <label>No Rekam Medis</label>
                            <input type="text" class="form-control" name="no_rm">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</div>
<!-- End of Main Content -->
<script>
    <?php if ($this->session->flashdata('konfirmasiuser')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Konfirmasi user berhasil!',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('addnorm')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'No Rekam Medis berhasil ditambahkan!',
            text: 'no rekam medis telah ditambahkan',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php endif ?>
</script>
<?php $this->load->view('admin/footer.php') ?>