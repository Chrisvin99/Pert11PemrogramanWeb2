<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Tampilkan Data</title>
	<style>
		table{
			text-align: center;
		}
		body{
			background-image: url('LUCU.jpg');
			background-size: cover;
		}
	</style>
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php">Tambah</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container" style="margin-top: 20px;">
	<h2>DAFTAR LIST HADIR BUKU TAMU</h2>		
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead class="thead-dark">
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama</th>
				<th scope="col">Email</th>
				<th scope="col">Alamat</th>
				<th scope="col">Kota</th>
				<th scope="col">Pesan</th>
			</tr>
		</thead>
		<?php 
		$query = mysqli_query($db, "SELECT * from tamu ORDER BY id asc");

		$no = 0;
		while ($data = mysqli_fetch_array($query)) {
			$no++;

		 ?>
		 <tbody>
		 	<tr>
		 		<th scope="row"><?= $no; ?></th>
		 		<td><?= $data['nama_tamu'];?></td>
		 		<td><?= $data['email_tamu'];?></td>
		 		<td><?= $data['alamat_tamu'];?></td>
		 		<td><?= $data['kota_tamu'];?></td>
		 		<td><?= $data['pesan']; ?></td>
		 	</tr>
		 </tbody>
		<?php } ?>
	</table>
</div>
</body>
</html>