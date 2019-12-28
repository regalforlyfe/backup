<?php
	$nama = $_POST['nama'];
	$kontak = $_POST['kontak'];
	$jk =  $_POST['jk'];
	$kwn = $_POST['Kewarganegaraan'];
	

	echo "Nama : ".$nama;
	echo '<br/>';
	echo "Kontak : ".$kontak;
	echo '<br/>';
	echo "Jenis Kelamin : ".$jk;
	echo '<br/>';
	echo "Minat : ";

		if (isset ($_POST['pr'])){
			echo $_POST['pr'].", ";
		}
		if (isset ($_POST['nt'])){
			echo $_POST['nt'].", ";
		}
		if (isset ($_POST['ml'])){
			echo $_POST['ml'];
		}
	
	echo "."."<br/>";
	echo "Kewarganergaraan : ".$kwn;
	echo '<br/>';
?>