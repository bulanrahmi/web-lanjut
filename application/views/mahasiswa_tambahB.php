<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url ('assets/css/bootstrap.min.css') ?>">

</head>
<body>
	<div class="p-5 mb-7 bg- whitw text-black"> <b> TAMBAH MAHASISWA </b>
<hr>
<form action="<?= site_url('Mahasiswa/simpan_data') ?>" method="post">
	<div class="form-group col-md-4">
		<label>id_004 :</label>
		<input type="number" name="nim" class="form-control"> <br>
	</div>
	
	<div class="form-group col-md-6">
		<label>kolom_jurusan : : </label>
		<input type="text" name="nama" class="form-control"> <br>
	</div>

	<div class="form-group col-md-6">
		<label>kolom_kelas : : </label>
		<input type="text" name="nama" class="form-control"> <br>
	</div>
	
	<label>kolom_isi:</label>
	<textarea class="form-control" name="kolom_isi"></textarea>
	<br>
	<div>
		<input type="submit" class="btn btn-primary" name="submit" value="Simpan">
		<a href="<?= site_url('Mahasiswa')?>" class="white-link">Kembali</a>
	</div>
	</form>

</body>
</html>