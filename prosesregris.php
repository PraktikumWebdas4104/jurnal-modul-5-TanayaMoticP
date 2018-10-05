<!--
	Tanaya Motic P
	Jurnal 5
	-->

<form action="" method="POST">
	<table>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type ="text" name="NIM" length="10"></td>

		<td>nama</td>
		<td>:</td>
		<td><input type="text" name="nama" length="25"></td>

		<td>email</td>
		<td>:</td>
		<td><input type="text" name="email"></td>


		<td></td>
		<td><input type="submit" name="kirim" value="kirim"></td>

	</tr>
	</table>
</form>


<?php 
error_reporting(0);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "pendaftaranmahasiswa";

	$conn=mysqli_connect($host, $user, $pass, $database);

	if (isset($_POST['kirim'])) {
		$NIM = $_POST['NIM'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];

		if (strlen($NIM)==10) {
				if (strlen($nama)<25) {
					if (strpos($email, "@gmail.com")) {
						$qry = mysqli_query($conn, "INSERT INTO `mahasiswa`(`NIM`, `nama`, `email`)  
									VALUES  ('$NIM', '$nama', '$email')");
						
						echo "Regristrasi Berhasil";
					}else{
						echo "Regristrasi Gagal";
					}
			}else{
				echo "Regristrasi Gagal";
			}
			}else{
				echo "Regristrasi Gagal";
			}
	
	}		
