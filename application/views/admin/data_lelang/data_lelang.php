<div class="container">

	<div class="row">
		<div class="col-md-12">
			
		<?php echo $this->session->flashdata('message'); ?>	

			<div class="card border-dark">
            <div class="card-header bg-secondary text-white">

			<a href="<?php echo base_url('admin/data_barang/tambah_barang') ?>" 
			class="btn btn-sm btn-warning float-right">Tambahkan barang</a>
			</div>
			
			<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover table-bordered">
					<tr>
						<th>NOMOR</th>
                        <th>Nama</th>
						<th>Harga Awal</th>
						<th>Status</th>
						<th>Harga Akhir</th>
						<th>Petugas</th>
						<th>Action</th>
					</tr>
					<?php $i = 1;
					foreach ($tb_barang as $brg) : ?>
						<tr>
							<td><?php echo $i; ?></td>
							<td>
								<img src="<?= base_url() . '/assets/images/barang/' . $brg->gambar ?>"
								width="100">
							</td>
							<td><?php echo $brg->nama_barang; ?></td>
							<td>Rp. <?php echo number_format($brg->harga_awal, 2, ',', '.'); ?></td>
							<th>
								<?php if ($brg->status_barang):?>
									<div class="label label-danger">Terjual</div>
									<?php else:?>
										<div class="label label-success">Belum terjual</div>
								<?php endif;?>
							</th>
							<td>
								<a href="<?php echo base_url('admin/data_barang/edit/' . $brg->id_barang) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
								<a href="<?php echo base_url('admin/data_barang/delete/' . $brg->id_barang) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
					<?php $i++;
					endforeach; ?>
				</table>
				</div></div>
			</div>
		</div>
	</div>

</div>
</div>