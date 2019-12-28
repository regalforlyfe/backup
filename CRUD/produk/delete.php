<?php
	include 'koneksi.php';

	$produk = $_GET['id_produk'];

	$query = "DELETE FROM `produk` WHERE `produk`.`id_produk` = '$produk'";

	if($mysqli->query($query) === TRUE){
	    echo "Berhasil menghapus data";
			header('Location: ./read.php');
	}else{
	    echo "Error: $mysqli->error";
	}
