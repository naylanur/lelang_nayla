<!DOCTYPE html>
<HTml lang="en">
<head>
	<meta charset="UTF-8>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<title>Laporan</title>
</head>
<body>

<div class="container">
	<h3 class="mb-2 text-primary"><strong>Laporan Lelang diTutup</strong></h3>
		<div class="card shadow mb-4>
		<div class="card-body">
		<form method="post" action="<?= base_url('admin/laporan/cetak_laporan') ?>" class="form-user">

		<div class="form-group row"> 
			<label for="" class="col-sm-2 col-form-label"> 
				<strong>Tanggal Mulai</strong> 
		</label>
		<div>
			<input type="date" name="tgl_lelang_awal" class="form_control" required>
	</div>
</div>
	<div class="form-group row">
		<label for="" class="col-sm-2 col-form-label"> 
			<strong>Tanggal Akhir</strong>
		</label>
		<div> 
			<input type="date" name="tgl_lelang_akhir" class="form-control" required>
		</div>
</div>
<div class="form-group row">
<label for="" class="col-sm-2 col-form-label"></label>
	<div class="col-sm-4">
		<button type="submit" class="btn btn-dark">Cetak</button>
	</div>
	</div>
	</form>
	</div>
	</div>
	</div>
	</body>
	<html>