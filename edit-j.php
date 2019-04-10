<?php
	session_start();
	if (!isset($_SESSION['login']))
		header('Location: index.php');
	include('configdb.php');
	include('lhast.php');
	
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	$nama_pekerjaan = $_POST['nama_pekerjaan'];
	$panjang_jalan = $_POST['panjang_jalan'];
	$lebar_jalan = $_POST['lebar_jalan'];
	$kecamatan = $_POST['kecamatan'];
	$desa = $_POST['desa'];
	$sumber_dana = $_POST['sumber_dana'];
	$nama_pelaksana = $_POST['nama_pelaksana'];
	$nilai_pagu = $_POST['nilai_pagu'];
	$nilai_kontrak = $_POST['nilai_kontrak'];
	$kondisi_jalan = $_POST['kondisi_jalan'];
	$foto = $_POST['foto'];
	$uploaddir = 'uploads/';
	$uploadfile = $uploaddir . basename($_FILES['foto']['name']);
	move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
	
	$result = $mysqli->query("UPDATE jalan SET `lat` = '".$lat."', `lng` = '".$lng."', `nama_pekerjaan` = '".$nama_pekerjaan."', `panjang_jalan` = '".$panjang_jalan."', `lebar_jalan` = '".$lebar_jalan."', `kecamatan` = '".$kecamatan."', `desa` = '".$desa."', `sumber_dana` = '".$sumber_dana."', `nama_pelaksana` = '".$nama_pelaksana."', `nilai_pagu` = '".$nilai_pagu."', `nilai_kontrak` = '".$nilai_kontrak."', `kondisi_jalan` = '".$kondisi_jalan."', `foto` = '".$_FILES['foto']['name']."'  WHERE `id_jalan` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: jalan.php');
	}
?>
