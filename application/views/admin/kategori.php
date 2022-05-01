<?php $this->load->view('admin/header.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Penguna</h1>
    </div>

    <div class="row">

        <div class="col-lg-8">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori</h6>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('kategori/tambahkategori'); ?>
                    <div class="form-group">
                        <label>Tambah Kategori</label>
                        <input class="form-control" placeholder="Masukan kategori artikel" name="nama">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    <?php form_close(); ?>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-lg-12">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="dataKategori" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id Kategori</th>
                                <th>Nama Kategori</th>
                                <th class="text">Aksi</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($kategori as $row) { ?>
                                <tr>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->nama; ?></td>
                                    <td>
                                        <div class="form-group text-right">
                                            <form>
                                                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editModal">Rubah</button>
                                                <a href="<?= base_url('Kategori/hapuskategori/' . $row->id) ?>" class="btn btn-danger">Hapus</a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php $this->load->view('admin/footer.php') ?>