<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body
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
	if(isset($_POST['kirim'])){
		include "formReg"
	}
 ?>



</body>
</html>
