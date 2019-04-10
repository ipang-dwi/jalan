<?php
	@session_start();
	$_SESSION['judul'] = 'JALAN KU';
	$_SESSION['welcome'] = 'Sistem Informasi Geografis Kualitas Jalan';
	$_SESSION['by'] = 'FIRSTPLATO LAB';
	$mysqli = new mysqli('localhost','root','','jalan');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
?>
