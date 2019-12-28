<?php
 
	// Tanggal Lahir
	$birthday = "1999-08-02";
	
	// Convert Ke Date Time
	$biday = new DateTime($birthday);
	$today = new DateTime();
	
	$diff = $today->diff($biday);
	
	// Display
	echo "Tanggal Lahir: ". date('d M Y', strtotime($birthday)) .'<br />';
	echo "Tahun: ".$diff->y.'<br />';
	echo "Bulan: ".$diff->m.'<br />';
	echo "Hari: ".$diff->d.'<br />';
 
?>