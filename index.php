<!DOCTYPE html>
<html>
<head>
	<title>BUKU TAMU</title>
	<style type="text/css">
		body { 
				font-family:tahoma; 
				font-size:12px; 
				background-image: url('LUCU.JPG'); 
				background-size: cover;
			}
		#container { 
			width:450px; 
			padding:2px 40px; 
			margin:50px auto; 
			box-shadow:0px 0px 3px #555; 
		}
	input[type="text"] { width:200px; }
	input[type="text"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
	input[type="submit"], input[type="reset"] { padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }
	#error { 
		border:2px solid red; 
		background:#ffc0c0; 
		padding:5px; }
</style>
</head>
<body>
	<div id="container">
		<h1>BUKU TAMU</h1>
		<p> @Cristian_Calvin</p>
		<p>Silahkan isi BUKU TAMU dibawah ini untuk meninggalkan pesan anda</p>


		<form action="simpan.php" method="post">
			<p>
				<b>Nama Lengkap :</b><br>
				<input type="text" name="nama"/>
			</p>
			<p>
				<b>Email :</b><br>
				<input type="text" name="email"/>
			</p>
			<p>
				<b>Alamat :</b><br>
				<input type="text" name="alamat"/>
			</p>
			<p>
				<b>Kota :</b><br>
				<input type="text" name="kota"/>
			</p>
			<p>
				<b>Pesan :</b><br>
				<textarea name="pesan" rows="5" cols="50"></textarea>
			</p>
			<p>
				<input type="submit" name="submit" value="Kirim" /> 
			   <input type="reset" name="del" value="Hapus" />
			</p>
		</form>

	</div>
</body>
</html>