<?php
	error_reporting(0);
	$bday = $_GET['birth'];
	$today = date("y-m-d");
	$diff = date_diff(date_create($bday), date_create($today));
 ?>

<html>
<body>
	<form method="_GET">
		Masukkan Tanggal Lahir : <input type="datetime-local" name="birth">
		<input type="submit" name="submit">
	</form>
<?php
    echo  "Umur sekarang :  $diff->y tahun  $diff->m bulan $diff->d hari  ";
?>
</body>
</html>
