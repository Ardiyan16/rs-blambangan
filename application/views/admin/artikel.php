<?php $this->load->view('admin/header.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Artikel</h1>
	</div>

	<div class="row">

		<div class="col-lg-8">

			<!-- Basic Card Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Tambah Artikel</h6>
				</div>
				<div class="card-body">
					<?= form_open_multipart('artikel/tambahartikel'); ?>
					<div class="form-group">
						<label>Judul Artikel</label>
						<input class="form-control" placeholder="Masukkan Judul Artikel" name="judul_artikel">
					</div>
					<div class="form-group">
						<label>Tanggal Artikel</label>
						<input type="date" class="form-control" placeholder="dd/mm/yyyy" name="tanggal">
					</div>
					<div class="form-group">
						<label>Nama Penulis</label>
						<input class="form-control" placeholder="Masukkan Nama Penulis" name="nama_penulis">
					</div>
					<div class="form-group">
						<label>Gambar Artikel</label>
						<input type="file" class="form-control" name="gambar">
					</div>
					<div class="form-group">
						<label for="comment">Isi</label>
						<textarea class="form-control" rows="4" placeholder="Masukkan Isi" name="isi"></textarea>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-primary">Tambah</button>
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
						<h6 class="m-0 font-weight-bold text-primary">Daftar Artikel</h6>
					</div>
					<div class="card-body">
						<table class="table table-bordered" id="dataArtikel" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Id Artikel</th>
									<th>Judul Artikel</th>
									<th>Tanggal Artikel</th>
									<th>Nama Penulis</th>
									<th>Isi</th>
									<th class="text">Aksi</th>

								</tr>
							</thead>

							<tbody>
								<?php foreach ($artikel as $row) { ?>
									<tr>
										<td><?php echo $row->id; ?></td>
										<td><?php echo $row->judul; ?></td>
										<td><?php echo $row->tanggal; ?></td>
										<td><?php echo $row->penulis; ?></td>
										<td><img src="<?= base_url('assets/img/' . $row->gambar); ?>" width="80px" height="80px" alt="">
										</td>
										<td><?php echo substr($row->isi, 0, 150); ?></td>
										<td>
											<div class="form-group text-right">
												<form>
													<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editModal">Rubah</button>
													<a href="<?= base_url('artikel/hapusartikel/' . $row->id) ?>" class="btn btn-danger">Hapus</a>
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
	<!-- End of Main Content -->

	<?php $this->load->view('admin/footer.php') ?>