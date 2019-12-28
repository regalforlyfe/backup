<?php
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$query = "INSERT INTO kategori(nama) VALUES('$nama')";

	if($mysqli->query($query) === TRUE){
	    echo "Berhasil menambahkan data";
	}else{
	    echo "Error: $mysqli->error";
	}