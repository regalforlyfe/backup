<?php

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$operasi = $_GET['operasi'];

	switch ($operasi) {
		case 'tambah':
			echo $n1+$n2;
			break;
		case 'kurang':
			echo $n1-$n2;
			break;
		case 'kali':
			echo $n1*$n2;
			break;
		case 'bagi':
			echo $n1/$n2;
			break;
		case 'modulu':
			echo $n1%$n2;
			break;

		default:
			echo "undefined";
			break;
	}