<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>SIMPAN DATA</title>
	<style type="text/css">
		body{
			background-image: url('Lucu.jpg');
			background-size: cover;
		}
		fieldset { 
				font-family:tahoma; 
				font-size:12px; 
				text-align: center;
				 
				
			}
	</style>		
</head>
<body>
	<fieldset>
	<?php 

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alm = $_POST['alamat']; 
	$kota = $_POST['kota'];
	$pesan = $_POST['pesan'];

	$query = mysqli_query($db, "INSERT INTO tamu values('', '$nama','$email','$alm','$kota','$pesan')") or die (mysqli_error($koneksi,$query));

	if ($query) {
		echo "<font color=red size=5>BUKU TAMU BERHASIL DIISI</font>";

	}

	 ?>

	<br>
	<a href="tampilkan.php"><h2>LIHAT BUKU TAMU</h2></a>	
</fieldset>
</body>

</html>



















<!-- 
	$sql = "INSERT INTO tamu (nama_tamu, email_tamu, alamat_tamu, kota_tamu, pesan) values ('',$nama, $email, $alm, $kota, $pesan)"; -->