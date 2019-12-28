<?php
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$produk = $_POST['produk'];
	$harga = $_POST['harga'];

	$ambilID = "SELECT id_kategori FROM kategori where nama='$nama'";
	$id = $mysqli->query($ambilID);
	$id = $id->fetch_assoc()['id_kategori'];
	$query = "INSERT INTO produk(id_kategori,nama,harga) VALUES('$id', '$produk', '$harga')";

	if($mysqli->query($query) === TRUE){
	    echo "Berhasil menambahkan data";
			header('Location: ./read.php');
	}else{
	    echo "Error: $mysqli->error";
	}
