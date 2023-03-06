<div class="container">

	<div class="row">
		<div class="col-md-12">

			<!-- <?php if ($success) : ?>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span></button>
					<strong>Success !</strong> <?php echo $success; ?>
				</div>
			<?php endif; ?> -->

			<?= $this->session->flashdata('message') ?>

			<div class="card border-dark">
				<div class="card-header bg-secondary text-white">
					<h5>Data Admin<h5>


							<a href="<?php echo base_url('admin/data_admin/tambah_admin') ?>" 
							class="btn btn-sm btn-light float-right">Tambah Admin</a>
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-hover table-bordered">
							<tr>
								<th>NO.</th>
								<th>Nama Admin</th>
								<th>Username</th>
								<th>Level</th>
								<th>Action</th>
							</tr>
							<?php $i = 1;
							foreach ($tb_petugas as $ptgs) : ?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $ptgs->nama_petugas; ?></td>
									<td><?php echo $ptgs->username; ?></td>
									<td><?php echo $ptgs->id_level ?></td>
									<td>
										<a href="<?php echo base_url('admin/data_admin/edit/' . $ptgs->id_petugas) ?>" 
										class="btn btn-sm btn-primary">Edit</a>
										<button onclick="hapusAdmin('<?= base_url('admin/data_admin/delete/' . $ptgs->id_petugas) ?>')" 
										class="btn btn-danger tombol-hapus btn-sm">Delete</button>


									</td>
								</tr>
							<?php $i++;
							endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>