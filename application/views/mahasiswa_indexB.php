<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #3175bf">
		<a href="" class="navbar-brand">
			UTS
		</a>
		<div class="navbar-nav">
			<a href="" class="nav-link active">Home</a>
			<a href="<?= base_url('mahasiswa/tambah_data') ?>" class="nav-link">Tambah Data</a>
			
		</div>
		<div class="navbar-nav ml-auto">
		<a href="" class="nav-link active">Bubul</a>
		</div>
	</nav>
	<div class="alert alert-success text-center mt-2">
		Data Mahasiswa
		
	</div>

	<div class=" container">
		
		
	
	<table class="table table-bordered table-sm">
		<tr>
			<th width="10%">No</th>
			<th>id_004</th>
			<th>kolom_jurusan</th>
			<th>kolom_kelas</th>
			<th>kolom_isi</th>
			<th width="15%">Aksi</th>
		</tr>
			<?php $no = 1; ?>
			<?php foreach ($data_tabel as $key) :?> 
			
		<tr>
			<td><?= $no++?></td>
			<td><?= $key->id_004?></td>
			<td><?= $key->kolom_jurusan?></td>
			<td><?= $key->kolom_kelas?></td>
			td><?= $key->kolom_isi?></td>
			<td>
				<a href="" class="btn btn-info btn-sm">EDIT</a>
				<a href="" class=" btn btn-danger btn-sm">HAPUS</a>
			</td>
			
		</tr>
	<?php endforeach ?>
	</table>
</div>
</body>
</html>