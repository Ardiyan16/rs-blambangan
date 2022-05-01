<?php $this->load->view('admin/header.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">List Antrian</h1>
        <a href="<?= base_url('Dashboard/antrian_selesai') ?>" class="btn btn-primary">Antrian Selesai</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No Rekam Medis</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Poli</th>
                            <th>No Antrian</th>
                            <th>Tanggal Pendaftaran</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($daftar as $daf) { ?>
                            <tr>
                                <td><?= $daf->no_rm ?></td>
                                <td><?= $daf->nama ?></td>
                                <td><?= date('d-m-Y', strtotime($daf->tgl_lahir)) ?></td>
                                <td><?= $daf->poli ?></td>
                                <td><?= $daf->no_antrian ?></td>
                                <td><?= date('d-m-Y', strtotime($daf->tgl_pendaftaran)) ?></td>
                                <td>
                                    <a href="<?= base_url('Dashboard/konfirmasi_selesai/'. $daf->id) ?>" onclick="return confirm('apakah pasien ini telah selesai ?')" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Selesai</a>
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
<script>
    <?php if ($this->session->flashdata('konfirmasiselesai')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Konfirmasi pasien berobat selesai sukses!',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php endif ?>
</script>

<?php $this->load->view('admin/footer.php') ?>