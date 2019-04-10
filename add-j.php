<?php
	session_start();
	include 'configdb.php';
	include 'lhast.php'; 
	if (!isset($_SESSION['login']))
		header('Location: index.php');
	
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
	
	$result = $mysqli->query("INSERT INTO `jalan` (`id_jalan`, `lat`, `lng`, `nama_pekerjaan`, `panjang_jalan`, `lebar_jalan`, `kecamatan`, `desa`, `sumber_dana`, `nama_pelaksana`, `nilai_pagu`, `nilai_kontrak`, `kondisi_jalan`, `foto`) 
						VALUES (NULL, '".$lat."', '".$lng."', '".$nama_pekerjaan."', '".$panjang_jalan."', '".$lebar_jalan."', '".$kecamatan."', '".$desa."', '".$sumber_dana."', '".$nama_pelaksana."', '".$nilai_pagu."', '".$nilai_kontrak."', '".$kondisi_jalan."', '".$_FILES['foto']['name']."');");
							
	header('Location: jalan.php');
?>