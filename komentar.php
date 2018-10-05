<form action="" method="POST">
	<table>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><textarea name="komentar"></textarea></td>
		

		<td></td>
		<td><input type="submit" name="kirim" value="kirim"></td>

	</tr>
	</table>
</form>
 <?php 
 if (isset($_POST['kirim'])) {
  	$komentar = $_POST['komentar'];

  	if (str_word_count($komentar)<5) {
  		echo "Maukkan Angka Dengan maksimal 10 digit";
  	}else{
  		echo str_word_count($komentar);

  	}
  } ?>
